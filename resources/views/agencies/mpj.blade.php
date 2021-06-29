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
      <img src="assets/img/gallery/mpbj.png" class="img-fluid" alt="" width="400">
    </div>
    <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-2" data-aos="fade-up">
      <div>
        <h1>Majlis Perbandaran Jasin</h1>
        <br>
        <h2>With the coming into force of laws of Malaysia local Government Act 1976, as well as local authorities in the country, the rural District Council Jasin (Jasin Rural District Council) which was established in 1959 was given recognition as Jasin District Council on 1 July 1978. On 1 January 2007 was declared as the JASIN DISTRICT COUNCIL</h2>
        <ul style="list-style: none;">
              <li><i class="bi bi-check"></i> Assessment Rates / Cukai Taksiran </li>
              <li><i class="bi bi-check"></i> Compound / Kompaun</li>
              <li><i class="bi bi-check"></i> Caj warisan</li>
            </ul>
        <a href="https://www.mpjasin.gov.my/" class="download-btn" target="_blank"> Majlis Perbandaran Jasin Official Portal</a>
      </div>
    </div>
    
  </div>
</div>

</section><!-- End Hero -->
    
</main>

@include('footer')
@endsection