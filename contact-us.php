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
    <title>SARUBAI AGRO FARMER CONTACT US</title>
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
                    <h2>Contact Us</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active"> Contact Us </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>GET IN TOUCH</h2><br>
                        <form method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Your Name*" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select id="gender" name="gender" class="form-control">
                                            <option value="">--Select Gender--</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="number" name="number"
                                            placeholder="Mobile Number*" required data-error="Please enter your Number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="address" name="address"
                                            placeholder="Address *" rows="2" data-error="Write your Address"
                                            required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="pincode" name="pincode"
                                            placeholder="Pin-Code *" required data-error="Please enter your Pincode">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select id="requirement" name="requirement" class="form-control">
                                            <option value="">--Select Requirement--</option>
                                            <option value="Grain">Grain</option>
                                            <option value="Fruits">Fruits</option>
                                            <option value="Pulses">Pulses</option>
                                            <option value="Vegetable">Vegetable </option>
                                            <option value="Spices ">Spices </option>
                                            <option value="Others ">Others </option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="description" name="description"
                                            placeholder="Describe Enquiry in Short *" rows="4"
                                            data-error="Write your message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn hvr-hover" id="submit" name="submit" type="submit">Send
                                            Enquiry</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="banner-frame">
                        <h2 class="noo-sh-title-top">FEEDBACK</h2>
                        <p>We welcome you as our prospect Partners and Consumers to give us your input, ideas that are
                            valuable on Journey just begun…</p>
                        <p>This is a farmer organization & We are Learning to manage our Indian Agri Culture.</p>
                        <p>This will help to prepare ourself to adopt marked trend and accommodate diversified need our
                            Food System.</p>
                    </div><br>
                    <div class="contact-info-left">
                        <h2>CONTACT INFO</h2>
                        <p><b>SARUBAI AGRO FARMER PRODUCER COMPANY LIMITED</b></p>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Address: Kumbhargaon Tal-Karmala Dist-Solapur
                                    Pin-413203
                                    Maharashtra INDIA.
                                </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: <a
                                        href="tel:+91-9356914171">9356914171/</a><a
                                        href="tel:+91-9011141321">9011141321</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a
                                        href="mailto:sarubaiagro2021@gmail.com">sarubaiagro2021@gmail.com</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->


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

<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $gender=$_POST['gender'];
        $number=$_POST['number'];
        $address=$_POST['address'];
        $pincode=$_POST['pincode'];
        $requirement=$_POST['requirement'];
        $description=$_POST['description'];

        if(!isset($name) || $name === ''){
            echo"<script>alert ('Please Enter Name..');</script>";
        }elseif(!isset($gender)|| $gender === ''){
            echo"<script>alert ('Please Enter E-mail..');</script>";
        }elseif(!isset($number)|| $number === ''){
            echo"<script>alert ('Please Enter Subject..');</script>";
        }elseif(!isset($address)|| $address === ''){
            echo"<script>alert ('Please Enter Message..');</script>";
        }elseif(!isset($pincode)|| $pincode === ''){
            echo"<script>alert ('Please Enter Message..');</script>";
        }elseif(!isset($requirement)|| $requirement === ''){
            echo"<script>alert ('Please Enter Message..');</script>";
        }elseif(!isset($description)|| $description === ''){
            echo"<script>alert ('Please Enter Message..');</script>";
        }else{
            $query="insert into contact_us(name,gender,number,address,pincode,requirement,description) values('$name','$gender','$number','$address','$pincode','$requirement','$description')";
            
            $result=mysqli_query($conn, $query);

            if($result){
                echo"<script>alert('Your Enquiry Sent..');
                window.location.replace('contact-us.php');</script>";
            }else{
                echo"<script>alert('Your Message not Sent..');
                window.location.replace('contact-us.php');</script>";
            }
        }
    }
?>