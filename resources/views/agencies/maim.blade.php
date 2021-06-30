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
      <img src="assets/img/gallery/maim.jpg" class="img-fluid" alt="" width="400">
    </div>
    <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-2" data-aos="fade-up">
      <div>
        <h1>Majlis Agama Islam Melaka</h1>
        <br>
        <h2>Majlis Agama Islam Melaka was founded on September 28, 1960. It is intended to manage the affairs of the Islamic State of Malacca in addition to assist and advise His Majesty the Yang di-Pertuan Agong. Establishment of Majlis Agama Islam Melaka strengthened by the enactment of the establishment of: Administration of the Religion of Islam (State of Malacca) 2002 Section 4 subsection 1. There shall be a body known as the "Majlis Agama Islam Melaka" to assist and advise the Yang di-Pertuan Agong in matters relating to Islam.</h2>
            <ul style="list-style: none;">
              <li><i class="bi bi-check"></i>Pembayaran Fidyah Puas</li>
              <li><i class="bi bi-check"></i>Pembayaran Wakaf Tunai (Pendidikan, Pembangunan, Masjid, Surau & Madrasah dan Perubatan)</li>
            </ul>
            <a href="https://maim.gov.my/" class="download-btn" target="_blank">Majlis Agama Islam Melaka Official Portal</a>
      </div>
    </div>
    
  </div>
</div>

</section><!-- End Hero -->
    
</main>

@include('footer')
@endsection