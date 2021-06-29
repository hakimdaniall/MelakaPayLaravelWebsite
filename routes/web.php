<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/register2', function () {
    return view('register2');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/agencies', function () {
    return view('agencies');
});

Route::get('/ptngmelaka', function () {
    return view('agencies.ptngmelaka');
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