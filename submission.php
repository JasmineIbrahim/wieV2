<?php
include 'components/connection.php';

if (isset($_POST['submit-btn'])) {
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);

    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);

    $number = $_POST['number'];
    $number = filter_var($number, FILTER_SANITIZE_STRING);

    $summary = $_POST['ach'];
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

            move_uploaded_file($tempname, 'submissions/' . $newName);
            $insert_message = $conn->prepare("INSERT INTO `submissions`(name,email,number,image,summary) VALUES (?,?,?,?,?)");
            $insert_message->execute([$name, $email, $number, $newName, $summary]);

            header('location:hall.php');
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
    <title>Submission Form</title>
</head>

<body>
    <?php include 'components/header.php'; ?>
    <section class="submission">
        <h1 class="heading" style="color:var(--dark)">Submit Your Achievement</h1>
        <h3 class="title">Please fill in the following information</h3>

        <div class="row">
            <div class="form-container">
                <form method="post" enctype="multipart/form-data">
                    <br><label>Full Name:<span>*</span></label>
                    <input type="text" name="name" placeholder="enter your full name..." required>

                    <label>Email:<span>*</span></label>
                    <input type="email" name="email" placeholder="enter your email..." required>

                    <label>Phone Number: <span>*</span></label>
                    <input type="number" name="number" placeholder="enter your phone number..." required>

                    <label>Upload An Image of Your Achievement If You Can:</label>
                    <input type="file" name="image" id="image" accept=".jpg,.jpeg,.png" style="background:transparent;">

                    <label>Please, Write A Summary of Your Achievement Using No More Than 500 Characters:<span>*</span></label>
                    <textarea required name="ach" id="ach" maxlength="500" cols="50" rows="50" placeholder="enter a summary of your achievement..."></textarea>
                    <div id="count">
                        <span id="current">0</span>
                        <span>/ 500</span>
                    </div>

                    <input type="submit" name="submit-btn" value="send">
                </form>
            </div>
        </div>

    </section>

    <?php include 'components/footer.php'; ?>

    <script src="script.js"></script>

</body>

</html>