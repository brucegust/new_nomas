@extends('../layouts.satellite')
@section('content')
<!-- Section: intro -->
<section id="intro" class="intro">
	<div class="satellite-content">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 satellite_row">
					<h5>NOMAS<sup>&reg;</sup> International Admin Dashboard</h5>
					<div class="row">
						<div class="col-xs-12">
						Welcome to the NOMAS<sup>&reg;</sup> International Admin Page! 
						<br><br>
						Select from the pulldown menus below whatever it is you want to do.
						<br><br>
						@include('includes/admin_help')
						<br><br>
						Thanks!
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12"><hr></div>
					</div>
					<div class="row">
						<div class="col-md-4 col-xs-12" style="text-align:center; padding:10px;">
							<select name="pages"  class="form-control" onchange="MM_jumpMenu('top',this,1)">						
								<option value="#" selected>Pages</option>						
								<option value="/admin/insert/page">Insert Page</option>								
								<option value="/admin/list/page">Edit / Delete Page</option>								
								<option value="/admin/list/page">List All Pages</option>						
								<option value="">_____________________	</option>
							</select>
						</div>
						<div class="col-md-4 col-xs-12" style="text-align:center; padding:10px;">
							<select name="users"  class="form-control" onchange="MM_jumpMenu('top',this,1)">						
								<option value="#" selected>Administrators</option>						
								<option value="/admin/insert/user">Insert Administrator</option>								
								<option value="/admin/list/user">Edit / Delete Administrator</option>								
								<option value="/admin/list/user">List All Administrators</option>				
								<option value="">_____________________	</option>
							</select>
						</div>
						<div class="col-md-4 col-xs-12" style="text-align:center; padding:10px;">
							<select name="courses" class="form-control" onchange="MM_jumpMenu('top',this,1)">						
								<option value="#" selected>Courses</option>						
								<option value="invoice_insert.php">Insert Invoice</option>								
								<option value="invoice_list.php">Edit / Delete Invoice</option>								
								<option value="invoice_list.php">List All Invoice</option>						
								<option value="">_____________________	</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-xs-12" style="text-align:center; padding:10px;">
							<select name="courses" class="form-control" onchange="MM_jumpMenu('top',this,1)">						
								<option value="#" selected>Professionals</option>						
								<option value="/admin/insert/professional">Insert Professional</option>								
								<option value="/admin/list/professional">Edit / Delete Professional</option>								
								<option value="/admin/list/professional">List All Professionals</option>						
								<option value="">_____________________	</option>
							</select>
						</div>
						<div class="col-md-4 col-xs-12" style="text-align:center; padding:10px;"></div>
						<div class="col-md-4 col-xs-12" style="text-align:center; padding:10px;"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script language="JavaScript"><!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
// -->
</script>
@endsection