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
        <?php require("Views/head.php")?>
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
                                  <?php  foreach ($listProduct as $row ) {?>
                                    <tr>
                                        <td class="sop-cart an-shop-cart">
                                            <a href="#"><img class="primary-image" alt="" src="<?=$row["thumbnail"][0]?>"></a>
                                            <a href="#"><?=$row["title"]?></a>
                                        </td>
                                        <td class="sop-cart an-sh">
                                            <div class="quantity ray">
                                                <input class="input-text qty text" type="number" title="Qty" value="<?= $_SESSION["cart"][$row["id"]]?>" min="0" step="1">
                                            </div>
                                            <a class="remove" href="#">
                                                <span>x</span>
                                            </a>
                                        </td>
                                        <td class="sop-cart">
                                            <div class="tb-product-price font-noraure-3">
                                                <span class="amount">$<?=$row["price"]?></span>
                                            </div>
                                        </td>
                                        <td class="cen">
                                            <span class="amount">$<?=$row["price"]*$_SESSION["cart"][$row["id"]]?></span>
                                        </td>
                                    </tr>

                                                         <?php 
                                                         }
                                                        ?>
                                   
                                   
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
                                                <span class="amount">$ <?=$subtotal?></span>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total:</th>
                                            <td>
                                                <strong>
                                                    <span class="amount">$ <?=$subtotal?></span>
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

<!-- Mirrored from htmldemo.net/noraure/noraure/shopping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 16:44:36 GMT -->
</html>
