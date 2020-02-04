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
						@if($newUser)
							<div class="alert alert-success">{{ $newUser }}</div>
						@endif
						@if($passwordChanged)
							You have successfully changed this administrator's password. Be sure to let them know what their new temporary password is and encourage them to change it to something else that's known only to them.<br><br>
						@endif
						Click <a href="{{ route('adminListUsers') }}" style="font-weight:bold;">here</a> to return to the list of administrators. Click <a href="{{ route('adminDashboard') }}" style="font-weight:bold;">here</a> to return to the admin page.
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
					<form method="Post" action="{{ route('adminStorePage') }}">
						<div class="form-group">
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
								<div class="col-xs-12">
									<label for="title">email</label>
									<input type="text" class="form-control"  id="email" name="email" value="{{ $user->email }}">
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