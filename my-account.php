<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from htmldemo.net/noraure/noraure/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 16:44:35 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Noraure | My Account</title>
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
    require_once("Views/head.php");
    require_once("Models/clsOrder.php");
    require_once("Models/clsOrderDetail.php");
    ?>
</head>

<body>
    <?php
    $UpdAccount = isset($_REQUEST["UpdAcountSuccess"]) == false ? "" : $_REQUEST["UpdAcountSuccess"];

    if ($UpdAccount == 1) {
        require_once("Views/MessengerSuccess.php");
        # code...
    } else if ($UpdAccount == -1) {
        require_once("Views/MessengerFalse.php");
    }
    ?>
    <?php
    require("Views/header.php")
    ?>
    <!-- mobile-menu-area end -->
    <section class="contact-img-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="con-text">
                        <h2 class="page-title">My Account</h2>
                        <p><a href="#">Home</a> | My Account</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="collapse_area coll2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="check">
                        <h2>My Account </h2>
                    </div>
                    <div class="faq-accordion">
                        <div class="panel-group pas7" id="accordion2" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a class="collapsed method" role="button" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Edit your account information <i class="fa fa-caret-down"></i></a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" data-bs-parent="#accordion2" aria-labelledby="headingOne" aria-expanded="false">
                                    <div class="easy2">
                                        <h2>My Account Information</h2>
                                        <?php
                                        $clsUser = new clsUser();
                                        $clsUser->getUserInfo($_SESSION["user"]["id"]) // lay thong tin tai khoan
                                        ?>
                                        <form class="form-horizontal" action="#">
                                            <fieldset>
                                                <legend>Your Personal Details: <?= $clsUser->user_name ?></legend>
                                                <div class="form-group required">
                                                    <div class="row">
                                                        <label class="col-md-2 control-label ">Your Image </label>
                                                        <div class="col-md-4">

                                                            <div>
                                                                <div class="d-flex  mb-4">

                                                                    <img src="Upload/imagesUser/<?= $clsUser->image ?>" class="rounded-circle" alt="example placeholder" style="width: 100px;" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group required">
                                                    <div class="row">
                                                        <label class="col-md-2 control-label">Full Name </label>
                                                        <div class="col-md-10">
                                                            <p><?= $clsUser->fullname ?></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group required">
                                                    <div class="row">
                                                        <label class="col-md-2 control-label">E-Mail</label>
                                                        <div class="col-md-10">
                                                            <p><?= $clsUser->email ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group required">
                                                    <div class="row">
                                                        <label class="col-md-2 control-label">Telephone</label>
                                                        <div class="col-md-10">
                                                            <p><?= $clsUser->phone_number ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group required">
                                                    <div class="row">
                                                        <label class="col-md-2 control-label">Address</label>
                                                        <div class="col-md-10">
                                                            <p><?= $clsUser->address ?></p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </fieldset>

                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">Edit your order <i class="fa fa-caret-down"></i></a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" data-bs-parent="#accordion2" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                                    <?php
                                    $clsOrder = new clsOrder();
                                    $clsOrderDetail = new clsOrderDetail();
                                    $orders = $clsOrder->getOrder($_SESSION['user']['id']);
                                    if (empty($orders) == false) {


                                    ?>
                                        <div class="easy2">

                                            <h2>Your Order</h2>

                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">STT</th>
                                                        <th scope="col">Information</th>
                                                        <th scope="col">Products</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Cancel</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    $stt = 1;
                                                    foreach ($orders as $order) { 
                                                        $status= (int )$order["status"];
                                                        switch($status){
                                                          case 0: $statusShow="Waiting for confirmation";break;
                                                          case 1: $statusShow="Canceled";break;
                                                          case 2: $statusShow="Confirmed";break;
                                                          case 3: $statusShow=" Delivered to the carrier";break;
                                                          case 4:  $statusShow="Paided";break;
                                                          default: $statusShow="No status !";break;
                                                        }
                                                        ?>
                                                           
                                                        <tr>
                                                            <th scope="row"><?= $stt ?></th>
                                                            <td>Ordered: <?= $order["fullname"] ?><br>
                                                                Email: <?= $order["email"] ?><br>
                                                                Phone Number: <?= $order["phone_number"] ?><br>
                                                                Address: <?= $order["address"] ?> <br>
                                                                Order Date: <?= $order["order_date"] ?>
                                                                Total Money: $ <?=$order["total_money"]?>
                                                            </td>
                                                            <td>
                                                                <ul>
                                                                    <?php
                                                                    $orderDetails = $clsOrderDetail->getOrderDetail($order["id"]);
                                                                    foreach ($orderDetails as $orderDetail) {

                                                                        $nameProduct = $clsOrderDetail->getNameProduct($orderDetail["product_id"]) ;
                                                                        $size= $orderDetail["size"] ;
                                                                        switch($size){
                                                                            
                                                                            case 1: $size="S";break;
                                                                            case 2: $size="M";break;
                                                                            case 3: $size="L";break;
                                                                       
                                                                          }
                                                                        ?>
                                                                        <li><span> <?= $nameProduct ?></span> x <?= $orderDetail["num"] ?> | Size: <?= $size ?>
                                                                        <?php }
                                                                        ?>

                                                                </ul>
                                                            </td>
                                                            <td><?=$statusShow?></td>
                                                         <?php
                                                            switch($status){
                                                                case 0: {?><td> <button type="button" class="btn btn-danger"><a href="Controls/check_out_ctrl/ctrl_cancelOrder.php?order_Id=<?= $order['id'] ?>" style="color: white;" onclick="return confirm('Do you want cancel this order?')"> Cancel</a></button></td><?php };break;
                                                                case 1:{?><td></td> <?php };break;
                                                                case 2:{?><td> <button type="button" class="btn btn-danger"><a href="Controls/check_out_ctrl/ctrl_cancelOrder.php?order_Id=<?= $order['id'] ?>" style="color: white;" onclick="return confirm('Do you want cancel this order?')"> Cancel</a></button></td> <?php };break;
                                                      
                                                                case 3:{?><td> <button type="button" class="btn btn-success"><a href="Controls/check_out_ctrl/ctrl_paidedOrder.php?order_Id=<?= $order['id'] ?>" style="color: white;" > Paided</a></button></td>
                                                                          <td> <button type="button" class="btn btn-danger"><a href="Controls/check_out_ctrl/ctrl_cancelOrder.php?order_Id=<?= $order['id'] ?>" style="color: white;" onclick="return confirm('Do you want cancel this order?')"> Cancel</a></button></td><?php };break;
                                                                case 4: {?><td></td> <?php };break;
                                                                default: {?> <td></td> <?php };break;
                                                              }
                                                         ?>
                                         
                                                        </tr>
                                                    <?php
                                                        $stt++;
                                                    }
                                                    ?>


                                                </tbody>
                                            </table>

                                        </div>

                                    <?php } else {
                                    ?>
                                        <div class="easy2">
                                            <h2> You don't have any order</h2>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" data-bs-parent="#accordion2" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                                    <?php
                                    $clsOrder = new clsOrder();
                                    $clsOrderDetail = new clsOrderDetail();
                                    $orders = $clsOrder->getOrderCancel($_SESSION['user']['id']);
                                    if (empty($orders) == false) {


                                    ?>
                                        <div class="easy2">

                                            <h2>Order Canceled</h2>

                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">STT</th>
                                                        <th scope="col">Information</th>
                                                        <th scope="col">Products</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Cancel</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    $stt = 1;
                                                    foreach ($orders as $order) { ?>

                                                        <tr>
                                                            <th scope="row"><?= $stt ?></th>
                                                            <td>Ordered: <?= $order["fullname"] ?><br>
                                                                Email: <?= $order["email"] ?><br>
                                                                Phone Number: <?= $order["phone_number"] ?><br>
                                                                Address: <?= $order["address"] ?> <br>
                                                                Order Date: <?= $order["order_date"] ?><br>
                                                                Total Money: $ <?=$order["total_money"]?>
                                                            </td>
                                                            <td>
                                                                <ul>
                                                                    <?php
                                                                    $orderDetails = $clsOrderDetail->getOrderDetail($order["id"]);
                                                                    foreach ($orderDetails as $orderDetail) {
                                                                        $nameProduct = $clsOrderDetail->getNameProduct($orderDetail["product_id"]) ?>
                                                                        <li><span> <?= $nameProduct ?></span> x <?= $orderDetail["num"] ?> | Size: <?= $orderDetail["size"] ?>
                                                                        <?php }
                                                                        ?>

                                                                </ul>
                                                            </td>
                                                            <td>Canceled</td>
                                                            <td> <button type="button" class="btn btn-success"><a href="Controls/check_out_ctrl/ctrl_reOrder.php?order_Id=<?= $order['id'] ?>" style="color: white;"
                                                             onclick="return confirm('Do you want Re-Order this order?')">Re-Order</a></button></td>
                                                        </tr>
                                                    <?php
                                                        $stt++;
                                                    }
                                                    ?>


                                                </tbody>
                                            </table>

                                        </div>
                                </div>
                           
                                    <?php } 
                                    ?>
                                        
                                    
                                </div>
                            </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Update your Account <i class="fa fa-caret-down"></i></a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse " role="tabpanel" data-bs-parent="#accordion2" aria-labelledby="headingOne" aria-expanded="false">
                                        <div class="easy2">
                                            <h2> Change My Account </h2>

                                            <form class="form-horizontal" action="Controls/user_ctrl/ctrl_updateuser.php" method="POST" enctype="multipart/form-data">
                                                <fieldset>
                                                    <legend>User Name: <?= $clsUser->user_name ?></legend>
                                                    <div class="form-group required">
                                                        <div class="row">
                                                            <label class="col-md-2 control-label ">Your Image </label>
                                                            <div class="col-md-4">

                                                                <div>
                                                                    <div class="d-flex  mb-4">

                                                                        <img id="myimage" src="Upload/imagesUser/<?= $clsUser->image ?>" class="rounded-circle" alt="example placeholder" style="width: 100px;" />
                                                                    </div>
                                                                    <div class="d-flex ">
                                                                        <div class="btn btn-primary btn-rounded">
                                                                            <label class="form-label text-white m-1" for="customFile2">Choose file</label>


                                                                            <input type="file" name="imageUser" class="form-control d-none" onchange="changeHandler(event)" id="customFile2" accept=".jpg,.png,.jpeg" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <div class="row">
                                                            <label class="col-md-2 control-label">Full Name </label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" name="fullName" type="text" value="<?= $clsUser->fullname ?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group required">
                                                        <div class="row">
                                                            <label class="col-md-2 control-label">E-Mail</label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" name="email" type="email" placeholder="E-Mail" value="<?= $clsUser->email ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <div class="row">
                                                            <label class="col-md-2 control-label">Telephone</label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" name="phoneNumber" type="tel" placeholder="Telephone" value="<?= $clsUser->phone_number ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <div class="row">
                                                            <label class="col-md-2 control-label">Address</label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" name="address" type="text" placeholder="Address" value="<?= $clsUser->address ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <div class="row">
                                                            <label class="col-md-2 control-label">Change-Password</label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" name="password" type="text" placeholder="Change your password here" value="<?= $clsUser->password ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="buttons clearfix">
                                                    <div class="pull-left">
                                                        <a class="btn btn-default ce5" href="<?= $_SERVER["HTTP_REFERER"] ?>">Back</a>
                                                    </div>
                                                    <div class="pull-right">
                                                        <input class="btn btn-primary ce5" type="submit" value="UPDATE">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
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
    <!-- jquery latest version -->
    <script src="js/show-local-image-example.js"></script>
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

<!-- Mirrored from htmldemo.net/noraure/noraure/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 16:44:35 GMT -->

</html>