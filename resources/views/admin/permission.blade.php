@extends('../layouts.satellite')
@section('content')
<!-- Section: intro -->
<section id="intro" class="intro">
	<div class="satellite-content">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 satellite_row">
				<h5>Wrong Permissions...</h5>
					@if(Auth::check()) 
						Hello, {{ Auth::user()->name }}!
					@else
						Hello!
					@endif
					<br><br>
					It would seem like you're trying to access the NOMAS<sup>&reg;</sup> International Admin Suite. Alas, you don't have the right permissions. 
					<br><br>
					If you believe that to be an error, contact Bruce Gust at <a href="mailto:bruce@brucegust.com">bruce@brucegust.com</a>.
					<br><br>
					Thanks!
				</div>
			</div>
		</div>
	</div>
</section>
@endsection