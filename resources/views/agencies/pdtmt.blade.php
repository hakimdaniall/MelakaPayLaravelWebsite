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
      <img src="assets/img/gallery/pdtmt.jpg" class="img-fluid" alt="" width="400">
    </div>
    <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-2" data-aos="fade-up">
      <div>
        <h1>Pejabat Daerah Dan Tanah Melaka Tengah</h1>
        <br>
        <h2>Land and District Office of Melaka Tengah is one department in Malacca responsible on land management matters other than Land and District Office of Jasin and Land and District Office of Alor Gajah. The district covering an area of 29,900 hectares (299 km.persegi) is the main focus of management in developing these areas as well as protect the interests of the landowners and the state government.</h2>
        <h2>Efficient management and friendly people are the key of District and Land Office Melaka Tengah in providing services to people who deal in this office.</h2>
        <h2>Apart from that, the main focus is given to the revenue that will generate economic development in general and in particular countries. Therefore, Land and District Office of Melaka Tengah is responsible for ensuring the orderly and systematic land area can be adjusted so that the progress in meeting the goals and mission of the state government in achieving Melaka Maju 2010.</h2>

        <h3>e-Bayar Services Offered:</h3>
        <ul style="list-style: none;">
              <li><i class="bi bi-check"></i> Land Tax </li>
              <li><i class="bi bi-check"></i> Online Land Search</li>
              <li><i class="bi bi-check"></i> Quit Rent Strata Title</li>
            </ul>
        <a href="https://www.pdtmt.gov.my/1/index.php" class="download-btn" target="_blank"> Pejabat Daerah & Tanah Alor Gajah Official Portal</a>
      </div>
    </div>
    
  </div>
</div>

</section><!-- End Hero -->
    
</main>

@include('footer')
@endsection