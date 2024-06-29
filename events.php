<?php
include 'components/connection.php';
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
    <title>Events</title>
</head>

<body>
    <?php include 'components/header.php'; ?>

    <section class="events">
        <h1 class="heading">Our Events</h1>
        <h3 class="title">take a look at our latest events</h3>
        <div class="box-container">
            <?php
            $select_events = $conn->prepare("(SELECT * FROM `events` ORDER BY date DESC)");
            $select_events->execute();
            if ($select_events->rowCount() > 0) {
                while ($fetch_events = $select_events->fetch(PDO::FETCH_ASSOC)) {
            ?>
                    <div class="box" style="margin-bottom:9rem;">
                        <!--<i class="fa fa-ticket"></i>-->
                        <img src="events/<?= $fetch_events['image']; ?>" style="width:100%;height:100%;">
                        <h3><?= $fetch_events['name']; ?></h3>

                        <?php $varify_online = $conn->prepare("SELECT * FROM `events` WHERE name=? AND type='online'");
                        $varify_online->execute([$fetch_events['name']]);
                        $varify_online->execute();
                        if ($varify_online->rowCount() > 0) { ?>
                            <i class="fa fa-laptop"></i>
                        <?php } ?>
                        <?php $varify_online = $conn->prepare("SELECT * FROM `events` WHERE name=? AND type='technical'");
                        $varify_online->execute([$fetch_events['name']]);
                        $varify_online->execute();
                        if ($varify_online->rowCount() > 0) { ?>
                            <i class="fa fa-cogs"></i>
                        <?php } ?>

                        <?php $varify_online = $conn->prepare("SELECT * FROM `events` WHERE name=? AND type='non-technical'");
                        $varify_online->execute([$fetch_events['name']]);
                        $varify_online->execute();
                        if ($varify_online->rowCount() > 0) { ?>
                            <i class="fa fa-heart"></i>
                        <?php } ?>
                        <a href="view-event.php?event=<?php echo $fetch_events['id'];?>" class="btn2">View event</a>
                    </div>
            <?php
                }
            } else {
                echo ('<p class="empty"> no events available for viewing yet!</p>');
            }
            ?>
        </div>
    </section>
    <?php include 'components/footer.php'; ?>

    <script src="script.js"></script>
</body>

</html>