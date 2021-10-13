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
    <title>SARUBAI AGRO FARMER SERVICE</title>
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
                    <h2>SERVICE</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">SERVICE</li>
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
                    <h2 class="noo-sh-title-top">FOODGRAIN</h2>
                    <p>We are building facilities for our main food grain like Sorghum (Jawari), Pearl Millet (Bajri) &
                        Wheat (Gehu) to have primary processing like Clean, Sort, Grade, and Packing as per consumer
                        need.</p>
                    <p>We have a plan to set up an integrated unit that will facilitate all post-harvest requirements
                        along with storage which will reduce wastage. We will have the following automated machine-like.
                    </p>
                    <p><b>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Gravity Separator. <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Sorter. <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Grader. <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Packing & Labeling. <br>

                        </b></p>
                </div>
                <div class="col-lg-6">
                    <div class="banner-frame">
                        <img class="img-fluid" src="images/foodgrain.jpg" alt="" />
                    </div>
                </div>
            </div><br><br><br>



            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-frame">
                        <img class="img-fluid" src="images/fruit.jpg" alt="" />
                    </div>
                </div>
                <div class="col-lg-6"><br>
                    <h2 class="noo-sh-title-top">FRUITS</h2>
                    <p>We are in the process to set up a primary processing facility for dominant fruits like Banana,
                        Grapes, Pomegranate, and Custard apple. This will have cold storage as well. </p>
                    <p>This facility will include capacity as well capable to meet all domestic & International
                        requirements. This includes Box packing, Labelling & test facility to fulfill norms set by
                        concerned authorities.</p>
                    <p>We have started Export of Banana to Dubai.</p>
                </div>
            </div><br><br><br>



            <div class="row">
                <div class="col-lg-6">
                    <h2 class="noo-sh-title-top">ONION</h2>
                    <p>We are working with NABARD for stabilizing Onion prices in the domestic market which is needed to
                        have a sustainable working model for ONION farmer Producer & consumers. We will have a
                        procurement center as well as storage (Chal) having a capacity of 10,000 Tonne of ONION.</p>
                    <p>We will automate the Machine to handle 100 tonne /Day of Onion processing which includes sorting
                        as per Size & Color integrated with an automated packing line to meet market requirements of
                        different sizes. 5KG, 10KG, 25KG, 50KG etc</p>
                    <p>We also have a plan to put up a processing unit on ONION. This will Powder making Plant.</p>
                </div>
                <div class="col-lg-6">
                    <div class="banner-frame">
                        <img class="img-fluid" src="images/onion.jpg" alt="" />
                    </div>
                </div>
            </div><br><br><br>



            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-frame">
                        <img class="img-fluid" src="images/contract_farming.jpg" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="noo-sh-title-top">CONTRACT FARMING </h2>
                    <p>We are in the initial phase to facilitate contract farming for a selected crop like Tomato and
                        Corn. This will give assured fixed prices to our associated farmers irrespective of market price
                        condition.</p>
                    <p>We will expand this portfolio in the future as per need and Opportunities.</p>

                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b> 1. Sugar Cane- Organic </b></p>
                    <br>
                    <h2 class="noo-sh-title-top">GOVERNMENT-APPROVED PROCUREMENT CENTER </h2>
                    <p>We buy all types of FOOD Grains & Pulses in bulk. The buying prices are on and above
                        government-approved MSP. </p>
                </div>
            </div><br><br><br>




            <div class="row">
                <div class="col-lg-12">
                    <h2 class="noo-sh-title-top" align="center"> FARMER TRAINING & SUPPORT CENTER </h2><br>
                    <p>We have a team of experts having rich experience in the Agriculture Sector, Crop-specific support
                        and guidance are available. We are building a training module in the local language. We are
                        educating farmers to implement modern techniques with the use of advance farm equipment</p>
                    <p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. The basics for Crop Selection. There are many
                            external factors that play an important role in
                            choosing the right Crop. <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Managing farm This include Soil, Water,
                            Optimize use of Organic & Chemical Fertilizer, Safe &
                            Scientific methods for using pesticide and insecticide. <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Famer producer Education on Market demand,
                            Changing Trends, Opportunities. <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. How to utilize modern equipment which will
                            reduce dependency on Labour. <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. Awareness of various Government Schemes and
                            Subsidize for each crop.
                        </b>
                    </p>
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