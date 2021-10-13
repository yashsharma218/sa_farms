<?php
include "include/connect.php";
session_start();
if (isset($_SESSION['User_ID'])) {
    $username = $_SESSION['User_ID'];
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>SARUBAI AGRO FARMER ABOUT</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <?php 
        include "include/header.php";
    ?>
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>ABOUT US</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">ABOUT US</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
<br>
    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-frame">
                        <img class="img-fluid" src="images/about-img.jpg" alt="" />
                        <br><br>
                    <p align="center" style="color: blue;">“FARMING IS NOT JUST A JOB ITS A WAY OF LIFE”</p>

                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="noo-sh-title-top">Farming is our family endeavor</h2>
                    <p>We are a group of Famer families who came together to extend help to our food provider. Our motto
                        is to make farming activities profitable and enjoyable. We believe that long-term sustainability
                        is only possible with local empowerment.</p>
                    <p>We provide services in areas of commerce that involve the processing, warehousing, distribution,
                        marketing, and retailing of the products used in agriculture.</p>

                    <h2 class="noo-sh-title-top">Our Vision</h2>
                    <p>We foster sustainable agriculture, biodiversity conservation, and improved rural livelihoods on
                        and beyond farms through the collaborative implementation of technical solutions, expertise, and
                        knowledge by a local partnership.</p>
                    <p>To get along with as much as more nos of the farmer to help them to adopt modern techniques in
                        farming, advance equipment, crop-specific training. </p>
                    <p>To inculcate business angle within every Crop produced by each farmer. To develop a platform to
                        provide Fair remunerative value & their ROI on planted Crops to each associated farmer in
                        organized manner to improve profitability. All farmers & their next generation should enjoy
                        farming.</p>
                </div>
            </div>
            <!-- <div class="row my-5">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Trusted</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Professional</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Expert</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div> -->
            <!-- <div class="row my-4">
                <div class="col-12">
                    <h2 class="noo-sh-title">Meet Our Team</h2>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/img-1.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Balnath Pawar</h3> <span class="post">MD & Chairmen</span>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-youtube"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>I always remember my mother's word during my childhood that you should do Job but no
                                Farming, but it was always love and affection that kept me connected with Farmers being
                                born in Farmer Family. The time spent during school days and close experience of Farmer
                                life which is still not easy to live because it always with full of challenges.
                                I have the opportunity to spend a long time during the Corona pandemic with our Farmers,
                                family members, friends, relatives, and people who are totally engaged at Farm and some
                                of them move out of Farming activities. These all have in-depth connect & lovely bonding
                                which give them joy, happiness, and satisfaction in their life.
                                I am born a Farmer and will always want to remain a proud Farmer. There are a lot of
                                challenges & opportunities in this sector. It inspires me to start this business.
                                We have begun this journey to give back to society as much as we can. This is our true,
                                sincere and honest effort to organize our Agri Culture.
                            </p>
                        </div>
                        <hr class="my-0">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/img-2.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Surekha Pawar</h3> <span class="post">Director Managing Pulses and Spices.</span>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-youtube"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>To manage the kitchen is always a challenge for every Homer Maker because of what food
                                grain and fruit we eat whether has been grown, processed, and packed in the right
                                hygienic manner. The nutritional are intact. In the food industry, only brands and
                                packing can’t give assurance of quality safe foods.
                                We being self producer & all our farms are managed under close observation of expert
                                team. These all food grains are authenticated.
                                We give this assurance because we use our traditional seeds that are not genetically
                                modified
                                . </p>
                        </div>
                        <hr class="my-0">
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <div class="about-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="noo-sh-title-top">Our Mission</h2>
                    <p>Our mission is being a global network transforming agriculture to secure a sustainable future
                        food systems relatioship of nature, urban and rural communities</p>
                    <p>To promote research and training on sustainable development of agricultural productivity, cost
                        reduction in farming, farm mechanization and farm production. To provide consultancy in
                        agriculture to disseminate the technology innovation to the producer through integrated
                        extension activities.</p>
                    <p>Prosperous farmers and rural communities, by associating with other organizations, government and
                        companies that facilitate the scalability of the positive impact of the technical projects
                        related to key issues</p>
                    <p>We love to help farmers to overcome traditional challenges pre - post-harvesting like Choice of
                        right Crop pattern, Quality Seeds, giving extended support to manage plots, processing like
                        grading sorting, cleaning, storage & Packing, etc.</p>
                </div>
                <div class="col-lg-6">
                    <div class="banner-frame">
                        <img class="img-fluid" src="images/our_vision.jpg" alt="" /><br><br>
                        <h2 class="noo-sh-title-top">Our Values </h2>
                        <p>We comitted to provide safe, quality food to the consumers.</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;• Passion,Quality, Equality and Ethics .</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;• Creative, Flexible and Innovative.</p>
                        <p>To reduce post-harvest losses, reduction in import and increasing exports.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Page -->


    <?php
        include "include/footer.php";
    ?>


    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>