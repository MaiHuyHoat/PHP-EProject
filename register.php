<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from htmldemo.net/noraure/noraure/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 16:44:35 GMT -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Noraure | Login</title>
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
  <?php
  require_once("Views/head.php");
  ?>
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

  <!-- Add your site or application content here -->
<?php
$creatAccount=isset($_REQUEST["CreAcountSuccess"])==false? "": $_REQUEST["CreAcountSuccess"];

if ($creatAccount==1) {
  require_once("Views/MessengerSuccessRegister.php");
  # code...
}
else if($creatAccount==-1){
  require_once("Views/MessengerFalse.php");
}
?>
  <?php
  require_once("Views/header.php");
  $existAccount = isset($_REQUEST["ErrorCreAcount"]) == false ? "" : $_REQUEST["ErrorCreAcount"];
  if ( $existAccount == 1 ) { ?>
    <script>
      window.onload = function() {
        alert("This Account have existed in Server.")
      }
    </script>
  <?php }
  ?>
  <section class="contact-img-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="con-text">
            <h2 class="page-title">Login Or Register</h2>
            <p><a href="index.php">Home</a> | Login Or Register</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pt-5 pb-5" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                  <form class="mx-1 mx-md-4" action="Controls/user_ctrl/ctrl_adduser.php" method="POST" enctype="multipart/form-data">
                    <div class="d-flex flex-row align-items-around mb-4">
                      <div class="card d-flex" style="width: 18rem; margin:0 auto;border: none;">

                        <div class="card-body">
                          <h5 class="card-title">Your image</h5>
                     
                          <div>
                            <div class="d-flex justify-content-center mb-4">

                              <img id="myimage" src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg" class="rounded-circle" alt="example placeholder" style="width: 100px;" />
                            </div>
                            <div class="d-flex justify-content-center">
                              <div class="btn btn-primary btn-rounded">
                                <label class="form-label text-white m-1" for="customFile2">Choose file</label>


                                <input type="file" name="imageUser" class="form-control d-none" onchange="changeHandler(event)" id="customFile2" accept=".jpg,.png,.jpeg" />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fa fa-user fa-lg me-3 fa-fw" style="align-self:center"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" id="form3Example1c" name="fullName" class="form-control" />
                        <label class="form-label" for="form3Example1c">Your Full Name</label>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class=" fa-lg me-3 fa-fw"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                          <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                          <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" name="address" id="form3Example3c" class="form-control" />
                        <label class="form-label" for="form3Example3c">Your Address</label>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class=" fa-lg me-3 fa-fw"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="number " name="phoneNumber" id="form3Example3c" class="form-control" />
                        <label class="form-label" for="form3Example3c">Phone Number</label>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fa fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                     
                        <input type="email" name="email" id="form3Example3c" class="form-control" />
                        
                        <label class="form-label" for="form3Example3c" >Your Email</label>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fa fa-user fa-lg me-3 fa-fw" aria-hidden="true"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" name="userName" id="form3Example4c" class="form-control" />
                        <label class="form-label" for="form3Example4c">User Name</label>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fa fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" name="password" id="form3Example4c" class="form-control" />
                        <label class="form-label" for="form3Example4c">Password</label>
                      </div>
                    </div>


                    <div class="form-check d-flex justify-content-center mb-5">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                      <label class="form-check-label" for="form2Example3">
                        I agree all statements in <a href="#!">Terms of service</a>
                      </label>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" class="btn btn-primary btn-lg">Register</button>
                    </div>

                  </form>

                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                  <img src="https://harnishdesign.net/demo/html/oxyy/images/login-bg-6.jpg" class="img-fluid" style="height: 100%" alt="Sample image">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  require_once("Views/footer.php")
  ?>


  <!-- start scrollUp
		============================================ -->
  <div id="toTop">
    <i class="fa fa-chevron-up"></i>
  </div>






  <!-- all js here -->
  <script src="js/show-local-image-example.js"></script>
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

<!-- Mirrored from htmldemo.net/noraure/noraure/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 16:44:35 GMT -->

</html>