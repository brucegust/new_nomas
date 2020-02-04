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
						
						Below you'll find the list of pages that comprise the NOMAS<sup>&reg;</sup> International website. Click on either "edit" or "delete" to change or eliminate that particular page.
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
				</div>
				<div class="row">
					<div class="col-xs-12">
						<table class="table table-bordered">
							<tr>
								<td style="width:75%; background-color:#ea7fea; color:#fff; text-align:center; font-weight:bold;">title</td>
								<td style="width:25%; background-color:#ea7fea; color:#fff; text-align:center; font-weight:bold;">edit / delete</td>
							</tr>
							@foreach($pages as $page)
								<tr>
									<td>{{ $page->title }}</td>
									<td style="text-align:center;"><a href="{{ url('/admin/show/page/' .$page->id) }}">edit</a> | <a data-toggle="modal" href="#deletePostModal-{{ $page->id }}">delete</a></td>
								</tr>
							@endforeach				
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	@foreach($pages as $page)
	<!-- Modal -->
	<div class="modal fade" id="deletePostModal-{{ $page->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h5 class="modal-title" id="myModalLabel">You're about to delete the "{{ $page->title }} " page. </h4>
		  </div>
		  <div class="modal-body">
			Are you sure this is what you want to do?
			<br><br>
			If you decide you want to delete this page, as soon as you click on "Yes, Delete the Page," you'll be returned immediately to the List of Pages.
		  </div>
		  <div class="modal-footer" style="text-align:center;">
		  	<form method="POST" id="deletePost-{{ $page->id }}" action="{{ route('adminDeletePage', $page->id) }}" style="display:inline-block;">@csrf
			<button type="submit" class="btn btn-success">Yes, Delete the Page!</button>
			</form>
			<button type="button" class="btn btn-danger" data-dismiss="modal">No, I've Changed My Mind</button>
			</div>
		</div>
	  </div>
	</div>
@endforeach
</section>
@endsection