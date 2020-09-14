@extends('thongtin')
@section('layout')


<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('public/frontend/images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{URL::to('/trang-chu')}}">Trang Chủ <i
                class="fa fa-chevron-right"></i></a></span> <span>Thông Tin <i class="fa fa-chevron-right"></i></span>
        </p>
        <h1 class="mb-0 bread">Thông Tin</h1>
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
                <h4>Worhip</h4>
                <span class="subheading">What to expect</span>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                  the blind texts.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="services-2">
              <div class="icon"><span class="flaticon-pray"></span></div>
              <div class="text">
                <h4>Connect</h4>
                <span class="subheading">Contact Members</span>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                  the blind texts.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="services-2">
              <div class="icon"><span class="flaticon-love"></span></div>
              <div class="text">
                <h4>God's Love</h4>
                <span class="subheading">Beliefs and History</span>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                  the blind texts.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex">
        <div class="services-2 services-block">
          <div class="text">
            <h4>A Christian should live for the glory of God and the well-being of others.</h4>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts.</p>
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
        <div
          class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0"
          style="background-image:url(public/frontend/images/about-3.jpg);">
        </div>
      </div>
      <div class="col-md-6 pl-md-5 py-md-5">
        <div class="heading-section pt-md-5 mb-4">
          <span class="subheading">Welcome to Salvation Church</span>
          <h2 class="mb-5">Connect, Grow and Serve with Us</h2>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
            paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
            paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
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
        <h2 class="font-weight-bold" style="color: #fff; font-size: 22px; text-transform: uppercase;">We're on a mission
          to help all your problems</h2>
      </div>
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="1005000">0</strong>
              </div>
              <div class="text">
                <span>Members</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="65000">0</strong>
              </div>
              <div class="text">
                <span>Pastors</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="500000">0</strong>
              </div>
              <div class="text">
                <span>Donations</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="50">0</strong>
              </div>
              <div class="text">
                <span>Churches</span>
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
        <span class="subheading">Pastors</span>
        <h2>Our Pastors</h2>
      </div>
    </div>


    {{-- <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
          aria-selected="true">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
          aria-selected="false">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
          aria-selected="false">Contact</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><br>
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="staff">
              <div class="img" style="background-image: url(public/frontend/images/staff-1.jpg);"></div>
              <div class="text text-1">
                <h3>Alex Martin</h3>
                <span>Bible Pastor</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="staff">
              <div class="img" style="background-image: url(public/frontend/images/staff-2.jpg);"></div>
              <div class="text text-2">
                <h3>Cedrick Brown</h3>
                <span>Bible Pastor</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="staff">
              <div class="img" style="background-image: url(public/frontend/images/staff-3.jpg);"></div>
              <div class="text text-3">
                <h3>John Wick</h3>
                <span>Bible Pastor</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="staff">
              <div class="img" style="background-image: url(public/frontend/images/staff-4.jpg);"></div>
              <div class="text text-4">
                <h3>Max Love</h3>
                <span>Bible Pastor</span>
              </div>
            </div>
          </div>

        </div>


      </div>
      <div class="tab-pane fade" id="profile"><br>


        <div class="row">
          <div id="tree"></div>


        </div>






      </div>
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><br>...</div>
    </div> --}}


    
    









  </div>
  <div class="container">
    <h2>Dynamic Tabs</h2>
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
      <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
      <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
      <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
    </ul>
  
    <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
        <h3>HOME</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div id="menu1" class="tab-pane fade">
        <h3>Menu 1</h3>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div id="menu2" class="tab-pane fade">
        <h3>Menu 2</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      </div>
      <div id="menu3" class="tab-pane fade">
        <h3>Menu 3</h3>
        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section testimony-section">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center pb-5">
      <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
        <span class="subheading">Testimony</span>
        <h2>Transform Lives</h2>
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
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                  the blind texts.</p>
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
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                  the blind texts.</p>
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
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                  the blind texts.</p>
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
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                  the blind texts.</p>
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
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                  the blind texts.</p>
                <p class="name">John Doe</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pb">
  <div class="container-fluid px-md-0">
    <div class="row no-gutters justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Gallery</span>
        <h2>Galleries</h2>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-md-3">
        <a href="public/frontend/images/gallery-1.jpg" class="image-popup img gallery ftco-animate"
          style="background-image: url(public/frontend/images/gallery-1.jpg);">
          <span class="overlay"></span>
        </a>
      </div>
      <div class="col-md-3">
        <a href="public/frontend/images/gallery-2.jpg" class="image-popup img gallery ftco-animate"
          style="background-image: url(public/frontend/images/gallery-2.jpg);">
          <span class="overlay"></span>
        </a>
      </div>
      <div class="col-md-3">
        <a href="public/frontend/images/gallery-3.jpg" class="image-popup img gallery ftco-animate"
          style="background-image: url(public/frontend/images/gallery-3.jpg);">
          <span class="overlay"></span>
        </a>
      </div>
      <div class="col-md-3">
        <a href="public/frontend/images/gallery-4.jpg" class="image-popup img gallery ftco-animate"
          style="background-image: url(public/frontend/images/gallery-4.jpg);">
          <span class="overlay"></span>
        </a>
      </div>
      <div class="col-md-6">
        <a href="public/frontend/images/gallery-5.jpg" class="image-popup img gallery ftco-animate"
          style="background-image: url(public/frontend/images/gallery-5.jpg);">
          <span class="overlay"></span>
        </a>
      </div>
      <div class="col-md-3">
        <a href="public/frontend/images/gallery-6.jpg" class="image-popup img gallery ftco-animate"
          style="background-image: url(public/frontend/images/gallery-6.jpg);">
          <span class="overlay"></span>
        </a>
      </div>
      <div class="col-md-3">
        <a href="public/frontend/images/gallery-7.jpg" class="image-popup img gallery ftco-animate"
          style="background-image: url(public/frontend/images/gallery-7.jpg);">
          <span class="overlay"></span>
        </a>
      </div>
    </div>
  </div>
</section>
@endsection