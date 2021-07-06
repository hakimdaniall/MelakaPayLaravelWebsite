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
      <img src="{{asset ('assets/img/gallery/zakatmelaka.png')}}" class="img-fluid" alt="" width="400">
    </div>
    <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-2" data-aos="fade-up">
      <div>
        <h1>Zakat Melaka</h1>
        <br>
        <h2>Zakat Melaka established in 1996, before that all tithe management are handled and run by Kaunter Zakat Berkomputer. Islamic Religious Council Malacca (MAIM) through Pusat Zakat Melaka (PZM) was consigned to carry out tithe management professionally to collect and distribute zakat by effective and systematic and suitable with objective to make zakat as a catalyst Muslim world economy in State Malacca. Before PZM establishment, all related matters with zakat run by Lembaga Wakaf, Zakat and Baitulmal (MAIM) which the job scope are more focused to manage and distribute based on Enakmen Pentadbiran Hukum Syarak (Negeri Melaka) 1959.</h2>
            <ul style="list-style: none;">
              <li><i class="bi bi-check"></i>Payment of Zakat / Bayaran Zakat.</li>
            </ul>
            <a href="https://www.izakat.com/ui.php" class="download-btn" target="_blank"> Zakat Melaka Official Portal</a>
      </div>
    </div>
    
  </div>
</div>

</section><!-- End Hero -->
    
</main>

@include('footer')
@endsection