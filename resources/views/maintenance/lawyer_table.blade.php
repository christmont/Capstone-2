@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">


				<!-- page title -->
				<header id="page-header">
					<h1>LAWYER </h1>
					<ol class="breadcrumb">
						<li><a href="#">Tables</a></li>
						<li class="active">Lawyer </li>
						<div class="pull-right">
								<a  class="btn btn-green" href="#" ><i class="fa fa-plus"></i>New Lawyer</a>
						</div>
					</ol>
				</header>
				<!-- /page title -->


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
								<strong>LAWYER</strong> <!-- panel title -->
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
@stop