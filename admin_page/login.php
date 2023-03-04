<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login Page - Product Admin Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
    <?php
      session_start();
      require_once("Models/clsLogin.php");
      $login =false;
      if(isset($_REQUEST["login"])==true)
      {
        $login = $_REQUEST["login"];
      }
      if($login==false)
      {
    ?>
    <script>
      var login = document.getElementById("loginPage");
      login.onload = function()
      {
        confirm("PLEASE ENTER AGAIN!");
      }
    </script>
    <?php
      }
    ?>
  </head>

  <body id="loginPage">
    <div>
      <!-- navigation bar -->
      <?php
            require("Views_admin/header.php");
      ?>
      <!-- navigation bar -->
    </div>

    <div class="container tm-mt-big tm-mb-big" style="height:550px">
      <div class="row">
        <div class="col-12 mx-auto tm-login-col">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12 text-center">
                <h2 class="tm-block-title mb-4">Welcome to Dashboard, Login</h2>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
                <form action="ctrl_login.php" method="post" class="tm-login-form">
                  <div class="form-group">
                    <label for="admin_name">Admin Name</label>
                    <input
                      name="admin_name"
                      type="text"
                      class="form-control validate"
                      id="admin_name"
                      required
                    />
                  </div>
                  <div class="form-group mt-3">
                    <label for="admin_password">Password</label>
                    <input
                      name="admin_password"
                      type="password"
                      class="form-control validate"
                      id="admin_password"
                      required
                    />
                  </div>
                  <div class="form-group mt-4">
                    <button
                      type="submit"
                      class="btn btn-primary btn-block text-uppercase"
                    >
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <?php
        require("Views_admin/footer.php");
    ?>

    <script>
      var hd = document.getElementById("header_section");
      hd.innerHTML='<div style="width:1140px;height:100px"></div>'
    </script>
    <!-- Footer -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>