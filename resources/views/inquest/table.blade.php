@extends('lawyer ui/lawyer ui')
@extends('lawyer ui/lawyer side-nav')
@extends('lawyer ui/lawyer header-main')
@section('contents')

<section id="middle">


				<!-- page title -->
				<header id="page-header">
					<h1>Inquest Table</h1>
					<ol class="breadcrumb">
						<li><a href="#">Tables</a></li>
						<li class="active">Inquest</li>
						
					</ol>
				</header>
				<div id="content" class="padding-20">
					<div id="panel-1" class="panel panel-default">
						<div class="panel-heading">
							<span class="title elipsis">
								<strong>Inquest Table</strong>
								<div class="pull-right">
							<a  class="btn btn-primary" href="/print/lawyerinquest" style="line-height: 1.5;"><i class="fa fa-print"></i>PRINT</a>
						</div>
							</span></div>
						<div class="panel-body">
							
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
									<tr>
										<th>Actions</th>
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
									@foreach($inquest as $inquests)
									
									@foreach($schedule as $schedules)
									@foreach($firstlawyer as $firstlawyers)
									@foreach($secondlawyer as $secondlawyers)
									@foreach($assistant as $assistants)
									<tr>
										<td>
											<div class="btn-group" role="group" aria-label="Basic example">
				  							<a  class="btn btn-primary" href="{{ route('showsched',$schedules->id) }}">Reschedule</a><br><br>
				  							@foreach($inquest as $inquests)
				  							<a  class="btn btn-green" href="{{ route('inquestedit',$inquests->id) }}">Edit</a><br><br>
				  							@endforeach
 	 										<form action="{{ route('deletesched',$schedules->id) }}" method = "post">
												{{ csrf_field() }}
        									{{ method_field('DELETE') }}
											<button type ="submit" class="btn btn-danger delete-user" onclick="return confirm('Are you sure?')" href="#">
											Delete </button>
											</form>
											</div>
										</td>
										@foreach($client as $clients)
										<td>{{$clients->clfname}} {{$clients->clmname}} {{$clients->cllname}}</td>
										@endforeach
										<td>{{$inquests->natureofcalls}}</td>
										<td>{{$assistants->efname}} {{$assistants->emname}} {{$assistants->elname}}</td>
										<td>{{date('F j Y g:i a',strtotime($schedules->start))}}  {{date('F j Y g:i a',strtotime($schedules->end))}}</td>
										<td>{{$inquests->location}}</td>
										@foreach($clients->casetobehandled as $case)
										<td>{{$case->casename}}</td>
										@endforeach
										<td>{{$inquests->actiontaken}}</td>
									</tr>
									
									@endforeach
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