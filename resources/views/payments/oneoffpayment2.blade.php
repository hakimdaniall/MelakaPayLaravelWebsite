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
                    <h6>The Agency Selected</h6>
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-left align-self-center">
                            <h6 style="font-weight:bold;">Agency</h6>
                        </div>
                        <div class="col-md-9 d-flex justify-content-left align-self-center">
                            <h6>Badan Kawal Selia Air</h6>
                        </div>                                  
                    </div>
                </div>
            </div>
                
            <hr>

            <div class="row payment">
                <div class="col-md-12">
                    <h6>Complete the form below.</h6>
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-left align-self-center">
                            <h6 style="font-weight:bold;">Agency</h6>
                        </div>
                        <div class="col-md-9 d-flex justify-content-left align-self-center">
                            <h6>Pembayaran Bil</h6>
                        </div>   
                       
                    </div>
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-left align-self-center">
                            <h6 style="font-weight:bold;">ROC Number</h6>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="" name="ROCNum" value="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row payment">
                <div class="col-md-12">
                    <h6>Terms and Condition</h6>
                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-center align-self-center">
                            <input type="checkbox">
                        </div>
                        <div class="col-md-10 d-flex justify-content-left align-self-center">
                            <h6>   I hereby have read and agree with the <a href="#">terms and conditions</a> specified</h6>
                        </div>   
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-lg-4 d-flex justify-content-center align-self-center" data-aos="fade-right">
                <a href="#" class="back-btn">Back</a>
                <a href="#" class="pay-btn">Continue</a>
            </div>

          </div>
            

        </div>

      </div>
    </section>
    <!-- End Pricing Section -->

@include('footer')
@endsection