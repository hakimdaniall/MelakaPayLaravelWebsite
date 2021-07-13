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
                    <h6>Select related agency below to view transaction.</h6>
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-left align-self-center">
                            <h6>Agency</h6>
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
                    <hr>

                    <div class="table-wrapper d-flex justify-content-center">
                      <table class="fl-table">
                          <thead>
                          <tr>
                              <th>No.</th>
                              <th>TxnID</th>
                              <th>Account Number</th>
                              <th>Account Holder Number</th>
                              <th>Amount (RM)</th>
                              <th>Payment Date & Time</th>
                              <th>Status</th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                              <td>Content 1</td>
                              <td>Content 1</td>
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
                              <td>Content 2</td>
                              <td>Content 2</td>
                          </tr>
                          <tr>
                              <td>Content 3</td>
                              <td>Content 3</td>
                              <td>Content 3</td>
                              <td>Content 3</td>
                              <td>Content 3</td>
                              <td>Content 3</td>
                              <td>Content 3</td>
                          </tr>
                          <tr>
                              <td>Content 4</td>
                              <td>Content 4</td>
                              <td>Content 4</td>
                              <td>Content 4</td>
                              <td>Content 4</td>
                              <td>Content 4</td>
                              <td>Content 4</td>
                          </tr>
                          <tr>
                              <td>Content 5</td>
                              <td>Content 5</td>
                              <td>Content 5</td>
                              <td>Content 5</td>
                              <td>Content 5</td>
                              <td>Content 5</td>
                              <td>Content 5</td>
                          </tr>
                          <tr>
                              <td>Content 6</td>
                              <td>Content 6</td>
                              <td>Content 6</td>
                              <td>Content 6</td>
                              <td>Content 6</td>
                              <td>Content 6</td>
                              <td>Content 6</td>
                          </tr>
                          <tr>
                              <td>Content 7</td>
                              <td>Content 7</td>
                              <td>Content 7</td>
                              <td>Content 7</td>
                              <td>Content 7</td>
                              <td>Content 7</td>
                              <td>Content 7</td>
                          </tr>
                          <tr>
                              <td>Content 8</td>
                              <td>Content 8</td>
                              <td>Content 8</td>
                              <td>Content 8</td>
                              <td>Content 8</td>
                              <td>Content 8</td>
                              <td>Content 8</td>
                          </tr>
                          <tr>
                              <td>Content 9</td>
                              <td>Content 9</td>
                              <td>Content 9</td>
                              <td>Content 9</td>
                              <td>Content 9</td>
                              <td>Content 9</td>
                              <td>Content 9</td>
                          </tr>
                          <tr>
                              <td>Content 10</td>
                              <td>Content 10</td>
                              <td>Content 10</td>
                              <td>Content 10</td>
                              <td>Content 10</td>
                              <td>Content 10</td>
                              <td>Content 10</td>
                          </tr>
                          
                          <tbody>
                      </table>
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