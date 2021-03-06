@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">


				<!-- page title -->
				<header id="page-header">
					<h1> Most Cases Handled by Case Type</h1>
					<ol class="breadcrumb">
						<li><a href="#"> Queries</a></li>
						<li class="active"> Case Type</li>
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
								<strong>Cases </strong> <!-- panel title -->
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
										<th>Case Type</th>
										<th>Case Name</th>
										<th>Count</th>
									</tr>
								</thead>
								<tbody>
									<tr>
									@foreach($criminalcount as $criminalcounts)
									@foreach($civilcount as $civilcounts)
									@foreach($laborcount as $laborcounts)
									@foreach($administrativecount as $administrativecounts)
									
										<td>{{$criminalcounts->casetype}}</td>
										<td>{{$criminalcounts->casename}}</td>
										<td>{{$criminalcounts->count}}</td>
									</tr>
									<tr>
										<td>{{$civilcounts->casetype}}</td>
										<td>{{$civilcounts->casename}}</td>
										<td>{{$civilcounts->count}}</td>
									</tr>
									<tr>
										<td>{{$laborcounts->casetype}}</td>
										<td>{{$laborcounts->casename}}</td>
										<td>{{$laborcounts->count}}</td>
									</tr>
										<td>{{$administrativecounts->casetype}}</td>
										<td>{{$administrativecounts->casename}}</td>
										<td>{{$administrativecounts->count}}</td>
									
									@endforeach
									@endforeach
									@endforeach
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