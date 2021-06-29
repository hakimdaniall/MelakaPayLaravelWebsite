@extends('layouts.master')

@section('title')
MelakaPay
@endsection

@section('content')
@include('header')

  
<main id="main">
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


<section id="heroagencies" style="overflow: hidden" class="heroagencies d-flex align-items-center">

<div class="container">
  <div class="row content">
  <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-1 hero-img" data-aos="fade-up">
      <img src="assets/img/gallery/mphtj.png" class="img-fluid" alt="" width="400">
    </div>
    <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-2" data-aos="fade-up">
      <div>
        <h1>Majlis Perbandaran Hang Tuah Jaya</h1>
        <br>
        <h2>Hang Tuah Jaya is a satellite city of Malacca which is also the administrative center of Malacca starting in June 2006. The city is also called as 'Putrajaya' in Malacca. The administrative centre of Hang Tuah Jaya is located about 15 km from the city centre. The area is located below the Hang Tuah Jaya Municipal Council. Seri Negeri is also located here, near the intersection of Seri Negeri-MITC.</h2>
        <ul style="list-style: none;">
              <li><i class="bi bi-check"></i> Assessment Rates / Cukai Taksiran </li>
              <li><i class="bi bi-check"></i> Compound / Kompaun</li>
              <li><i class="bi bi-check"></i> Caj warisan</li>
            </ul>
        <a href="https://www.mphtj.gov.my/" class="download-btn" target="_blank"> Majlis Perbandaran Hang Tuah Jaya Official Portal</a>
      </div>
    </div>
    
  </div>
</div>

</section><!-- End Hero -->
    
</main>

@include('footer')
@endsection