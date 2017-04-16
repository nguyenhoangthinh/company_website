@extends('layout.main')
@section('content')
<div class="content">
    <!-------------------------- SECTION Home ----------------- ---->
    <div id="trangchu" class="section">
        <div class="Container">
                <div class="slider-content">
                    <div class="slide-image">
                        <img  src="images/img_big.png" alt="img_slider">
                        <div class="slider-title">
                        </div>
                        <div class="box-font">
                            <h3>Masteri Thảo Điền</h3>
                        </div>
                    </div>
                    <div class="slide-image">
                        <img src="images/img_slider3.jpg" alt="img_slider">
                        <div class="slider-title">
                        </div>
                        <div class="box-font">
                            <h3>Masteri Thảo Điền</h3>
                        </div>
                    </div>
                    <div class="slider-pager">
                        <a class="prev" >&#10094;</a>
                        <a class="next" >&#10095;</a>
                    </div>
                </div>      
        </div>
    </div>
    <!--------------------------End SECTION Home ----------------- ---->

    <!-------------------------- SECTION Linh Vuc ----------------- ---->
    <div id="linhvuc" class="section">
        <div class="Container">
                <div class="title">
                    <h1>LĨNH VỰC HOẠT ĐỘNG</h1>
                    <div class="line"></div>
                </div>
                
                <div class="slide-holders">
                        <div class="slide-pagers">
                            <div class="slide-control-prev"><img src="images/icon-prev.png" alt="icon-prev.png" class="icon"></div>
                            <div class="slide-control-next"><img src="images/icon-next.png" alt="icon-next.png" class="icon"></div>
                        </div>
                        <div class="slide-container">
                            <div class="slide-stage">
                                <div class="slide-images1">
                                    <a href=""><img src="images/pic-slider1.jpg" alt="pic-slide01.jpg"></a>
                                    <div class="text">
                                        <p>Thiết kế và thi công công trình</p>
                                    </div>
                                </div>
                                <div class="slide-images1">
                                    <a href=""><img src="images/pic-slider2.jpg" alt="pic-slide01.jpg"></a>
                                    <div class="text">
                                        <p>Xây dựng Dân dụng</p>
                                    </div>
                                </div>
                                <div class="slide-images1">
                                    <a href=""><img src="images/pic-slider3.jpg" alt="pic-slide01.jpg"></a>
                                    <div class="text">
                                        <p>Xây dựng Công Nghiệp</p>
                                    </div>
                                </div>
                                <div class="slide-images1">
                                    <a href=""><img src="images/pic-slider4.jpg" alt="pic-slide01.jpg"></a>
                                    <div class="text">
                                        <p>Vật liệu xây dựng</p>
                                    </div>
                                </div>  
                            </div>
                        </div>
                </div> <!--end slider-ngang -->
        </div>
    </div>
    <!--------------------------End SECTION linh vuc ----------------- ---->

    <!-------------------------- SECTION Dự Án ----------------- ---->
    <div id="duan" class="section">
        <div class="Container">
                <div class="top-title">
                    <div class="title-left">
                        <h3>DỰ ÁN TIÊU BIỂU</h3>
                        <div class="line"></div>
                    </div>
                    <div class="title-right">
                        <ul>
                            <li><a href="">Thiết kế thi công </a></li>
                            <li><a href="">Công trình xây dựng </a></li>
                            <li><a href="">Công trình công nghiệp - Resort</a></li>
                        </ul>
                    </div>
                </div>
                <div class="box-section">
                    <div class="box-content first">
                        <img src="images/img_02.png" alt="img_01">
                        <div class="box-title">
                            <a class="a" href="">Regina Miracle International</a>
                            <ul>
                                <li><p>Quy mô: 03 ha</p></li>
                                <li><p>Các hạng mục thi công: Nhà xưởng sản xuất, văn phòng làm việc</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="box-content two">
                        <img src="images/img_02.png" alt="img_02">
                        <div class="box-title">
                            <a class="a" href="">Regina Miracle International</a>
                            <ul>
                                <li><p>Quy mô: 03 ha</p></li>
                                <li><p>Các hạng mục thi công: Nhà xưởng sản xuất, văn phòng làm việc</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="box-content three">
                        <img src="images/img_02.png" alt="img_03">
                        <div class="box-title">
                            <a class="a" href="">Regina Miracle International</a>
                            <ul>
                                <li><p>Quy mô: 03 ha</p></li>
                                <li><p>Các hạng mục thi công: Nhà xưởng sản xuất, văn phòng làm việc</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="box-content for">
                        <img src="images/img_02.png" alt="img_04">
                        <div class="box-title">
                            <a class="a" href="">Regina Miracle International</a>
                            <ul>
                                <li><p>Quy mô: 03 ha</p></li>
                                <li><p>Các hạng mục thi công: Nhà xưởng sản xuất, văn phòng làm việc</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!--------------------------End SECTION Dự Án ----------------- ---->

    <!--------------------------End SECTION News ----------------- ---->
    <div id="tintuc" class="section">
        <div class="Container">
            <div class="box-cover">
                <div class="section-left">
                    <div class="box-title">
                        <h3>TIN TỨC & THÔNG TIN DỰ ÁN</h3>
                        <div class="line"></div>
                    </div>
                    <div class="content-left">
                        <img src="images/img_05.png" alt="img_new">
                        <a href="#">An nam phát khai trương đầu xuân Đinh Dậu 2017 tại Phú Vang - Huế</a>
                        <p>Hòa cùng không khí hân hoan của những ngày đầu năm mới,vào ngày đầu tiên đi làm 
                            của năm Đinh Dậu </p>
                    </div>
                    <div class="content-right">
                        <ul>
                            <li><a href=""><img src="images/img_06.png"><p>An nam phát khai trương đầu xuân Đinh Dậu 2017 tại Phú Vang - Huế</p></a></li>
                            <li><a href=""><img src="images/img_07.png"><p>An nam phát khai trương đầu xuân Đinh Dậu 2017 tại Phú Vang - Huế</p></a></li>
                            <li><a href=""><img src="images/img_08.png"><p>An nam phát khai trương đầu xuân Đinh Dậu 2017 tại Phú Vang - Huế</p></a></li>
                            <li><a href=""><img src="images/img_09.png"><p>An nam phát khai trương đầu xuân Đinh Dậu 2017 tại Phú Vang - Huế</p></a></li>
                            <li><a href=""><img src="images/img_10.png"><p>An nam phát khai trương đầu xuân Đinh Dậu 2017 tại Phú Vang - Huế</p></a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="section-right">
                    <div class="box-title">
                        <h3>video về an nam phát</h3>
                        <span></span>
                    </div>
                    <img src="images/img_video.png" alt="video">
                </div>
            </div>
        </div>  
    </div> 
    <!--------------------------End SECTION News ----------------- ---->
</div>
@endsection