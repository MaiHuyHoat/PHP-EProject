<header class="header-area">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-5 d-none d-sm-block">
                    <div class="top-text">
                        <div class="textwidget">Welcome To Our Store!</div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-7 col-12">
                    <?php
           
                    $logined=isset($_SESSION["logined"])==false? false: $_SESSION["logined"];
                    // kiem tra xem da dang nhap hay chua  va hien thong tin tai khoan
                    if ($logined == true) { ?>

                        <?php
                        $clsUser = new clsUser();
                      
                        $clsUser->getUserInfo($_SESSION["user"]["id"]) ;// lay thong tin tai khoan
                        ?>
                        <div class="widget">
                            <ul>
                                <li>
                                    <a href="my-account.php"> <i class="fa fa-user" aria-hidden="true"></i> <?= $clsUser->fullname ?></a>
                                </li>
                                <li>
                                    <a href="Controls/user_ctrl/ctrl_logOut.php"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                                            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                        </svg>  Log out</a>
                                </li>
                            </ul>
                        </div>
                    <?php } else {
                    ?>
                        <div class="widget">
                            <ul>
                                <li>
                                    <a href="login.php"> <i class="fa fa-user" aria-hidden="true"></i> Login</a>
                                </li>

                            </ul>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area end -->
    <div class="header-menu home-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-wrapper">
                        <div class="logo floatleft">
                            <a href="index.php">
                                <img src="img/logo/logo.png" alt="">
                            </a>
                        </div>
                        <div class="menu-cart floatright">
                            <div class="muti_menu floatleft">
                                <nav>
                                    <ul>
                                        <li><a class="fast" href="index.php">Home </a></li>
                                        <li><a class="fast" href="shop-list.php">Store </a>
                                        <!-- <i class="fa fa-angle-down"></i> -->
                                            <!-- <div class="mega-menu menu-minus">
                                                <div class="tas1 tas3">
                                                    <div class="tas">
                                                        <h3 class="hedding-border">
                                                            <a href="#">Shirts</a>
                                                        </h3>
                                                        <a href="#">Polo </a>
                                                        <a href="#">Linen Shirts</a>
                                                        <a href="#">Office Shirts</a>
                                                    </div>
                                                    <div class="tas">
                                                        <h3 class="hedding-border">
                                                            <a href="#">Shoes</a>
                                                        </h3>
                                                        <a href="#">Urbans</a>
                                                        <a href="#">Casual</a>
                                                        <a href="#">Boots</a>
                                                    </div>
                                                    <div class="tas">
                                                        <h3 class="hedding-border">
                                                            <a href="#">Trousers</a>
                                                        </h3>
                                                        <a href="#">Jeans</a>
                                                        <a href="#">Weekend</a>
                                                        <a href="#">Backpacks</a>
                                                    </div>
                                                    <div class="tas">
                                                        <h3 class="hedding-border">
                                                            <a href="#">Accessories</a>
                                                        </h3>
                                                        <a href="#">Sunglasses</a>
                                                        <a href="#">Watches</a>
                                                        <a href="#">Jewelry</a>
                                                    </div>
                                                    <div class="tas">
                                                        <h3 class="hedding-border">
                                                            <a href="#">Sale</a>
                                                        </h3>
                                                        <a href="#">Tops</a>
                                                        <a href="#">Bottoms</a>
                                                        <a href="#">Denim</a>
                                                    </div>
                                                    <div class="tas mrgn-none">
                                                        <h3 class="hedding-border">
                                                            <a href="#">Features</a>
                                                        </h3>
                                                        <a href="#">Holiday Party</a>
                                                        <a href="#">The Carry On</a>
                                                        <a href="#">Holiday Travel</a>
                                                    </div>
                                                </div>
                                                <div class="tas4">
                                                    <div class="menu-img im3">
                                                        <a href="#"><img alt="" src="img/banner/bg_menu2.jpg"></a>
                                                    </div>
                                                    <div class="menu-img im3">
                                                        <a href="#"><img alt="" src="img/banner/bg_menu3.jpg"></a>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </li>

                                        <li><a class="fast" href="index.php" style="display:none">Pages <i class="fa fa-angle-down"></i></a>
                                            <div class="rayed ru">
                                                <div class="tas menu-last2">
                                                    <a href="register.php">Register</a>
                                                    <a href="blog.php">Blog</a>
                                                    <a href="blog-details.php">Blog Details</a>
                                                    <a href="checkout.php">checkout</a>
                                                    <a href="contact.php">Contacts</a>
                                                    <a href="login.php">Login</a>
                                                    <a href="my-account.php">My Account</a>
                                         
                                                    <a href="shop-list.php">shop List</a>
                                                    <a href="single-product.php">single-product</a>
                                                    <a href="shopping-cart.php">shopping-cart</a>
                                                    <a href="wishlist.php">wishlist</a>
                                                    <a href="coming-soon.php">coming soon</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li><a class="fast" href="blog.php">Blog </a></li>
                                        <li><a class="fast" href="coming-soon.php">Coming Soon </a></li>
                                        <li><a class="fast" href="contact.php">Contact </a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="tb-menu-sidebar floatleft">
                                <div class="search-item">
                                    <a class="icon_search" href="#">
                                        <i class="fa fa-search search-icon"></i>
                                    </a>
                                    <div class="widget_searchform_content">
                                        <form action="shop-list.php">
                                            <input type="text" placeholder="Search" name="search">
                                            <input type="submit">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="top-cart-wrapper wrap floatleft">
                                <div class="top-shop-contain">
                                    <div class="block-shop">
                                        <div class="top-shop-title">
                                            <a href="#">
                                                <i class="fa fa-shopping-cart"></i>
                                                <?php
                                                $countProcduct = 0;
                                                if (isset($_SESSION["cart"])) {
                                                    foreach ($_SESSION["cart"] as $key => $value) {
                                                        # code...
                                                        $countProcduct += $value["qty"];
                                                    }
                                                }
                                                ?>
                                                <span class="count co1"><?= $countProcduct ?></span>
                                            </a>
                                        </div>
                                        <div class="wish-cart margin" style="overflow-y: scroll; height:500px;overflow-x:hidden">
                                            <div class="wish-item">
                                                <?php

                                                if (isset($_SESSION["cart"]) == false || empty($_SESSION["cart"])) {
                                                ?>
                                                    <div>
                                                        <p style="text-align:center">You don't have any product in the cart</p>
                                                        <a href="shop-list.php"> <button type="button" class="btn btn-warning">Buy</button> </a>
                                                    </div>
                                                    <?php
                                                } else {
                                                     
                                                    $listId = array_keys($_SESSION["cart"]);
                                                    $cSp = new clsSanpham();

                                                    $strListId = implode(",", $listId); // danh sach id san pham da mua

                                                    $dk = " AND product.id in ($strListId)";

                                                    $listProduct = $cSp->getListProduct($dk);
                                                    foreach ($listProduct as $row) { ?>
                                                        <div class="cat">
                                                            <a class="image" href="#"><img src="<?= $row["thumbnail"][0] ?>" alt=""></a>
                                                            <div class="cat_two" style="text-transform: capitalize">
                                                                <p>
                                                                    <a href="#"><?= $row["title"] ?></a>
                                                                </p>
                                                                <?php 
                                                                $size=null;
                                                                if(isset($_SESSION["cart"][$row["id"]]["size"])==false||  $_SESSION["cart"][$row["id"]]["size"]=="0"){
                                                                   $size="<a href=\"shopping-cart.php\" style=\"color:red;text-decoration: underline;\">Choose size </a>";
                                                                }
                                                                else{
                                                                    $size=$_SESSION["cart"][$row["id"]]["size"];
                                                                }
                                                                ?>
                                                                <p>size: <span style="font-size:14px;" > <?=$size?></span></p>
                                                                <p><span class="agn"><?= $_SESSION["cart"][$row["id"]]["qty"] ?></span>x    $ <span class=" price"><?= $row["price"] ?></span></p>
                                                            </div>
                                                            <div class="cat_icon">
                                                                <a class="remove" href=" Controls/cart_ctrl/ctrl_delcart.php/?product=<?= $row["id"] ?>">×</a>

                                                            </div>
                                                        </div>

                                                    <?php
                                                    }
                                                    ?>
                                                    <div class="wish-item">
                                                        <div class="cat_bottom">
                                                            <p class="total">
                                                                <strong>Subtotal:</strong>
                                                                <?php
                                                                $subtotal = 0;
                                                                foreach ($listProduct as $row) {
                                                                    $subtotal += $row["price"] * $_SESSION["cart"][$row["id"]]["qty"];
                                                                    # code...
                                                                }
                                                                ?>
                                                                <span class="amount">$ <?= $subtotal ?></span>
                                                            </p>
                                                            <p class="buttons">
                                                                <a class="button wc-forward" href="shopping-cart.php">View Cart</a>
                                                       
                                                            </p>
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
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="main-menu">
                                    <li>
                                        <a href="index.php">Home</a>
                                        <ul class="menu-up">
                                            <li><a href="index-2.php">Homepage 02</a></li>
                                            <li><a href="index-3.php">Homepage 03</a></li>
                                            <li><a href="index-4.php">Homepage 04</a></li>
                                            <li><a href="index-5.php">Homepage 05</a></li>
                                            <li><a href="index-6.php">Homepage 06</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop-list.php">Women</a>
                                        <ul class="main-menu2">
                                            <li>
                                                <a href="#">Clothings</a>
                                                <ul class="main-menu3">
                                                    <li><a>Dresses</a></li>
                                                    <li><a>Tops</a></li>
                                                    <li><a>Outerwear</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Jewelry</a>
                                                <ul class="main-menu3">
                                                    <li><a>Necklaces</a></li>
                                                    <li><a>Earrings</a></li>
                                                    <li><a>Rings</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Shoes</a>
                                                <ul class="main-menu3">
                                                    <li><a>Sneakers</a></li>
                                                    <li><a>Flats</a></li>
                                                    <li><a>Boots</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img alt="" src="img/banner/bg_menu1.jpg">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop-list.php">Men</a>
                                        <ul class="main-menu2">
                                            <li>
                                                <a href="#">Clothing</a>
                                                <ul class="main-menu3">
                                                    <li><a>Shirts</a></li>
                                                    <li><a>Tops</a></li>
                                                    <li><a>Outerwear</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Shoes</a>
                                                <ul class="main-menu3">
                                                    <li><a>Sneakers</a></li>
                                                    <li><a>Casual</a></li>
                                                    <li><a>Boots</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Bags</a>
                                                <ul class="main-menu3">
                                                    <li><a>Work</a></li>
                                                    <li><a>Weekend</a></li>
                                                    <li><a>Backpacks</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Accessories</a>
                                                <ul class="main-menu3">
                                                    <li><a>Sunglasses</a></li>
                                                    <li><a>Watches</a></li>
                                                    <li><a>Jewelry</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Sale</a>
                                                <ul class="main-menu3">
                                                    <li><a>Tops</a></li>
                                                    <li><a>Bottoms</a></li>
                                                    <li><a>Denim</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Features</a>
                                                <ul class="main-menu3">
                                                    <li><a>Holiday Party</a></li>
                                                    <li><a>The Carry On</a></li>
                                                    <li><a>Holiday Travel</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img alt="" src="img/banner/bg_menu2.jpg">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img alt="" src="img/banner/bg_menu3.jpg">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-list.php">Jewelry</a></li>
                                    <li>
                                        <a href="#">Pages</a>
                                        <ul>
                                            <li>
                                                <a href="blog.php">Blog</a>
                                                <a href="blog-details.php">Blog Details</a>
                                                <a href="checkout.php">checkout</a>
                                                <a href="contact.php">Contacts</a>
                                                <a href="login.php">Login</a>
                                                <a href="my-account.php">My Account</a>
                                                <a href="shop-list.php">shop</a>
                                                <a href="shop-list.php">shop List</a>
                                                <a href="single-product.php">single-product</a>
                                                <a href="shopping-cart.php">shopping-cart</a>
                                                <a href="wishlist.php">wishlist</a>
                                                <a href="coming-soon.php">Coming soon</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-list.php">Watches</a></li>
                                    <li><a href="blog.php">Blog</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>