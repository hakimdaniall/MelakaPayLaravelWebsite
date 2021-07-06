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
                            @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if(Session::has('error'))
                                    <div class="alert alert-danger">
                                        {{Session::get('error')}}
                                    </div>
                                @endif
                                <form method="post" action="{{ route ('create-user') }}">
                                @csrf
                                <h3 class="register-heading">User Information</h3>
                                <div class="row register-form">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Full Name" name="name" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="id_type">
                                                <option class="hidden"  selected disabled>Select ID Type</option>
                                                <option value="mykad">MyKad Number</option>
                                                <option value="passport">Passport Number</option>
                                                <option value="kadkuasa">Kad Kuasa Number</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Address Line 1" name="address_1"  value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Address Line 2" name="address_2"  value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="City" name="city" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Postcode" name="postcode" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="state">
                                                <option class="hidden" selected disabled>Select state</option>
                                                <option value="kedah">02 - Kedah </option>
                                                <option value="johor">01 - Johor </option>
                                                <option value="kelantan">03 - Kelantan </option>
                                                <option value="melaka">04 - Melaka </option>
                                                <option value="n9">05 - Negeri Sembilam</option>
                                                <option value="pahang">06 - Pahang </option>
                                                <option value="penang">07 - Penang</option>
                                                <option value="perak">08 - Perak</option>
                                                <option value="perlis">09 - Perlis</option>
                                                <option value="sabah">10 - Sabah</option>
                                                <option value="sarawak">11 - Sarawak</option>
                                                <option value="selangor">12 - Selangor</option>
                                                <option value="terengganu">13 - Terengganu</option>
                                                <option value="wpkualalumpur">14 - WP Kuala Lumpur</option>
                                                <option value="wplabuan">15 - WP Labuan</option>
                                                <option value="wpputrajaya">16 - WP Putrajaya</option>
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

                                    <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone Number" name="phone_no" value="" />
                                        </div>

                                    <h4 class="company-heading">User ID = MyKad/Passport/Kad Kuasa Number</h4>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email" name="email" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Username" name="username" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password" name="password" value="" />
                                        </div>                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password" value="" />
                                        </div>

                                        <h4 class="company-heading">Please select and answer one (1) security question</h4>

                                        
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Security Question</option>
                                                <option>What was your childhood name? </option>
                                                <option>What is the name of your favorite childhood friend </option>
                                                <option>What schoold did you attend for in sixth grade </option>
                                                <option>In what town was your first job </option>
                                                <option>What is your eldest sibling's birthday month and year? (e.g. january 1990)</option>
                                                <option>What is your youngest sibling's birthday month and year? (e.g. january 1990)</option>
                                                <option>What was the make and model of your first car? (e.g. Proton Perdana, Perodua Kelisa, Honda City)</option>
                                                <option>What is your father's last name?</option>
                                                <option>What is your mother's maiden name</option>
                                                <option>Type something you will remember, like a password</option>
                                        </div>

                                        <div class="form-group mt-5">
                                            <input type="text" class="form-control" placeholder="Answer" value="" />
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="Captcha" value="" />
                                        </div>

                                    
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="submit" class="btnCancel"  value="Cancel"/>
                                    </div>
                                    </form>
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