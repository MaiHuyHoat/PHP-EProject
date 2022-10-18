<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="assets/css/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Nam</title>
</head>
<body>
    <div class="wrapper">
        <div class="header fix-nav">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <nav class="navbar navbar-light">
                        <a class="navbar-brand" href="index.html">
                          <img src="assets/images/logo.svg" width="73px" alt="">
                        </a>
                      </nav>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="nam.php">NAM</a>
                        <li class="nav-item">
                            <a class="nav-link" href="nu.html">NỮ</a>
                        <li class="nav-item">
                            <a class="nav-link" href="treem.html">TRẺ EM</a>
                        <li class="nav-item">
                            <a class="nav-link" href="#">BỘ SƯU TẬP</a>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li><form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                          </form></li>
                        <li class="item-top-right"><a href="vitri.html"><i class="fa-sharp fa-solid fa-location-dot"></i></a></li>
                        <li class="item-top-right"><a href="taikhoan.html"><i class="fa-solid fa-user"></i></a></li>
                        <li class="item-top-right"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                      </ul>
                    </div>
                  </nav>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="menu-right">
                            <div>
                                <div class="tab-menu-right">
                                    <span>DANH MỤC</span>
                                </div>
                                <ul class="list-items">
                                    <li><a href="#">Sản phẩm đặc biệt</a></li>
                                    <li><a href="#">Đồ lót</a></li>
                                    <li><a href="#">Quần áo</a></li>
                                    <li><a href="#">Bít tất</a></li>
                                </ul>
                                <div class="tab-menu-right1">
                                    <span>MÀU SẮC</span>
                                </div>
                                <ul class="list-items1">
                                    <li><a href="#">Cam</a></li>
                                    <li><a href="#">Nâu</a></li>
                                    <li><a href="#">Trắng</a></li>
                                    <li><a href="#">Vàng</a></li>
                                    <li><a href="#">Đen</a></li>
                                    <li><a href="#">xám</a></li>
                                    <li><a href="#">xanh</a></li>
                                </ul>
                                <!-- <div class="tab-menu-right1">
                                    <span>KÍCH CỠ</span>
                                </div>
                                <ul class="list-items1">
                                    <li><a href="#">Cam</a></li>
                                    <li><a href="#">Nâu</a></li>
                                    <li><a href="#">Trắng</a></li>
                                    <li><a href="#">Vàng</a></li>
                                    <li><a href="#">Đen</a></li>
                                    <li><a href="#">xám</a></li>
                                    <li><a href="#">xanh</a></li>
                                </ul><div class="tab-menu-right1">
                                    <span>CHÂT LIỆU</span>
                                </div>
                                <ul class="list-items1">
                                    <li><a href="#">Cam</a></li>
                                    <li><a href="#">Nâu</a></li>
                                    <li><a href="#">Trắng</a></li>
                                    <li><a href="#">Vàng</a></li>
                                    <li><a href="#">Đen</a></li>
                                    <li><a href="#">xám</a></li>
                                    <li><a href="#">xanh</a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tittle-content">
                            <h4>SẢN PHẨM NAM</h4>
                        </div>
                        <div>
                            <img src="assets/images/cat-san-pham-nam.jpg" alt="">
                        </div>
                        <div class="row list-items-nam">
                            <?php
                            require_once("Models/clsSanpham.php");
                            $sanpham = new clsSanpham();
                            $ketqua = $sanpham->LayDanhSachSanPham(2);//2 ở đây là id ạ
                            $rows = $sanpham->data;
                            foreach($rows as $row)
                            {
                            ?>
                                <div class="col-md-3">
                                <div>
                                    <div class="box-item">
                                        <img src="assets/images/<?=$row["thumbnail"]?>">
                                        <div class="click-buy">
                                            <a href="#">MUA NGAY</a>
                                        </div>
                                    </div>
                                    <div class="item-link">
                                        <a href="#"><?=$row["title"]?></a>
                                    </div>
                                    <div class="box-price">
                                        <span class="price"><strong><?=$row["price"]?></strong></span>
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
        <div class="footer">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div>
                                <h2 class="company-name">CÔNG TY CỔ PHẦN ONOFF</h2>
                                <div>
                                    <p>ĐKKD: 0303930269, ngày cấp: 18/08/2005</p>
                                    <p>Sở Kế hoạch và đầu tư TP. Hồ Chí Minh</p>
                                    <p>Địa chỉ trụ sở chính: 366 Hai Bà Trưng, Phường Tân Định, Quận 1, TP Hồ Chí Minh</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <div>
                                        <h5 class="tittle-toggle">THÔNG TIN HỖ TRỢ</h5>
                                    </div>
                                    <ul class="box-toggle">
                                        <li><a href="#">Hướng dẫn thanh toán</a></li>
                                        <li><a href="#">Hướng dẫn mua hàng</a></li>
                                        <li><a href="#">Hướng dẫn chọn site</a></li>
                                        <li><a href="#">Hướng dẫn đổi trả</a></li>
                                        <li><a href="#">Hướng dẫn theo dõi đơn hàng</a></li>
                                        <li><a href="#">Câu hỏi thường gặp</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <h5 class="tittle-toggle">THƯƠNG HIỆU</h5>
                                    </div>
                                    <ul class="box-toggle">
                                        <li><a href="#">Giới thiệu</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Hệ thống cửa hàng</a></li>
                                        <li><a href="#">Hướng dẫn đổi trả</a></li>
                                        <li><a href="#">Tuyển dụng</a></li>
                                        <li><a href="#">liên hệ</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <h5 class="tittle-toggle">TÀI KHOẢN CỦA BẠN</h5>
                                    </div>
                                    <ul class="box-toggle">
                                        <li><a href="#">Tra cứu đơn hàng</a></li>
                                        <li><a href="#">Lịch sử mua hàng</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contact-me">
                                <h2 class="company-name">LIÊN HỆ</h2>
                                <div>
                                    <p>
                                        <a href="#">
                                            <i class="fa-solid fa-phone"></i>
                                            <span>1800 1100</span>
                                        </a>
                                        (miễn phí cước gọi)
                                    </p>
                                    <p>
                                        <a href="#">
                                            <i class="fa-solid fa-comments"></i>
                                            <span>Live chat</span>
                                        </a>
                                    </p>
                                    <p>
                                        <a href="#">
                                            <i class="fa-solid fa-envelope"></i></i>
                                            <span>info@onoff.vn</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div>
                                <h2 class="company-name">ĐĂNG KÝ NHẬN MAIL TỪ ONOFF</h2>
                                <div class="content">
                                    <form class="form subscribe form-subscribe" novalidate="novalidate" action="#" method="post" id="newsletter-validate-detail">
                                        <div class="field newsletter"><div class="control"><label for="newsletter">
                                            <!-- <span class="label">Sign Up for Our Newsletter:</span>  -->
                                            <input name="email" type="email" id="newsletter" placeholder="Nhập email tại đây" data-validate="{required:true, 'validate-email':true}">
                                        </label>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button class="action subscribe primary" title="Đăng ký" type="submit" aria-label="Subscribe">
                                        <span>Đăng ký</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>  
        </div>
        <div class="copy-right">
            <div class="container">
                <span>© 2018 ONOFF Fashion. All right reserved</span>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/174b5524b1.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>