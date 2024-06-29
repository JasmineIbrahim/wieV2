<?php
include 'components/connection.php';


session_start();

if ($_SESSION["session_secret"] != "a_secret_string") {
    header("Location: login.php");
}

if (isset($_POST['logout'])) {
    session_destroy();
    header('location: home.php');
}


if (isset($_POST['submit-btn'])) {

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);

    $summary = $_POST['summary'];
    $summary = filter_var($summary, FILTER_SANITIZE_STRING);


    if ($_FILES["image"]["error"] == 4) {
        echo "<script>alert('image doesn't exist');</script>";
    } else {
        $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];

        $validext = ['jpg', 'png', 'jpeg'];
        $ext = explode('.', $filename);
        $ext = strtolower(end($ext));

        if (!in_array($ext, $validext)) {
            echo "<script>alert('invalid image type');</script>";
        } else {
            $newName = uniqid();
            $newName .= '.' . $ext;

            move_uploaded_file($tempname, 'hall/' . $newName);

            $insert_item = $conn->prepare("INSERT INTO `hall`(name,image,summary) VALUES(?,?,?)");
            $insert_item->execute([$name, $newName, $summary]);

            header('location:admin_hall.php');
        }
    }
}

?>


<style type="text/css">
    <?php include 'style.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- custom css link -->
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo.ico" type="image/x-icon">
    <title>Hall of Fame</title>
</head>

<body>
    <?php include 'components/admin_header.php'; ?>
    <section class="add">
        <h1 class="heading" style="color:var(--dark)">Add A New Achievement</h1>
        <h3 class="title">Please fill in the following information</h3>

        <div class="row">
            <div class="form-container">
                <form method="post" enctype="multipart/form-data">

                <br><label>Achievement Title:<span>*</span></label>
                    <input type="text" name="name" placeholder="enter achievement title..." required>
                
                <label>Achievement Image:</label>
                    <input type="file" name="image" id="image" accept=".jpg,.jpeg,.png" style="background:transparent;">

                    <br><label>Please, Write A Summary of The Achievement Using No More Than 500 Characters:<span>*</span></label>
                    <textarea required name="summary" id="summary" maxlength="500" cols="50" rows="50" placeholder="enter a summary of your achievement..."></textarea>
                    <div id="count">
                        <span id="current">0</span>
                        <span>/ 500</span>
                    </div>

                    <input type="submit" name="submit-btn" value="upload">
                </form>
            </div>
    </section>

    <?php include 'components/footer.php'; ?>


    <script>
        const textAreaElement = document.querySelector("#summary");
        const characterCounterElement = document.querySelector("#count");
        const typedCharactersElement = document.querySelector("#current");
        const maximumCharacters = 500;
        textAreaElement.addEventListener("keyup", (event) => {
            const typedCharacters = textAreaElement.value.length;

            if (typedCharacters > maximumCharacters) {
                return false;
            }
            typedCharactersElement.textContent = typedCharacters;
        });
    </script>


    <script src="script.js"></script>
</body>

</html>