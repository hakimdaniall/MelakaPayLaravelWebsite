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
      <img src="{{asset ('assets/img/gallery/pdtag.png')}}" class="img-fluid" alt="" width="400">
    </div>
    <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-2" data-aos="fade-up">
      <div>
        <h1>Pejabat Daerah Dan Tanah Alor Gajah</h1>
        <br>
        <h2>Land and District Office of Alor Gajah is located in Alor Gajah City on an area of 0.7689 hectares, in the Legislative Assembly, and Parliament Rembia Alor Gajah. District of Alor Gajah area is an area of 660 square kilometres and there are 31 District in the administration. Alor Gajah district consists of two parliamentary which is Parliament of Masjid Tanah and Parliament of Alor Gajah.</h2>
        <h2>There are five State Legislative Assembly (DUN) in Parliament Masjid Tanah which is Kuala Linggi, Lendu, Tanjung Bidara, Ayer Limau and Taboh Naning. While in Alor Gajah there are 4 parliamentary constituency which is Rembia, Gadek, Durian Tunggal and Machap.</h2>
        <ul style="list-style: none;">
              <li><i class="bi bi-check"></i> Land Tax </li>
              <li><i class="bi bi-check"></i> Online Land Search</li>
              <li><i class="bi bi-check"></i> Quit Rent Strata Title</li>
            </ul>
        <a href="https://www.pdtag.gov.my/" class="download-btn" target="_blank"> Pejabat Daerah & Tanah Alor Gajah Official Portal</a>
      </div>
    </div>
    
  </div>
</div>

</section><!-- End Hero -->
    
</main>

@include('footer')
@endsection