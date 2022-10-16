<?php
$cn = mysqli_connect("localhost", "root", "", "db_admission");
?>

<!doctype html>
<html lang="en">

<head>
    <!--============================== Required meta tags ===========================-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--============================= Fonts =======================================-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,300i,400,700" rel="stylesheet">

    <!--============================= CSS =======================================-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/styles.css">


    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>

    <title>Welcome to MIT</title>
    <link rel="shourtcut icon" type="image/png" href="assets/img/favicon.ico">
</head>

<body>
    <!--================= Header-area ======================-->
    <div class="header-area header-absoulate">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo">
                        <a href="">
                            <img class="logo" src="./assets/img/logo.png">
                        </a>
                    </div>
                </div>
                <!--================== Main menu-area ====================-->
                <div class="col-md-7">
                    <div class="main-menu">
                        <ul>
                            <li><a href="index.php">home</a></li>
                            <li><a href="">contact us</a></li>
                            <li><a href="./login.php">Login</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-1 text-right">
                    <span class="social-icon">
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!--======================= Slide-area =======================-->
    <div class="welcome-area">
        <div class="owl-carousel slider-content">
            <div class="single-slider-item slider-bg-1">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slide-text">
                                    <h2>We provide quality education</h2>
                                    <p>Education is what remains after one has forgotten<br>
                                        what one has learned in school.

                                        <br><i>Albert Einstein</i>
                                    </p>

                                    <a href="" class="boxed-btn">Apply Now <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item slider-bg-2">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slide-text">
                                    <h2>We provide intencive care</h2>
                                    <p>Education is the most powerful weapon<br>
                                        which you can use to change the world.

                                        <br><i>Nelson Mandela</i>
                                    </p>

                                    <a href="" id="test" class="boxed-btn">Apply Now <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=========================== Content-area ============================-->

    <div class="content-area">
        <div class="container-fluid">



            <div class="row">
                <div class="col-md-12">

                    <div class="main">
                        <ul class="cards">
                            <li class="cards_item">
                                <div class="card">
                                    <div class="card_image"><img src="./assets/img/img1.jpeg"></div>
                                    <div class="card_content">
                                        <h2 class="card_title">Heritage Month</h2>
                                        <p class="card_text">Latino Student Alliance to kick off 2022 Hispanic Heritage Month at Western</p>
                                        <button class="btn card_btn">Read More</button>
                                    </div>
                                </div>
                            </li>
                            <li class="cards_item">
                                <div class="card">
                                <div class="card_image"><img src="./assets/img/img2.jpeg"></div>
                                    <div class="card_content">
                                        <h2 class="card_title">Health Support</h2>
                                        <p class="card_text">Western Michigan University launches 24/7 year-round mental health support for students</p>
                                        <button class="btn card_btn">Read More</button>
                                    </div>
                                </div>
                            </li>
                            <li class="cards_item">
                                <div class="card">
                                <div class="card_image"><img src="./assets/img/img3.jpeg"></div>
                                    <div class="card_content">
                                        <h2 class="card_title">Career fair</h2>
                                        <p class="card_text">Building student success center of fall career fair lineup, including new health care job fair</p>
                                        <button class="btn card_btn">Read More</button>
                                    </div>
                                </div>
                            </li>
                            <li class="cards_item">
                                <div class="card">
                                <div class="card_image"><img src="./assets/img/img4.jpeg"></div>
                                    <div class="card_content">
                                        <h2 class="card_title">Student Innovation</h2>
                                        <p class="card_text">Western launches sustainability challenge to spark student innovation</p>
                                        <button class="btn card_btn">Read More</button>
                                    </div>
                                </div>
                            </li>
                            <li class="cards_item">
                                <div class="card">
                                <div class="card_image"><img src="./assets/img/img5.jpeg"></div>
                                    <div class="card_content">
                                        <h2 class="card_title">Design careers</h2>
                                        <p class="card_text">High school students can explore manufacturing and design careers through new WMU, GRPS partnership</p>
                                        <button class="btn card_btn">Read More</button>
                                    </div>
                                </div>
                            </li>
                            <li class="cards_item">
                                <div class="card">
                                <div class="card_image"><img src="./assets/img/img6.jpeg"></div>
                                    <div class="card_content">
                                        <h2 class="card_title">Book Clubs</h2>
                                        <p class="card_text">Ethics Center announces fall 2022 book clubs go and visit</p>
                                        <button class="btn card_btn">Read More</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>


            <div class="row">
                <img src="./assets/img/poster.svg">

            </div>
        </div>
    </div>
    <!--========================== Footer-area ===============================-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="widget">
                        <div class="logo">
                            <a href="">
                                <img class="logo" src="./assets/img/logo_white.png">
                            </a>
                            <p> Education is what remains after one has forgotten <br>
                                what one has learned in school.

                                <br><i>Albert Einstein</i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget">
                        <h3>Navigation</h3>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">home</a></li>
                                <li><a href="?a=student_add">admission</a></li>
                                <li><a href="?a=view">students</a></li>

                                <li><a href="#">contact us</a></li>
                                <li><a href="?a=login">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Contact Us</h3>
                    <span class="social-icon">
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                    </span>
                </div>
                <p class="copy-right">Copyright &copy;Jainendra Kumar-2022</p>
            </div>
        </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="assets/js/popper-1.12.9.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>