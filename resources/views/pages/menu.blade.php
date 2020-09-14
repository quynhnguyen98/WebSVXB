<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <p class="mb-0 location">
                    <span class="fa fa-map-marker mr-2"></span> Giáo Xứ Vinh Trung, Thôn 3, Xã Bình Trung, Huyện Châu Đức, Tỉnh BR-VT.
                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">SVXB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{'trang-chu'==request()->path()?'active':''}}"><a href="{{URL::to('/trang-chu')}}" class="nav-link">Trang chủ</a></li>
                <li class="nav-item {{'thong-tin'==request()->path()?'active':''}}"><a href="{{URL::to('/thong-tin')}}" class="nav-link">thông tin</a></li>
                <li class="nav-item {{'dien-dan'==request()->path()?'active':''}}"><a href="{{URL::to('/dien-dan')}}" class="nav-link">Diễn đàn</a></li>
                <li class="nav-item {{'su-kien'==request()->path()?'active':''}}"><a href="{{URL::to('/su-kien')}}" class="nav-link">Sự kiện</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Liên hệ</a></li>
                <li class="nav-item cta"><a href="contact.html" class="nav-link">Donate</a></li>
            </ul>
        </div>
    </div>
</nav>
