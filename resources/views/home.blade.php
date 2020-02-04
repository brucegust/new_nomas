@extends('layouts.app')
@section('content')
<!-- Section: intro -->
<section id="intro" class="intro">
	<div class="satellite-content">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 satellite_row" style="margin-top:-25px;">
				@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					<h6>Hello, {{ Auth::user()->name }}!</h6>
                    You are logged in!
				</div>
			</div>
		</div>
	</div>
</section>
@endsection