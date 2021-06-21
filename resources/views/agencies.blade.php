@extends('layouts.master')

@section('title')
MelakaPay
@endsection

@section('content')
@include('header')

<main>
<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Inner Page</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Inner Page</li>
          </ol>
        </div>

      </div>
    </section>

     <!-- ======= Portfolio Section ======= -->
     <section id="portfolio" class="portfolio">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h2>Agencies</h2>
    <p>Participating Agencies</p>
  </header>

  <div class="row" data-aos="fade-up" data-aos-delay="100">
    <div class="col-lg-12 d-flex justify-content-center">
      <ul id="portfolio-flters">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-la">Local Authorities</li>
        <li data-filter=".filter-sgd">State Government Department/Federal Agencies/State Company</li>
        <li data-filter=".filter-lmo">Land and Mines Office</li>
        <li data-filter=".filter-edu">Education</li>
      </ul>
    </div>
  </div>

  <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">


    <div class="col-lg-4 col-md-6 portfolio-item filter-edu">
      <div class="portfolio-wrap">
        <img src="assets/img/details-1.png" class="img-fluid" alt="">
        <div class="portfolio-info">
         <div class="portfolio-links">
            <a href="/feesdetail" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 portfolio-item filter-la">
      <div class="portfolio-wrap">
        <img src="assets/img/details-1.png" class="img-fluid" alt="">
        <div class="portfolio-info">
         <div class="portfolio-links">
            <a href="#" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 portfolio-item filter-la">
      <div class="portfolio-wrap">
        <img src="assets/img/details-1.png" class="img-fluid" alt="">
        <div class="portfolio-info">
         <div class="portfolio-links">
            <a href="#" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 portfolio-item filter-upsr">
      <div class="portfolio-wrap">
        <img src="assets/img/details-1.png" class="img-fluid" alt="">
        <div class="portfolio-info">
         <div class="portfolio-links">
            <a href="#" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 portfolio-item filter-upsr">
      <div class="portfolio-wrap">
        <img src="assets/img/details-1.png" class="img-fluid" alt="">
        <div class="portfolio-info">
         <div class="portfolio-links">
            <a href="#" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 portfolio-item filter-upsr">
      <div class="portfolio-wrap">
        <img src="assets/img/details-1.png" class="img-fluid" alt="">
        <div class="portfolio-info">
         <div class="portfolio-links">
            <a href="#" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 portfolio-item filter-pt3">
      <div class="portfolio-wrap">
        <img src="assets/img/details-1.png" class="img-fluid" alt="">
        <div class="portfolio-info">
         <div class="portfolio-links">
            <a href="#" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 portfolio-item filter-pt3">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/8.png" class="img-fluid" alt="">
        <div class="portfolio-info">
         <div class="portfolio-links">
            <a href="#" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>                
    <div class="col-lg-4 col-md-6 portfolio-item filter-pt3">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/9.png" class="img-fluid" alt="">
        <div class="portfolio-info">
         <div class="portfolio-links">
            <a href="#" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>                
    <div class="col-lg-4 col-md-6 portfolio-item filter-pt3">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/10.png" class="img-fluid" alt="">
        <div class="portfolio-info">
         <div class="portfolio-links">
            <a href="#" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>                
    <div class="col-lg-4 col-md-6 portfolio-item filter-pt3">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/11.png" class="img-fluid" alt="">
        <div class="portfolio-info">
         <div class="portfolio-links">
            <a href="#" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>                
    <div class="col-lg-4 col-md-6 portfolio-item filter-pt3">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/12.png" class="img-fluid" alt="">
        <div class="portfolio-info">
         <div class="portfolio-links">
            <a href="#" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>                
    <div class="col-lg-4 col-md-6 portfolio-item filter-spm">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/13.png" class="img-fluid" alt="">
        <div class="portfolio-info">
         <div class="portfolio-links">
            <a href="#" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>                
    <div class="col-lg-4 col-md-6 portfolio-item filter-spm">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/14.png" class="img-fluid" alt="">
        <div class="portfolio-info">
         <div class="portfolio-links">
            <a href="#" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>                
    <div class="col-lg-4 col-md-6 portfolio-item filter-spm">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/15.png" class="img-fluid" alt="">
        <div class="portfolio-info">
         <div class="portfolio-links">
            <a href="#" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>                
    <div class="col-lg-4 col-md-6 portfolio-item filter-spm">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/16.png" class="img-fluid" alt="">
        <div class="portfolio-info">
         <div class="portfolio-links">
            <a href="#" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>    
  </div>
</div>
</section>
<!-- End Portfolio Section -->

    </main>
    
@include('footer')
@endsection