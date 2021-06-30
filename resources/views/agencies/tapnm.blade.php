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
      <img src="assets/img/gallery/melaka agencie.png" class="img-fluid" alt="" width="400">
    </div>
    <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-2" data-aos="fade-up">
      <div>
        <h1>Tabung Amanah Pendidikan Negeri Melaka</h1>
        <br>
        <h2>The Melaka State Finance and Treasury Department manages matters concerning The Melaka State Finances and preparation of The Annual State Account. The department is headed by Y.B. State Financial Officer who is responsible for the policy structure and the state Budgetary Strategy and to find ways to increase revenue as required by the annual Melaka State Budget.TAPEM function is to manage and administer relief fund or a loan that are Money Loan Higher Education (PWPT), Help Institutions Of Higher Learning & Scholarships Secondary School Students (BK/BI).  </h2>
        
            <ul style="list-style: none;">
              <li><i class="bi bi-check"></i> Bill Education Loans / Bil Pinjaman Pendidikan
 </li>
            </ul>
        <a href="https://tapem.melaka.gov.my/main/index.php" class="download-btn" target="_blank">Tabung Amanah Pendidikan Negeri Melaka Official Portal</a>
      </div>
    </div>
    
  </div>
</div>

</section><!-- End Hero -->
    
</main>

@include('footer')
@endsection