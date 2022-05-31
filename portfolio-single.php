<?php
session_start();
 $db_connect = mysqli_connect("localhost","root","","loginform");

?>
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/portfolio-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:29:11 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kufa - Personal Portfolio HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/frontend/css/animate.min.css">
        <link rel="stylesheet" href="assets/frontend/css/magnific-popup.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/frontend/css/flaticon.css">
        <link rel="stylesheet" href="assets/frontend/css/slick.css">
        <link rel="stylesheet" href="assets/frontend/css/aos.css">
        <link rel="stylesheet" href="assets/frontend/css/default.css">
        <link rel="stylesheet" href="assets/frontend/css/style.css">
        <link rel="stylesheet" href="assets/frontend/css/responsive.css">
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <a href="index.php" class="navbar-brand logo-sticky-none"><img src="assets/frontend/img/logo/logo.png" alt="Logo"></a>
                                    <a href="index.php" class="navbar-brand s-logo-none"><img src="assets/frontend/img/logo/s_logo.png" alt="Logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-btn">
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index-2.html">
                        <img src="assets/frontend/img/logo/logo.png" alt="" />
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <?php 
                            $profile_info_query = "SELECT profile_value FROM web_profile_settings WHERE profile_name = 'address'";
                            $profile_info_db_connect = mysqli_query($db_connect, $profile_info_query);
                            $profile_address = mysqli_fetch_assoc($profile_info_db_connect)['profile_value'];
                        ?>
                        <h4>Office Address</h4>
                        <p><?= $profile_address ?></p>
                    </div>
                    <div class="contact-list mb-30">
                    <?php 
                         $profile_info_query = "SELECT profile_value FROM web_profile_settings WHERE profile_name = 'phone_number'";
                         $profile_info_db_connect = mysqli_query($db_connect, $profile_info_query);
                         $profile_contact_num = mysqli_fetch_assoc($profile_info_db_connect)['profile_value'];
                    ?>
                        <h4>Phone Number</h4>
                        <p><?= $profile_contact_num ?></p>
                    </div>
                    <div class="contact-list mb-30">
                    <?php 
                         $profile_info_query = "SELECT profile_value FROM web_profile_settings WHERE profile_name = 'email'";
                         $profile_info_db_connect = mysqli_query($db_connect, $profile_info_query);
                         $profile_mail = mysqli_fetch_assoc($profile_info_db_connect)['profile_value'];
                    ?>
                        <h4>Email Address</h4>
                        <p><?= $profile_mail ?></p>
                    </div>
                </div>
                <div class="social-icon-right mt-20">
                    <a href="#"><i class="fab fa fa-facebook"></i></a>
                    <a href="#"><i class="fab fa fa-twitter"></i></a>
                    <a href="#"><i class="fab fa fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="breadcrumb-content text-center">
                                <h2>Portfolio Single POST</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
             <?php
             $id = $_GET['id'];
              $select_portfolio_details_qurey = "SELECT * FROM portfolios_details WHERE id = $id";
              $port_db_connect = mysqli_query($db_connect, $select_portfolio_details_qurey);

              $portfolios = mysqli_fetch_assoc($port_db_connect) ; 
             ?>
            <!-- portfolio-details-area -->
            <section class="portfolio-details-area pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="single-blog-list">
                                <div class="blog-list-thumb mb-35">
                                    <img src="backend/upload/portfolio_image/<?= $portfolios['portfolio_image'] ?>" alt="img">
                                </div>
                                <div class="blog-list-content blog-details-content portfolio-details-content">
                                    <h2> <?= $portfolios['portfolio_name'] ?> </h2>
                                    <h3> <?= $portfolios['status'] ?> </h3>
                                    <p> <?= $portfolios['portfolio_descript'] ?> </p>
                                    <div class="blog-list-meta">
                                        <ul>
                                            <li class="blog-post-date">
                                                <h3>Share On</h3>
                                            </li>
                                            <li class="blog-post-share">
                                                <a href="https://www.facebook.com/"><i class="fab fa fa-facebook"></i></a>
                                                <a href="https://twitter.com/"><i class="fab fa fa-twitter"></i></a>
                                                <a href="https://www.instagram.com/"><i class="fab fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="avatar-post mt-70 mb-60">
                                    <ul>
                                        <li>
                                            <div class="post-avatar-img">
                                                <img src="backend/upload/default_image/fahim.jpg" alt="img" width="120px" height="120px">
                                            </div>
                                            <div class="post-avatar-content">
                                                <h5>Fahim Hossain Munna</h5>
                                                <p>As a Front-End Developer I created a lot of different websites for our clients using Wordpress as a CMS and HTML, 
                                                    CSS and JavaScript to built the sites.
                                                     I helped to improve the developer experience of the company by implementing tools
                                                      to improve our software development process..</p>
                                                <div class="post-avatar-social mt-15">
                                                    <a href="https://www.facebook.com/"><i class="fab fa fa-facebook"></i></a>
                                                    <a href="https://twitter.com/"><i class="fab fa fa-twitter"></i></a>
                                                    <a href="https://www.instagram.com/"><i class="fab fa fa-instagram"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- portfolio-details-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap primary-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Copyright© <span>Fahim Hossain</span> | All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->



		<!-- JS here -->
        <script src="assets/frontend/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="assets/frontend/js/popper.min.js"></script>
        <script src="assets/frontend/js/bootstrap.min.js"></script>
        <script src="assets/frontend/js/isotope.pkgd.min.js"></script>
        <script src="assets/frontend/js/one-page-nav-min.js"></script>
        <script src="assets/frontend/js/slick.min.js"></script>
        <script src="assets/frontend/js/ajax-form.js"></script>
        <script src="assets/frontend/js/wow.min.js"></script>
        <script src="assets/frontend/js/aos.js"></script>
        <script src="assets/frontend/js/jquery.waypoints.min.js"></script>
        <script src="assets/frontend/js/jquery.counterup.min.js"></script>
        <script src="assets/frontend/js/jquery.scrollUp.min.js"></script>
        <script src="assets/frontend/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/frontend/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/frontend/js/plugins.js"></script>
        <script src="assets/frontend/js/main.js"></script>
    </body>

<!-- Mirrored from themebeyond.com/html/kufa/portfolio-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:29:14 GMT -->
</html>
