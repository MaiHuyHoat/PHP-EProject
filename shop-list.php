
<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from htmldemo.net/noraure/noraure/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 16:44:31 GMT -->
<head>
  
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Noraure | Shop</title>
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
        <!-- CSS only -->
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
                            <h2 class="page-title">Men</h2>
                            <p><a href="#">Home</a> | Men</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="shop-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-xl-3 col-md-12">
                        <div class="all-shop-sidebar">
                            <div class="top-shop-sidebar">
                                <h3 class="wg-title">SHOP BY</h3>
                            </div>
                            <div class="shop-one form-check">
                                <form action="shop-list.php" method="get">
                                    <h3 class="wg-title2">Genders</h3><br>
                                    <input type="radio" name="gender" class="cat-item form-check-input" value="woman">Woman<br>
                                    <input type="radio" name="gender" class="cat-item form-check-input" value="man">Men<br>

                                    <h3 class="wg-title2">Categories</h3><br>
                                    <input type="radio" name="category" class="cat-item form-check-input" value="shirt">Shirt<br>
                                    <input type="radio" name="category" class="cat-item form-check-input" value="polo">Polo<br>
                                    <input type="radio" name="category" class="cat-item form-check-input" value="shoes">Shoes<br>
                                    <input type="radio" name="category" class="cat-item form-check-input" value="shorts">Shorts<br>
                                    <input type="radio" name="category" class="cat-item form-check-input" value="jeans">Jeans<br>

                                    <h3 class="wg-title2">Choose Price</h3>
                                    <div class="widget shop-filter">
                                        <div class="info_widget">
                                            <div class="price_filter">
                                                <div id="slider-range"></div>
                                                <div id="amount">
                                                    <input type="text" name="first_price" class="first_price"/>
                                                    <input type="text" name="last_price" class="last_price"/>
                                                </div>
                                            </div>
                                        </div>							
                                    </div>
                                    <button class="button-shop" type="submit" style="float:left"><i class="fa fa-search search-icon"></i></button>
                                    <br>
                                </form>
                            </div>

                            <div class="top-shop-sidebar an-shop">
                                <h3 class="wg-title">BEST SELLER</h3>
                                <ul>
                                   <li class="b-none">
                                        <div class="tb-recent-thumbb">
                                            <a href="#">
                                                <img class="attachment" src="img/product/p1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="tb-recentb">
                                            <div class="tb-beg">
                                                <a href="#">Lambskin Shoe</a>
                                            </div>
                                            <div class="tb-product-price font-noraure-3">
                                                <span class="amount">$180.00</span>
                                                <span class="amount2 ana">$170.00</span>
                                            </div>
                                        </div>
                                    </li>
                                   <li class="b-none">
                                        <div class="tb-recent-thumbb">
                                            <a href="#">
                                                <img class="attachment" src="img/product/p2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="tb-recentb">
                                            <div class="tb-beg">
                                                <a href="#">Luxury Leather Bag</a>
                                            </div>
                                            <div class="tb-product-price font-noraure-3">
                                                <span class="amount2 ana">$170.00</span>
                                            </div>
                                        </div>
                                    </li>
                                   <li class="b-none agn">
                                        <div class="tb-recent-thumbb">
                                            <a href="#">
                                                <img class="attachment" src="img/product/p3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="tb-recentb">
                                            <div class="tb-beg">
                                                <a href="#">Vintage Glasses</a>
                                            </div>
                                            <div class="tb-product-price font-noraure-3">
                                                <span class="amount2 ana">$170.00</span>
                                            </div>
                                        </div>
                                    </li>
                               </ul>
                            </div>
                            <div class="ro-info-box-wrap tpl3 st">
                                <div class="tb-image">
                                    <img src="img/product/a1.jpg" alt="">
                                </div>
                                <div class="tb-content">
                                    <div class="tb-content-inner an-inner">
                                        <h5>WOMEN'S FASHION</h5>
                                        <h3>MID SEASON SALE</h3>
                                        <h6>
                                            <a href="#">SHOP NOW</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-9 col-md-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="features-tab">
                                  <!-- Nav tabs -->
                                    <div class="shop-all-tab">
                                        <div class="two-part">
                                            <ul class="nav tabs" role="tablist">
                                                <li class="vali">View as:</li>
                                                <li role="presentation"><a href="#home" class="active" aria-controls="home" role="tab" data-bs-toggle="tab"><i class="fa fa-th-large"></i></a></li>
                                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-bs-toggle="tab"><i class="fa fa-align-justify"></i></a></li>
                                            </ul>
                                            <div class="sort-by">
                                                <div class="shop6">
                                                    <form action="shop-list.php" method="get">
                                                        <label>Sort By :</label>
                                                        <select name="drop_sort">
                                                            <option>Default sorting</option>
                                                            <option>Sort by alphabet</option>
                                                            <option>Sort by price: low to high</option>
                                                            <option>Sort by price: high to low</option>
                                                        </select>
                                                        <button class="button-shop" type="submit"><i class="fa fa-search search-icon"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop5">
                                            <label>Show :</label>
                                            <select>
                                                <option value="">12</option>
                                                <option value="">24</option>
                                                <option value="">36</option>
                                            </select>      
                                        </div>
                                    </div>
                                  <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
                                            <div class="shop-tab">
                                                <div class="row">
                                                    <?php
                                                    require_once("Controls/sort_ctrl/ctl_sort_product.php");
                                                    if($rows == NULL)

                                                        die("<p>ERROR IN DATABASE</p>");
                                                  
                                                    foreach($rows as $row)
                                                    {
                                                    ?>
                                                    <!-- single-product start -->
                                                    <?php
                                                    $single_id = $row["id"];
                                                    ?>
                                                    <div class="col-lg-6 col-xl-4 col-md-6 col-sm-12">
                                                        <a href="single-product.php?id=<?=$row["id"]?>">
                                                        <div class="tb-product-item-inner tb2 pct-last">
                                                            <img alt="" src="<?=$row["thumbnail"][0]?>">
                                                            <a class="la-icon"  href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a>
                                                            <div class="tb-content">
                                                                <div class="tb-it">
                                                                    <div class="tb-beg">
                                                                        <a href="#"><?=$row["title"]?></a>
                                                                    </div>
                                                                    <div class="tb-product-wrap-price-rating">
                                                                        <div class="tb-product-price font-noraure-3">
                                                                            <span class="amount">£<?=$row["price_old"]?></span>
                                                                            <span class="amount2 ana">£<?=$row["price"]?></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="last-cart l-mrgn">
                                                                        <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                                                        <a class="las4" href="Controls/ctrl_addcart.php/?product=<?=$row["id"]?>">Add To Cart</a>
                                                                        <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <!-- single-product end -->	
                                                    <?php
                                                    }
                                                    ?>

                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="profile">
                                            <?php
                                            foreach($rows as $row)
                                            {
                                            ?>
                                            <div class="li-item">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="tb-product-item-inner tb2 pct-last">
                                                            <span class="onsale two">Sale!</span>
                                                            <img alt="" src="<?=$row["thumbnail"][0]?>">
                                                            <a class="la-icon ts"  href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8">
                                                        <div class="f-fix">
                                                            <div class="tb-beg">
                                                                <a href="#"><?=$row["title"]?></a>
                                                            </div>
                                                            <div class="tb-product-wrap-price-rating">
                                                                <div class="tb-product-price font-noraure-3">
                                                                    <span class="amount">£<?=$row["price_old"]?></span>
                                                                    <span class="amount2 ana">£<?=$row["price"]?></span>
                                                                </div>
                                                            </div>
                                                            <p class="desc"><?=$row["description"]?></p>
                                                            <p class="desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo  </p>
                                                            <div class="last-cart l-mrgn ns">
                                                                <a class="las4" href="#">Add To Cart</a>
                                                            </div>
                                                            <div class="tb-product-btn">
                                                                <a href="#">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            }
                                            ?>
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
       require("Views/footer.php")
       ?>
        
        <!-- start scrollUp
		============================================ -->
        <div id="toTop">
            <i class="fa fa-chevron-up"></i>
        </div>
        <!-- QUICKVIEW PRODUCT -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img src="<?=$row["thumbnail"][0]?>" alt="">
                                    </div>
                                </div><!-- .product-images -->

                                <div class="cras">
                                    <div class="product-name">
                                        <h1><?=$row["title"]?></h1>
                                    </div>
                                    <div class="tb-product-price font-noraure-3">
                                        <span class="amount">£<?=$row["price_old"]?></span>
                                        <span class="amount2 ana">£<?=$row["price"]?></span>
                                    </div>
                                    <div class="short-description">
                                        <p><?=$row["description"]?></p>
                                    </div>
                                    <div class="add-to-box1">
                                        <div class="add-to-box add-to-box2">
                                            <div class="add-to-cart">
                                                <div class="input-content">
                                                    <label for="qty">Qty:<span> *</span></label>
                                                    <input id="qty" class="input-text qty" type="text" name="qty" maxlength="12" value="1" title="Qty">
                                                </div>
                                                <div class="last-cart">
                                                    <a class="last1" href="#">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stock2"><p class="availability in-stock2">Availability</p></div>
                                </div><!-- .product-info -->
                            </div><!-- .modal-product -->
                        </div><!-- .modal-body -->
                    </div><!-- .modal-content -->
                </div><!-- .modal-dialog -->
            </div>
            <!-- END Modal -->
        </div>
	    <!-- END QUICKVIEW PRODUCT -->
        
        
        
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

<!-- Mirrored from htmldemo.net/noraure/noraure/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 16:44:32 GMT -->
</html>
