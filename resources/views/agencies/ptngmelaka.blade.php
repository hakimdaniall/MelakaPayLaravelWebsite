@extends('layouts.master')

@section('title')
MelakaPay
@endsection

@section('content')
@include('header')


<main>
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


</main>
<section id="heroagencies" style="overflow: hidden" class="d-flex align-items-center">

<div class="container">
  <div class="row">
  <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-1 hero-img" data-aos="fade-up">
      <img src="assets/img/gallery/melaka agencie.png" class="img-fluid" alt="" width="400">
    </div>
    <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-2" data-aos="fade-up">
      <div>
        <h1>Pejabat Tanah Dan Galian Negeri Melaka</h1>
        <br>
        <h2>Land and Mines Director's Office Melaka was established in 1958, after the country gained independence. Conveniently located in the building Stadhuys building in Bandar Hilir Melaka. At that time, Land and Mines Director's Office Melaka known as Land and Mines Office Melaka and was merged with the Office of State Finance.</h2>
        <h2>In 1979, Land and Mines Office Melaka has moved from building Stadhyus to Seri Negeri, Jalan Hang Tuah and then on 15 September 2004, moved to a new building located at Wisma Negeri 1-2 Floor, Wisma Negeri, Jalan Wisma Negeri, Ayer Keroh, Melaka 75450.</h2>
        <a href="https://ptg.melaka.gov.my/1/index.php" class="download-btn" target="_blank"> PTG Melaka Official Portal</a>
      </div>
    </div>
    
  </div>
</div>

</section><!-- End Hero -->
    
@include('footer')
@endsection