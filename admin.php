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
    <title>Dashboard</title>
</head>

<body>
    <?php include 'components/admin_header.php'; ?>

    <h1 class="heading" style="color:var(--dark)"><i class="fa fa-tachometer"> Dashboard</i></h1>
    <section class="dashboard">
        <div class="box-container" id="more">
            <div class="box">
            <i class="fa fa-users"></i>
            <h3>Total Members:</h3>
            <p>100</p>
        </div>
            <div class="box">
                <i class="fa fa-ticket"></i>
                <h3>Total Events:</h3>
                <?php
                $total_events = 000;
                $select_events = $conn->prepare("SELECT * FROM `events`");
                $select_events->execute();
                $total_events = $select_events->rowCount();
                ?> <p><?php echo $total_events; ?></p>
            </div>

            <div class="box">
                <i class="fa fa-cogs"></i>
                <h3>Technical Events:</h3>
                <?php $total_technical = 000;
                $select_technical = $conn->prepare("SELECT * FROM `events` where type='technical'");
                $select_technical->execute();
                $total_technical = $select_technical->rowCount();
                ?>
                <p><?php echo $total_technical; ?></p>
            </div>
            <div class="box">
                <i class="fa fa-heart"></i>
                <h3>Non-Technical Events:</h3>
                <?php $total_non = 000;
                $select_non = $conn->prepare("SELECT * FROM `events` where type='non-technical'");
                $select_non->execute();
                $total_non = $select_non->rowCount();
                ?>
                <p><?php echo $total_non; ?></p>
            </div>
            <div class="box">
                <i class="fa fa-laptop"></i>
                <h3>Online Events:</h3>
                <?php $total_online = 000;
                $select_online = $conn->prepare("SELECT * FROM `events` where type='online'");
                $select_online->execute();
                $total_online = $select_online->rowCount();
                ?>
                <p><?php echo $total_online; ?></p>
            </div>

            <div class="box">
                <i class="fa fa-trophy"></i>
                <h3>Total Achievements:</h3>
                <?php
                $total_ach = 000;
                $select_ach = $conn->prepare("SELECT * FROM `hall`");
                $select_ach->execute();
                $total_ach = $select_ach->rowCount();
                ?>
                <p><?php echo $total_ach; ?></p>
            </div>

    </section>
    <?php include 'components/footer.php'; ?>
    
    <script src="script.js"></script>
</body>

</html>