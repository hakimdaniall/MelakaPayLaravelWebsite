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
      <img src="assets/img/gallery/pdtj.png" class="img-fluid" alt="" width="400">
    </div>
    <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-2" data-aos="fade-up">
      <div>
        <h1>Pejabat Daerah Dan Tanah Jasin</h1>
        <br>
        <h2>Land and District Office of Jasin is located in Jasin City covers an area of 676.07 square miles (67.854 acres) and there are 20 district in administration. Jasin has only one parliament which is parliament Jasin. APart from that, Jasin has 60 people of JKKK.</h2>
        <ul style="list-style: none;">
              <li><i class="bi bi-check"></i> Land Tax </li>
              <li><i class="bi bi-check"></i> Online Land Search</li>
              <li><i class="bi bi-check"></i> Quit Rent Strata Title</li>
            </ul>
        <a href="https://www.pdtjasin.gov.my/2/index.php" class="download-btn" target="_blank"> Pejabat Daerah & Tanah Jasin Official Portal</a>
      </div>
    </div>
    
  </div>
</div>

</section><!-- End Hero -->
    
</main>

@include('footer')
@endsection