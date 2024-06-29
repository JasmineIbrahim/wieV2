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
    <?php
    if (isset($_GET['event'])) {
        $id = $_GET['event'];
        $view_event = $conn->prepare("SELECT * FROM `events` WHERE id = '$id'");
        $view_event->execute();
        if ($view_event->rowCount() > 0) {
            while ($fetch_event = $view_event->fetch(PDO::FETCH_ASSOC)) { ?>
                <title><?php echo $fetch_event['name']; ?></title>
    <?php
            }
        }
    } ?>
</head>

<body>
    <?php include 'components/header.php'; ?>
    <section class="details">
        <?php
        if (isset($_GET['event'])) {
            $eid = $_GET['event'];
            $view_event = $conn->prepare("SELECT * FROM `events` WHERE id = '$eid'");
            $view_event->execute();
            if ($view_event->rowCount() > 0) {
                while ($fetch_event = $view_event->fetch(PDO::FETCH_ASSOC)) {
        ?>
                    <h3><?php echo $fetch_event['name']; ?></h3>
                    <img src="events/<?php echo $fetch_event['image']; ?>" style="width:100%;" class="img"></img>
                    <p><?php echo $fetch_event['caption']; ?></p>
                    <div class="row">

                        <div class="summary-box">
                            <p><?php echo $fetch_event['summary']; ?></p>
                        </div>

                        <div class="box">
                            <i class="fa fa-info"></i>
                            <h3>Date:</h3>
                            <p><?php echo $fetch_event['date']; ?></p>

                            <h3>Time:</h3>
                            <p><?php echo $fetch_event['time']; ?></p>

                            <h3>Place:</h3>
                            <p><?php echo $fetch_event['place']; ?></p>

                        </div>

                    </div>
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