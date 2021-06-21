@extends('layouts.master')

@section('title')
MelakaPay
@endsection

@section('content')
@include('header')

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>MelakaPay</h1>
            <h2>Your Bills At Your Fingertips</h2>
            <a href="https://play.google.com/store/apps/details?id=my.gov.melaka.pay&hl=en&gl=US" class="download-btn" target="_blank"><i class="bx bxl-play-store"></i> Google Play</a>
            <a href="#" class="download-btn"><i class="bx bxl-apple"></i> App Store</a>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="assets/img/hero2.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title">
          <h2>Checkout MelakaPay App Features</h2>
          <p>The Only App You'll Need</p>
        </div>

        <div class="row no-gutters">
          <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bi bi-wallet2"></i>
                  <h4>One Stop Payment Gateway</h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Quick Access</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bxs-user-account"></i>
                  <h4>Manage Users</h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-shield"></i>
                  <h4>Fully Secured</h4>
                  <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-bell"></i>
                  <h4>Daily Update</h4>
                  <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                  <i class="bi bi-cloud-check"></i>
                  <h4>IOS & Android Support</h4>
                  <p>
                    Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/screenshots/cukai taksiran_iphone12black_portrait.png" width="300" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End App Features Section -->

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/screenshots/kompaunparkir_iphone12black_portrait.png" width="300" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Control Everything From One Application</h3>
            <p class="fst-italic">
              Secure online payment method
            </p>
            <ul>
              <li style="text-align: justify;" ><i class="bi bi-check"></i>Pay your bills <b>anytime</b> and <b>anywhere</b>. Payment made <b>faster</b>, <b>easier</b> and <b>safer</b>. </li>
              <li><i class="bi bi-check"></i> We provide <b>payment services</b> from <b>bills</b>, <b>compound</b> and <b>loan repayments</b> to your local and govenment agencies. </li>
              <li><i class="bi bi-check"></i> <b>Simple</b> and <b>convenient</b>. Pay it all online. </li>
              <li><i class="bi bi-check"></i> <b>Review</b> and <b>keep track</b> of all your transactions.</li>
            </ul>
          </div>
        </div>
        
      </div>
    </section><!-- End Details Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Checkout Some Screenshots From Our App</p>
        </div>

      </div>

      <div class="container-fluid" data-aos="fade-up">
        <div class="gallery-slider swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><a href="assets/img/screenshots/frontpage.jpg" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/screenshots/frontpage.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/screenshots/frontpage.jpg" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/screenshots/feedback.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/screenshots/frontpage.jpg" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/screenshots/mbmb.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/screenshots/frontpage.jpg" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/screenshots/mpag.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/screenshots/frontpage.jpg" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/screenshots/login.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/screenshots/frontpage.jpg" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/screenshots/mphtj.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/screenshots/frontpage.jpg" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/screenshots/ptgnm.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/screenshots/frontpage.jpg" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/screenshots/tapem.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/screenshots/frontpage.jpg" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/screenshots/register.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/screenshots/frontpage.jpg" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/screenshots/kompaunparkir.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/screenshots/frontpage.jpg" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/screenshots/cukai taksiran.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Agencies Section ======= -->
    <section id="agencies" class="agencies">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Agencies</h2>
          <p>Check Our Participating Agencies</p>
        </div>

      </div>

      <div class="container-fluid" data-aos="fade-up">
        <div class="gallery-slider swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><a href="assets/img/gallery/melaka agencie.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/melaka agencie.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/mpbj.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/mpbj.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/mphtj.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/mphtj.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/pdtag.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/pdtag.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/pdtj.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/pdtj.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/samb.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/samb.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/zakatmelaka.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/img/gallery/zakatmelaka.png" class="img-fluid" alt=""></a></div>
          </div>
        </div>

      </div>
    </section><!-- End Agencies Section -->

@include('footer')
@endsection