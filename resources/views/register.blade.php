@extends('layouts.master')
@extends('layouts.registerlayout')

@section('title')
MelakaPay
@endsection

@section('content')
@include('header')



<body>
    
<!------ Include the above in your HEAD tag ---------->
<section>
<div class="container register">
    <div class="container d-flex justify-content-center">
    <div class="col-lg-3"></div>
            <div class="col-lg-9 d-flex justify-content-center" data-aos="fade-up">
                <div>
                    <h1>MelakaPay</h1>
                    <p>Register now and enjoy the convenience of paying your bills through E-BAYAR KERAJAAN NEGERI MELAKA portal, your one stop center for bills and payment.</p>
                </div>
            </div>
    </div>
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="./assets/img/registration.svg" alt=""/>
                        <h3>Registration</h3>
                        <p>Mengapa Perlu Mendaftar?</p>
                        <a href="/login"><input type="submit" name="" value="Login"/></a><br/>
                    </div>
                    <div class="col-md-9 register-right">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">User Information</h3>
                                <div class="row register-form">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Full Name" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Select ID Type</option>
                                                <option>MyKad Number</option>
                                                <option>Passport Number</option>
                                                <option>Kad Kuasa Number</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Address" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="City" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Postcode" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Select state</option>
                                                <option>01 - Johor </option>
                                                <option>02 - Kedah </option>
                                                <option>03 - Kelantan </option>
                                                <option>04 - Melaka </option>
                                                <option>05 - Negeri Sembilam</option>
                                                <option>06 - Pahang </option>
                                                <option>07 - Penang</option>
                                                <option>08 - Perak</option>
                                                <option>09 - Perlis</option>
                                                <option>10 - Sabah</option>
                                                <option>11 - Sarawak</option>
                                                <option>12 - Selangor</option>
                                                <option>13 - Terengganu</option>
                                                <option>14 - WP Kuala Lumpur</option>
                                                <option>15 - WP Labuan</option>
                                                <option>16 - WP Putrajaya</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Mobile Number" value="" />
                                        </div>

                                        <h4 class="company-heading">Company Detail (Optional Information)</h4>

                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="Company Name" value="" />
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="ROC Number" value="" />
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Company Address" value="" />
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="City" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Postcode" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Select state</option>
                                                <option>01 - Johor </option>
                                                <option>02 - Kedah </option>
                                                <option>03 - Kelantan </option>
                                                <option>04 - Melaka </option>
                                                <option>05 - Negeri Sembilam</option>
                                                <option>06 - Pahang </option>
                                                <option>07 - Penang</option>
                                                <option>08 - Perak</option>
                                                <option>09 - Perlis</option>
                                                <option>10 - Sabah</option>
                                                <option>11 - Sarawak</option>
                                                <option>12 - Selangor</option>
                                                <option>13 - Terengganu</option>
                                                <option>14 - WP Kuala Lumpur</option>
                                                <option>15 - WP Labuan</option>
                                                <option>16 - WP Putrajaya</option>
                                            </select>
                                        </div>

                                        
                                    </div>
                                    <div class="col-md-6">
                                        <a href="/register2"><input type="submit" class="btnRegister"  value="Continue"/></a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
</body>
</section>

@include('footer')
@endsection