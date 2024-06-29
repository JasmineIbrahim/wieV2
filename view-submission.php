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
    $id = $_GET['submission'];
    $view_submission = $conn->prepare("SELECT * FROM `submissions` WHERE id = '$id'");
    $view_submission->execute();

    if ($view_submission->rowCount() > 0) {
        $update = $conn->prepare("UPDATE `submissions` SET status='approved' WHERE id = '$id'");
        $update->execute();
    }
    /*
    while ($fetch_submission = $view_submission->fetch(PDO::FETCH_ASSOC)) {
        $email = $fetch_submission['email'];

        $subject = "Achievement Approval";
        $txt = "Dear Member,\n We would like to inform you that your submission to be part of our Hall of Fame has been approved. You can find your achievement on our website!\n Thank you for your time and interest!\n Kind Regards,\n WIE-YU";
        $headers = "From: ieee.wie.yu@gmail.com";

        mail($email, $subject, $txt, $headers);
    }*/
}


if (isset($_POST['submit-btn2'])) {
    $id = $_GET['submission'];
    $view_submission = $conn->prepare("SELECT * FROM `submissions` WHERE id = '$id'");
    $view_submission->execute();
    if ($view_submission->rowCount() > 0) {
        $update = $conn->prepare("UPDATE `submissions` SET status='disapproved' WHERE id = '$id'");
        $update->execute();
    }

    /* while ($fetch_submission = $view_submission->fetch(PDO::FETCH_ASSOC)) {
            $email = $fetch_submission['email'];
    
            $subject = "Achievement Approval";
            $txt = "Dear Member,\n We would like to inform you that your submission to be part of our Hall of Fame has been disapproved. We are proud of you and wish you all the best!\n Thank you for your time and interest!\n Kind Regards,\n WIE-YU";
            $headers = "From: ieee.wie.yu@gmail.com";
    
            mail($email, $subject, $txt, $headers);
        }*/
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
    <?php
    if (isset($_GET['submission'])) {
        $id = $_GET['submission'];
        $view_submission = $conn->prepare("SELECT * FROM `submissions` WHERE id = '$id'");
        $view_submission->execute();
        if ($view_submission->rowCount() > 0) {
            while ($fetch_submission = $view_submission->fetch(PDO::FETCH_ASSOC)) { ?>
                <title>Submission <?php echo $fetch_submission['id']; ?></title>
    <?php
            }
        }
    } ?>
</head>

<body>
    <?php include 'components/admin_header.php'; ?>
    <section class="details">
        <?php
        if (isset($_GET['submission'])) {
            $sid = $_GET['submission'];
            $view_submission = $conn->prepare("SELECT * FROM `submissions` WHERE id = '$sid'");
            $view_submission->execute();
            if ($view_submission->rowCount() > 0) {
                while ($fetch_submission = $view_submission->fetch(PDO::FETCH_ASSOC)) {
        ?>
                    <h3><?php echo $fetch_submission['name']; ?></h3>
                    <img src="<?php echo $fetch_submission['image']; ?>" style="width:100%;" class="img"></img>

                    <div class="row">
                        <div class="summary-box">
                            <p><?php echo $fetch_submission['summary']; ?></p>
                        </div>

                        <div class="box">
                            <i class="fa fa-info"></i>
                            <h3>Email:</h3>
                            <p><?php echo $fetch_submission['email']; ?></p>

                            <h3>Number:</h3>
                            <p><?php echo $fetch_submission['number']; ?></p>

                        </div>

                    </div>

                    <form method="POST">
                        <input type="submit" name="submit-btn" value="approve">
                        <input type="submit" name="submit-btn2" value="disapprove">
                    </form>
        <?php
                }
            }
        }
        ?>


    </section>
    <?php include 'components/footer.php'; ?>

    <script src="script.js"></script>
</body>

</html>