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
    <title>SARUBAI AGRO FARMER TEAM</title>
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
                    <h2>Team</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Team</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row my-4">
                <div class="col-12">
                    <h2 class="noo-sh-title">Meet Our Team</h2>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/team1.jpg"
                                alt="Your Browser Does not Support this Image.." />
                            <div class="">
                                <h3 class="title">Balnath Pawar</h3>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="#" target="blank" class="fab fa-facebook"></a>
                                </li>
                                <!-- <li>
                                    <a href="#" target="blank" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" target="blank" class="fab fa-google"></a>
                                </li> -->
                            </ul>
                        </div>
                        <hr class="my-0">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-9">
                    <div>
                        <h1 class="title"><b>MD & Chairmen</b></h1>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I always remember my mother's word during my childhood that you should do Job but no
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
                        </span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"><br><br> <img src="images/team3.jpg"
                                alt="Your Browser Does not Support this Image.." />
                            <div class="">
                                <h3 class="title">Surekha Pawar</h3>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="#" target="blank" class="fab fa-facebook"></a>
                                </li>
                                <!-- <li>
                                    <a href="#" target="blank" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" target="blank" class="fab fa-google"></a>
                                </li> -->
                            </ul>
                        </div>
                        <hr class="my-0">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-9">
                    <div><br>
                        <h1 class="title"><b>Director Managing Pulses and Spices</b></h1>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To manage the kitchen is always a challenge for every Homer Maker because of what food
                            grain and fruit we eat whether has been grown, processed, and packed in the right hygienic
                            manner. The nutritional are intact. In the food industry, only brands and packing can’t give
                            assurance of quality safe foods.
                            We being self producer & all our farms are managed under close observation of expert team.
                            These all food grains are authenticated.
                            We give this assurance because we use our traditional seeds that are not genetically
                            modified.

                        </span>
                    </div>
                </div>



                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"><br><br> <img src="images/team2.jpg"
                                alt="Your Browser Does not Support this Image.." />
                            <div class="">
                                <h3 class="title">Bapusaheb Katule</h3>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="#" target="blank" class="fab fa-facebook"></a>
                                </li>
                                <!-- <li>
                                    <a href="#" target="blank" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" target="blank" class="fab fa-google"></a>
                                </li> -->
                            </ul>
                        </div>
                        <hr class="my-0">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-9">
                    <div><br>
                        <h1 class="title"><b>Director Finance & Managing Fruit portfolio</b></h1>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I urge to all younger farmer generation please don’t go behind job let us start together
                            something on our own related to agriculture which is the open market has a lot of
                            opportunities to work with. This will not only give own satisfaction but will add happiness
                            to others life.

                        </span>
                    </div>
                </div>



                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"><br><br> <img src="images/img-1.jpg"
                                alt="Your Browser Does not Support this Image.." />
                            <div class="">
                                <h3 class="title">Dadasaheb Katule</h3>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="#" target="blank" class="fab fa-facebook"></a>
                                </li>
                                <!-- <li>
                                    <a href="#" target="blank" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" target="blank" class="fab fa-google"></a>
                                </li> -->
                            </ul>
                        </div>
                        <hr class="my-0">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-9">
                    <div><br><br>
                        <h1 class="title"><b>Director Retail and Distribution</b></h1>
                        <span>
                        </span>
                    </div>
                </div>



                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"><br><br> <img src="images/img-3.jpg"
                                alt="Your Browser Does not Support this Image.." />
                            <div class="">
                                <h3 class="title">Shridhar Pawar</h3>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="#" target="blank" class="fab fa-facebook"></a>
                                </li>
                                <!-- <li>
                                    <a href="#" target="blank" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" target="blank" class="fab fa-google"></a>
                                </li> -->
                            </ul>
                        </div>
                        <hr class="my-0">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-9">
                    <div><br><br>
                        <h1 class="title"><b>Director Managing Onion portfolio , Procurment of Food Grain</b></h1>
                        <span>
                        </span>
                    </div>
                </div>
            </div>
            <div class=""><br>
                <h3 class="title"><b>Changdev Kolapkar</b></h3>
                <p><b>Director (Guidance, Training & Support)</b>:-There are two main enemies in farming that have
                    become more challenging present situation Nature and Agri Worker. Our team will help you to overcome
                    this. We should use modern equipment and advance techniques in farming. We have to upgrade ourselves
                    to cope with this situation.</p>
            </div>
            <div class=""><br>
                <h3 class="title"><b>Neminath Sarde</b></h3>
                <p><b>Director Farmer relationship & Government Co-ordination</b>:-We as Farmer always have an effort to
                    grow our crop to get maximum yield, but when we go to market we absolutely have no control over
                    selling prices. We never kept a record of the expenditure we had and the profit we have earned. <br>
                    We should keep a record of our farming as a business what in and out to measure the profitability of
                    each crop.
                </p>
            </div>
            <div class=""><br>
                <h3 class="title"><b>Pravin Sarde</b></h3>
                <p><b>Director Administration & Customer Relationship</b></p>
            </div>
            <div class=""><br>
                <h3 class="title"><b>Reshma Rakhunde</b></h3>
                <p><b>CSR & Resource Management </b></p>
            </div>
            <div class=""><br>
                <h3 class="title"><b>Bapusaheb khule</b></h3>
                <p><b>Director</b></p>
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