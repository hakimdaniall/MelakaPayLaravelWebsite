@extends('layouts.master')

@section('title')
MelakaPay
@endsection

@section('content')
@include('header')

<main>
    <section id="portfolio" >
        <div class="container mt-4" data-aos="fade-up">
            <header class="section-header">
                <h2>User</h2>
                <p>Dashboard</p>
            </header>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6 d-flex justify-content-center">
                    <h4>Sample Response Data</h4>
                    <br>
                    <pre>
                    <?php
                        $filename = last(request()->segments()); // nama fail ikut user ID
                        $path = storage_path('app/').$filename.".json";
                        $json = json_decode(file_get_contents($path), true);
                        var_dump($json);
                    ?>
                    </pre>
                </div>
                <div class="col-lg-6">
                    <h4>Sample Formatted Output</h4>
                    <dl>
                        <dt>Name</dt>
                        <dd>{{ $json['name'] }}</dd>
                        <dt>E-mail</dt>
                        <dd>{{ $json['email'] }}</dd>
                        <dt>IC</dt>
                        <dd>{{ $json['username'] }}</dd>
                        <dt>api_token</dt>
                        <dd>{{ $json['api_token'] }}</dd>
                        <dt>Address Line 1</dt>
                        <dd>{!! $json['details'][0]['address'] !!}</dd>
                        <dt>Address Line 2</dt>
                        <dd>{!! $json['details'][0]['address2'] !!}</dd>
                        <dt>Postcode</dt>
                        <dd>{!! $json['details'][0]['postcode'] !!}</dd>
                        <dt>State</dt>
                        <dd>{!! $json['details'][0]['state'] !!}</dd>
                        <dt>City</dt>
                        <dd>{!! $json['details'][0]['city'] !!}</dd>
                        <dt>Phone</dt>
                        <dd>{!! $json['details'][0]['phone_no'] !!}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </section>
</main>

@include('footer')
@endsection