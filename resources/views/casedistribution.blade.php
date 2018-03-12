@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">


				<!-- page title -->
				<header id="page-header">
					<h1>TRANSFER CASE</h1>
					
			</header>

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
					
						<!--<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="pull-right">
									<a href="#createprojects" class="btn btn-sm btn-green" data-toggle="modal"><i class="fa fa-plus"></i> New Request</a>
									
								</div>
							</div>
							
						</div>
						 panel content -->
						<div class="panel-body">
							<div class="container-fluid">
								<div class="col-md-6">
						<div class="card1">
								<div class="container">
			@foreach($cases as $case)
								
								@foreach($case->casetobehandled as $casetransfer)	
										<form>
											<div class="form-group">
										<label>Case Name :{{$casetransfer->casename}}</label>
										</div>
										<div class="form-group">
										<label>Interviewer :{{$casetransfer->interviewer}}</label>
										</div>
										
										<div class="form-group">
										<label>Client Complainant Victim Of :{{$casetransfer->clcomplainant_victim_of}}</label>
										</div>
										<div class="form-group">
										<label>Nature of Case :{{$casetransfer->nature_of_case}}</label>
										</div>
										<div class="form-group">
										<label>Case Involvement :{{$casetransfer->clcase_involvement}}</label>
										</div>
										@foreach($employee as $employees)
										<div class="form-group">
										<label>Assigned To: Atty.{{$employees->efname}} {{$employees->emname}} {{$employees->elname}}</label>
										</div>
								        @endforeach
											</form>
										</div>
										</div>
										</div>
			                    @endforeach
								
								<div class="col-md-6">
							<div class="card">
								<div class="container">
							  <form  action="{{ route('casetransfer',$case->id) }}" method="post">
                                 {{ csrf_field() }}
						         {{ method_field('PUT') }}
								<h1>Lawyer Names</h1>
								<select name="replace" style="width: 50%">
									<option value="" selected="selected"></option>
					@foreach($replacement as $replacements)
                                    <option value="{{$replacements->id}}">{{$replacements->efname}} {{$replacements->emname}} {{$replacements->elname}}</option>
                    @endforeach
								</select>
								<br><br>
            @endforeach	               
        						<button type="submit" style="align-items: center;" class="btn btn-green">TRANSFER</button>
								</div>
						      </form>
				
	
								<br><br>
						</div><br>
						</div>
						
										</div>
						</div>
						<!-- /panel content -->

						<!-- panel footer -->
						


			
			</section>
@stop