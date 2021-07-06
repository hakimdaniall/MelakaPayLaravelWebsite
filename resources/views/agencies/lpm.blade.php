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
      <img src="{{asset ('assets/img/gallery/lpm.jpg')}}" class="img-fluid" alt="" width="400">
    </div>
    <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-2" data-aos="fade-up">
      <div>
        <h1>Lembaga Perumahan Melaka</h1>
        <br>
        <h2>Melaka Housing Board (LPM) is a government agency established in Melaka through Melaka Enactment Housing Authority (ELPM) 2002 that gazette on 17 December 2002. LPM is the second state agency that establish the board after Selangor State.</h2>
            <ul style="list-style: none;">
              <li><i class="bi bi-check"></i>Payment Fee for Melaka Housing Application (Low Cost House, Affordable House) / Caj Bayaran Bagi Permohonan Rumah di Negeri Melaka (Rumah Kos Rendah, Rumah Mampu Milik)</li>
            </ul>
            <a href="https://lpnm.gov.my/" class="download-btn" target="_blank">Lembaga Perumahan Melaka Official Portal</a>
      </div>
    </div>
    
  </div>
</div>

</section><!-- End Hero -->
    
</main>

@include('footer')
@endsection