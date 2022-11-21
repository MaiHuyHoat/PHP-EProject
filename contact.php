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
        <?php
        require("Views/head.php");
        ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        
       <?php
       require_once("Views/header.php")
       ?>
        <!-- mobile-menu-area end --> 
        <section class="contact-img-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="con-text">
                            <h2 class="page-title">Contact</h2>
                            <p><a href="index.php">Home</a> | Contact</p>
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
