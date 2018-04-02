@extends('lawyer ui/lawyer ui')
@extends('lawyer ui/lawyer side-nav')
@extends('lawyer ui/lawyer header-main')

@section('script')
<link rel="stylesheet" type="text/css" href="{{asset('fullcalendar/fullcalendar.print.css')}}" media="print">
<link rel="stylesheet" type="text/css" href="{{asset('fullcalendar/fullcalendar.css')}}">
<script type= "text/javascript" src="{{URL::asset('fullcalendar/fullcalendar.js') }}"></script>
<script type="text/javascript">
	
	$(function(){
        $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay,listMonth'
          },  
          aspectRatio: 1,
          navLinks: true, // can click day/week names to navigate views 
          eventLimit: true, // allow "more" link when too many events
          rendering: 'inverse-background',
          eventColor: 'rgb(251,189,8)',
          // eventTextColor: 'black',
          events: function(start, end, timezone, callback) {
            $.ajax({
              url: '/getSchedules',
              type: 'get',
              dataType: 'json',
              success: function(response) {  
                var events = [];
                response.forEach(function(data){
                  // var color = '';
                  // var textcolor = '';
                  // if (data.status == 'Completed') {
                  //   color = 'rgb(33,133,208)';
                  // } else if(data.status == 'Cancelled') {
                  //   color = 'rgb(219,40,40)';
                  // } else if(data.status == 'Booked') {
                  //   color = 'rgb(33,186,69)';
                  // }
                  events.push({
                    id: data.id,
                    title: data.controlno,
                    start: data.start,
                    // end: data.end,
                    color: 'rgb(33,133,208)',
                    // textColor: textcolor,
                    url: '/lawyerschedule/show/',
                  });
                });
                callback(events);
              }
            });
          }
        });
	});
</script>
@endsection

@section('contents')

<section id="middle">


				<!-- page title -->
				<header id="page-header">
					<h1>Schedule</h1>
					<ol class="breadcrumb">
						<li><a href="#">Tables</a></li>
						<li class="active">Schedule </li>
						
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
										<th>Client Name</th>
										<th>Schedule Name</th>
										<th>Case Title</th>
										<th>Case Name</th>
										<th>Start date and time</th>
										<th>End date and time</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
<tbody>
								@foreach ($hearingsched as $schedules)
								      
									<tr>
										
										

										<td>
											{{$schedules->clfname}} {{$schedules->clmname}} {{$schedules->cllname}}
										</td>
									
										<td>
											 {{$schedules->type}}
										</td>											
										
										<td>
											{{$schedules->title}}
										</td>

										<td>
											{{$schedules->casename}}
										</td>
										
										<td>
											 {{$schedules->start}}
										</td>
										<td>
											 {{$schedules->end}}
										</td>
									    @foreach($schedule as $sched)
										<td>
											   <a class ="btn btn-warning" href="{{ route('lawyer.showeditsched',$sched->id) }}">Reschedule</a>
										</td>
										<td>
											<form action="{{ route('deletesched',$sched->id) }}" method = "post">
												{{ csrf_field() }}
        {{ method_field('DELETE') }}
											<button type ="submit" class="btn btn-danger delete-user" onclick="return confirm('Are you sure?')" href="{{ route('deletesched',$sched->id) }}"><i class="fa fa-trash"></i>
											Delete </button>
										</form>
										</td>
										@endforeach
									</tr>
										
									@endforeach	
									
								</tbody>
							</table>

							<div id="calendar"></div>
						</div>
						<!-- /panel content -->

						<!-- panel footer -->

					</div>
					<!-- /PANEL -->

				</div>
			</section>
@stop