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
							
										<div class="form-group">
										<strong>First Name :</strong>
										<label>{{ $client->clfname }}</label>
										</div>
										<div class="form-group">
										<strong>Middle Name :</strong>
										<label>{{ $client->clmname }}</label>
										</div>
										<div class="form-group">
										<strong>Last Name :</strong>
										<label>{{ $client->cllname }}</label>
										</div>
										<div class="form-group">
										<strong>Religion :</strong>
										<label>{{ $client->clreligion }}</label>
										</div>
										<div class="form-group">
										<strong>Citizenship :</strong>
										<label>{{ $client->clcitizenship }}</label>
										</div>
										<div class="form-group">
										<strong>Address :</strong>
										<label>{{ $client->claddress }}</label>
										</div>
										<div class="form-group">
										<strong>Email :</strong>
										<label>{{ $client->clemail }}</label>
										</div>
										<div class="form-group">
										<strong>Birthday :</strong>
										<label>{{ $client->clbdate }}</label>
										</div>
										<div class="form-group">
										<strong>Contact Number :</strong>
										<label>{{ $client->clcontact_no }}</label>
										</div>
										<div class="form-group">
										<strong>Monthly Income :</strong>
										<label>{{ $client->clmonthly_net_income }}</label>
										</div><div class="form-group">
										<strong>Language Spoken :</strong>
										<label>{{ $client->cllanguage }}</label>
										</div>
										<div class="form-group">
										<strong>Educational Attainment :</strong>
										<label>{{ $client->cleducational_attainment }}</label>
										</div>
										<div class="form-group">
										<strong>Gender :</strong>
										<label>{{ $client->clgender }}</label>
										</div>
										<div class="form-group">
										<strong>Detained(?) :</strong>
										<label>{{ $client->cldetained }}</label>
										</div>
										<div class="form-group">
										<strong>Civil Status :</strong>
										<label>{{ $client->clcivil_status }}</label>
										</div>
										<div class="form-group">
										<strong>Nature of Request :</strong>
										<label>{{ $client->nature_of_request }}</label>
										</div><br>
								
							</div>
							</div>								
						</div>
						@foreach($cases as $case)
						<div id="case" class="tab-content">
							<div class="card1">
							<div class="container"><br>
										<div class="form-group">
										<strong>Case Name :<strong>
										<label>{{$case->casename}}</label>
										</div>
										<div class="form-group">
										<strong>Interviewer :<strong>
									    <label>{{$case->interviewer}}</label>
										</div>
										<div class="form-group">
										<strong>Case Category :<strong>
									    <label>{{$case->clcomplainant_victim_of}}</label>
										</div>
										<div class="form-group">
										<strong>Nature of Case :<strong>
									    <label>{{$case->nature_of_case}}</label>
										</div>
										<div class="form-group">
										<strong>Case Involvement :<strong>
									    <label>{{$case->clcase_involvement}}</label>
										</div><br>
							</div>
							</div>								
						</div>
						@endforeach
						@foreach($adverses as $adverse)
						<div id="adverse" class="tab-content">
							<div class="card1">
							<div class="container"><br>
										<div class="form-group">
										<strong>Adverse Party Type :<strong>
									    <label>{{$adverse->advprtytype}}</label>
										</div>
										<div class="form-group">
										<strong>First Name :<strong>
									    <label>{{$adverse->advprtyfname}}</label>
										</div>
										<div class="form-group">
										<strong>Middle Name :<strong>
										<label>{{$adverse->advprtymname}}</label>
										</div>
										<div class="form-group">
										<strong>Last Name :<strong>
										<label{{$adverse->advprtylname}}></label>
										</div>
										<div class="form-group">
										<strong>Address :<strong>
										<label>{{$adverse->advprtyaddress}}</label>
										</div>
							</div>
							</div>								
						</div>
						@endforeach
					</div>
				
			</section>
@stop