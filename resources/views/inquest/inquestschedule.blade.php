




@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')  
@section('content')

<section id="middle">
<div id="content" class="padding-20">
					

					<div class="panel panel-default">
						<div class="panel-body">
							<div class="container">
							<div class="row" style="margin-left: 15px;margin-right: 15px;">
								<header>
									<h1 style="text-align: center;">INQUEST SCHEDULE</h1>
								</header>
								<div style="text-align: center;">
									<h3> For the Month of {{$monthnow}} {{date('Y',strtotime($year))}} </h3>
								</div>

								<table>
									<tr>
										<th></th>
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
									@foreach($schedule as $schedules)
									<tr>
										<td>
								<div class="btn-group" role="group" aria-label="Basic example">
  							<a  class="btn btn-primary" href="{{ route('showsched',$schedules->id) }}">Reschedule</a>
  							@foreach($inquest as $inquests)
  							<a  class="btn btn-warning" href="{{ route('showsched',$inquests->id) }}">Edit</a>
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
									@endforeach
							
								</table>
								
								</div>
								</div>
							</div>	
						</div>
					</div>

</section>
@stop
