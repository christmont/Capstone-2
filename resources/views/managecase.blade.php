@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">
	


				<!-- page title -->
				<header id="page-header">
					<h1>Manage Case</h1>
					<ol class="breadcrumb">
						<li><a href="#">Tables</a></li>
						<li class="active">Case </li>
					</ol>
				</header>
				<!-- /page title -->


      <!-- Modal Header -->

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
								<strong>Manage Case</strong> <!-- panel title -->
							</span>

							<!-- right options -->
							<ul class="options pull-right list-inline">
								<li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Colapse" data-placement="bottom"></a></li>
								<li><a href="#" class="opt panel_fullscreen hidden-xs" data-toggle="tooltip" title="Fullscreen" data-placement="bottom"><i class="fa fa-expand"></i></a></li>
								<li><a href="#" class="opt panel_close" data-confirm-title="Confirm" data-confirm-message="Are you sure you want to remove this panel?" data-toggle="tooltip" title="Close" data-placement="bottom"><i class="fa fa-times"></i></a></li>
							</ul>
							<!-- /right options -->

						</div>
						<div class="panel-body">
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
									<tr>
										<th>Client Name</th>
										<th>Case Name</th>
										<th>Case Status</th>
										<th>Edit</th>
									</tr>
								</thead>
								<tbody>
								@foreach($allcases as $case)
									<tr>
										
										<td>
											 {{$case->clfname}} {{$case->clmname}} {{$case->cllname}}
										</td>
									
										<td>
											 {{$case->casename}} 
										</td>
										<td>
											 {{$case->case_status}} 
										</td>
									   
										<td>
											  	<a class="btn btn-primary"  href="{{route('showeditcase',$case->client_id)}}">
											  	<i class="fa fa-pencil"></i> Edit</a>

					
									
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