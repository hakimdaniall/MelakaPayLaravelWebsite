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
          <h2>User: Dashboard</h2>
            <p>Good afternoon Hakim Danial Mu'adzzam Shah</p>        </div>

        <div class="row no-gutters d-flex justify-content-center">

          <div class="col-lg-3 box align-self-center" data-aos="fade-right">
            <a href="#">Survey Question for eBayar users</a>
            <a href="/profile" class="get-started-btn">My Profile</a>
            <a href="#" class="get-started-btn">Log Out</a>
          </div>

          <div class="col-lg-8 box" data-aos="fade-left">
            <div class="row">
                <div class="col-md-4">
                    <h6>Bill Payment</h6>
                    <p>Make one off payment or to any of your favourite payee account.</p>
                    <a href="#" class="link-btn">One Off Payment</a>
                    <a href="#" class="link-btn">Payment to Favourite Payee</a>
                </div>
                <div class="col-md-4">
                    <h6>Manage Favourite Payee</h6>
                    <p>Register and manage your favourite payee account.</p>
                    <a href="#" class="link-btn">Add New Favourite Payee</a>
                    <a href="#" class="link-btn">View / Delete Favourite Payee</a>
                </div>
                <div class="col-md-4">
                    <h6>My Transaction</h6>
                    <p>View past payment/transaction history for the past 1 year.</p>
                    <a href="#" class="link-btn">Transaction History</a>
                    <a href="#" class="link-btn">Today's Transaction</a>
                </div>
                

            </div>
          </div>
            

        </div>

      </div>
    </section><!-- End Pricing Section -->

@include('footer')
@endsection