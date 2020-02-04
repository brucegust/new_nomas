@extends('../layouts.satellite')
@section('content')
<!-- Section: intro -->
<style>
	a.pButton {
		color:#fff;
		text-decoration:none; 
		color:#fff;
	}
	a.pButton:hover {
		color:#fff;
		text-decoration:underline; 
		color:#fff;
	}
</style>
<section id="intro" class="intro">
	<div class="satellite-content">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 satellite_row">
					<h5>NOMAS<sup>&reg;</sup> International Admin Display User Page</h5>
					<div class="row">
						<div class="col-xs-12">
						Hello, {{ Auth::user()->name }}!
						<br><br>
						To make any changes to the user that you've just selected, simply edit the content of the fields below and click on "submit."
						<br><br>
						To return to the List of Users, click <a href="{{ route('adminListUsers') }}" style="font-weight:bold;">here</a>.
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
					<form action="{{ route('adminUpdateUser') }}" method="POST">
						<div class="form-group">
							<input type="hidden" value="{{csrf_token()}}" name="_token">
							<div class="row">
								<div class="col-xs-12" style="margin-top:5px; margin-bottom:10px;">
								<b>Admin Permissions</b>: yes 
								@if($user->admin==1)
									<input type="checkbox" name="admin_yes" value="Y" checked>
								@else
									<input type="checkbox" name="admin_yes" value="Y">
								@endif
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;no 
								@if($user->admin==1)
									<input type="checkbox" name="admin_no" value="Y">
								@else	
									<input type="checkbox" name="admin_no" value="Y" checked>
								@endif
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<label for="title">Name</label>
									<input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12" style="text-align:center; padding-top:10px; padding-bottom:10px;">
									<div style="background-color:#838383; width:90%; margin-top:10px; margin:auto; height:auto; padding:5px; text-align:center; color:#fff; border-radius:10pt;" id="password_button"><a id="show_password" class="pButton">click here to assign a user a new password</a></div>
								</div>
							</div>
							<div id="password_row" style="display:none;">
								<div class="row">
									<div class="col-md-6 col-xs-12">
										<label for="title">Password</label>
										<input type="password" class="form-control" name="password" id="password">
									</div>
									<div class="col-md-6 col-xs-12">
										<label for="title">Confirm Password</label>
										<input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<label for="title">Email</label>
									<input type="text" class="form-control" name="email" id="email" value="{{ $user->email }}">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12" style="text-align:center;"><input type="hidden" name="user_id" value="{{Auth::user()->id}}"><input type="hidden" name="the_id" value="{{ $user->id }}"><input type="hidden" name="update_pass" value="0"/><br>
									<input type="image" name="submit" src="{{ asset('assets/img/nomas_submit.jpg') }}" style="width:150px;">
								</div>
							</div></form>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<script>
	$('#show_password').click(function() {
		$('#password_row').toggle(500, function() {
			if($('#password_row').is(':visible')) {
				$('#show_password').text('click here to close password fields');
				$('input[name="update_pass"]').val("1");
			}
			else {
				$('#show_password').text('click here to assign a user a new password');
				$('input[name="update_pass"]').val("0");
			}
		});
	});
</script>
</section>
@endsection