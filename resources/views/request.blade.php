@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">


				<!-- page title -->
				<header id="page-header">
					<h1>REQUEST TABLE</h1>
					<ol class="breadcrumb">
						<li><a href="#">Tables</a></li>
						<li class="active">Request tables</li>
						<div class="pull-right">
							<button type="button" data-target=".bs-example-modal-full" class="btn btn-sm btn-green" data-toggle="modal"><i class="fa fa-plus"></i> New Request</button>
						</div>
					</ol>
				</header>
				<!-- /page title -->

<div class="modal fade bs-example-modal-full" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-full">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Add Request</h3>
      </div>

      <!-- Modal Body -->
      <div class="modal-body">
      	<div class="row">
      		<form id="demo-form2" class="form-horizontal" action="/client/register/rg" method="post" >
                  {{ csrf_field() }}
			<div class="form-group">
				<div class="col-md-4">
					<label>First Name *</label>
					<input type="text" name="fname" value="" class="form-control required">
				</div>
				<div class="col-md-4">
					<label>Middle Name *</label>
					<input type="text" name="mname" value="" class="form-control required">
				</div>
				<div class="col-md-4">
					<label>Last Name *</label>
					<input type="text" name="lname" value="" class="form-control required"><br>
				</div><br>
				<div class="col-md-6">
					<label>Religion *</label>
					<input type="text" name="religion" value="" class="form-control required">
				</div>
				<div class="col-md-6">
					<label>Citizenship *</label>
					<input type="text" name="Citizenship" value="" class="form-control required"><br>
				</div>
				<div class="col-md-12">
					<label>Address *</label>
					<input type="text" name="Address" value="" class="form-control required"><br>
				</div>
				<div class="col-md-6">
					<label>E-mail *</label>
					<input type="text" name="Email" value="" class="form-control required">
				</div>
				<div class="col-md-6">
					<label>Birthday *</label>
					<input type="date" name="Birthday" value="" class="form-control required"><br>
				</div>
				<div class="col-md-6">
					<label>Contact Number *</label>
					<input type="text" name="Contact" value="" class="form-control required">
				</div>				
				<div class="col-md-6">
					<label>Monthly Income *</label>
					<input type="text" name="Income" value="" class="form-control required"><br>
				</div>
				<div class="col-md-6">
					<label>Language/Dialect *</label>
					<input type="text" name="Language" value="" class="form-control required">
				</div>
				<div class="col-md-6">
					<label>Educational Attainment *</label>
					<input type="text" name="Educational" value="" class="form-control required"><br>
				</div>
				
				<div class="col-md-6">
					<label>Gender *</label><br>
					<input type="radio" name="gender" value="male">Male
         			<input type="radio" name="gender" value="female"> Female<br><br><br>	
				</div>
				<div class="col-md-12">
					<label>Detained(?) *</label><br>
					<input type="radio" onclick="javascript:DetainedCheck();" name="Detained" id="yesCheck">Yes <input type="radio" 
					onclick="javascript:DetainedCheck();" name="Detained" id="noCheck">No<br>
    				<div id="ifYes" style="display:none;margin-top:3%;">
    					<div class="col-md-12">
        			Detained Since<input type="date" name="Detained" value="" class="form-control required"></div>
        			<div class="col-md-12">
        			Place of Detention<input type="text" name="Detained" value="" class="form-control required"></div>
    				</div>
				</div>
				<br>
				
				<div class="col-md-6">
					<label>Civil Status *</label><br>
					<input type="radio" name="civilstat" value="single"> Single
          			<input type="radio" name="civilstat" value="married"> Married
          			
          			<input type="radio" name="civilstat" value="widowed"> Widowed
				</div>
			</div>
		</div>

 
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-green">Save changes</button>
      </form>
      </div>

    </div>

  </div>
</div>


				<div id="content" class="padding-20">

					<!-- 
						PANEL CLASSES:
							panel-default
							panel-danger
							panel-warning
							panel-info
							panel-success

						INFO: 	panel collapse - stored on user localStorage (handled by app.js _panels() function).
								All pannels should have an unique ID or the panel collapse status will not be stored!
					-->
					<div id="panel-1" class="panel panel-default">
						<div class="panel-heading">
							<span class="title elipsis">
								<strong>REQUEST</strong> <!-- panel title -->
							</span>

							<!-- right options -->
							<ul class="options pull-right list-inline">
								<li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Colapse" data-placement="bottom"></a></li>
								<li><a href="#" class="opt panel_fullscreen hidden-xs" data-toggle="tooltip" title="Fullscreen" data-placement="bottom"><i class="fa fa-expand"></i></a></li>
								<li><a href="#" class="opt panel_close" data-confirm-title="Confirm" data-confirm-message="Are you sure you want to remove this panel?" data-toggle="tooltip" title="Close" data-placement="bottom"><i class="fa fa-times"></i></a></li>
							</ul>
							<!-- /right options -->

						</div>
						<!--<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="pull-right">
									<a href="#createprojects" class="btn btn-sm btn-green" data-toggle="modal"><i class="fa fa-plus"></i> New Request</a>
									
								</div>
							</div>
							
						</div>
						 panel content -->
						<div class="panel-body">
						
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
									<tr>
										<th>Username</th>
										<th>Full Name</th>
										<th>Points</th>
										<th>Notes</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>
											 alex
										</td>
										<td>
											 Alex Nilson
										</td>
										<td>
											 1234
										</td>
										<td class="center">
											 power user
										</td>
										<td>
											<a class="edit" href="javascript:;">
											Edit </a>
										</td>
										<td>
											<a class="delete" href="javascript:;">
											Delete </a>
										</td>
									</tr>
									<tr>
										<td>
											 lisa
										</td>
										<td>
											 Lisa Wong
										</td>
										<td>
											 434
										</td>
										<td class="center">
											 new user
										</td>
										<td>
											<a class="edit" href="javascript:;">
											Edit </a>
										</td>
										<td>
											<a class="delete" href="javascript:;">
											Delete </a>
										</td>
									</tr>
									<tr>
										<td>
											 nick12
										</td>
										<td>
											 Nick Roberts
										</td>
										<td>
											 232
										</td>
										<td class="center">
											 power user
										</td>
										<td>
											<a class="edit" href="javascript:;">
											Edit </a>
										</td>
										<td>
											<a class="delete" href="javascript:;">
											Delete </a>
										</td>
									</tr>
									<tr>
										<td>
											 goldweb
										</td>
										<td>
											 Sergio Jackson
										</td>
										<td>
											 132
										</td>
										<td class="center">
											 elite user
										</td>
										<td>
											<a class="edit" href="javascript:;">
											Edit </a>
										</td>
										<td>
											<a class="delete" href="javascript:;">
											Delete </a>
										</td>
									</tr>
									<tr>
										<td>
											 webriver
										</td>
										<td>
											 Antonio Sanches
										</td>
										<td>
											 462
										</td>
										<td class="center">
											 new user
										</td>
										<td>
											<a class="edit" href="javascript:;">
											Edit </a>
										</td>
										<td>
											<a class="delete" href="javascript:;">
											Delete </a>
										</td>
									</tr>
									<tr>
										<td>
											 gist124
										</td>
										<td>
											 Nick Roberts
										</td>
										<td>
											 62
										</td>
										<td class="center">
											 new user
										</td>
										<td>
											<a class="edit" href="javascript:;">
											Edit </a>
										</td>
										<td>
											<a class="delete" href="javascript:;">
											Delete </a>
										</td>
									</tr>
								</tbody>
							</table>

						</div>
						<!-- /panel content -->

						<!-- panel footer -->
						

					</div>
					<!-- /PANEL -->

				</div>
			</section>
			<script type="text/javascript">
    window.onload = function() {
        document.getElementById('ifYes').style.display = 'none';
    }

    function DetainedCheck() {
        if (document.getElementById('yesCheck').checked) {
            document.getElementById('ifYes').style.display = 'block';
        } 
        else {
            document.getElementById('ifYes').style.display = 'none';
        }
    }

</script>
@stop