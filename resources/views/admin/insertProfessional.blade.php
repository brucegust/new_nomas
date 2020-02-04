@extends('../layouts.satellite')
@section('content')
<!-- Section: intro -->
<section id="intro" class="intro">
	<div class="satellite-content">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 satellite_row">
					<h5>NOMAS<sup>&reg;</sup> International Admin New Professional Form</h5>
					<div class="row">
						<div class="col-xs-12">
						Hello, {{ Auth::user()->name }}!
						<br><br>
						To create a new NOMAS<sup>&reg;</sup> Professional, simply enter your information using the fields below and click on "submit." 
						<br><br>
						Click <a href="{{ route('adminDashboard') }}" style="font-weight:bold;">here</a> to return to the admin page.
						<br><br>
						@include('includes/admin_help')
						<br><br>
						Thanks!
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12"><hr></div>
					</div>
					@if($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach($errors->all() as $error)
									<li>{{ $error }} </li>
								@endforeach
							</ul>
						</div>
					@endif
						<form method="Post" action="{{ route('adminStoreProfessional') }}">
							<div class="form-group">
								<input type="hidden" value="{{csrf_token()}}" name="_token">
								<div class="row">
									<div class="col-md-6 col-xs-12">
										<label for="cert_year">Certification Year</label>
										<input type="text" class="form-control" name="cert_year" id="cert_year" value="{{ old('cert_year') }}">
									</div>
									<div class="col-md-6 col-xs-12">
										<label for="cert_number">Certification Number</label>
										<input type="text" class="form-control" name="cert_num" id="cert_num" value="{{ old('cert_num') }}">
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 col-xs-12">
										<label for="last name">Last Name</label>
										<input type="text" class="form-control" name="lname" id="lname" value="{{ old('lname') }}">
									</div>
									<div class="col-md-6 col-xs-12">
										<label for="first name">First Name</label>
										<input type="text" class="form-control" name="fname" id="fname" value="{{ old('fname') }}">
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 col-xs-12">
										<label for="addr1">Address 1</label>
										<input type="text" class="form-control" name="addr1" id="addr1" value="{{ old('addr1') }}">
									</div>
									<div class="col-md-6 col-xs-12">
										<label for="addr2">Address 2</label>
										<input type="text" class="form-control" name="addr2" id="addr2" value="{{ old('addr2') }}">
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 col-xs-12">
										<label for="city">City</label>
										<input type="text" class="form-control" name="city" id="city" value="{{ old('city') }}">
									</div>
									<div class="col-md-6 col-xs-12">
										<label for="region_state">Region | State</label>
										<input type="text" class="form-control" name="region_state" id="region_state" value="{{ old('region_state') }}">
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 col-xs-12">
										<label for="country">Country</label>
										<input type="text" class="form-control" name="country" id="country" value="{{ old('country') }}">
									</div>
									<div class="col-md-6 col-xs-12">
										<label for="postal">Zip Code</label>
										<input type="text" class="form-control" name="postal" id="postal" value="{{ old('postal') }}">
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 col-xs-12">
										<label for="email">email</label>
										<input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}">
									</div>
									<div class="col-md-6 col-xs-12">
										<label for="phone">Phone</label>
										<input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}">
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 col-xs-12">
										<label for="discipline">Discipline</label>
										<input type="text" class="form-control" name="discipline" id="discipline" value="{{ old('discipline') }}">
									</div>
									<div class="col-md-6 col-xs-12">
										<div class="form-group">
											  <label for="license">License</label>
											  <select class="form-control" id="license" name="license">
												  @if(old('license') !=="")
													   @if(old('license')=="yes") 
															<option selected>yes</option>
													   @else 
															<option selected>no</option>
														@endif
												 @endif
												<option>yes</option>
												<option>no</option>
											  </select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12" style="text-align:center;"><input type="hidden" name="user_id" value="{{Auth::user()->id}}"><br>
										<input type="image" name="submit" src="{{ asset('assets/img/nomas_submit.jpg') }}" style="width:150px;">
									</div>
								</div>
							</div></form>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection