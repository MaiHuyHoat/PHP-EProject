<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Product Page - Admin HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
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
    require("Views_admin/head.php");
    ?>
  </head>

  <body id="reportsPage">
    <!-- navigation bar -->
    <?php
      require("Views_admin/header.php");
    ?>
    <!-- navigation bar -->

    <div class="container mt-5">
        <div class="row tm-content-row">
          <div class="col-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
              <h2 class="tm-block-title">List of Accounts</h2>
              <form action="accounts.php">
                <?php
                $acc_type = "";
                if(isset($_REQUEST["account_type"]))
                  $acc_type = $_REQUEST["account_type"];
                else
                  $acc_type = null;
                ?>
                <p class="text-white">Accounts</p>
                <input name="login" value="true" style="display:none">
                <select class="custom-select" name="account_type">
                  <option value="0">Select account</option>
                  <option value="admin" <?php if($acc_type=="admin"){echo("selected");} ?>>Admin</option>
                  <option value="customer" <?php if($acc_type=="customer"|| $acc_type==""|| $acc_type==null){echo("selected");} ?>>Customer</option>
                </select>
                <div style="padding-top:20px"></div>
                <button class="btn btn-primary btn-block text-uppercase">
                  Choose type of account
                </button>
              </form>
            </div>
          </div>
        </div>
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <?php
                require_once("account_type.php");
                ?>
              </table>
            </div>
            <!-- table container -->
            <?php
            if($acc_type == "admin")
            {
            ?>
            <a href="add_account.php?account_type=admin" class="btn btn-primary btn-block text-uppercase mb-3">
              Add new account
            </a>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <?php
        require("Views_admin/footer.php");
    ?>
    <!-- Footer -->

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>