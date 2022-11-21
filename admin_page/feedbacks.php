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
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">FULL NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">PHONE NUMBER</th>
                    <th scope="col">SUBJECT</th>
                    <th scope="col">Note</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  require_once("Models/clsFeedback.php");
                  $feedback = new clsFeedback();
                  $rows = $feedback->getListFeedback();
                  if($rows == Null)
                    die("<p>ERROR IN DATABASE</p>");
                  foreach($rows as $row)
                  {
                  ?>
                  <tr>
                    <td></td>
                    <td class="tm-product-name"><?=$row["fullname"]?></td>
                    <td><?=$row["email"]?></td>
                    <td><?=$row["phone_number"]?></td>
                    <td><?=$row["subject_name"]?></td>
                    <td><?=$row["note"]?></td>
                  </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <!-- table container -->
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