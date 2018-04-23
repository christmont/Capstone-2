@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">

				<header id="page-header">
					<h1>TRANSFER CASE</h1>
					
			</header>
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
			</section>
@stop