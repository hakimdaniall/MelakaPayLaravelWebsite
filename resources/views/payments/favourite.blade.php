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

 <!-- ======= Pricing Section ======= -->
 <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>One Off Payment</h2>
            <p>Good afternoon Hakim Danial Mu'adzzam Shah</p>
            <p>Your last login was on Monday, 12 Jul 2021 at 14:12:58</p>
        </div>

        <div class="row no-gutters d-flex justify-content-center">

          <div class="col-lg-3 box align-self-center" data-aos="fade-right">
            <a href="#">Survey Question for eBayar users</a>
            <a href="/profile" class="get-started-btn">My Profile</a>
            <a href="#" class="get-started-btn">Log Out</a>
          </div>

          <div class="col-lg-8 box " data-aos="fade-left">
            <div class="row payment">
                <div class="col-md-12">
                    <h6>Please select to add an account into your favourite payee list.</h6>
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-left align-self-center">
                            <h6 style="font-weight:bold;">Agency</h6>
                        </div>
                        <div class="col-md-9">
                        <div class="form-group">
                            <select class="form-control" name="agency">
                            <option class="hidden" selected disabled>Select Agency</option>
                                <option value="">Badan Kawal Selia Air  </option>
                                <option value="">Majlis Agama Islam Melaka </option>
                                <option value="">Majlis Bandaraya Melaka Bersejarah</option>
                                <option value="">Majlis Perbandaran Alor Gajah </option>
                                <option value="">Majlis Perbandaran Jasin </option>
                                <option value="">Majlis Perbandaran Hang Tuah Jaya </option>
                                <option value="">Pejabat Tanah Negeri Melaka</option>
                                <option value="">Syarikat Air Melaka Berhad </option>
                                <option value="">Tabung Amanah Pendidikan Negeri Melaka</option>
                                <option value="">Unit Kerajaan Tempatan</option>
                                <option value="">Zakat Melaka</option>
                            </select>
                         </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-left align-self-center">
                            <h6 style="font-weight:bold;">Bill Payment Type</h6>
                        </div>
                        <div class="col-md-9">
                        <div class="form-group">
                            <select class="form-control" name="agency">
                                <option class="hidden" selected disabled>Bill Payment Type</option>
                                <option value="kedah">Pembayaran Borang  </option>
                                <option value="perlis">Pembayaran Bil</option>
                            </select>
                         </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
            

        </div>

      </div>
    </section>
    <!-- End Pricing Section -->

@include('footer')
@endsection