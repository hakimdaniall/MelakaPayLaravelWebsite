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
      <img src="assets/img/gallery/mbmb.png" class="img-fluid" alt="" width="400">
    </div>
    <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-2" data-aos="fade-up">
      <div>
        <h1>Majlis Bandaraya Melaka Bersejarah</h1>
        <br>
        <h2>MBMB merupakan penggerak utama dalam menjadikan Melaka sebagai sebuah bandaraya yang dinamik, maju dan indah. Kawasan pentadbirannya maju serentak dengan pembangunan di keseluruhan negeri Melaka, dimana tumpuan ditekankan kepada sektor-sektor pertanian, perindustrian dan yang terkini perlancongan.</h2>
        <h2>Pembangunan infrastruktur begitu menonjol sekali, menandingi negeri yang paling maju di Malaysia. Keadaan ini mempercepatkan aliran masuk pelabur-pelabur untuk menanam modal lantas mewujudkan peluang perkerjaan kepada penduduk-penduduknya.</h2>
        <h2>Pada 15 April 2003, Majlis Perbandaran Melaka Bandaraya Bersejarah telah dinaiktaraf kepada Majlis Bandaraya Melaka Bersejarah (MBMB). Dengan pengiktirafan ini, MBMB akan mempertingkatkan lagi mutu perkhidmatan kepada masyarakat di Melaka khususnya dan para pelancong amnya. Kemajuan dan kemakmuran yang dicapai sungguh luar biasa.</h2>
        <ul style="list-style: none;">
              <li><i class="bi bi-check"></i> Assessment Rates / Cukai Taksiran </li>
              <li><i class="bi bi-check"></i> Compound / Kompaun</li>
              <li><i class="bi bi-check"></i> Caj warisan</li>
            </ul>
        <a href="https://www.mbmb.gov.my/" class="download-btn" target="_blank"> Majlis Bandaraya Melaka Bersejarah Official Portal</a>
      </div>
    </div>
    
  </div>
</div>

</section><!-- End Hero -->
    
</main>

@include('footer')
@endsection