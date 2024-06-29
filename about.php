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
    <title>About</title>
</head>

<body>
    <?php include 'components/header.php'; ?>
    <section class="aboutIntro">
        <div class="box-container">
            <div class="box">
                <i class="fa fa-history"></i>
                <h3>History</h3>
                <p>Launched in 2019 in Yarmouk University, we began our journey towards the top! Gaining traction over
                    the years, we became the largest affinity group among our peers in Jordan, growing our family of
                    members constantly.</p>
            </div>

            <div class="box">
                <i class="fa fa-bullseye"></i>
                <h3>Mission</h3>
                <p>To connect, support, and inspire women and girls worldwide, and facilitate their recruitment and retention in STEM fields, fostering technological innovation and excellence for the benefit of humanity
                </p>
            </div>

            <div class="box">
                <i class="fa fa-binoculars"></i>
                <h3>Vision</h3>
                <p>To be globally recognized for its contributions to improving diversity, equity, and inclusion in STEM fields.
                    We envision a vibrant community of IEEE women and men collectively using their diverse talents to innovate for the benefit of humanity.
                </p>
            </div>
        </div>
    </section>

    <section class="team">
        <h1 class="heading">Meet Our Core Team</h1>
        <h3 class="title">get to know our team more!</h3>

        <div class="card-container">
        <div class="card">
                <img src="img/home.jpg"></img>
                <h3>Dr. Yusra Obeidat</h3>
                <p>Advisor</p>
                <div class="icons">
                    <a href=""> <i class="fa fa-linkedin"></i></a>
                    <a href=""> <i class="fa fa-envelope"></i></a>
                </div>
            </div>

            <div class="card">
                <img src=""></img>
                <h3>Lin Al-zuhd</h3>
                <p>Chairwoman</p>
                <p style="font-size: 1rem;">Biomedical Systems Engineering</p>
                <div class="icons">
                    <a href=""> <i class="fa fa-linkedin"></i></a>
                    <a href=""> <i class="fa fa-envelope"></i></a>
                </div>
            </div>

            <div class="card">
                <img src=""></img>
                <h3>Baraa Al-sukhni</h3>
                <p>Vice Chairwoman</p>
                <p style="font-size: 1rem;">Biomedical Informatics Engineering</p>
                <div class="icons">
                    <a href=""> <i class="fa fa-linkedin"></i></a>
                    <a href=""> <i class="fa fa-envelope"></i></a>
                </div>
            </div>

            <div class="card">
                <img src=""></img>
                <h3>Nagham Sawalha</h3>
                <p>Secretary</p>
                <p style="font-size: 1rem;">Biomedical Systems Engineering</p>
                <div class="icons">
                    <a href=""> <i class="fa fa-linkedin"></i></a>
                    <a href=""> <i class="fa fa-envelope"></i></a>
                </div>
            </div>

            <div class="card">
                <img src=""></img>
                <h3>Tala Abu-Rassaa</h3>
                <p>Treasure</p>
                <p style="font-size: 1rem;">Biomedical Systems Engineering</p>
                <div class="icons">
                    <a href=""> <i class="fa fa-linkedin"></i></a>
                    <a href=""> <i class="fa fa-envelope"></i></a>
                </div>
            </div>

            <div class="card">
                <img src=""></img>
                <h3>Yasmeen Ibrahim</h3>
                <p>Webmaster</p>
                <p style="font-size: 1rem;">Computer Engineering</p>
                <div class="icons">
                    <a href=""> <i class="fa fa-linkedin"></i></a>
                    <a href=""> <i class="fa fa-envelope"></i></a>
                </div>
            </div>
        </div>

        <h1 class="heading">Meet Our Support Team</h1>
        <h3 class="title">know our heroes behind the scenes</h3>

        <div class="card-container">
        <div class="card">
                <img src="img/home.jpg"></img>
                <h3>Sawsan Al-azzam</h3>
                <p>Designer</p>
                <p style="font-size: 1rem;">Electronics Engineering</p>
                <div class="icons">
                    <a href=""> <i class="fa fa-linkedin"></i></a>
                    <a href=""> <i class="fa fa-envelope"></i></a>
                </div>
            </div>

            <div class="card">
                <img src=""></img>
                <h3>Nadine Sarahneh</h3>
                <p>Media Manager</p>
                <p style="font-size: 1rem;">Biomedical Systems Engineering</p>
                <div class="icons">
                    <a href=""> <i class="fa fa-linkedin"></i></a>
                    <a href=""> <i class="fa fa-envelope"></i></a>
                </div>
            </div>

            <div class="card">
                <img src=""></img>
                <h3>Raghad Al-share</h3>
                <p>Content Creator</p>
                <p style="font-size: 1rem;">Biomedical Informatics Engineering</p>
                <div class="icons">
                    <a href=""> <i class="fa fa-linkedin"></i></a>
                    <a href=""> <i class="fa fa-envelope"></i></a>
                </div>
            </div>

            <div class="card">
                <img src=""></img>
                <h3>Afaf Al-jamal</h3>
                <p>Public Relations Manager</p>
                <p style="font-size: 1rem;">Biomedical Systems Engineering</p>
                <div class="icons">
                    <a href=""> <i class="fa fa-linkedin"></i></a>
                    <a href=""> <i class="fa fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="script.js"></script>
</body>

</html>