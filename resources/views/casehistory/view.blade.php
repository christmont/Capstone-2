@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')
<section id="middle"><br>

				<div class="container">
					<ul class="nav nav-tabs">
						<li><a href="#client">Client</a></li>
						<li><a href="#case">Case to be Handled</a></li>
						<li><a href="#adverse">Adverse</a></li>
					</ul>

					
						<div id="client" class="tab-content">
							<div class="card1">
							<div class="container"><br>
							@foreach($casehistory as $casehistories)
										<div class="form-group">
										<strong>First Name :</strong>
										<label>{{ $casehistories->clfname }}</label>
										</div>
										<div class="form-group">
										<strong>Middle Name :</strong>
										<label>{{ $casehistories->clmname }}</label>
										</div>
										<div class="form-group">
										<strong>Last Name :</strong>
										<label>{{ $casehistories->cllname }}</label>
										</div>
										<div class="form-group">
										<strong>Religion :</strong>
										<label>{{ $casehistories->clreligion }}</label>
										</div>
										<div class="form-group">
										<strong>Citizenship :</strong>
										<label>{{ $casehistories->clcitizenship }}</label>
										</div>
										<div class="form-group">
										<strong>Address :</strong>
										<label>{{ $casehistories->claddress }}</label>
										</div>
										<div class="form-group">
										<strong>Email :</strong>
										<label>{{ $casehistories->clemail }}</label>
										</div>
										<div class="form-group">
										<strong>Birthday :</strong>
										<label>{{ $casehistories->clbdate }}</label>
										</div>
										<div class="form-group">
										<strong>Contact Number :</strong>
										<label>{{ $casehistories->clcontact_no }}</label>
										</div>
										<div class="form-group">
										<strong>Monthly Income :</strong>
										<label>{{ $casehistories->clmonthly_net_income }}</label>
										</div><div class="form-group">
										<strong>Language Spoken :</strong>
										<label>{{ $casehistories->cllanguage }}</label>
										</div>
										<div class="form-group">
										<strong>Educational Attainment :</strong>
										<label>{{ $casehistories->cleducational_attainment }}</label>
										</div>
										<div class="form-group">
										<strong>Gender :</strong>
										<label>{{ $casehistories->clgender }}</label>
										</div>
										<div class="form-group">
										<strong>Detained(?) :</strong>
										<label>{{ $casehistories->cldetained }}</label>
										</div>
										<div class="form-group">
										<strong>Civil Status :</strong>
										<label>{{ $casehistories->clcivil_status }}</label>
										</div>
										<div class="form-group">
										<strong>Nature of Request :</strong>
										<label>{{ $casehistories->nature_of_request }}</label>
										</div><br>
								
							</div>
							</div>								
						</div>
						
						<div id="case" class="tab-content">
							<div class="card1">
							<div class="container"><br>
								        <div class="form-group">
										<strong>Case Number :<strong>
										<label>{{$casehistories->caseno}}</label>
										</div>
								        <div class="form-group">
										<strong>Case Title :<strong>
										<label>{{$casehistories->title}}</label>
										</div>
										<div class="form-group">
										<strong>Interviewer :<strong>
										<label>{{$casehistories->interviewer}}</label>
										</div>
										<div class="form-group">
										<strong>Case Category :<strong>
										<label>{{$casehistories->clcomplainant_victim_of}}</label>
										</div>
										<div class="form-group">
										<strong>Nature of Case :<strong>
										<label>{{$casehistories->nature_of_case}}</label>
										</div>
										<div class="form-group">
										<strong>Case Involvement :<strong>
										<label>{{$casehistories->clcase_involvement}}</label>
										</div>
										@foreach($court as $courts)
										<div class="form-group">
										<strong>Court :<strong>
										<label>{{$courts->name}} {{$courts->branch}}</label>
										</div>
										@endforeach
										@foreach($lawyers as $lawyer)
										<div class="form-group">
										<strong>Lawyer :<strong>
										<label>Atty.{{$lawyer->efname}} {{$lawyer->emname}} {{$lawyer->elname}} </label>
										</div>
										@endforeach
										<br>
							</div>
							</div>								
						</div>
						
						@foreach($adverse as $adverses)
						<div id="adverse" class="tab-content">
							<div class="card1">
							<div class="container"><br>
										<div class="form-group">
										<strong>Adverse Party Type :<strong>
										<label>{{$adverses->advprtytype}}</label>
										</div>
										<div class="form-group">
										<strong>First Name :<strong>
										<label>{{$adverses->advprtyfname}}</label>
										</div>
										<div class="form-group">
										<strong>Middle Name :<strong>
										<label>{{$adverses->advprtymname}}</label>
										</div>
										<div class="form-group">
										<strong>Last Name :<strong>
										<label>{{$adverses->advprtylname}}</label>
										</div>
										<div class="form-group">
										<strong>Address :<strong>
									    <label>{{$adverses->advprtyaddress}}</label>
										</div>
							</div>
							</div>								
						</div>
					  @endforeach
					</div>
				
			</section>
@stop