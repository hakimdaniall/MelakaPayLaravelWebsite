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
      <img src="assets/img/gallery/mpaj.jpg" class="img-fluid" alt="" width="400">
    </div>
    <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-2" data-aos="fade-up">
      <div>
        <h1>Majlis Perbandaran Alor Gajah</h1>
        <br>
        <h2>Majlis Perbandaran Alor Gajah is a local authority (PBT).A people oriented service that act as a prime mover in the Alor Gajah district for a progressive and beautiful district.</h2>
        <h2>The development of the administration area has been developed in conjunction with the overall development of the State of Melaka with the main emphasis from industrial sectors, tourism and agriculture. The existence of infrastructure also expedite inflow of investors, both local and foreign investors capital to grow and create employment opportunities to the local community</h2>
        <ul style="list-style: none;">
              <li><i class="bi bi-check"></i> Assessment Rates / Cukai Taksiran </li>
              <li><i class="bi bi-check"></i> Compound / Kompaun</li>
              <li><i class="bi bi-check"></i> Caj warisan</li>
            </ul>
        <a href="https://www.mpag.gov.my/" class="download-btn" target="_blank"> Majlis Perbandaran Alor Gajah Official Portal</a>
      </div>
    </div>
    
  </div>
</div>

</section><!-- End Hero -->
    
</main>

@include('footer')
@endsection