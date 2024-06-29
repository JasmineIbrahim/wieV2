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
    <title>News</title>
</head>

<body>
    <?php include 'components/header.php'; ?>

    <section class="news">
    <h1 class="heading">Our News</h1>
        <h3 class="title">take a look at our latest news</h3>
        <div class="box-container">
            <?php
            $select_news = $conn->prepare("(SELECT * FROM `news` ORDER BY date DESC)");
            $select_news->execute();
            if ($select_news->rowCount() > 0) {
                while ($fetch_news = $select_news->fetch(PDO::FETCH_ASSOC)) {
            ?>
                    <div class="box">
                        <!--<i class="fa fa-ticket"></i>-->
                        <img src="image/<?= $fetch_news['image']; ?>" style="width:100%;height:100%;">
                        <h3><?= $fetch_news['headline']; ?></h3>

                        <a href="view-news.php?news=<?php echo $fetch_news['id'];?>" class="btn2">Continue Reading</a>
                    </div>
            <?php
                }
            } else {
                echo ('<p class="empty"> no news available for viewing yet!</p>');
            }
            ?>
        </div>

</section>
    <?php include 'components/footer.php'; ?>

    <script src="script.js"></script>
</body>

</html>