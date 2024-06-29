<?php
include 'components/connection.php';

if (isset($_POST['submit-btn'])) {
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);

    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);

    $number = $_POST['number'];
    $number = filter_var($number, FILTER_SANITIZE_STRING);

    $message = $_POST['mess'];
    $message = filter_var($message, FILTER_SANITIZE_STRING);

    $insert_message = $conn->prepare("INSERT INTO `messages`(name,email,number,message) VALUES (?,?,?,?)");
    $insert_message->execute([$name, $email, $number, $message]);
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
    <title>Women in Engineering - YU</title>
</head>

<body>
    <?php include 'components/header.php'; ?>
    <section class="home">
        <video src="img/home_vid.MP4" autoplay muted loop></video>
        <div class="content">
            <h1>Women in Engineering-<br><span>Yarmouk University</span></h1>
            <p>IEEE Women in Engineering (WIE) is a global network of IEEE members and volunteers dedicated to promoting
                women engineers and scientists, and inspiring girls around the world to follow their academic interests
                in a career in engineering and science.</p>
            <a href="#more" class="btn">Learn More</a>
        </div>
        <div class="media-icons">
            <a href="https://www.facebook.com/IEEEYUWIEAG?mibextid=ZbWKwL"><i class="fa fa-facebook"></i></a>
            <a href="https://instagram.com/ieee_yu_wie?igshid=MzRlODBiNWFlZA=="><i class="fa fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/women-in-engineering-yu-860a22292?trk=contact-info&fbclid=IwAR30Atjx9qAm0P831nQA93Dslzq8AvJNEscC1xoLYVHtd_V3ygqswFz5dnU"> <i class="fa fa-linkedin"></i></a>
            <a href="mailto:ieee.wie.yu@gmail.com"> <i class="fa fa-envelope"></i></a>
        </div>

    </section>
    <section class="intro">
        <div class="box-container" id="more">
            <div class="box">
                <i class="fa fa-users"></i>
                <h3>Current Member Count:</h3>
                <p class="num" data-val="100">000</p>
            </div>

            <div class="box">
                <i class="fa fa-ticket"></i>
                <?php
                $total_events = 000;
                $select_events = $conn->prepare("SELECT * FROM `events`");
                $select_events->execute();
                $total_events = $select_events->rowCount();
                ?>
                <h3>Events Done:</h3>
                <p class="num" data-val="<?php echo $total_events;?>">000</p>
            </div>

            <div class="box">
                <i class="fa fa-trophy"></i>
                <h3>Awards Received:</h3>
                <p class="num" data-val="10">000</p>
            </div>
        </div>
    </section>

    <section class="about">
        <h1 class="heading">About Us</h1>
        <h3 class="title">start your journey with us</h3>

        <div class="row">
            <div class="contents">
                <h3>find out more about what we have to offer</h3>
                <p>We are a non-profit affinity group, affiliated with the IEEE Jordan Section and based in Yarmouk University,
                    Irbid. We are focused on women in STEM, supporting them as much as possible and voluntary work!</p>
                <a href="about.php" class="btn2">Learn More</a>
            </div>
            <div class="image">
                <img src="img/about_img.jpg"></img>
            </div>
        </div>
    </section>

    <section class="events">
        <h1 class="heading">Our Events</h1>
        <h3 class="title">take a look at our latest events</h3>
        <div class="box-container">
            <?php
            $select_events = $conn->prepare("(SELECT * FROM `events` ORDER BY date DESC) LIMIT 3");
            $select_events->execute();
            if ($select_events->rowCount() > 0) {
                while ($fetch_events = $select_events->fetch(PDO::FETCH_ASSOC)) {
            ?>
                    <div class="box" style="margin-bottom:9rem;">
                        <!--<i class="fa fa-ticket"></i>-->
                        <img src="events/<?= $fetch_events['image']; ?>" style="width:100%;height:100%;">
                        <h3><?= $fetch_events['name']; ?></h3>

                        <a href="view-event.php?event=<?php echo $fetch_events['id']; ?>" class="btn2">View event</a>
                    </div>
            <?php
                }
            } else {
                echo ('<p class="empty"> no events available for viewing yet!</p>');
            }
            ?>

        </div>
        <br><a href="events.php" class="btn2" style="margin-top:4rem; display:block; text-align:center;">View All Events</a>
    </section>

    <section class="news" id="latest">
        <h1 class="heading">Our News Feed</h1>
        <h3 class="title">keep up with our latest news</h3>
        <div class="box-container">
            <?php
            $select_news = $conn->prepare("(SELECT * FROM `news` ORDER BY date DESC) LIMIT 3");
            $select_news->execute();
            if ($select_news->rowCount() > 0) {
                while ($fetch_news = $select_news->fetch(PDO::FETCH_ASSOC)) {
            ?>

                    <div class="box" style="margin-bottom:9rem;">
                        <img src="news/<?= $fetch_news['image']; ?>" style="width:100%;height:100%;">
                        <h3><?= $fetch_news['headline']; ?></h3>

                        <a href="view-news.php?news=<?php echo $fetch_news['id']; ?>" class="btn2">Continue Reading</a>
                    </div>
            <?php
                }
            } else {
                echo ('<p class="empty"> no news available for viewing yet!</p>');
            }
            ?>
        </div>
        <br><a href="news.php" class="btn2" style="margin-top:4rem; display:block; text-align:center;">View All News</a>
    </section>

    <section class="contact" id="contact">
        <h1 class="heading" style="color:var(--primary)">Contact Us</h1>
        <h3 class="title">we love to hear from you! let's talk!</h3>

        <div class="row">
            <div class="image">
                <img src="img/contact_img.jpg"></img>
            </div>
            <div class="form-container">
                <form method="post">
                    <input type="text" name="name" placeholder="enter your full name...">
                    <input type="email" name="email" placeholder="enter your email...">
                    <input type="number" name="number" placeholder="enter your phone number...">

                    <textarea name="mess" id="mess" maxlength="1000" cols="10" rows="10" placeholder="enter your message..."></textarea>
                    <div id="c">
                        <span id="currentt">0</span>
                        <span>/ 1000</span>
                    </div>

                    <input type="submit" name="submit-btn" value="send">
                </form>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script>
        const textAreaElement2 = document.querySelector("#mess");
        const characterCounterElement2 = document.querySelector("#c");
        const typedCharactersElement2 = document.querySelector("#currentt");
        const maximumCharacters2 = 1000;
        textAreaElement2.addEventListener("keyup", (event) => {
            const typedCharacters2 = textAreaElement2.value.length;

            if (typedCharacters2 > maximumCharacters2) {
                return false;
            }
            typedCharactersElement2.textContent = typedCharacters2;
        });
    </script>

    <script src="script.js"></script>
</body>

</html>