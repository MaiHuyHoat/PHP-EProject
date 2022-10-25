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
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        
      
        <?php
       require("Views/header.php")
       ?>
        <!-- mobile-menu-area end --> 
        <section class="contact-img-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="con-text">
                            <h2 class="page-title">Checkout</h2>
                            <p><a href="#">Home</a> | Checkout</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="checkout-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="coupon-accordion">
                            <h3>Returning customer?  <span id="showcoupon3">Click here to login</span></h3>
                            <div id="checkout_coupon3" class="coupon-checkout-content">
                                <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.</p>
                                <div class="coupon-info top1">
                                    <form action="#">
                                        <p class="checkout-coupon top">
                                            <label class="l-contact">
                                                Username or email 
                                                <em>*</em>
                                            </label>
                                            <input type="email" />
                                        </p>
                                        <p class="checkout-coupon top-down">
                                            <label class="l-contact">
                                                password
                                                <em>*</em>
                                            </label>
                                            <input type="password" />
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
                    <div class="col-lg-7 col-md-12">
                        <div class="text">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class=" ano complete">
                                    <a class="active" href="#home" aria-controls="home" role="tab" data-bs-toggle="tab"></a>
                                    <span>Address</span>
                                </li>
                                <li role="presentation" class="ano ">
                                    <a href="#profile" aria-controls="profile" role="tab" data-bs-toggle="tab"></a>
                                    <span>Payment</span>
                                </li>
                                <li role="presentation" class="ano la">
                                    <a href="#message" aria-controls="message" role="tab" data-bs-toggle="tab"></a>
                                    <span>Complete</span>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <form action="#">
                                        <div class="checkbox-form">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h3 class="checkbox9">SHIPPING ADDRESS DETAILS</h3>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="di-na bs">
                                                        <label class="l-contact">
                                                        First Name 
                                                        <em>*</em>
                                                        </label>
                                                        <input class="form-control" type="text" required="" name="name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="di-na bs">
                                                        <label class="l-contact">
                                                        Last Name 
                                                        <em>*</em>
                                                        </label>
                                                        <input class="form-control" type="text" required="" name="name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="di-na bs">
                                                        <label class="l-contact">
                                                        Company Name
                                                        <em>*</em>
                                                        </label>
                                                        <input class="form-control" type="text" required="" name="name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="di-na bs">
                                                        <label class="l-contact">
                                                        Email Address 
                                                        <em>*</em>
                                                        </label>
                                                        <input class="form-control" type="email" required="" name="name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="di-na bs">
                                                        <label class="l-contact">
                                                        Phone 
                                                        <em>*</em>
                                                        </label>
                                                        <input class="form-control" type="tel" required="" name="name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="country-select">
                                                        <label class="l-contact">
                                                        Country 
                                                        <em>*</em>
                                                        </label>
                                                        <select class="email s-email s-wid">
                                                            <option>Bangladesh</option>
                                                            <option>Albania</option>
                                                            <option>Åland Islands</option>
                                                            <option>Afghanistan</option>
                                                            <option>Belgium</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <label class="l-contact">
                                                        Address  
                                                        <em>*</em>
                                                    </label>
                                                    <div class="di-na bs">
                                                        <input class="form-control" type="text" required="" name="name"  placeholder="Street address">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="di-na bs tana">
                                                        <input class="form-control" type="text" required="" name="name" placeholder="Apartment, suite, unit etc. (optional)">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <label class="l-contact">
                                                        Town / City  
                                                        <em>*</em>
                                                    </label>
                                                    <div class="di-na bs">
                                                        <input class="form-control" type="text" required="" name="name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="country-select">
                                                        <label class="l-contact">
                                                            District 
                                                            <em>*</em>
                                                        </label>
                                                        <select class="email s-email s-wid">
                                                            <option>mymensingh</option>
                                                            <option>dhaka</option>
                                                            <option>khulna</option>
                                                            <option>kumillah</option>
                                                            <option>chadpur</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="di-na bs">
                                                        <label class="l-contact">
                                                        Postcode / ZIP
                                                        <em>*</em>
                                                        </label>
                                                        <input class="form-control" type="text" required="" name="name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="checkbox9">SHIP TO A DIFFERENT ADDRESS?</h3>
                                            <div id="showcoupon2">
                                                <input class="input-checkbox" type="checkbox">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="checkout_coupon2" class="coupon-checkout-content2">
                                                <div class="checkbox-form">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="di-na bs">
                                                                <label class="l-contact">
                                                                First Name 
                                                                <em>*</em>
                                                                </label>
                                                                <input class="form-control" type="text" required="" name="name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="di-na bs">
                                                                <label class="l-contact">
                                                                Last Name 
                                                                <em>*</em>
                                                                </label>
                                                                <input class="form-control" type="text" required="" name="name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="di-na bs">
                                                                <label class="l-contact">
                                                                Company Name
                                                                <em>*</em>
                                                                </label>
                                                                <input class="form-control" type="text" required="" name="name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="di-na bs">
                                                                <label class="l-contact">
                                                                Email Address 
                                                                <em>*</em>
                                                                </label>
                                                                <input class="form-control" type="email" required="" name="name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="di-na bs">
                                                                <label class="l-contact">
                                                                Phone 
                                                                <em>*</em>
                                                                </label>
                                                                <input class="form-control" type="tel" required="" name="name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="country-select">
                                                                <label class="l-contact">
                                                                Country 
                                                                <em>*</em>
                                                                </label>
                                                                <select class="email s-email s-wid">
                                                                    <option>Bangladesh</option>
                                                                    <option>Albania</option>
                                                                    <option>Åland Islands</option>
                                                                    <option>Afghanistan</option>
                                                                    <option>Belgium</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="l-contact">
                                                                Address  
                                                                <em>*</em>
                                                            </label>
                                                            <div class="di-na bs">
                                                                <input class="form-control" type="text" required="" name="name"  placeholder="Street address">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="di-na bs tana">
                                                                <input class="form-control" type="text" required="" name="name" placeholder="Apartment, suite, unit etc. (optional)">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="l-contact">
                                                                Town / City  
                                                                <em>*</em>
                                                            </label>
                                                            <div class="di-na bs">
                                                                <input class="form-control" type="text" required="" name="name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="country-select">
                                                                <label class="l-contact">
                                                                    District 
                                                                    <em>*</em>
                                                                </label>
                                                                <select class="email s-email s-wid">
                                                                    <option>mymensingh</option>
                                                                    <option>dhaka</option>
                                                                    <option>khulna</option>
                                                                    <option>kumillah</option>
                                                                    <option>chadpur</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="di-na bs">
                                                                <label class="l-contact">
                                                                Postcode / ZIP
                                                                <em>*</em>
                                                                </label>
                                                                <input class="form-control" type="text" required="" name="name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="di-na bs">
                                                <label class="l-contact">
                                                    Order Notes
                                                </label>
                                                <textarea class="input-text " placeholder="Notes about your order, e.g. special notes for delivery." name="order_comments"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <p class="checkout-coupon">
                                                <input type="submit" value="CONTINUE">
                                            </p>
                                        </div>
                                            
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="top-check-text">
                                                <div class="check-down">
                                                    <h3 class="checkbox9">INFORMATION</h3>
                                                    <span><a class="ro-edit-customer-info" href="#">Edit</a></span>
                                                </div>
                                                <div class="ro-content2">
                                                    <div class="ro-info2">
                                                        <p>
                                                            <span>Email Address: </span>
                                                            example903@yahoo.com
                                                        </p>
                                                    </div>
                                                    <div class="ro-info2">
                                                        <p>
                                                            <span>Country: </span>
                                                            BD
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <form action="#" class="all-payment">
                                                <div class="all-paymet-border">
                                                    <div class="payment-method">
                                                        <div class="pay-top sin-payment">
                                                            <input id="payment_method_1" class="input-radio" type="radio" value="cheque" checked="checked" name="payment_method">
                                                            <label for="payment_method_1"> Direct Bank Transfer </label>
                                                            <div class="payment_box payment_method_bacs">
    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                            </div>
                                                        </div>
                                                        <div class="pay-top sin-payment">
                                                            <input id="payment_method_2" class="input-radio" type="radio" value="cheque" name="payment_method">
                                                            <label for="payment_method_2"> Cheque Payment  </label>
                                                            <div class="payment_box payment_method_bacs">
    <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                            </div>
                                                        </div>
                                                        <div class="pay-top sin-payment">
                                                            <input id="payment_method_3" class="input-radio" type="radio" value="cheque" name="payment_method">
                                                            <label for="payment_method_3">PayPal <img alt="" src="img/icon-img/44.png"><a href="#">What is PayPal?</a></label>
                                                            <div class="payment_box payment_method_bacs">
    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row place-order">
                                                        <input class="button alt" type="submit" value="Place order" >
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="message">
                                    <div class="last-check">
                                        <h3 class="checkbox9">complete</h3>
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
                                <div class="ro-item">
                                    <div class="ro-image">
                                        <a href="#">
                                            <img src="img/product/c15.jpg" alt="">
                                        </a>
                                    </div>
                                    <div>
                                        <div class="tb-beg">
                                            <a href="#">Luxury Leather Bag </a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="ro-price">
                                            <span class="amount">$99.00</span>
                                        </div>
                                        <div class="ro-quantity">
                                            <strong class="product-quantity">× 1</strong>
                                        </div>
                                        <div class="product-total">
                                            <span class="amount">$99.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ro-footer">
                                <div>
                                    <p>
                                        Subtotal
                                        <span>
                                            <span class="amount">$99.00</span>
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
                                <div class="order-total">
                                    <p>
                                        Total
                                        <span>
                                            <strong>
                                                <span class="amount">$99.00</span>
                                            </strong>
                                        </span>
                                    </p>
                                </div>
                                <div>
                                    <p>
                                        Payment Due
                                        <span>
                                            <strong>
                                                <span class="amount">$99.00</span>
                                            </strong>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
       require("Views/footer.php")
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
