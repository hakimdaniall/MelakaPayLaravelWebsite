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
      <img src="assets/img/gallery/bks.png" class="img-fluid" alt="" width="400">
    </div>
    <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-2" data-aos="fade-up">
      <div>
        <h1>Badan Kawal Selia Air (BKSA)</h1>
        <br>
        <h2>Menyediakan bekalan air mentah yang mencukupi dan berkualiti baik bagi memenuhi keperluan sejajar dengan pertambahan penduduk dan pembangunan sosioekonomi negeri. Melaksanakan fungsi sebagai perancang, pelaksana, penyelaras, pemudah cara, penyelidik dan penguat kuasa secara efektif, sistematik dan efisien dalam pembangunan dan pengurusan sumber air mentah.</h2>
            <ul style="list-style: none;">
              <li><i class="bi bi-check"></i>Pembelian Borang</li>
              <li><i class="bi bi-check"></i>Bayaran Bil Bulanan</li>
              <li><i class="bi bi-check"></i>Pembaharuan Lesen</li>
            </ul>
            <a href="https://www.melaka.gov.my/ms/jkmm/bahagian-unit/timbalan-setiausaha-kerajaan-pembangunan-1/badan-kawal-selia-air-bksa" class="download-btn" target="_blank">Badan Kawal Selia Air Official Portal</a>
      </div>
    </div>
    
  </div>
</div>

</section><!-- End Hero -->
    
</main>

@include('footer')
@endsection