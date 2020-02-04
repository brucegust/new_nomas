@extends('../layouts.satellite')
@section('content')
<!-- Section: intro -->
<section id="intro" class="intro">
	<div class="satellite-content">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 satellite_row">
					<h5>NOMAS<sup>&reg;</sup> International Admin New Page Form</h5>
					<div class="row">
						<div class="col-xs-12">
						@if($newPage)
							<div class="alert alert-success">{{ $newPage }}</div>
						@endif
						Click <a href="{{ route('adminListPages') }}" style="font-weight:bold;">here</a> to return to the list of pages. Click <a href="{{ route('adminDashboard') }}" style="font-weight:bold;">here</a> to return to the admin page.
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
							<input type="hidden" value="{{csrf_token()}}" name="_token">
							<div class="row">
								<div class="col-xs-12">
									<label for="title">Page Title</label>
									<input type="text" class="form-control" name="title" id="title" value="{{ $page->title }}">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<label for="title">Body</label>
									<textarea class="form-control" id="body" name="body">{{ $page->body }}</textarea>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12" style="text-align:center;"><br>
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