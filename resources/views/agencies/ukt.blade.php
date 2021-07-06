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
      <img src="{{asset ('assets/img/gallery/unitkerajaantempatan.png')}}" class="img-fluid" alt="" width="400">
    </div>
    <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-2" data-aos="fade-up">
      <div>
        <h1>Unit Kerajaan Tempatan (UKT)</h1>
        <br>
        <h2 style="font-weight:bold">VISI<br><span style="font-weight: normal;"> KE ARAH ORGANISASI AWAM TERBILANG MENJELANG 2015 MEMACU KE ARAH PBT YANG DINAMIK, DAYA TAHAN, DAYA HUNI DAN MAMPAN.</span></h2>
        <h2 style="font-weight:bold">MISI<br><span style="font-weight: normal;">MEMACU KEGEMILANGAN ORGANISASI MELALUI TADBIR URUS KORPORAT DAN SISTEM PENYAMPAIAN YANG CEKAP DAN BERKESAN</span></h2>
        <h2>PIAGAM PELANGGAN UNIT KERAJAAN TEMPATAN</h2>
        <ul>
            <li>Memastikan dasar atau program Kerajaan Persekutuan / Negeri disampaikan kepada Pihak Berkuasa Tempatan dalam tempoh tujuh (7) hari.</li>
            <li>Memastikan pelaksanaan dasar atau program Kerajaan Persekutuan / Negeri oleh Pihak Berkuasa Tempatan dipantau sebulan sekali.</li>
            <li>Memastikan pembayaran kepada pihak kontraktor bagi tuntutan projek pembangunan Pihak Berkuasa Tempatan tidak melebihi 14 hari daripada tarikh maklumat lengkap diterima.</li>
            <li>Memastikan ulasan Permohonan Projek Pembangunan daripada Pihak Berkuasa Tempatan dikemukakan kepada kementerian sebelum 30 November setiap tahun.</li>
        </ul>
            <ul style="list-style: none;">
              <li><i class="bi bi-check"></i>Auctioneer License / Mempebaharui Lesen Pelelong</li>
            </ul>
            <a href="https://www.melaka.gov.my/my/kerajaan/sektor-pembangunan/unit-kerajaan-tempatan" class="download-btn" target="_blank"> Unit Kerajaan Tempatan (UKT) Official Portal</a>
      </div>
    </div>
    
  </div>
</div>

</section><!-- End Hero -->
    
</main>

@include('footer')
@endsection