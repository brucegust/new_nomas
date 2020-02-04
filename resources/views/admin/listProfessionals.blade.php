@extends('../layouts.satellite')
@section('content')
<!-- Section: intro -->
<section id="intro" class="intro">
	<div class="satellite-content">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 satellite_row">
					<h5>NOMAS<sup>&reg;</sup> International Admin List of NOMAS<sup>&reg;</sup> Professionals</h5>
					<div class="row">
						<div class="col-xs-12">
						Below you'll find the list of  NOMAS<sup>&reg;</sup> Professionals. Click on either "edit" or "delete" to change or eliminate that particular individual.
						<br><br>
						You can sort on every column! Just click on the column name to sort either ascending or descending alphabetically.
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
							<td style=" background-color:#ea7fea; color:#fff; text-align:center; font-weight:bold;">#</td>
								<td style=" background-color:#ea7fea; color:#fff; text-align:center; font-weight:bold;">@sortablelink('lname', 'Name') </td>
								<td style=" background-color:#ea7fea; color:#fff; text-align:center; font-weight:bold;">@sortablelink('discipline', 'Discipline')</td>
								<td style=" background-color:#ea7fea; color:#fff; text-align:center; font-weight:bold;">@sortablelink('country', 'Country')</td>
								<td style=" background-color:#ea7fea; color:#fff; text-align:center; font-weight:bold;">@sortablelink('cert_year', 'Certified')</td>
								<td style="width:25%; background-color:#ea7fea; color:#fff; text-align:center; font-weight:bold;">edit / delete</td>
							</tr>
							<?php $count=1;?>
							@foreach($pros as $pro)
								<tr>
									<td>{{ $count }}</td>
									<td>{{ $pro->lname }}, {{ $pro->fname }}</td>
									<td>{{ $pro->discipline }}</td>
									<td>{{ $pro->country }}</td>
									<td>{{ $pro->cert_year }}</td>
									<td style="text-align:center;"><a href="{{ url('/admin/show/professional/' .$pro->id) }}">edit</a> | <a data-toggle="modal" href="#deletePostModal-{{ $pro->id }}">delete</a></td>
								</tr>
							<?php $count=$count+1;?>
							@endforeach		
							<tr>
								<td colspan="5" style="text-align:center;">{{ $pros->links() }}</td>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	@foreach($pros as $pro)
	<!-- Modal -->
	<div class="modal fade" id="deletePostModal-{{ $pro->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h5 class="modal-title" id="myModalLabel">You're about to delete <b>{{ $pro->fname }} {{ $pro->lname }}</b> from the database. </h4>
		  </div>
		  <div class="modal-body">
			Are you sure this is what you want to do?
			<br><br>
			If you decide you want to delete this person, as soon as you click on "Yes, Delete this Person," you'll be returned immediately to the List of Professionals.
		  </div>
		  <div class="modal-footer" style="text-align:center;">
		  	<form method="POST" id="deletePost-{{ $pro->id }}" action="{{ route('adminDeleteProfessional', $pro->id) }}" style="display:inline-block;">@csrf
			<button type="submit" class="btn btn-success">Yes, Delete this Person!</button>
			</form>
			<button type="button" class="btn btn-danger" data-dismiss="modal">No, I've Changed My Mind</button>
			</div>
		</div>
	  </div>
	</div>
@endforeach
</section>
@endsection