@extends('layouts.master')
@extends('layouts.registerlayout')

<body>
    <section class="login-page">
        <div class="container-login">
            <div class="d-flex justify-content-center h-100">
                <div class="resetcard">
                    <div class="card-header">
                        <h3>Reset Password</h3>
                    </div>
                    <div class="card-body">
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
                        <form method="post" action="{{ route('user.loginprocess') }}">
                            @csrf
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Email Address" name="username">
                                
                            </div>
                            
                           
                            <div class="form-group">
                                <input type="submit" value="Reset" class="btn float-right login_btn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

