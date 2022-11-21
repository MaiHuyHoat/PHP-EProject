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
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <?php
    require("Views/head.php");
    require_once("Controls/sort_ctrl/ctl_sort_product.php");
    include_once("Controls/sort_ctrl/ctl_search_product.php");
    ?>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Add your site or application content here -->


    <?php
    require("Views/header.php");
    ?>
    <!-- mobile-menu-area end -->
    <section class="contact-img-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="con-text">
                        <h2 class="page-title">Store</h2>
                        <p><a href="index.php">Home</a> | Store</p>
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
                            <form action="shop-list.php" method="get" id="sort-by-attr">
                                <h3 class="wg-title2">Genders</h3><br>
                                <input type="radio" name="gender" class="cat-item form-check-input" value="woman">Woman<br>
                                <input type="radio" name="gender" class="cat-item form-check-input" value="man">Man<br>

                                <h3 class="wg-title2">Categories</h3><br>
                                <input type="radio" name="category" class="cat-item form-check-input" value="shirt">Shirt<br>
                                <input type="radio" name="category" class="cat-item form-check-input" value="polo">Polo<br>
                                <input type="radio" name="category" class="cat-item form-check-input" value="shoes">Shoes<br>
                                <input type="radio" name="category" class="cat-item form-check-input" value="shorts">Shorts<br>
                                <input type="radio" name="category" class="cat-item form-check-input" value="jeans">Jeans<br>


                                <button class="btn btn-outline-warning mt-3" style="width:150px" type="submit">Find</button>
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
                                        <a href="shop-list.php">SHOP NOW</a>
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
                                            <li class="vali">View as: </li>
                                            <li role="presentation"><a href="#home" class="active" aria-controls="home" role="tab" data-bs-toggle="tab"><i class="fa fa-th-large"></i></a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-bs-toggle="tab"><i class="fa fa-align-justify"></i></a></li>
                                        </ul>
                                        <div class="sort-by">
                                            <div class="shop6">
                                                <form action="shop-list.php" method="get" id="sort-form">
                                                    <label>Sort By: </label>
                                                    <select name="drop_sort" id="drop_sort">
                                                        <option>Default sorting</option>
                                                        <option>Sort by alphabet</option>
                                                        <option>Sort by price: low to high</option>
                                                        <option>Sort by price: high to low</option>

                                                    </select>
                                                    <button class="btn btn-outline-warning btn-sm" type="submit">Sort</i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="" style="float:right">
                                            <form method="get" action="shop-list.php">
                                                <label>Search: </label>
                                                <input style="border: 0.5px solid #ce9634;border-radius:5px" type="text" placeholder="Search" name="search">
                                                <button class="button-shop"><i class="fa fa-search search-icon"></i></button>
                                            </form>
                                    </div>
                                </div>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <div class="shop-tab">
                                            <div class="row">
                                                <?php

                                                $total_product = (int)$sanpham->countProduct();
                                                $limit = 9; // so san pham gioi han moi trang
                                                $total_page = ceil($total_product / $limit); // tong so trang sau khi chia so so san pham gioi han va lam tron
                                                $currentPage = 1;
                                                if (isset($_REQUEST['page']) && is_numeric($_REQUEST['page'])) {
                                                    $currentPage = $_REQUEST['page'];
                                                }
                                                if ($currentPage < 1) {
                                                    $currentPage = 1;
                                                } else if ($currentPage > $total_page) $currentPage = $total_page;
                                                $rows = array_slice($rows, ($currentPage - 1) * 10, $limit);
                                                if ($rows == NULL)

                                                    die("<p>ERROR IN DATABASE</p>");

                                                foreach ($rows as $row) {
                                                ?>
                                                    <!-- single-product start -->
                                                    <div class="col-lg-6 col-xl-4 col-md-6 col-sm-12">
                                                        <a href="single-product.php?id=<?= $row["id"] ?>">
                                                            <div class="tb-product-item-inner tb2 pct-last">
                                                                <img alt="" src="<?= $row["thumbnail"][0] ?>" style="width:264px;height:264px">
                                                                <a class="la-icon" href="#productModal" onclick="showDetails(this.getAttribute('data-id'));" data-id="<?= $row["id"] ?>" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a>
                                                                <div class="tb-content">
                                                                    <div class="tb-it">
                                                                        <div class="tb-beg">
                                                                            <a href="single-product.php?id=<?= $row["id"] ?>"><?= $row["title"] ?></a>
                                                                        </div>
                                                                        <div class="tb-product-wrap-price-rating">
                                                                            <div class="tb-product-price font-noraure-3">
                                                                                <span class="amount">£<?= $row["price_old"] ?></span>
                                                                                <span class="amount2 ana">£<?= $row["price"] ?></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="last-cart l-mrgn">
                                                                            <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                                                            <a class="las4" href="Controls/cart_ctrl/ctrl_addcart.php?product=<?= $row["id"] ?>">Add To Cart</a>
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
                                        foreach ($rows as $row) {
                                        ?>
                                            <div class="li-item">
                                                <a href="single-product.php?id=<?= $row["id"] ?>">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4">
                                                            <div class="tb-product-item-inner tb2 pct-last">
                                                                <span class="onsale two">Sale!</span>
                                                                <img alt="" src="<?= $row["thumbnail"][0] ?>" style="width:264px;height:264px">
                                                                <a class="la-icon ts" href="#productModal" onclick="showDetails(this.getAttribute('data-id'));" data-id="<?= $row["id"] ?>" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8">
                                                            <div class="f-fix">
                                                                <div class="tb-beg">
                                                                    <a href="single-product.php?id=<?= $row["id"] ?>"><?= $row["title"] ?></a>
                                                                </div>
                                                                <div class="tb-product-wrap-price-rating">
                                                                    <div class="tb-product-price font-noraure-3">
                                                                        <span class="amount">£<?= $row["price_old"] ?></span>
                                                                        <span class="amount2 ana">£<?= $row["price"] ?></span>
                                                                    </div>
                                                                </div>
                                                                <p class="desc"><?= $row["description"] ?></p>
                                                                <div class="last-cart l-mrgn ns">
                                                                    <a class="las4" href="Controls/cart_ctrl/ctrl_addcart.php?product=<?= $row["id"] ?>">Add To Cart</a>
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
                                                </a>
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
            <nav aria-label="Page navigation example " class="container" style="display: flex; justify-content: center;">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="?page=<?= $currentPage - 1 ?>">Previous</a></li>
                    <?php
                    for ($i = 1; $i <= $total_page; $i++) { ?>
                        <li class="page-item"><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>

                    <?php   }
                    ?>

                    <li class="page-item"><a class="page-link" href="?page=<?= $currentPage + 1 ?>">Next</a></li>
                </ul>
            </nav>
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
                                    <img id="image_click" src="" alt="">
                                </div>
                            </div><!-- .product-images -->

                            <div class="cras">
                                <div class="product-name">
                                    <h1 id="title_click"></h1>
                                </div>
                                <div class="tb-product-price font-noraure-3">
                                    <span id="price_old_click" class="amount"></span>
                                    <span id="price_click" class="amount2 ana"></span>
                                </div>
                                <div class="short-description">
                                    <p id="description_click"></p>
                                </div>
                                <div class="add-to-box1">
                                    <div class="add-to-box add-to-box2">
                                        <div class="add-to-cart">
                                            <div class="input-content">
                                                <label for="qty">Qty:<span> *</span></label>
                                                <input id="qty" class="input-text qty" type="text" name="qty" maxlength="12" value="1" title="Qty">
                                            </div>
                                            <div class="last-cart">
                                                <a class="last1" id="addcart_click" href="">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="stock2">
                                    <p class="availability in-stock2">Availability</p>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <!-- END Modal -->
    </div>
    <!-- END QUICKVIEW PRODUCT -->
    <script>
        function showDetails(id) {
            var dataObj = {};
            $.ajax({
                url: "Controls/sort_ctrl/quick_view.php",
                method: "POST",
                data: {
                    get_data: 1,
                    id: id
                },
                success: function(response) {
                    response = JSON.parse(response);
                    $("#image_click").attr("src", response.thumbnail);
                    $("#title_click").text(response.title);
                    $("#price_old_click").text("£" + response.price_old);
                    $("#price_click").text("£" + response.price);
                    $("#description_click").text(response.description);
                    $("#addcart_click").attr("href", "Controls/cart_ctrl/ctrl_addcart.php?product=" + response.id);
                }
            });
        }
    </script>


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
    <script >
        $drop_sort = "<?= $drop_sort; ?>";
var optionSort=  $("#drop_sort").children();


    if ($drop_sort == "Default sorting") {
   
        for (let index = 0; index < optionSort.length; index++) {
            const element = optionSort[index];
            element.removeAttribute("selected");
        }
     optionSort[0].setAttribute("selected","");
    } else if ($drop_sort == "Sort by alphabet") {
        for (let index = 0; index < optionSort.length; index++) {
            const element = optionSort[index];
            element.removeAttribute("selected");
        }
     optionSort[1].setAttribute("selected","");
    } else if ($drop_sort == "Sort by price: low to high") {
        for (let index = 0; index < optionSort.length; index++) {
            const element = optionSort[index];
            element.removeAttribute("selected");
        }
     optionSort[2].setAttribute("selected","");
    } else if ($drop_sort == "Sort by price: high to low") {
        for (let index = 0; index < optionSort.length; index++) {
            const element = optionSort[index];
            element.removeAttribute("selected");
        }
     optionSort[3].setAttribute("selected","");
    } else {
        for (let index = 0; index < optionSort.length; index++) {
            const element = optionSort[index];
            element.removeAttribute("selected");
        }
     optionSort[0].setAttribute("selected","");
    }
    ///chon radio
    $gender="<?=$gender?>";
    $category="<?=$category?>";
    function delRadio(){
     let input= $("#sort-by-attr input");
     for (let index = 0; index < input.length; index++) {
        const element = input[index];
        element.removeAttribute("checked");
     }
    }
    var inputSort= $("#sort-by-attr input");
    console.log($gender+$category);
    
if($gender == "woman" && $category == "shirt")
{
    
   delRadio();
   inputSort[0].setAttribute("checked","");
   inputSort[2].setAttribute("checked","");
}
else if($gender == "woman" && $category == "polo")
{
    delRadio();
   inputSort[0].setAttribute("checked","");
   inputSort[3].setAttribute("checked","");
}
else if($gender == "woman" && $category == "shoes")
{
    delRadio();
   inputSort[0].setAttribute("checked","");
   inputSort[4].setAttribute("checked","");
}
else if($gender == "woman" && $category == "shorts")
{
    delRadio();
   inputSort[0].setAttribute("checked","");
   inputSort[5].setAttribute("checked","");  
}
else if($gender == "woman" && $category == "jeans")
{
    delRadio();
   inputSort[0].setAttribute("checked","");
   inputSort[6].setAttribute("checked","");
}
else
{
    
}

//men_sort
if($gender == "man" && $category == "shirt")
{
    delRadio();
   inputSort[1].setAttribute("checked","");
   inputSort[2].setAttribute("checked","");
}
else if($gender == "man" && $category == "polo")
{
    delRadio();
   inputSort[1].setAttribute("checked","");
   inputSort[3].setAttribute("checked","");
}
else if($gender == "man" && $category == "shoes")
{
    delRadio();
   inputSort[1].setAttribute("checked","");
   inputSort[4].setAttribute("checked","");
}
else if($gender == "man" && $category == "shorts")
{
    delRadio();
   inputSort[1].setAttribute("checked","");
   inputSort[5].setAttribute("checked","");
}
else if($gender == "man" && $category == "jeans")
{
    delRadio();
   inputSort[1].setAttribute("checked","");
   inputSort[6].setAttribute("checked","");
}
else
{
    
}

    </script>
</body>

<!-- Mirrored from htmldemo.net/noraure/noraure/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 16:44:32 GMT -->

</html>