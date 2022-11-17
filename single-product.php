<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from htmldemo.net/noraure/noraure/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 16:44:35 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Noraure | Single Product</title>
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
   
    <link rel="stylesheet" href="css/comment.css">
    <?php require_once("Views/head.php") ?>
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
    <section class="single-product-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-xl-9 col-md-12 col-12">
                    <div class="row">
                        <?php
                        require("Controls/sort_ctrl/ctl_single_product.php");
                        foreach ($rows as $row) {
                        ?>

                            <div class="col-lg-6 col-md-6">
                                <div class="tab-zoom">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div id="image1" class="tab-pane fade show active">
                                            <div class="s_big">
                                                <a href="<?= $row["thumbnail"]["0"] ?>" class="demo4"><img src="<?= $row["thumbnail"]["0"] ?>" alt=""></a>
                                            </div>
                                        </div>
                                        <div id="image2" class="tab-pane fade">
                                            <div class="s_big">
                                                <a href="<?= $row["thumbnail"]["1"] ?>" class="demo4"><img src="<?= $row["thumbnail"]["1"] ?>" alt=""></a>
                                            </div>
                                        </div>
                                        <div id="image3" class="tab-pane fade">
                                            <div class="s_big">
                                                <a href="<?= $row["thumbnail"]["2"] ?>" class="demo4"><img src="<?= $row["thumbnail"]["2"] ?>" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumnail-image fix">
                                        <ul class="tab-menu nav">
                                            <li><a class="active" data-bs-toggle="tab" href="#image1"><img alt="" src="<?= $row["thumbnail"]["0"] ?>"></a></li>
                                            <li><a data-bs-toggle="tab" href="#image2"><img alt="" src="<?= $row["thumbnail"]["1"] ?>"></a></li>
                                            <li class="zoom-mrgn-none"><a data-bs-toggle="tab" href="#image3"><img alt="" src="<?= $row["thumbnail"]["2"] ?>"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="entry-summary">
                                    <div class="entry-title"><?= $row["title"] ?></div>
                                    <div class="tb-product-wrap-price-rating">
                                        <div class="stock">
                                            Avaiability:
                                            <span> in stock</span>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p><?= $row["description"] ?></p>
                                    </div>
                                    <form action="Controls/cart_ctrl/ctrl_updatecart.php" class="woocommerce-shipping-calculator" method="POST">

                                        <p class="form-row form-row-wide">
                                            <label>
                                                Size
                                                <span class="required">*</span>
                                            </label>
                                            <select class="email s-email s-wid" name="size[<?= $row['id'] ?>]">
                                                <option value="0" selected>Choose an option</option>
                                                <option value="S">S</option>
                                                <option value="M">M</option>
                                                <option value="L">L</option>

                                            </select>
                                        </p>
                                        <div class="single-price">
                                            <div>
                                                <p class="single-price-top">
                                                    Price:
                                                    <span style="padding-left:90px;font-size:20px;color:#ce9634">$ <?= $row["price"] ?></span>
                                                </p>
                                            </div>
                                            <div class="ro-quantity clearfix">
                                                <label>
                                                    Qty:
                                                    <span class="s-color"> *</span>
                                                </label>
                                                <div class="quantity">
                                                    <div class="cart-plus-minus">
                                                        <input type="text" name="qty[<?= $row['id'] ?>]" class="cart-plus-minus-box" value="1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="add-two-single">
                                                <div class="last-cart l-mrgn ns">
                                                    <button type="submit" class="btn btn-warning">Add To Cart</button>
                                                </div>
                                                <div class="tb-product-btn shp">
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
                                            <div class="capture-pn">
                                                <img src="img/icon-img/capture.png" alt="">
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>


                        <?php
                        }
                        ?>
                    </div>
                    <div class="text-sin">
                        <!-- Nav tabs -->
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" href="#home" data-bs-toggle="tab">Description</a>
                            </li>
                            <li>
                                <a href="#profile" data-bs-toggle="tab">Additional Information</a>
                            </li>
                            <li>
                                <a href="#messages" data-bs-toggle="tab">Reviews (<span id="qtyReview"></span>)</a>
                            </li>
                            <li>
                                <a href="#tag" data-bs-toggle="tab"> TAGS</a>
                            </li>
                            <li>
                                <a href="#video" data-bs-toggle="tab"> Video</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active sin-ha" id="home">
                                <h2>Product Description</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="tab-pane sin-ha" id="profile">
                                <h2>Additional Information</h2>
                                <table class="shop_attributes">
                                    <tbody>
                                        <tr class="">
                                            <th>Color</th>
                                            <td>
                                                <p>Black, Orange</p>
                                            </td>
                                        </tr>
                                        <tr class="alt">
                                            <th>Brand</th>
                                            <td>
                                                <p>Nike, Religion, Diesel, Monki</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane sin-ha" id="messages">
                                <div class="container ">
                                    <div class="d-flex justify-content-center row">
                                        <div>
                                            <div class="d-flex flex-column comment-section">
                                                <div id="review">
                                                No Comment
                                                </div>
                                                
                                                <div class="bg-grey p-2" id="comment">
                                                    <div class="d-flex flex-row align-items-start"> <?php
                                                                                                    $logined = isset($_SESSION["logined"]) == false ? false : $_SESSION["logined"];
                                                                                                    // kiem tra xem da dang nhap hay chua  va hien thong tin tai khoan
                                                                                                    if ($logined == true) { ?>

                                                            <?php
                                                                                                        $clsUser = new clsUser();
                                                                                                        $clsUser->getUserInfo($_SESSION["user"]["id"]) // lay thong tin tai khoan
                                                            ?><img class="rounded-circle" src="Upload/imagesUser/<?= $clsUser->image ?>" width="40"><textarea class="form-control ml-1 shadow-none textarea" id="note"></textarea>
                                                            </div>
                                                            <div class="mt-2 text-right">
                                                                <button class="btn btn-primary btn-sm shadow-none" type="button" onclick="submitFeedback('<?= $clsUser->id ?>','<?= $_REQUEST['id'] ?>','<?= $clsUser->fullname ?>',<?= $clsUser->phone_number ?>,null)">Post comment</button>
                                                                <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Cancel</button>
                                                            </div>
                                                        <?php } else { ?>
                                                            <h2 style="color:red">You must login to comment</h2></div>
                                                        <?php } ?>
                                                    


                                                </div>
                                                <script>
                                                    window.onload=function(){
                                                        $.ajax({
                                                                url: "Controls/feedback_ctrl/ctrl_getFeedback.php",
                                                                method: "GET",
                                                                data: {
                                                                    
                                                                    product_id: '<?= $_REQUEST['id'] ?>',
                                                                
                                                                },
                                                                dataType:"json",
                                                                success:function(respon,status){
                                                                    
                                                                  
                                                                   if(respon.length!=0){
                                                                    $("#review").html("");
                                                                    respon.forEach(element => {
                                                                        var createEle=' <div class="bg-grey p-2"><div class="d-flex flex-row user-info"><img class="rounded-circle" src="Upload/imagesUser/'+element.image+'" width="40"><div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">'+element.fullname+'</span><span class="date text-black-50">Shared publicly - Jan 2020</span></div> </div> <div class="mt-2"> <p class="comment-text">'+element.note+'</p> </div> </div><div class="bg-grey">   <div class="d-flex flex-row fs-12"><div class="like p-2 cursor"><i class="fa fa-thumbs-o-up"></i><span class="ml-1">Like</span></div> <div class="like p-2 cursor"><i class="fa fa-commenting-o"></i><span class="ml-1">Comment</span></div> <div class="like p-2 cursor"><i class="fa fa-share"></i><span class="ml-1">Share</span></div> </div> </div>';
                                                                        $("#review").prepend(createEle);
                                                                    });
                                                                   
                                                                 $("#qtyReview").text(respon.length);
                                                                   }else{
                                                                    $("#qtyReview").text(respon.length);
                                                                   }
                                                                },
                                                                false:function(){
                                                                    console.log("loi roi");
                                                                }
                                                            })
                                                    }
                                                     
                                                    
                                                        function submitFeedback(user_id, product_id, fullname, email, phone_number, note) {
                                                            note = document.getElementById("note").value;
                                                            $.ajax({
                                                                url: "Controls/feedback_ctrl/ctrl_addFeedback.php",
                                                                method: "POST",
                                                                data: {
                                                                    user_id: user_id,
                                                                    product_id: product_id,
                                                                    fullname: fullname,
                                                                    email: email,
                                                                    phone_number: phone_number,
                                                                    note: note
                                                                },
                                                                dataType:"json",
                                                                success:function(respon,status){
                                                                    
                                                                  
                                                                   $("#review").html("");
                                                                    respon.forEach(element => {
                                                                        var createEle=' <div class="bg-grey p-2"><div class="d-flex flex-row user-info"><img class="rounded-circle" src="Upload/imagesUser/'+element.image+'" width="40"><div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">'+element.fullname+'</span><span class="date text-black-50">Shared publicly - Jan 2020</span></div> </div> <div class="mt-2"> <p class="comment-text">'+element.note+'</p> </div> </div><div class="bg-grey">   <div class="d-flex flex-row fs-12"><div class="like p-2 cursor"><i class="fa fa-thumbs-o-up"></i><span class="ml-1">Like</span></div> <div class="like p-2 cursor"><i class="fa fa-commenting-o"></i><span class="ml-1">Comment</span></div> <div class="like p-2 cursor"><i class="fa fa-share"></i><span class="ml-1">Share</span></div> </div> </div>';
                                                                        $("#review").prepend(createEle);
                                                                    });
                                                                   
                                                                 $("#qtyReview").text(respon.length);
                                                                },
                                                                false:function(){
                                                                    console.log("loi roi");
                                                                }
                                                            })
                                                        }
                                                    </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tag">
                                <span class="tagged_as">
                                    Tag:
                                    <a rel="tag" href="#">Featured</a>
                                </span>
                            </div>
                            <div class="tab-pane" id="video">
                                <div class="post-format-area">
                                    <div class="blog_video ratio ratio-16x9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8Fx45Bwy-E?list=PLFii9RzqhPhGIXp9ouuse2pVqIOTI0VrM" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                    <div class="top-shop-sidebar an-shop">
                        <h3 class="wg-title">UpSell Products</h3>
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
                            <img alt="" src="img/product/a1.jpg">
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
        </div>
    </section>
    <section class="single-pro-area7">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="last-line">
                        <h3 class="wg-title">Related Products</h3>
                    </div>
                </div>
            </div>
            <div class="non7">
                <div class="row">
                    <!-- single-product start -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tb-product-item-inner tb2 pct-last">
                            <img alt="" src="img/product/1.jpg">
                            <a class="la-icon" href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a>
                            <div class="tb-content">
                                <div class="tb-it">
                                    <div class="tb-beg">
                                        <a href="#">Leather Bag</a>
                                    </div>
                                    <div class="tb-product-wrap-price-rating">
                                        <div class="tb-product-price font-noraure-3">
                                            <span class="amount">$180.00</span>
                                            <span class="amount2 ana">$170.00</span>
                                        </div>
                                    </div>
                                    <div class="last-cart l-mrgn">
                                        <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                        <a class="las4" href="#">Add To Cart</a>
                                        <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <!-- single-product start -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tb-product-item-inner tb2 pct-last">
                            <span class="onsale two">Sale!</span>
                            <img alt="" src="img/product/9.jpg">
                            <a class="la-icon" href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a>
                            <div class="tb-content">
                                <div class="tb-it">
                                    <div class="tb-beg">
                                        <a href="#">Glasses</a>
                                    </div>
                                    <div class="tb-product-wrap-price-rating">
                                        <div class="tb-product-price font-noraure-3">
                                            <span class="amount2 ana">$79.00 - </span>
                                            <span class="amount2 ana">$100.00</span>
                                        </div>
                                    </div>
                                    <div class="last-cart l-mrgn">
                                        <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                        <a class="las4" href="#">Add To Cart</a>
                                        <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <!-- single-product start -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tb-product-item-inner tb2 pct-last">
                            <span class="onsale">Sale!</span>
                            <img alt="" src="img/product/7.jpg">
                            <a class="la-icon" href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a>
                            <div class="tb-content">
                                <div class="tb-it">
                                    <div class="tb-beg">
                                        <a href="#">Skin Shoulder Bag</a>
                                    </div>
                                    <div class="tb-product-wrap-price-rating">
                                        <div class="tb-product-price font-noraure-3">
                                            <span class="amount2 ana">$170.00</span>
                                        </div>
                                    </div>
                                    <div class="last-cart l-mrgn">
                                        <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                        <a class="las4" href="#">Add To Cart</a>
                                        <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <!-- single-product start -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tb-product-item-inner tb2 pct-last res res2">
                            <span class="onsale">Sale!</span>
                            <img alt="" src="img/product/6.jpg">
                            <a class="la-icon" href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a>
                            <div class="tb-content">
                                <div class="tb-it">
                                    <div class="tb-beg">
                                        <a href="#">Vintage Glasses</a>
                                    </div>
                                    <div class="tb-product-wrap-price-rating">
                                        <div class="tb-product-price font-noraure-3">
                                            <span class="amount2 ana">$199.00</span>
                                        </div>
                                    </div>
                                    <div class="last-cart l-mrgn">
                                        <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                        <a class="las4" href="#">Add To Cart</a>
                                        <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-product end -->
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
                                    <img src="img/product/3.jpg" alt="">
                                </div>
                            </div><!-- .product-images -->

                            <div class="cras">
                                <div class="product-name">
                                    <h1>UVintage Lambskin Shoe</h1>
                                </div>
                                <div class="tb-product-price font-noraure-3">
                                    <span class="amount">$180.00</span>
                                    <span class="amount2 ana">$170.00</span>
                                </div>
                                <div class="short-description">
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
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
                                <div class="stock2">
                                    <p class="availability in-stock2"> Availability:Accessories, Men </p>
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

<!-- Mirrored from htmldemo.net/noraure/noraure/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 16:44:36 GMT -->

</html>