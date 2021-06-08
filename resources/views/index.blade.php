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
            <a href="#" class="download-btn"><i class="bx bxl-play-store"></i> Google Play</a>
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

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">

          <h2>Frequently Asked Questions</h2>
          <p>How can we help?</p>
        </div>

        <div class="accordion-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1">I already registered with E-BAYAR Melaka, do i have to register again when using this apps? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                <p>
                  You dont have to register again and may use your existing ID and Password.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">Why do I need to fill up all the details? Is there any charges applied for registration? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                <p>
                  We only need basic information about yourself before you can start using the service from
                   E-BAYAR KERAJAAN NEGERI MELAKA portal. You will need to provide the correct information 
                   such as your Full Name, ID number (MyKad / Passport / KadKuasa), Mobile number and Email
                    address upon registration. This is important should we need to contact you in the future
                     for reference purposes.                
                </p>
                <p>
                  And no, there are no charges applied for you to register with E-BAYAR KERAJAAN NEGERI MELAKA. It’s FREE!
                </p>
                <p>
                  You may want to check our Privacy Policy statement to view our policy on how we keep your information within 
                  E-BAYAR KERAJAAN NEGERI MELAKA portal.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">Is my payment made through MEPS FPX safe? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                <p>
                  FPX leverages on the Internet banking services of participating banks and provides fast, 
                  secure, reliable, real-time online payment processing. FPX provides a complete end-to-end
                   business transaction, resourceful payment records, simplified reconciliation and reduced
                    risks as fund movements are between established financial institutions. Rest assured, 
                    FPX uses authentication and certification to ensure transaction is secured.                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed">Are there any charges for payments via FPX? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                <p>
                  Bank charge of RM 0.50 will be borne by account holder for payment through individual account & RM 1 for company account.
                </p>
              </div>
            </li>

            

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Got a question? Send us an email.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-8 info">
                <i class="bx bx-map"></i>
                <h4>Address</h4>
                <p style="text-align: justify;">Bahagian Teknologi Maklumat Dan Komunikasi Aras 1,
                  Blok Temenggong, Seri Negeri, Hang Tuah Jaya,
                  75450 Ayer Keroh, Melaka, Malaysia
                </p>
              </div>
              <div class="col-lg-4 info">
                <i class="bx bx-phone"></i>
                <h4>Call Us</h4>
                <p>+606-3333333 ext 7656/7749</p>
              </div>
              <div class="col-lg-6 info">
                <i class="bx bx-envelope"></i>
                <h4>Email Us</h4>
                <p>melakapay_admin@melaka.gov.my</p>
              </div>
              <div class="col-lg-6 info">
                <i class="bx bx-time-five"></i>
                <h4>Working Hours</h4>
                <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
              <div class="form-group">
                <input placeholder="Your Name" type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="form-group mt-3">
                <input placeholder="Your Email" type="email" class="form-control" name="email" id="email" required>
              </div>
              <div class="form-group mt-3">
                <input placeholder="Subject" type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea placeholder="Message" class="form-control" name="message" rows="5" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

 

@include('footer')
@endsection