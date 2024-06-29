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
    if (isset($_GET['news'])) {
        $id = $_GET['news'];
        $view_news = $conn->prepare("SELECT * FROM `news` WHERE id = '$id'");
        $view_news->execute();
        if ($view_news->rowCount() > 0) {
            while ($fetch_news = $view_news->fetch(PDO::FETCH_ASSOC)) { ?>
                <title><?php echo $fetch_news['headline']; ?></title>
    <?php
            }
        }
    } ?>
</head>

<body>
    <?php include 'components/header.php'; ?>
    <section class="news-details">
        <?php
        if (isset($_GET['news'])) {
            $nid = $_GET['news'];
            $view_news = $conn->prepare("SELECT * FROM `news` WHERE id = '$nid'");
            $view_news->execute();
            if ($view_news->rowCount() > 0) {
                while ($fetch_news = $view_news->fetch(PDO::FETCH_ASSOC)) {
        ?>
                    <h3><?php echo $fetch_news['headline']; ?></h3>
                    <img src="<?php echo $fetch_news['image']; ?>" style="width:100%;" class="img"></img>
                    <p><?= $fetch_news['caption']; ?></p>
                    <div class="row">

                        <div class="summary-box">
                            <p style="font-size: 1.5rem;"><i class="fa fa-info"></i>
                                <?php echo $fetch_news['date']; ?></p>
                            <p><?php echo $fetch_news['news']; ?></p>
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