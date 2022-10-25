<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from htmldemo.net/noraure/noraure/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 16:44:35 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Noraure | Contact</title>
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
                            <h2 class="page-title">Contact</h2>
                            <p><a href="#">Home</a> | Contact</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="noru-contact">
            <div class="container">
                <form id="contact-form" action="https://whizthemes.com/mail-php/tasnim/mail.php" method="post">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="row">
                                <div class="all-contact">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="di-na">
                                            <label class="l-contact">
                                                Name<em>*</em>
                                            </label>
                                            <input class="form-control" type="text" required="" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="di-na">
                                            <label class="l-contact">
                                                Email <em>*</em>
                                            </label>
                                            <input class="form-control" type="email" required="" name="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <label class="l-contact">
                                            Subject <em>*</em>
                                        </label>
                                        <input class="form-control" type="text" required="" name="subject">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <label class="l-contact con-color">
                                Content  <em>*</em>
                            </label>
                            <textarea class="form-control" required="" name="message"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <div class="last-cart-con">
                                <input class="wpcf7" type="submit" value="Send Message">
                            </div>
                        </div>
                    </div>
                </form>
                <p class="form-messege"></p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="map-area">
                            <div class="contact-map">
                                <div id="hastech"></div>
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
		<!-- jquery-ui js -->
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
        <!-- google map api
		============================================ -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
         <script>
            var myCenter=new google.maps.LatLng(23.763523, 90.431098);
            function initialize()
            {
                var mapProp = {
                  center:myCenter,
                  scrollwheel: false,
                  zoom:17,
                  mapTypeId:google.maps.MapTypeId.ROADMAP
                  };
                var map=new google.maps.Map(document.getElementById("hastech"),mapProp);
                var marker=new google.maps.Marker({
                  position:myCenter,
                    animation:google.maps.Animation.BOUNCE,
                  icon:'img/map-marker.png',
                    map: map,
                  });

                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script> 
		<!-- main js -->
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from htmldemo.net/noraure/noraure/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 16:44:35 GMT -->
</html>
