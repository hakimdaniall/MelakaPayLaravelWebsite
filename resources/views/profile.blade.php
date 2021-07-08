@extends('layouts.master')
@extends('layouts.profilelayout')

@section('title')
MelakaPay
@endsection

@section('content')
@include('header')


<body>

<section class="profilesection">
<div class="container">
<div class="row gutters">
<div class="col-xl-4">
<div class="usercard h-100">
	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
				</div>
				<h5 class="user-name">user3258419</h5>
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-xl-8">
<div class="usercard h-100">
	<div class="card-body">
    <!-- User Information Section Start -->
		<div class="row gutters"> 
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-primary">User Information</h6>
			</div>
			<div class="col-xl-12 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="fullName">Full Name</label>
					<input type="text" class="form-control" id="fullName" placeholder="Fadli Saad 2">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Email</label>
					<input type="email" class="form-control" id="eMail" placeholder="fadlisaad@outlook.com">
				</div>
			</div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" id="text" placeholder="820115016285">
				</div>
			</div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" placeholder="******">
				</div>
			</div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="password">Confirm Password</label>
					<input type="password" class="form-control" id="password" placeholder="******">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="text" class="form-control" id="phone" placeholder="0123456789">
				</div>
			</div>
		</div>
    <!-- End of user information -->

    <!-- Address section -->
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mt-3 mb-2 text-primary">Address</h6>
			</div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="Address_1">Address Line 1</label>
					<input type="text" class="form-control" id="Address Line 1" placeholder="no 1, jalan 1">
				</div>
			</div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="Address_2">Address Line 2</label>
					<input type="text" class="form-control" id="Address Line 2" placeholder="lubang cacing">
				</div>
			</div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="City">City</label>
					<input type="text" class="form-control" id="city" placeholder="Kepong">
				</div>
			</div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="postcode">Postcode</label>
					<input type="text" class="form-control" id="postcode" placeholder="12345">
				</div>
			</div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="form-group">
          <label for="state">State</label>
        <select class="form-control" name="state">
            <option value="wpkualalumpur" class="hidden" selected disabled>14 - WP Kuala Lumpur</option>
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
            <option value="wplabuan">15 - WP Labuan</option>
            <option value="wpputrajaya">16 - WP Putrajaya</option>
        </select>
        </div>
      </div>
		</div>
    <!-- End of address section -->

    <!-- Company section  -->
    <div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mt-3 mb-2 text-primary">Company Details</h6>
			</div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="companyname">Company Name</label>
					<input type="text" class="form-control" id="companyname" placeholder="Company Name (Optional)">
				</div>
			</div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="rocnum">ROC Number</label>
					<input type="text" class="form-control" id="rocnum" placeholder="ROC Number (Optional)">
				</div>
			</div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="companyaddress">Company Address</label>
					<input type="text" class="form-control" id="companyaddress" placeholder="Company Address (Optional)">
				</div>
			</div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="City">City</label>
					<input type="text" class="form-control" id="city" placeholder="Company City (Optional)">
				</div>
			</div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="postcode">Postcode</label>
					<input type="text" class="form-control" id="postcode" placeholder="Company Postcode (Optional)">
				</div>
			</div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="form-group">
          <label for="state">State</label>
        <select class="form-control" name="state">
            <option class="hidden" selected disabled>Select Company State (Optional)</option>
            <option value="kedah">02 - Kedah </option>
            <option value="johor">01 - Johor </option>
            <option value="kelantan">03 - Kelantan </option>
            <option value="melaka">04 - Melaka </option>
            <option value="n9">05 - Negeri Sembilan</option>
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
        
			</div>
      </div>
		</div>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="text-right">
					<button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button>
					<button type="button" id="submit" name="submit" class="btn btn-primary">Update</button>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
  </section>

  @include('footer')
@endsection