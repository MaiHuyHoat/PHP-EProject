<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from htmldemo.net/noraure/noraure/shopping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 16:44:36 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Noraure | Shopping-Cart</title>
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
                            <h2 class="page-title">shopping-Cart</h2>
                            <p><a href="#">Home</a> | shopping-Cart</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="shopping-cart-area s-cart-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="s-cart-all">
                            <div class="page-title">
                                <h1>Shopping-Cart on Noraure </h1>
                            </div>
                            <div class="cart-form table-responsive">
                                <table id="shopping-cart-table" class="data-table cart-table">
                                    <tr>
                                        <th class="low1">Product</th>
                                        <th class="low7">Quantity</th>
                                        <th class="low7">Price</th>
                                        <th class="low7">Total</th>
                                    </tr>
                                    <tr>
                                        <td class="sop-cart an-shop-cart">
                                            <a href="#"><img class="primary-image" alt="" src="img/product/3.jpg"></a>
                                            <a href="#">Vintage Lambskin Shoe</a>
                                        </td>
                                        <td class="sop-cart an-sh">
                                            <div class="quantity ray">
                                                <input class="input-text qty text" type="number" title="Qty" value="2" min="0" step="1">
                                            </div>
                                            <a class="remove" href="#">
                                                <span>x</span>
                                            </a>
                                        </td>
                                        <td class="sop-cart">
                                            <div class="tb-product-price font-noraure-3">
                                                <span class="amount">$180.00</span>
                                            </div>
                                        </td>
                                        <td class="cen">
                                            <span class="amount">$180.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="sop-cart an-shop-cart">
                                            <a href="#"><img class="primary-image" alt="" src="img/product/6.jpg"></a>
                                            <a href="#">Vintage Lambskin Shoe</a>
                                        </td>
                                        <td class="sop-cart an-sh">
                                            <div class="quantity ray">
                                                <input class="input-text qty text" type="number" title="Qty" value="2" min="0" step="1">
                                            </div>
                                            <a class="remove" href="#">
                                                <span>x</span>
                                            </a>
                                        </td>
                                        <td class="sop-cart">
                                            <div class="tb-product-price font-noraure-3">
                                                <span class="amount2 ana">$79.00 - </span>
                                                <span class="amount2 ana">$100.00</span>
                                            </div>
                                        </td>
                                        <td class="cen">
                                            <span class="amount">$180.00</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="last-check1">
                                <div class="yith-wcwl-share yit">
                                    <p class="checkout-coupon an-cop">
                                        <input type="submit" value="Update Cart">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="second-all-class">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-12">
                            <div class="tb-tab-container2">
                                <ul class="nav etabs" role="tablist">
                                    <li role="presentation" class="vc_tta-tab"><a class="active" href="#home" aria-controls="home" role="tab" data-bs-toggle="tab">Estimate Shipping & Taxe</a></li>
                                    <li class="vc_tta-tab " role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-bs-toggle="tab">Use Coupon Code</a></li>
                                </ul>
                                <div class="tab-content another-cen">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <div class="top-shopping4">
                                            <p class="shop9">Shipping Local Pickup (Free)</p>
                                            <p class="down-shop">Enter your destination to get a shipping estimate</p>
                                        </div>
                                        <form action="#" class="woocommerce-shipping-calculator">
                                            <p class="form-row form-row-wide">
                                                <label>
                                                    Country
                                                    <span class="required">*</span>
                                                </label>
                                                <select class="email s-email s-wid">
                                                    <option>Bangladesh</option>
                                                    <option>Albania</option>
                                                    <option>Åland Islands</option>
                                                    <option>Afghanistan</option>
                                                    <option>Belgium</option>
                                                </select>
                                            </p>
                                            <p class="form-row form-row-wide">
                                                <label>
                                                    District 
                                                    <span class="required">*</span>
                                                </label>
                                                <select class="email s-email s-wid">
                                                    <option>mymensingh</option>
                                                    <option>dhaka</option>
                                                    <option>khulna</option>
                                                    <option>kumillah</option>
                                                    <option>chadpur</option>
                                                </select>
                                            </p>
                                            <p class="form-row form-row-wide">
                                                <label>
                                                    Post Code  
                                                    <span class="required">*</span>
                                                </label>
                                                <input class="form-control" type="text" name="name" required="" placeholder="1234567">
                                            </p>
                                            <p class="checkout-coupon two">
                                                <input type="submit" value="Get Quotes">
                                            </p>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile">
                                        <div class="2nd-copun-code">
                                            <form action="#">
                                                <p class="form-row form-row-wide">
                                                    <label>
                                                        Coupon:  
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input class="form-control again" type="text" name="name" required="" placeholder="Coupon code">
                                                </p>
                                                <p class="checkout-coupon full">
                                                    <input type="submit" value="Apply Coupon">
                                                </p>
                                            </form>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-12">
                            <div class="sub-total">
                                <table>
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal:</th>
                                            <td>
                                                <span class="amount">$297.00</span>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total:</th>
                                            <td>
                                                <strong>
                                                    <span class="amount">$297.00</span>
                                                </strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="wc-proceed-to-checkout">
                                <p class="return-to-shop">
                                    <a class="button wc-backward" href="#">Continue Shopping</a>
                                </p>
                                <a class="wc-forward wc-forward-cart" href="#">Confirm Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-area">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="first-footer rspn">
                                <h3 class="wg-title">Contact Us</h3>
                                <div class="textwidget">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-map-marker"></i>
                                                <span>NORAURE London Oxford Street 012 United Kingdom.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-envelope"></i>
                                                <span>emailnoraure@gmail.com emailsupport@gmail.com</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-phone"></i>
                                                <span>
                                                    (+92) 3456 7890
                                                    <br>
                                                    (+92) 1234 5678
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-3 col-12">
                            <div class="first-footer rspn">
                                <h3 class="wg-title">Information</h3>
                                <div class="textwidget">
                                    <ul class="f-none">
                                        <li><a href="#">My account</a></li>
                                        <li><a href="#">Order history</a></li>
                                        <li><a href="#">Wish List</a></li>
                                        <li><a href="#">Returns</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Site Map</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-3 col-12">
                            <div class="first-footer rspn">
                                <h3 class="wg-title">Our Offers</h3>
                                <div class="textwidget">
                                    <ul class="f-none">
                                        <li><a href="#">New collection</a></li>
                                        <li><a href="#">Best sellers</a></li>
                                        <li><a href="#">Manufacturers</a></li>
                                        <li><a href="#">New products</a></li>
                                        <li><a href="#">Suppliers</a></li>
                                        <li><a href="#">Delivery & returns</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12">
                            <div class="first-footer res-mrg-top-md rspn">
                                <h3 class="wg-title">Our Policy</h3>
                                <div class="textwidget">
                                    <ul class="f-none">
                                        <li><a href="#">Help & Contact</a></li>
                                        <li><a href="#">Shipping & taxes</a></li>
                                        <li><a href="#">Returns policy</a></li>
                                        <li><a href="#">Careens</a></li>
                                        <li><a href="#">Affiliates</a></li>
                                        <li><a href="#">Legal Notice</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="last-footer res-mrg-top-md">
                                <h3 class="wg-title">Get Newsletters</h3>
                                <div class="newsletter">
                                    <form action="#">
                                        <p><input class="newsletter-email" type="email" placeholder="Email" required=""></p>
                                        <p><input class="newsletter-submit" type="submit" value="Subscribe"></p>
                                    </form>
                                </div>
                                <div class="widget_text">
                                    <h3 class="wg-title">Connect Us</h3>
                                    <div class="textwid">
                                        <ul class="socials">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="footer-address">
                                <address>
                                    Copyright ©
                                    <a href="#">HasThemes.</a>
                                    All Rights Reserved
                                </address>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="foot-icon"> 
                                <ul>
                                    <li><a href="#"><img src="img/icon-img/payment-1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/icon-img/payment-2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/icon-img/payment-3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/icon-img/payment-4.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        
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

<!-- Mirrored from htmldemo.net/noraure/noraure/shopping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 16:44:36 GMT -->
</html>
