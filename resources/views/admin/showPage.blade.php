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
						Hello, {{ Auth::user()->name }}!
						<br><br>
						To make any changes to the page that you've just selected, simply edit the content of the fields below and click on "submit."
						<br><br>
						To return to the List of Pages, click <a href="{{ route('adminListPages') }}" style="font-weight:bold;">here</a>.
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
					<form action="{{ route('adminUpdatePage') }}" method="POST">
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
								<div class="col-xs-12" style="text-align:center;"><input type="hidden" name="user_id" value="{{Auth::user()->id}}"><input type="hidden" name="page_id" value="{{ $page->id }}"><br>
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