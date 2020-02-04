@extends('layouts.satellite')
@section('content')
<!-- Section: intro -->
<section id="intro" class="intro">
	<div class="satellite-content">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 satellite_row">
				<h5>NOMAS<sup>&reg;</sup> Professionals</h5>
				NOMAS<sup>®</sup> Professionals have completed a comprehensive three-day training course and are proven to be reliable in the administration of the protocol. Professionals are licensed for two-year periods to use the protocol in their practices. Biennial license renewal can be accomplished on this website. Renewal assures that Professionals are up-to-date on the correct adminstration of the NOMAS<sup>®</sup>. Another significant benefit of current licensing: complimentary membership in the NOMAS<sup>®</sup> Feeding Forum where every day, neonatal feeding professionals benefit from the experiences and advice of peers and other professionals.<br><br>
					<?php //echo $pages->body; ?>
					<table class="table table-bordered">
						<tr>
						<td style=" background-color:#ea7fea; color:#fff; text-align:center; font-weight:bold;">#</td>
							<td style=" background-color:#ea7fea; color:#fff; text-align:center; font-weight:bold;">@sortablelink('lname', 'Name') </td>
							<td style=" background-color:#ea7fea; color:#fff; text-align:center; font-weight:bold;">@sortablelink('discipline', 'Discipline')</td>
							<td style=" background-color:#ea7fea; color:#fff; text-align:center; font-weight:bold;">@sortablelink('country', 'Country')</td>
							<td style=" background-color:#ea7fea; color:#fff; text-align:center; font-weight:bold;">@sortablelink('cert_year', 'Certified')</td>
						</tr>
						<?php $count=1;?>
						@foreach($pros as $pro)
							<tr>
								<td>{{ $count }}</td>
								<td>{{ $pro->lname }}, {{ $pro->fname }}</td>
								<td>{{ $pro->discipline }}</td>
								<td>{{ $pro->country }}</td>
								<td>{{ $pro->cert_year }}</td>
							</tr>
						<?php $count=$count+1;?>
						@endforeach		
						<tr>
							<td colspan="5" style="text-align:center;">{{ $pros->links() }}</td>
						</tr>
					</table>	
				</div>
			</div>
		</div>
	</div>
</section>
@endsection