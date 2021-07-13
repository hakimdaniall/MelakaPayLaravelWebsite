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
            <p>Good afternoon Hakim Danial Mu'adzzam Shah</p>        
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
                    <h6>List of Favourite Payee</h6>
                    <p>Below are the list of bills that you have registered. You may view the details of payee or delete the bill account.</p>
                    
                    <hr>

                    <div class="table-wrapper d-flex justify-content-center">
                      <table class="fl-table">
                          <thead>
                          <tr>
                              <th>Index</th>
                              <th>Account Number</th>
                              <th>Account Holder Number</th>
                              <th>Bill Name</th>
                              <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                              <td>Content 1</td>
                              <td>Content 1</td>
                              <td>Content 1</td>
                              <td>Content 1</td>
                              <td>Content 1</td>
                              
                          </tr>
                          <tr>
                              <td>Content 2</td>
                              <td>Content 2</td>
                              <td>Content 2</td>
                              <td>Content 2</td>
                              <td>Content 2</td>
                              
                          </tr>                       
                          <tbody>
                      </table>
                  </div>
                  <div class="col-md-12 d-flex justify-content-end">
                    <a href="#" class="link-btn">Add New Favourite Agency</a>
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