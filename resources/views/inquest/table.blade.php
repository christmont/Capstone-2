@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">


				<!-- page title -->
				<header id="page-header">
					<h1>Inquest Table</h1>
					<ol class="breadcrumb">
						<li><a href="#">Tables</a></li>
						<li class="active">Inquest</li>
						
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
								<strong>Inquest Table</strong> <!-- panel title -->
							</span>

						
							<!-- /right options -->

						</div>
						<div class="panel-body">
							
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
									<tr>
										<th>Name of Client/s</th>
										<th>Nature of Call/s(legal Assistance/Legal Advice)</th>
										<th>Inquest Assistant</th>
										<th>Schedule of Duty</th>
										<th>Location</th>
										<th>Case/s</th>
										<th>Action Taken</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><br></td>
										<td><br></td>
										<td><br></td>
										<td><br></td>
										<td><br></td>
										<td><br></td>
										<td><br></td>
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