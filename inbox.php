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
    $mid = $_POST['mid'];
    $mid = filter_var($mid, FILTER_SANITIZE_STRING);


    $view_message = $conn->prepare("SELECT * FROM `messages` WHERE id = '$mid'");
    $view_message->execute();

    if ($view_message->rowCount() > 0) {
        $update = $conn->prepare("UPDATE `messages` SET status='read' WHERE id = '$mid'");
        $update->execute();
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
    <title>Inbox</title>
</head>

<body>
    <?php include 'components/admin_header.php'; ?>


    <section class="inbox" id="inbox">
        <?php
        $view_messages = $conn->prepare("SELECT * FROM `messages` WHERE status='unread' ORDER BY id DESC");
        $view_messages->execute();
        if ($view_messages->rowCount() > 0) {
            while ($fetch_messages = $view_messages->fetch(PDO::FETCH_ASSOC)) {
        ?>
                <div class="card-container">
                    <div class="card">
                        <h3>Name:</h3>
                        <p><?= $fetch_messages['name']; ?></p>
                        <h3>Email:</h3>
                        <p><?= $fetch_messages['email']; ?></p>
                        <h3>Number:</h3>
                        <p><?= $fetch_messages['number']; ?></p>
                        <h3>Message:</h3>
                        <p><?= $fetch_messages['message']; ?></p>
                        <form method="POST">
                             <input type="hidden" name="mid" value="<?= $fetch_messages['id']; ?>">
                            <input type="submit" name="submit-btn" value="mark as read">
                        </form>
                    </div>
            <?php
            }
        } else {
            echo ('<p class="empty"> your inbox is empty!</p>');
        }
            ?>
    </section>
    
    <?php include 'components/footer.php'; ?>
    <script src="script.js"></script>
</body>

</html>