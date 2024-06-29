<?php
include 'components/connection.php';

session_start();


if (isset($_POST['submit-btn'])) {
    if (
        $_POST['user'] == 'admin0' &&
        $_POST['password'] == 'wie_2024_ADMIN'
    ) {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = 'admin0';

        $_SESSION["session_secret"] = "a_secret_string";

        header('location:admin.php');
    } else {
        echo ('invalid login. try again.');
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
    <title>Admin Login</title>
</head>

<body>
    <?php include 'components/header.php'; ?>

    <section class="login" id="login">
        <h1 class="heading" style="color:var(--dark)">Welcome, Admin!</h1>
        <h3 class="title">login to proceed to admin panel</h3>
        <br>
        <div class="form-container">

            <form method="post">
                <br>
                <label>User Name:<span>*</span></label>
                <input type="text" name="user" placeholder="enter your user name..." required>
                <label>Password:<span>*</span></label>
                <input type="password" name="password" id="password" placeholder="enter your password..." required>
                <i class="fa fa-eye" id="eye"></i>

                <input type="submit" name="submit-btn" value="login">
            </form>
        </div>
    </section>

  <!--show password-->
    <script>
        const password = document.querySelector("#password");
        const eyeIcon = document.querySelector("#eye");

        eyeIcon.addEventListener("click", (event) => {
            if (eyeIcon.classList.contains("fa-eye")) {
                password.setAttribute("type", "text");
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                password.setAttribute("type", "password");
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        });
    </script>

    <?php include 'components/footer.php'; ?>

    <script src="script.js"></script>
</body>

</html>