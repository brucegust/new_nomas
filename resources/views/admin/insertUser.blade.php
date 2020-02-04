@extends('../layouts.satellite')
@section('content')
<!-- Section: intro -->
<section id="intro" class="intro">
	<div class="satellite-content">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 satellite_row">
					<h5>NOMAS<sup>&reg;</sup> International Admin New User Form</h5>
					<div class="row">
						<div class="col-xs-12">
						Hello, {{ Auth::user()->name }}!
						<br><br>
						To create a new user, simply enter your information using the fields below and click on "submit."
						<br><br>
						"Admin Permissions" are set by clicking the "yes" box. It's checked on this page by default, but you can "uncheck" that box later. You can also delete the administrator if you want to do that.
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
					<form method="Post" action="{{ route('adminStoreUser') }}">
						<div class="form-group">
							<input type="hidden" value="{{csrf_token()}}" name="_token">
							<div class="row">
								<div class="col-xs-12" style="margin-top:5px; margin-bottom:10px;">
								<b>Admin Permissions</b>: yes <input type="checkbox" name="admin_yes" value="Y" checked>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;no <input type="checkbox" name="admin_no" value="Y">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-xs-12">
									<label for="name">Name</label>
									<input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
								</div>
								<div class="col-md-6 col-xs-12">
									<label for="email">email</label>
									<input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-xs-12">
									<label for="name">Password</label>
									<input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}">
								</div>
								<div class="col-md-6 col-xs-12">
									<label for="email">Confirm Password</label>
									<input type="password" class="form-control" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12" style="text-align:center;"><input type="hidden" name="user_id" value="{{Auth::user()->id}}"><br>
									<input type="image" name="submit" src="{{ asset('assets/img/nomas_submit.jpg') }}" style="width:150px;">
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