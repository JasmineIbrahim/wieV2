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
    <title>Hall of Fame</title>
</head>

<body>
    <?php include 'components/header.php'; ?>

    <section class="hallIntro">
        <div class="row">
            <div class="contents">
                <h3>Welcome to our Hall of Fame!</h3>
                <p>We are a proud of each and every one of our members! You can add your own achievementby submitting it to us for reviewing. We'd love to show you off to the world!</p>
                <a href="submission.php" class="btn2">Submit Achievement</a>
                <a href="#hall" class="btn2">Explore Achievements</a>
            </div>
            <div class="image">
                <img src="img/ach.jpg"></img>
            </div>
        </div>
    </section>

    <section class="hall" id="hall">
        <?php
        $view_hall = $conn->prepare("SELECT * FROM `hall` ORDER BY id DESC");
        $view_hall->execute();
        if ($view_hall->rowCount() > 0) {
            while ($fetch_hall = $view_hall->fetch(PDO::FETCH_ASSOC)) {
        ?>
                <div class="card-container">
                    <div class="card">
                        <img src="hall/<?php echo $fetch_hall['image']; ?>"></img>
                        <h3><?= $fetch_hall['name']; ?></h3>
                        <p><?= $fetch_hall['summary']; ?></p>
                    </div>
            <?php
            }
        } else {
            echo ('<p class="empty"> our hall is empty! feel free to drop in your acheivement for reviewing!</p>');
        }
            ?>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="script.js"></script>
</body>

</html>