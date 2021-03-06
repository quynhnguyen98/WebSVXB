@extends('welcome')
@section('layout')
    
<section class="hero-wrap js-fullheight">
    <div class="home-slider js-fullheight owl-carousel">
        <div class="slider-item js-fullheight" style="background-image:url(public/frontend/images/bg_1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-8 ftco-animate">
                        <div class="text mt-md-5 w-100 text-center">
                            <h2>Nhóm sinh viên công giáo</h2>
                            <h1 class="mb-3">Nơi gieo dắt gắn kết anh em xa xứ</h1>
                            <p class="mb-4 pb-3">Xa xa, đằng sau những ngọn núi, xa những nơi chốn đô thị, có những cuộc sống mù mịt. Họ luôn sống riêng biệt.</p>
                            <p class="mb-0"><a href="#" class="btn btn-primary py-3 px-2 px-md-4">Gia nhập nhóm</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image:url(public/frontend/images/bg_2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-8 ftco-animate">
                        <div class="text mt-md-5 w-100 text-center">
                            <h2>Chào Mừng bạn đến với sinh viên xứ bình</h2>
                            <h1 class="mb-3">nơi giao lưu học tập và sinh hoạt</h1>
                            <p class="mb-4 pb-3">Xa xa, đằng sau những ngọn núi, xa những nơi chốn đô thị, có những cuộc sống mù mịt. Họ luôn sống riêng biệt.</p>
                            <p class="mb-0"><a href="#" class="btn btn-primary py-3 px-2 px-md-4">Gia nhập nhóm</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-8 d-flex">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <div class="services-2">
                            <div class="icon"><span class="flaticon-church"></span></div>
                            <div class="text">
                                <h4>tĩnh nguyện</h4>
                                <span class="subheading">Những Mong Đợi</span>
                                <p>Suy nghĩ, về vấn đề cuộc sống khi trãi qua bao nhiêu khó khăn, sợ hãi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services-2">
                            <div class="icon"><span class="flaticon-pray"></span></div>
                            <div class="text">
                                <h4>Gắn kết</h4>
                                <span class="subheading">Nối Kết Thành Viên</span>
                                <p>Tham gia các hội trại, sinh hoạt giao lưu, với các sinh viên xứ lạ, đế mối liên kết gắn bền hơn.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services-2">
                            <div class="icon"><span class="flaticon-love"></span></div>
                            <div class="text">
                                <h4>Cầu nguyện</h4>
                                <span class="subheading">Niềm Tin và Yêu Thương</span>
                                <p>Trở nên con một của Thiên Chúa, khi đọc kinh cầu nguyện và siêng năng đi lễ vào ngày Chúa Nhật</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="services-2 services-block">
                    <div class="text">
                        <h4>Nơi Tạo Tiếng Cười Và Tạo Hạnh Phúc Đến Cho Mọi người.</h4>
                        <p>Bạn có thể đến với nhóm SVXB bất cứ lúc nào, ở đâu. Vì chúng tôi luôn là người giúp bạn thư giản sau những buổi học, thách thứ
                            bản thân mình trong cuộc sống.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 d-flex">
                <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(public/frontend/images/about-3.jpg);">
                </div>
            </div>
            <div class="col-md-6 pl-md-5 py-md-5">
                <div class="heading-section pt-md-5 mb-4">
                    <span class="subheading">Sinh Viên Xứ Bình</span>
                    <h2 class="mb-5">Kết nối, phát triển và phục vụ cùng chúng tôi</h2>
                    <p>Gửi gắm tình yêu thương đến mọi người, đồng hành với chúng tôi với mọi thử thách
                        luôn luôn sẵn sàng giúp đỡ những đồng quê, xa người vượt khó những hiểm trở trong cuộc sống hằng ngày
                    </p>
                    <p>Ta cảm thấy hạnh phúc hơn, khi giúp được hàng triệu nụ cười trên những cánh đồng, miền núi, luôn gặp thiên tai...</p>
                    <p><a href="#" class="btn btn-primary">Learn More</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-counter bg-primary" id="section-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-5 mb-md-0 text-center text-md-left">
                <h2 class="font-weight-bold" style="color: #fff; font-size: 22px; text-transform: uppercase;">Hiện trạng thực tiễn của nhóm</h2>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="1005000">0</strong>
                            </div>
                            <div class="text">
                                <span>Tổng Thành viên</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="65000">0</strong>
                            </div>
                            <div class="text">
                                <span>Cựu thành viên</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="20">0</strong>
                            </div>
                            <div class="text">
                                <span>Thành viên hiện tại</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="50">0</strong>
                            </div>
                            <div class="text">
                                <span>Donations</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Sinh Viên Xứ Bình</span>
                <h2>Cựu trưởng nhóm SVXB</h2>
            </div>
        </div>
        <div class="row no-gutters d-flex sermon-wrap ftco-animate bg-light">
            <div class="col-md-6 d-flex align-items-stretch js-fullheight ftco-animate">
                <a href="#" class="img" style="background-image: url(public/frontend/images/sermon-1.jpg);"></a>
            </div>
            <div class="col-md-6 py-4 py-md-5 ftco-animate d-flex align-items-center">
                <div class="text p-md-5">
                    <h2 class="mb-4"><a href="sermon.html">God Wants To Do A New Thing In Your Life</a></h2>
                    <div class="meta">
                        <p>
                            <span>Speaker: <a href="#" class="ptr">Dr. Rolando Henderson</a></span>
                            <span>Categories: <a href="#">God</a>, <a href="#">Pray</a>, <a href="#">Faith</a></span>
                            <span><a href="#">On Sunday 13 Jan, 2019</a></span>
                        </p>
                    </div>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <p class="mt-4 btn-customize">
                        <a href="https://vimeo.com/45830194" class="btn btn-primary px-4 py-3 mr-md-2 popup-vimeo"><span class="fa fa-play"></span> Watch Sermons</a> <a href="#" class="btn btn-primary btn-outline-primary px-4 py-3 ml-lg-2"><span class="fa fa-download"></span> Download Sermons</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="row no-gutters d-flex sermon-wrap ftco-animate bg-light">
            <div class="col-md-6 d-flex align-items-stretch js-fullheight ftco-animate order-md-last">
                <a href="#" class="img" style="background-image: url(public/frontend/images/sermon-2.jpg);"></a>
            </div>
            <div class="col-md-6 py-4 py-md-5 ftco-animate d-flex align-items-center">
                <div class="text p-md-5">
                    <h2 class="mb-4"><a href="sermon.html">God Wants To Do A New Thing In Your Life</a></h2>
                    <div class="meta">
                        <p>
                            <span>Speaker: <a href="#" class="ptr">Dr. Rolando Henderson</a></span>
                            <span>Categories: <a href="#">God</a>, <a href="#">Pray</a>, <a href="#">Faith</a></span>
                            <span><a href="#">On Sunday 13 Jan, 2019</a></span>
                        </p>
                    </div>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <p class="mt-4 btn-customize">
                        <a href="https://vimeo.com/45830194" class="btn btn-primary px-4 py-3 mr-md-2 popup-vimeo"><span class="fa fa-play"></span> Watch Sermons</a> <a href="#" class="btn btn-primary btn-outline-primary px-4 py-3 ml-lg-2"><span class="fa fa-download"></span> Download Sermons</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="row no-gutters d-flex sermon-wrap ftco-animate bg-light">
            <div class="col-md-6 d-flex align-items-stretch js-fullheight ftco-animate">
                <a href="#" class="img" style="background-image: url(public/frontend/images/sermon-3.jpg);"></a>
            </div>
            <div class="col-md-6 py-4 py-md-5 ftco-animate d-flex align-items-center">
                <div class="text p-md-5">
                    <h2 class="mb-4"><a href="sermon.html">God Wants To Do A New Thing In Your Life</a></h2>
                    <div class="meta">
                        <p>
                            <span>Speaker: <a href="#" class="ptr">Dr. Rolando Henderson</a></span>
                            <span>Categories: <a href="#">God</a>, <a href="#">Pray</a>, <a href="#">Faith</a></span>
                            <span><a href="#">On Sunday 13 Jan, 2019</a></span>
                        </p>
                    </div>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <p class="mt-4 btn-customize">
                        <a href="https://vimeo.com/45830194" class="btn btn-primary px-4 py-3 mr-md-2 popup-vimeo"><span class="fa fa-play"></span> Watch Sermons</a> <a href="#" class="btn btn-primary btn-outline-primary px-4 py-3 ml-lg-2"><span class="fa fa-download"></span> Download Sermons</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
                <span class="subheading">Sinh Viên Xứ Bình</span>
                <h2>Ân Nhân</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap d-md-flex">
                            <div class="user-img" style="background-image: url(public/frontend/images/person_1.jpg)">
                            </div>
                            <div class="text pl-md-4">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-left"></i>
                                </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Michael Fox</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-md-flex">
                            <div class="user-img" style="background-image: url(public/frontend/images/person_2.jpg)">
                            </div>
                            <div class="text pl-md-4">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-left"></i>
                                </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Mike Shawn</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-md-flex">
                            <div class="user-img" style="background-image: url(public/frontend/images/person_3.jpg)">
                            </div>
                            <div class="text pl-md-4">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-left"></i>
                                </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Mark Smith</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-md-flex">
                            <div class="user-img" style="background-image: url(public/frontend/images/person_4.jpg)">
                            </div>
                            <div class="text pl-md-4">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-left"></i>
                                </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Kyle Meyer</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-md-flex">
                            <div class="user-img" style="background-image: url(public/frontend/images/person_1.jpg)">
                            </div>
                            <div class="text pl-md-4">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-left"></i>
                                </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">John Doe</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Sinh Viên Xứ Bình</span>
                <h2>Latest news from our blog</h2>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20" style="background-image: url('public/frontend/images/image_1.jpg');">
                    </a>
                    <div class="text p-4">
                        <div class="meta mb-2">
                            <div><a href="#">July 20, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Building Holy &amp; Healthy Lives God’s</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        <p><a href="#" class="btn btn-primary">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20" style="background-image: url('public/frontend/images/image_2.jpg');">
                    </a>
                    <div class="text p-4">
                        <div class="meta mb-2">
                            <div><a href="#">July 20, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Building Holy &amp; Healthy Lives God’s</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        <p><a href="#" class="btn btn-primary">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20" style="background-image: url('public/frontend/images/image_3.jpg');">
                    </a>
                    <div class="text p-4">
                        <div class="meta mb-2">
                            <div><a href="#">July 20, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Building Holy &amp; Healthy Lives God’s</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        <p><a href="#" class="btn btn-primary">Read more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Sinh Viên Xứ Bình</span>
                <h2>Latest Events</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 event-wrap d-md-flex ftco-animate">
                <div class="img"style="background-image: url(public/frontend/images/event-1.jpg);"></div>
                <div class="text p-4 px-md-5 d-flex align-items-center">
                    <div class="desc">
                        <h2 class="mb-4"><a href="sermons.html">Giving Hope to Our Spiritual Needs</a></h2>
                        <div class="meta">
                            <p>
                                <span><i class="fa fa-calendar mr-2"></i> Monday, 8:00 Am - Tuesday, 8:00 Pm</span>
                                <span><i class="fa fa-map-marker mr-2"></i> <a href="#">Salvation Church</a></span>
                                <span><i class="fa fa-building mr-2"></i> 203 Fake St. Mountain View, San Francisco, California, USA</span>
                            </p>
                        </div>
                        <p><a href="sermons.html" class="btn btn-primary">More Details</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 event-wrap d-md-flex ftco-animate">
                <div class="img"style="background-image: url(public/frontend/images/event-2.jpg);"></div>
                <div class="text p-4 px-md-5 d-flex align-items-center">
                    <div class="desc">
                        <h2 class="mb-4"><a href="sermons.html">Giving Hope to Our Spiritual Needs</a></h2>
                        <div class="meta">
                            <p>
                                <span><i class="fa fa-calendar mr-2"></i> Monday, 8:00 Am - Tuesday, 8:00 Pm</span>
                                <span><i class="fa fa-map-marker mr-2"></i> <a href="#">Salvation Church</a></span>
                                <span><i class="fa fa-building mr-2"></i> 203 Fake St. Mountain View, San Francisco, California, USA</span>
                            </p>
                        </div>
                        <p><a href="sermons.html" class="btn btn-primary">More Details</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 event-wrap d-md-flex ftco-animate">
                <div class="img"style="background-image: url(public/frontend/images/event-3.jpg);"></div>
                <div class="text p-4 px-md-5 d-flex align-items-center">
                    <div class="desc">
                        <h2 class="mb-4"><a href="sermons.html">Giving Hope to Our Spiritual Needs</a></h2>
                        <div class="meta">
                            <p>
                                <span><i class="fa fa-calendar mr-2"></i> Monday, 8:00 Am - Tuesday, 8:00 Pm</span>
                                <span><i class="fa fa-map-marker mr-2"></i> <a href="#">Salvation Church</a></span>
                                <span><i class="fa fa-building mr-2"></i> 203 Fake St. Mountain View, San Francisco, California, USA</span>
                            </p>
                        </div>
                        <p><a href="sermons.html" class="btn btn-primary">More Details</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container-fluid px-md-0">
        <div class="row no-gutters justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Sinh Viên Xứ Bình</span>
                <h2>Galleries</h2>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-md-3">
                <a href="public/frontend/images/gallery-1.jpg" class="image-popup img gallery ftco-animate" style="background-image: url(public/frontend/images/gallery-1.jpg);">
                    <span class="overlay"></span>
                </a>
            </div>
            <div class="col-md-3">
                <a href="public/frontend/images/gallery-2.jpg" class="image-popup img gallery ftco-animate" style="background-image: url(public/frontend/images/gallery-2.jpg);">
                    <span class="overlay"></span>
                </a>
            </div>
            <div class="col-md-3">
                <a href="public/frontend/images/gallery-3.jpg" class="image-popup img gallery ftco-animate" style="background-image: url(public/frontend/images/gallery-3.jpg);">
                    <span class="overlay"></span>
                </a>
            </div>
            <div class="col-md-3">
                <a href="public/frontend/images/gallery-4.jpg" class="image-popup img gallery ftco-animate" style="background-image: url(public/frontend/images/gallery-4.jpg);">
                    <span class="overlay"></span>
                </a>
            </div>
            <div class="col-md-6">
                <a href="public/frontend/images/gallery-5.jpg" class="image-popup img gallery ftco-animate" style="background-image: url(public/frontend/images/gallery-5.jpg);">
                    <span class="overlay"></span>
                </a>
            </div>
            <div class="col-md-3">
                <a href="public/frontend/images/gallery-6.jpg" class="image-popup img gallery ftco-animate" style="background-image: url(public/frontend/images/gallery-6.jpg);">
                    <span class="overlay"></span>
                </a>
            </div>
            <div class="col-md-3">
                <a href="public/frontend/images/gallery-7.jpg" class="image-popup img gallery ftco-animate" style="background-image: url(public/frontend/images/gallery-7.jpg);">
                    <span class="overlay"></span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection