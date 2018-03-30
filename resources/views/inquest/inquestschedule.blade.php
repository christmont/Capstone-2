




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
								<div class="pull-right">
							<a  class="btn btn-green" href="/lawsuit/register" style="line-height: 1.5;"><i class="fa fa-plus"></i>PRINT</a>
						</div>

							</span>

						
							<!-- /right options -->

						</div>
						<div class="panel-body">
							
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
									<tr>
										<th>Actions</th>
										<th colspan="3">{{$monthnow}}</th>
										<th>LAWYER/s & STAFF</th>
									</tr>
									<tr>
										<th><i class="fa fa-cogs"></i></th>
										<th>DATE</th>
										<th>DAY</th>
										<th>TIME</th>
										<th> </th>
									</tr>
								</thead>
									@foreach($schedule as $schedules)
									<tbody>
									<tr>
										<td>
								<div class="btn-group" role="group" aria-label="Basic example">
  							<a  class="btn btn-primary" href="{{ route('showsched',$schedules->id) }}">Reschedule</a>
  							@foreach($inquest as $inquests)
  							<a  class="btn btn-green" href="{{ route('inquestedit',$inquests->id) }}">Edit</a>
  							@endforeach
 	 									<form action="{{ route('deletesched',$schedules->id) }}" method = "post">
												{{ csrf_field() }}
        									{{ method_field('DELETE') }}
											<button type ="submit" class="btn btn-danger delete-user" onclick="return confirm('Are you sure?')" href="{{ route('deletesched',$schedules->id) }}">
											Delete </button>
										</form>
								</div>
										</td>
										<td>{{date('j',strtotime($schedules->start))}}</td>
										<td> {{date('l',strtotime($schedules->start))}} </td>
										
										<td> {{date('g a',strtotime($schedules->start))}} - {{date(' ga',strtotime($schedules->end))}} </td>
									@foreach($firstlawyer as $firstlawyers)
									@foreach($secondlawyer as $secondlawyers)
									@foreach($assistant as $assistants)
										<td> Atty.{{$firstlawyers->efname}} {{$firstlawyers->emname}} {{$firstlawyers->elname}} <br>
											 Atty.{{$secondlawyers->efname}} {{$secondlawyers->emname}} {{$secondlawyers->elname}} <br>
											 {{$assistants->efname}} {{$assistants->emname}} {{$assistants->elname}}
										 </td>
									@endforeach
									@endforeach
									@endforeach
									</tr>
									</tbody>
									@endforeach
							
								</table>
								
								</div>
								</div>
							</div>	
						</div>
					</div>

</section>
@stop
