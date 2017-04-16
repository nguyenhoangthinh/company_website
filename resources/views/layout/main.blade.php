<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <title>
            @yield('title','An Nam Phat')
    </title>
</head>
<link rel="stylesheet" href="{{asset('dist/css/reset.css')}}"/>
<link rel="stylesheet" href="{{asset('dist/css/style.css')}}"/>
<link rel="stylesheet" href="{{asset('dist/css/responsive.css')}}"/>
<body>
<!-- ---------------------SECTION HEADER ------------------>
<header>
    <div class="top-bar">
        <div class="Container">
            <div class="header-top">
                <div class="box-logo">
                    <img src="images/img_logo.png" alt="logo">
                </div>
                <div class="toggle-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="box-menu">
                    <div class="section-title">
                        <img src="images/img_title.png" alt="title">
                    </div>
                    <div class="menu">
                        <ul>
                            <li id="trang-chu"><a href="">trang chủ</a></li>
                            <li id="gioi-thieu"><a href="">giới thiệu</a></li>
                            <li id="linh-vuc"><a href="">lĩnh vực hoạt động</a></li>
                            <li id="du-an"><a href="">dự án</a></li>
                            <li id="tin-tuc"><a href="">tin tức</a></li>
                            <li id=tai-lieu><a href="">tài liệu</a></li>
                            <li id="tuyen-dung"><a href="">tuyển dụng</a></li>
                            <li id="lien-he"><a href="#lienhe">liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</header>
<!-- END SECTION HEADER -->
<!--  SECTION CONTENT -->
@yield('content')
<!--------------------------SECTION Footer ----------------- ---->
<footer>
    <div class="Container">
        <div class="footer-intro">
            <div class="box-lh1">
                    <div class="box1">
                        <h1>Giới Thiệu</h1>
                        <p>Công ty TNHH AN NAM PHÁT Đà Nẵng được thành lập 
                                năm 2013. Là đơn vị hàng đầu trong ngành xây dựng và 
                                thi công các công trình xây dựng ở Đà Nẵng, Việt Nam</p>
                        <ul>
                            <li><a href="#"><img src="images/face-icon.png" alt="images/facebook.png"></a></li>
                            <li><a href="#"><img src="images/twiter-icon.png" alt="images/facebook.png"></a></li>
                            <li><a href="#"><img src="images/instragram-icon.png" alt="images/facebook.png"></a></li>
                            <li><a href="#"><img src="images/email-icon.png" alt="images/facebook.png"></a></li>
                            <li><a href="#"><img src="images/in-icon.png" alt="images/facebook.png"></a></li>
                            <li><a href="#"><img src="images/youtube-icon.png" alt="images/facebook.png"></a></li>
                        </ul>
                    </div>

                    <div class="box2">
                        <h1>THÔNG TIN LIÊN HỆ</h1>
                        <ul>
                            <li><img src="images/1.png" alt="">Tên giao dịch: ANNAMPHAT DANACONS, JSC</li>
                            <li><img src="images/2.png" alt="">Địa chỉ: 21 Triệu Quốc Đạt, Phường Hoà Thọ Đông,<p class="first">Quận Cẩm Lệ, Đà Nẵng</p></li>
                            <li><img src="images/3.png" alt="">84.4-37834851 - 84.4-37834850</li>
                            <li><img src="images/04.png" alt="">Email: annamphatdn@gmail.com</li>
                        </ul>
                    </div>

                    <div class="box3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.928279555353!2d108.19858341441713!3d16.017248588913088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421a288fdb9e3d%3A0x3cb7292bf1f6a4c0!2zVHJp4buHdSBRdeG7kWMgxJDhuqF0LCBD4bqpbSBM4buHLCDEkMOgIE7hurVuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1491015150175" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
            </div>
            <div class="footer-bottom">
                <h3>Copyright © 2017 An Nam Phát, Đà Nẵng. All rights reserved. <span>Design by duclinh47th@gmail.com</span></h3>
            </div>
        </div>
    </div>
</footer>
    <img src="images/btn_top_off.png" alt="btn_top_off" class="btn-top"> 
<!--------------------------End SECTION Footer ----------------- ---->
<script  src="{{asset('dist/js/jquery-1.11.3.min.js')}}"></script>
<script  src="{{asset('dist/js/jquery.js')}}"></script>
<script  src="{{asset('dist/js/slider.js')}}"></script>
<script  src="{{asset('dist/js/slider-ngang.js')}}"></script>
<script  src="{{asset('dist/js/custom.js')}}"></script>

</body>
</html>