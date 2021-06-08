@extends('layouts.master')
@extends('layouts.registerlayout')

@section('title')
MelakaPay
@endsection

@section('content')
@include('header')


</head>
<body>
    
<!------ Include the above in your HEAD tag ---------->
<section>
<div class="container register">
    <div class="container d-flex justify-content-center">
            <div class="col-lg-9 d-flex justify-content-center" data-aos="fade-up">
                <div>
                    <h1>Account Information</h1>
                </div>
            </div>
    </div>
                <div class="row d-flex justify-content-center">
                                
                    <div class="col-md-9 register-right">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">User ID = MyKad/Passport/Kad Kuasa Number</h3>
                                <div class="row register-form">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password" value="" />
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
                                        <a href="/"><input type="submit" class="btnRegister"  value="Register"/></a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="/register"><input type="submit" class="btnCancel"  value="Cancel"/></a>
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