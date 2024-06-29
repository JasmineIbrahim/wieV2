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
    $headline = $_POST['headline'];
    $headline = filter_var($headline, FILTER_SANITIZE_STRING);

    $news = $_POST['news'];
    $news = filter_var($news, FILTER_SANITIZE_STRING);

    /*$date = date('Y-m-d h:m:s');*/

    $caption = $_POST['caption'];
    $caption = filter_var($caption, FILTER_SANITIZE_STRING);

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

            move_uploaded_file($tempname, 'news/' . $newName);

            $insert_item = $conn->prepare("INSERT INTO `news`(headline,image,caption,news) VALUES(?,?,?,?)");
            $insert_item->execute([$headline, $newName, $caption, $news]);

            header('location:admin_news.php');
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
    <title>News</title>
</head>

<body>
    <?php include 'components/admin_header.php'; ?>
    <section class="add">
        <h1 class="heading" style="color:var(--dark)">Add A News Article</h1>
        <h3 class="title">Please fill in the following information</h3>

        <div class="row">
            <div class="form-container">
                <form method="post" enctype="multipart/form-data">
                    <br><label>Headline:<span>*</span></label>
                    <input type="text" name="headline" placeholder="enter news headline..." required>

                    <label>News Image:</label>
                    <input type="file" name="image" id="image" accept=".jpg,.jpeg,.png" style="background:transparent;">

                    <br><label>Image Caption: <span>*</span></label>
                    <input type="text" name="caption" placeholder="enter caption..." required>

                    <br><label>Please, Write A Your News Details Using No More Than 2000 Characters:<span>*</span></label>
                    <textarea required name="news" id="news" maxlength="2000" cols="50" rows="50" placeholder="enter a your news article..."></textarea>
                    <div id="count">
                        <span id="current">0</span>
                        <span>/ 2000</span>
                    </div>

                    <input type="submit" name="submit-btn" value="upload">
                </form>
            </div>
        </div>

    </section>

    <?php include 'components/footer.php'; ?>


    <script>
        const textAreaElement = document.querySelector("#news");
        const characterCounterElement = document.querySelector("#count");
        const typedCharactersElement = document.querySelector("#current");
        const maximumCharacters = 2000;
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