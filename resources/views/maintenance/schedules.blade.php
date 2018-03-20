@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">


				<!-- page title -->
				<header id="page-header">
					<h1>Schedule</h1>
					<ol class="breadcrumb">
						<li><a href="#">Tables</a></li>
						<li class="active">Schedule </li>
						<div class="pull-right">
							<a class="btn btn-green" href="{{url('/schedule/register')}}"><i class="fa fa-plus"></i>New Schedule</a>
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
								<strong>Schedule</strong> <!-- panel title -->
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
										<th>Lawyer</th>
										<th>Name</th>
										<th>Start date and time</th>
										<th>End date and time</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
<tbody>
								@foreach ($lawyer as $lawyers)
								      @foreach($lawyers->schedules as $schedules)
									<tr>
										@if(!empty($schedules))
										<td>{{$lawyers->efname}} {{$lawyers->emname}} {{$lawyers->elname}}</td>
										@endif
										
										<td>
											 {{$schedules->type}}
										</td>
										<td>
											 {{$schedules->start}}
										</td>
										<td>
											 {{$schedules->end}}
										</td>
									    
										<td>
											   <a class ="btn btn-warning" href="{{ route('showsched',$schedules->id) }}">Reschedule</a>
										</td>
										<td>
											<form action="{{ route('deletesched',$schedules->id) }}" method = "post">
												{{ csrf_field() }}
        {{ method_field('DELETE') }}
											<button type ="submit" class="btn btn-danger delete-user" onclick="return confirm('Are you sure?')" href="{{ route('deletesched',$schedules->id) }}"><i class="fa fa-trash"></i>
											Delete </button>
										</form>
										</td>

									</tr>
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
			</div>
			</section>
@stop
