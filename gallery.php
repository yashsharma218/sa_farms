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
    <title>SARUBAI AGRO FARMER FOOD GALLERY</title>
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
    <link rel="stylesheet" href="css/popup.css">

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
                    <h2>Food Gallery</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Food Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Gallery  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Food Gallery</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".dominant_fruits">Dominant Fruits</button>
                            <button data-filter=".vegetable">Vegetable</button>
                            <button data-filter=".food_grain">Food Grain </button>
                            <button data-filter=".pulses">Pulses</button>
                            <button data-filter=".spices">Spices</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <?php
                $query = "select * from gallery";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="col-lg-3 col-md-6 special-grid <?php echo $row['category'] ?>">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="admin/<?php echo $row['image'] ?>" style="height: 200px; width: 230px" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="why-text" align="center">
                                <a href="shop-detail.php?P_ID=<?php echo $row['id'] ?>">
                                    <h4><?php echo $row['name'] ?></h4>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- End Gallery  -->

    <hr>

    <div class="about-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-frame">
                        <img class="img-fluid" src="images/sales.jpg" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="noo-sh-title-top">SALES AND DISTRIBUTION</h2><br>
                    <p> We ‘’SA FARMS” committed to safeguarding the interest of our ‘‘ अन्नदाता ” food provider and
                        providing safe & quality food to our Consumer with due respect to the existing sales and
                        distribution system in place.</p>
                    <p>We are open to exploring business opportunities to Sale all types of Agriculture produce to our
                        Rural & Urban communities with m.</p>
                    <p>We can work on FARMER TO BUSINESS ( FB2B), FB2C, or B2 ‘I’ -individuals who distribute New Paper,
                        Milk, etc. Small Kiran Shop Owner, Small or Mega Retail store, On-line sales. </p>
                    <p>We have a plan to have Exclusive Shope & having Storage facility which will enhance our services
                        to all the above Sales platforms in Urban areas.</p>
                </div>
            </div>
        </div>
    </div>






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