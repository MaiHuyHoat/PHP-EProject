<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from htmldemo.net/noraure/noraure/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 16:44:34 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Noraure | Checkout</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- nivo slider CSS
		============================================ -->
    <link rel="stylesheet" href="lib/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="lib/css/preview.css" type="text/css" media="screen" />
    <!-- font-awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <?php require_once("Views/head.php") ?>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Add your site or application content here -->


    <?php
    require_once("Views/header.php");
    $loginFalse = isset($_REQUEST["loginFalse"]) == false ? " " : $_REQUEST["loginFalse"];

    if ($loginFalse == 1) {
        require_once("Views/MessengerFalseLogin.php");
    } 
    $sucOrder= isset($_REQUEST["SuccessOrder"])==false? "": $_REQUEST["SuccessOrder"];
    if($sucOrder==1){
        require_once("Views/MessengerSuccessOrder.php");
    }
    else if($sucOrder==-1){
        require_once("Views/MessengerFalseOrder.php");
    }
    ?>
    <!-- mobile-menu-area end -->
    <section class="contact-img-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="con-text">
                        <h2 class="page-title">Checkout</h2>
                        <p><a href="index.php">Home</a> | Checkout</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="checkout-area">
        <div class="container">
            <?php
            $logined = isset($_SESSION["logined"]) == false ? false : $_SESSION["logined"];
            $fullName = isset($_SESSION["logined"]) == false ? null : $clsUser->fullname;

            $address = isset($_SESSION["logined"]) == false ? null : $clsUser->address;
            $phoneNumber = isset($_SESSION["logined"]) == false ? "" : $clsUser->phone_number;
            echo $phoneNumber;
            $email = isset($_SESSION["logined"]) == false ? "" : $clsUser->email;
            if ($logined == false) { ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="coupon-accordion">
                            <h3>Returning customer? <span id="showcoupon3">Click here to login</span></h3>
                            <div id="checkout_coupon3" class="coupon-checkout-content">
                                <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.</p>
                                <div class="coupon-info top1">
                                    <form action="Controls/user_ctrl/ctrl_handle_Login.php" method="POST">
                                        <p class="checkout-coupon top">
                                            <label class="l-contact">
                                                Username or email
                                                <em>*</em>
                                            </label>
                                            <input type="text" name="userName" placeholder="User Name." />
                                        </p>
                                        <p class="checkout-coupon top-down">
                                            <label class="l-contact">
                                                password
                                                <em>*</em>
                                            </label>
                                            <input type="password" placeholder="Enter your password" name="userPassword" />
                                        </p>
                                        <div class="cop-left">
                                            <input type="submit" value="login" />
                                            <label class="inline">
                                                <input type="checkbox" name="rememberme">
                                                Remember me
                                            </label>
                                        </div>
                                        <p class="lost_password">
                                            <a href="#">Lost your password?</a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
            ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="coupon-accordion res">
                        <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                        <div id="checkout_coupon" class="coupon-checkout-content tnm">
                            <div class="coupon-info">
                                <form action="#">
                                    <p class="checkout-coupon res">
                                        <input type="text" placeholder="Coupon code" />
                                        <input type="submit" value="Apply Coupon" />
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <form action="Controls/check_out_ctrl/ctrl_addOrder.php" method="POST" class="row">
                    <div class="col-lg-7 col-md-12">
                        <div class="text">
                            <!-- Nav tabs -->

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">

                                    <div class="checkbox-form">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3 class="checkbox9">SHIPPING ADDRESS DETAILS</h3>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="di-na bs">
                                                    <label class="l-contact">
                                                        Full Name
                                                        <em>*</em>
                                                    </label>
                                                    <input class="form-control" type="text" name="fullName" value="<?= $fullName ?>" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="di-na bs">
                                                    <label class="l-contact">
                                                        Address
                                                        <em>*</em>
                                                    </label>
                                                    <input class="form-control" type="text" name="address" value="<?= $address ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="di-na bs">
                                                    <label class="l-contact">
                                                        Email
                                                        <em>*</em>
                                                    </label>
                                                    <input class="form-control" type="email" required="" name="email" value="<?= $email ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="di-na bs">
                                                    <label class="l-contact">
                                                        Phone
                                                        <em>*</em>
                                                    </label>
                                                    <input class="form-control" type="text" name="phoneNumber" value="<?=$phoneNumber ?> " required>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-outline">
                                                    <label class="form-label" for="textAreaExample2">Your note !</label>
                                                    <textarea class="form-control" id="textAreaExample2" rows="8" name="note"></textarea>

                                                </div>
                                            </div>
                                          <?php
                                         if($logined==false){
                                          ?>
                                            <div class="col-lg-12 mt-3">
                                                <label class="inline2">
                                                    <input type="checkbox" name="rememberme7" required>
                                                   <span style="color:red ; font-size: 20px;">!</span> If you have not logged in to cancel your order, please contact the customer service staff at: 024789299 <em>*</em>
                                                </label>

                                            </div>
                                            <?php }?>
                                        </div>
                                    </div>

                                    <div class="col-md-12 text-center ">
                                        <p class="checkout-coupon">
                                            <input type="submit" value="ORDER NOW" >
                                          
                                        </p>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="ro-checkout-summary">
                            <div class="ro-title">
                                <h3 class="checkbox9">ORDER SUMMARY</h3>
                            </div>

                            <div class="ro-body">
                                <?php

                                if (isset($_SESSION["cart"]) == false || empty($_SESSION["cart"])) {
                                ?>
                                    <div>
                                        <p style="text-align:center">You don't have any product in the cart</p>
                                        <a href="shop-list.php"> <button type="button" class="btn btn-warning">Buy</button> </a>
                                    </div>
                                    <?php
                                } else {

                                    $listId = array_keys($_SESSION["cart"]);
                                    $cSp = new clsSanpham();

                                    $strListId = implode(",", $listId); // danh sach id san pham da mua

                                    $dk = " AND product.id in ($strListId)";

                                    $listProduct = $cSp->getListProduct($dk);
                                    foreach ($listProduct as $row) { ?>
                                        <div class="cat">
                                            <a class="image" href="#"><img src="<?= $row["thumbnail"][0] ?>" alt=""></a>
                                            <div class="cat_two" style="text-transform: capitalize">
                                                <p>
                                                    <a href="#"><?= $row["title"] ?></a>
                                                </p>
                                                <?php
                                                $size = null;
                                                if (isset($_SESSION["cart"][$row["id"]]["size"]) == false) {
                                                    $size = "<a href=\"shopping-cart.php\" style=\"color:red;text-decoration: underline;\">Choose size </a>";
                                                } else {
                                                    $size = $_SESSION["cart"][$row["id"]]["size"];
                                                }
                                                ?>
                                                <p>size: <span style="font-size:14px;" class="size"> <?= $size ?></span></p>
                                                <p><span class="agn"><?= $_SESSION["cart"][$row["id"]]["qty"] ?></span>x $ <span class=" price"><?= $row["price"] ?></span></p>
                                            </div>
                                            <div class="cat_icon">
                                                <a class="remove" href=" Controls/cart_ctrl/ctrl_delcart.php/?product=<?= $row["id"] ?>">×</a>

                                            </div>
                                        </div>

                                    <?php
                                    }
                                    ?>

                            </div>
                            <div class="ro-footer">
                                <div>
                                    <p>
                                        Subtotal
                                        <span>
                                            <span class="amount">$ <?= $subtotal ?></span>
                                        </span>
                                    </p>
                                    <div class="ro-divide"></div>
                                </div>
                                <div class="shipping">
                                    <p> Shipping </p>
                                    <div class="ro-shipping-method">
                                        <p>
                                            Shipping Local Pickup (Free)
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="ro-divide"></div>
                                </div>

                                <div style="background-color: #eeeeee;">
                                    <p>
                                        Total
                                        <span>
                                            <strong>
                                                <span class="amount" >$ <?= $subtotal ?></span>
                                            </strong>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <?php
    require_once("Views/footer.php")
    ?>

    <!-- start scrollUp
		============================================ -->
    <div id="toTop">
        <i class="fa fa-chevron-up"></i>
    </div>












    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- parallax js -->
    <script src="js/parallax.min.js"></script>
    <!-- zoom js -->
    <script src="js/jquery.snipe.min.js"></script>
    <!-- owl.carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- meanmenu js -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- jquery.ui js -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- Ajax mail js -->
    <script src="js/ajax-mail.js"></script>
    <!-- Nivo slider js -->
    <script src="lib/js/jquery.nivo.slider.js"></script>
    <script src="lib/home.js"></script>
    <!-- plugins js -->
    <script src="js/plugins.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>
</body>

<!-- Mirrored from htmldemo.net/noraure/noraure/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 16:44:35 GMT -->

</html>