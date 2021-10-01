<?php
include "include/connect.php";
session_start();
$username = $_SESSION['User_ID'];
$qty = isset($_POST['qty']) ? $_POST['qty'] : "";

if (!isset($username)) {
    header('location: login.php');
}

$id = $_GET['P_ID'];
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
    <title>SARUBAI AGRO FARMER SHOP Cheakout</title>
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
                    <h2>Checkout</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="shop.php">Shop</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <!-- <div class="row new-account-login">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="title-left">
                        <h3>Account Login</h3>
                    </div>
                    <h5><a data-toggle="collapse" href="#formLogin" role="button" aria-expanded="false">Click here to
                            Login</a></h5>
                    <form class="mt-3 collapse review-form-box" id="formLogin">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="InputEmail" class="mb-0">Email Address</label>
                                <input type="email" class="form-control" id="InputEmail" placeholder="Enter Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="InputPassword" class="mb-0">Password</label>
                                <input type="password" class="form-control" id="InputPassword" placeholder="Password">
                            </div>
                        </div>
                        <button type="submit" class="btn hvr-hover">Login</button>
                    </form>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="title-left">
                        <h3>Create New Account</h3>
                    </div>
                    <h5><a data-toggle="collapse" href="#formRegister" role="button" aria-expanded="false">Click here to
                            Register</a></h5>
                    <form class="mt-3 collapse review-form-box" id="formRegister">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="InputName" class="mb-0">First Name</label>
                                <input type="text" class="form-control" id="InputName" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="InputLastname" class="mb-0">Last Name</label>
                                <input type="text" class="form-control" id="InputLastname" placeholder="Last Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="InputEmail1" class="mb-0">Email Address</label>
                                <input type="email" class="form-control" id="InputEmail1" placeholder="Enter Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="InputPassword1" class="mb-0">Password</label>
                                <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
                            </div>
                        </div>
                        <button type="submit" class="btn hvr-hover">Register</button>
                    </form>
                </div>
            </div> -->
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Billing address</h3>
                        </div>
                        <form method="post">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">First name *</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name"
                                        placeholder="First Name" value="" required>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Last name *</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                        placeholder="Last Name" value="" required>
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="username">Username *</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="user_name" name="user_name"
                                        placeholder="User Name" required>
                                    <div class="invalid-feedback" style="width: 100%;"> Your username is required.
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email">Email Address *</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder=" Email">
                                <div class="invalid-feedback"> Please enter a valid email address for shipping updates.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="address">Address *</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Adress"
                                    required>
                                <div class="invalid-feedback"> Please enter your shipping address. </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="country">Country *</label>
                                    <select class="wide w-100" id="country" name="country">
                                        <option value="India">India</option>
                                        <option value="United States">United States</option>
                                        <option value="Dubai">Dubai</option>
                                    </select>
                                    <div class="invalid-feedback"> Please select a valid country. </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">State *</label>
                                    <select class="wide w-100" id="state" name="state">
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="kerala">kerala</option>
                                    </select>
                                    <div class="invalid-feedback"> Please provide a valid state. </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zip">Zip *</label>
                                    <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip"
                                        required>
                                    <div class="invalid-feedback"> Zip code required. </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="same-address">
                                <label class="custom-control-label" for="same-address">Shipping address is the same as
                                    my billing address</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="save_address"
                                    name="save_address" value="Save this information for next
                                    time">
                                <label class="custom-control-label" for="save_adress">Save this information for next time</label>
                            </div>
                            <hr class="mb-4">
                            <div class="title"> <span>Payment</span> </div>
                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="payment_method" name="payment_method" type="radio"
                                        class="custom-control-input" value="Cash On Delivery" checked required>
                                    <label class="custom-control-label" for="cashon delivery">Cash On Delivery</label>
                                </div>
                                <!-- <div class="custom-control custom-radio">
                                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input"
                                        required>
                                    <label class="custom-control-label" for="debit">Debit card</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input"
                                        required>
                                    <label class="custom-control-label" for="paypal">Paypal</label>
                                </div> -->
                            </div>
                            <!-- <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">Name on card</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required> <small
                                        class="text-muted">Full name as displayed on card</small>
                                    <div class="invalid-feedback"> Name on card is required </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-number">Credit card number</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                    <div class="invalid-feedback"> Credit card number is required </div>
                                </div>
                            </div> -->
                            <!-- <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">Expiration</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                    <div class="invalid-feedback"> Expiration date required </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">CVV</label>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                    <div class="invalid-feedback"> Security code required </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="payment-icon">
                                        <ul>
                                            <li><img class="img-fluid" src="images/payment-icon/1.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/2.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/3.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/5.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/7.png" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                            <hr class="mb-1">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="shipping-method-box">
                                <div class="title-left">
                                    <h3>Shipping Method</h3>
                                </div>
                                <div class="mb-4">
                                    <div class="custom-control custom-radio">
                                        <input id="shipping_method" name="shipping_method" class="custom-control-input" value="Standard
                                            Delivery Free" checked="checked" type="radio">
                                        <label class="custom-control-label" for="shipping_method">Standard
                                            Delivery</label> <span class="float-right font-weight-bold">FREE</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $query = "select * from product where id=$id";
                        $result = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <div class="col-md-12 col-lg-12">
                            <div class="odr-box">
                                <div class="title-left">
                                    <h3>Product Details</h3>
                                </div>
                                <div class="rounded p-2 bg-light">
                                    <div class="media mb-2 border-bottom">
                                        <div class="media-body"> <a href=""> <?php echo $row['veg_name']; ?></a>
                                            <div class="small text-muted"><?php echo $row['price']; ?> <span
                                                    class="mx-2">|</span> Qty:<?php echo $qty; ?><span
                                                    class="mx-2">|</span> Subtotal:
                                                <?php $row['price'] = $row['price'] * $qty;
                                                    echo $row['price']; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                                <div class="title-left">
                                    <h3>Your order</h3>
                                </div>
                                <div class="d-flex">
                                    <div class="font-weight-bold">Product</div>
                                    <div class="ml-auto font-weight-bold">Total</div>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Sub Total</h4>
                                    <div class="ml-auto font-weight-bold"><?php echo $row['price']; ?>Rs/-</div>
                                </div>
                                <div class="d-flex">
                                    <h4>Tax</h4>
                                    <div class="ml-auto font-weight-bold">
                                        <?php $tax = $row['price'] * 10 / 100;
                                            echo $tax; ?>Rs/-</div>
                                </div>
                                <div class="d-flex">
                                    <h4>Shipping Cost</h4>
                                    <div class="ml-auto font-weight-bold"> Free </div>
                                </div>
                                <hr>
                                <div class="d-flex gr-total">
                                    <h5>Grand Total</h5>

                                    <div class="ml-auto h5"> <?php $total = $row['price'] + $tax;
                                                                    echo $total; ?>Rs/- <input type="number"
                                            value="<?php echo $total; ?>" id="total" name="total" hidden>
                                        <input type="number" id="qty" name="qty" value="<?php echo $qty; ?>" hidden>
                                        <input type="text" id="product_name" name="product_name" value="<?php echo $row['veg_name']; ?>" hidden>
                                    </div>

                                </div>
                                <hr>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="col-12 d-flex shopping-box"> <button class="btn hvr-hover" data-fancybox-close=""
                                style="color: white;font-weight: bold; padding: 9px 18px;" type="submit"
                                name="place_order">Place Order</button>
                        </div>
                    </div>
                    </form>
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
if (isset($_POST['place_order'])) {
    $product_name=$_POST['product_name'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $payment_method = $_POST['payment_method'];
    $shipping_method = $_POST['shipping_method'];

    if (!isset($first_name) || $first_name === '') {
    ?>
<script type="text/javascript">
alert("Please Enter First Name.. ");
</script>
<?php

    } elseif (!isset($last_name) || $last_name === '') {
    ?>
<script type="text/javascript">
alert("Please Enter Last Name.. ");
</script>
<?php
    }elseif (!isset($email) || $email === '') {
    ?>
<script type="text/javascript">
alert("Please Enter Email.. ");
</script>
<?php
    } elseif (!isset($address) || $address === '') {
    ?>
<script type="text/javascript">
alert("Please Enter Address.. ");
</script>
<?php
    } elseif (!isset($country) || $country === '') {
    ?>
<script type="text/javascript">
alert("Please Enter Country.. ");
</script>
<?php
    } elseif (!isset($state) || $state === '') {
    ?>
<script type="text/javascript">
alert("Please Enter State.. ");
</script>
<?php
    } elseif (!isset($zip) || $zip === '') {
    ?>
<script type="text/javascript">
alert("Please Enter Zip Code.. ");
</script>
<?php
    } elseif (!isset($payment_method) || $payment_method === '') {
    ?>
<script type="text/javascript">
alert("Please Select Payment Method.. ");
</script>
<?php
    } elseif (!isset($shipping_method) || $shipping_method === '') {
    ?>
<script type="text/javascript">
alert("Please Select Shipping Method.. ");
</script>
<?php
    } else {
        $query = "INSERT INTO product_order (product_name,first_name,last_name,user_id,email,address,country,state,zip_code,payment_method,shipping_method,quantity,grand_total) VALUES ('$product_name','$first_name','$last_name','$username','$email','$address','$country','$state','$zip','$payment_method','$shipping_method','$qty','$total')";
           echo $query;
           exit();
        $record = mysqli_query($conn, $query);

        if ($record) {
        ?>

<script type="text/javascript">
alert("Your Order Sucessfully..");
window.location = "shop.php";
</script>
<?php

        } else {
        ?>

<script type="text/javascript">
alert("Have Some Issue..");
window.location = "checkout.php?P_ID=<?php echo $id; ?>'";
</script>
<?php
        }
    }
}
?>