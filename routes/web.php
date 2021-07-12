<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Route::get('/register', 'RegisterController@register')->name('user.register');
// Route::post('/registerprocess', 'RegisterController@registerprocess')->name('user.registerprocess');

Route::get('/register', 'RegisterController@create')->name('register-user');
Route::post('/register/user', 'RegisterController@store')->name('create-user');


Route::get('/login', 'AuthController@login')->name('user.login');
Route::post('/loginprocess', 'AuthController@loginprocess')->name('user.loginprocess');

Route::name('users.')->prefix('users')->group(function () {
    Route::get('/dashboard/{user_id}', function () {
        return view('users.dashboard');
    });
});

Route::get('/profile', 'UserController@UserProfile');

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/userdashboard', function () {
    return view('userdashboard');
});


Route::get('/forgotpassword', function (){
    return view('forgotpassword');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/agencies', function () {
    return view('agencies');
});

Route::prefix('agency')->group(function () {

    Route::get('/ptgnm', function () {
        return view('agencies.ptgnm');
    });

    Route::get('/pdtag', function () {
        return view('agencies.pdtag');
    });

    Route::get('/pdtmt', function () {
        return view('agencies.pdtmt');
    });

    Route::get('/pdtj', function () {
        return view('agencies.pdtj');
    });

    Route::get('/mbmb', function () {
        return view('agencies.mbmb');
    });

    Route::get('/mpag', function () {
        return view('agencies.mpag');
    });

    Route::get('/mphtj', function () {
        return view('agencies.mphtj');
    });

    Route::get('/mphtj', function () {
        return view('agencies.mphtj');
    });

    Route::get('/mpj', function () {
        return view('agencies.mpj');
    });

    Route::get('/tapnm', function () {
        return view('agencies.tapnm');
    });

    Route::get('/zakatmelaka', function () {
        return view('agencies.zakatmelaka');
    });

    Route::get('/samb', function () {
        return view('agencies.samb');
    });

    Route::get('/ukt', function () {
        return view('agencies.ukt');
    });

    Route::get('/bksa', function () {
        return view('agencies.bksa');
    });

    Route::get('/lpm', function () {
        return view('agencies.lpm');
    });

    Route::get('/maim', function () {
        return view('agencies.maim');
    });

});

// Payments 

Route::prefix('payment')->group(function () {

    Route::get('/oneoffpayment', function () {
        return view('payments.oneoffpayment');
    });

    Route::get('/oneoffpayment2', function () {
        return view('payments.oneoffpayment2');
    });

});