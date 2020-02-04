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
						@if($newProfessional)
							<div class="alert alert-success">{{ $newProfessional }}</div>
						@endif
						Click <a href="{{ route('adminListProfessionals') }}" style="font-weight:bold;">here</a> to return to the list of Professionals. Click <a href="{{ route('adminDashboard') }}" style="font-weight:bold;">here</a> to return to the admin page.
						<br><br>
						@include('includes/admin_help')
						<br><br>
						Thanks!
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12"><hr></div>
					</div>
					@if(Session::has('success'))
						<div class="alert alert-success">{{ Session::get('success') }}</div>
					@endif
					
					@if($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach($errors->all() as $error)
									<li>{{ $error }} </li>
								@endforeach
							</ul>
						</div>
					@endif
						<div class="form-group">
							<div class="row">
								<div class="col-md-6 col-xs-12">
									<label for="cert_year">Certification Year</label>
									<input type="text" class="form-control" name="cert_year" id="cert_year" value="{{ $pro->cert_year }}">
								</div>
								<div class="col-md-6 col-xs-12">
									<label for="cert_number">Certification Number</label>
									<input type="text" class="form-control" name="cert_num" id="cert_num" value="{{ $pro->cert_num }}">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-xs-12">
									<label for="last name">Last Name</label>
									<input type="text" class="form-control" name="lname" id="lname" value="{{ $pro->lname }}">
								</div>
								<div class="col-md-6 col-xs-12">
									<label for="first name">First Name</label>
									<input type="text" class="form-control" name="email" id="email" value="{{ $pro->fname }}">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-xs-12">
									<label for="addr1">Address 1</label>
									<input type="text" class="form-control" name="addr1" id="addr1" value="{{ $pro->addr1 }}">
								</div>
								<div class="col-md-6 col-xs-12">
									<label for="addr2">Address 2</label>
									<input type="text" class="form-control" name="addr2" id="addr2" value="{{ $pro->addr2 }}">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-xs-12">
									<label for="city">City</label>
									<input type="text" class="form-control" name="city" id="city" value="{{ $pro->city }}">
								</div>
								<div class="col-md-6 col-xs-12">
									<label for="region_state">Region | State</label>
									<input type="text" class="form-control" name="region_state" id="region_state" value="{{ $pro->region_state }}">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-xs-12">
									<label for="country">Country</label>
									<input type="text" class="form-control" name="country" id="country" value="{{ $pro->country }}">
								</div>
								<div class="col-md-6 col-xs-12">
									<label for="postal">Zip Code</label>
									<input type="text" class="form-control" name="postal" id="postal" value="{{ $pro->postal }}">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-xs-12">
									<label for="email">email</label>
									<input type="text" class="form-control" name="email" id="email" value="{{ $pro->email }}">
								</div>
								<div class="col-md-6 col-xs-12">
									<label for="phone">Phone</label>
									<input type="text" class="form-control" name="phone" id="phone" value="{{ $pro->phone }}">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-xs-12">
									<label for="discipline">Discipline</label>
									<input type="text" class="form-control" name="discipline" id="discipline" value="{{ $pro->discipline }}">
								</div>
								<div class="col-md-6 col-xs-12">
									<div class="form-group">
										  <label for="license">License</label>
										  <select class="form-control" id="license" name="license">
											@if($pro->license==1)
												<option selected>yes</option>
											@else
											<option selected>no</option>
											@endif
											<option>yes</option>
											<option>no</option>
										  </select>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection