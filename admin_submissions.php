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
    <title>Submissions</title>
</head>

<body>
    <?php include 'components/admin_header.php'; ?>

    <section class="submissions">
        <h1 class="heading">Submissions</h1>
        <h3 class="title">review Hall of Fame submissions</h3>
        <div class="box-container">
            <?php
            $select_sub = $conn->prepare("(SELECT * FROM `submissions` WHERE status='approved' ORDER BY id DESC)");
            $select_sub->execute();
            if ($select_sub->rowCount() > 0) {
                while ($fetch_sub = $select_sub->fetch(PDO::FETCH_ASSOC)) {
            ?>

                    <div class="box">
                        <img src="submissions/<?= $fetch_sub['image']; ?>" style="width:100%;height:100%;">
                        <h3><?= $fetch_sub['name']; ?></h3>
                        <a href="view-submission.php?submission=<?php echo $fetch_sub['id'];?>" class="btn2">Review Submission</a>
                    </div>


            <?php
                }
            } else {
                echo ('<p class="empty"> no submissions available for viewing currently!</p>');
            }
            ?>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="script.js"></script>
</body>

</html>