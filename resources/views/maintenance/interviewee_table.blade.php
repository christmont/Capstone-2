@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">


				<!-- page title -->
				<header id="page-header">
					<h1>INTERVIEWEE </h1>
					<ol class="breadcrumb">
						<li><a href="#">Tables</a></li>
						<li class="active">Interviewee </li>
						<div class="pull-right">
							<div class="pull-right">
							<button type="button" data-target=".bs-example-modal-full" class="btn btn-sm btn-green" data-toggle="modal"><i class="fa fa-plus"></i> New Interviewee</a>
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
        <h4 class="modal-title" id="myModalLabel">Add Request</h4>
      </div>

      <!-- Modal Body -->
      <form action="{{ url('interviewees') }}" method="POST">
      {{ csrf_field() }}
      <div class="modal-body">
      	<div class="row">
			<div class="form-group">
				<div class="col-md-4">
					<label>First Name *</label>
					<input type="text" name="intfname" value="" class="form-control required">
				</div>
				<div class="col-md-4">
					<label>Middle Name *</label>
					<input type="text" name="intmname" value="" class="form-control required">
				</div>
				<div class="col-md-4">
					<label>Last Name *</label>
					<input type="text" name="intlname" value="" class="form-control required"><br>
				</div><br>
				<div class="col-md-6">
					<label>Client's Relationship *</label>
					<input type="text" name="intrelation" value="" class="form-control required">
				</div>
				<div class="col-md-12"><br>
					<label>Address *</label>
					<input type="text" name="intaddress" value="" class="form-control required"><br>
				</div>
				<div class="col-md-6">
					<label>E-mail *</label>
					<input type="text" name="intemail" value="" class="form-control required">
				</div>
				<div class="col-md-6">
					<label>Date of Birth *</label>
					<input type="date" name="intdob" value="" class="form-control required"><br>
				</div>
				<div class="col-md-6">
					<label>Contact Number *</label>
					<input type="text" name="intcontactno" value="" class="form-control required">
				</div>
				<div class="col-md-6">
					<label>Gender *</label><br>
					<input type="radio" name="intgender" value="male">Male
         			<input type="radio" name="intgender" value="female"> Female<br><br><br>	
				</div>
				<div class="col-md-6">
					<label>Civil Status *</label><br>
					<input type="radio" name="intcivilstatus" value="single"> Single
          			<input type="radio" name="intcivilstatus" value="married"> Married
          			<input type="radio" name="intcivilstatus" value="divorced"> Divorced
          			<input type="radio" name="intcivilstatus" value="widowed"> Widowed
				</div>
			</div>
		</div>
 
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-green">Submit</button>
      </div>

    </div>
  </div>
</div>
</form>
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
								<strong>INTERVIEWEE</strong> <!-- panel title -->
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
										<th>Full Name</th>
										<th>Client Affiliated</th>
										<th>Relationship to Client</th>
										<th>Email</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>

								<tbody>
								@foreach ($interviewees as $interviewee)
									<tr>
										<td>
											 {{$interviewee->intlname}}, {{$interviewee->intfname}}, {{$interviewee->intmname}}
										</td>
										<td>
											 Ryan Lumido
										</td>
										<td>
											 {{$interviewee->intrelation}}
										</td>
										<td class="center">
											 {{$interviewee->intemail}}
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
									@endforeach
								</tbody>
							</table>

						</div>
						<!-- /panel content -->

						<!-- panel footer -->
						

					</div>
					<!-- /PANEL -->

				</div>
			</section>
@stop