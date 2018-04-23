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
							<div class="container-fluid"><br>
								<div class="row" style="height: 490px;">
									<div class="form-group">
										<div class="col-md-6">
										<label>First Name :</label>
										<input type="" name="" class="form-control" value="{{ $client->clfname }}" readonly>
										</div>
										<div class="col-md-6">
										<label>Middle Name :</label>
										<input type="" name="" class="form-control" value="{{ $client->clmname }}" readonly>
										</div>
										<div class="col-md-6">
										<label>Last Name :</label>
										<input type="" name="" class="form-control" value="{{ $client->cllname }}" readonly>
										</div>
										<div class="col-md-6">
										<label>Religion :</label>
										<input type="" name="" class="form-control" value="{{ $client->clreligion }}" readonly>
										</div>
										<div class="col-md-6">
										<label>Citizenship :</label>
										<input type="" name="" class="form-control" value="{{ $client->clcitizenship }}" readonly>
										</div>
										<div class="col-md-6">
										<label>Address :</label>
										<input type="" name="" class="form-control" value="{{ $client->claddress }}" readonly>
										</div>
										<div class="col-md-6">
										<label>Email :</label>
										<input type="" name="" class="form-control" value="{{ $client->clemail }}" readonly>
										</div>
										<div class="col-md-6">
										<label>Birthday :</label>
										<input type="" name="" class="form-control" value="{{ $client->clbdate }}" readonly>
										</div>
										<div class="col-md-6">
										<label>Contact Number :</label>
										<input type="" name="" class="form-control" value="{{ $client->clcontact_no }}" readonly>
										</div>
										<div class="col-md-6">
										<label>Monthly Income :</label>
										<input type="" name="" class="form-control" value="{{ $client->clmonthly_net_income }}" readonly>
										</div>
										<div class="col-md-6">
										<label>Language Spoken :</label>
										<input type="" name="" class="form-control" value="{{ $client->cllanguage }}" readonly>
										</div>
										<div class="col-md-6">
										<label>Educational Attainment :</label>
										<input type="" name="" class="form-control" value="{{ $client->cleducational_attainment }}" readonly>
										</div>
										<div class="col-md-6">
										<label>Gender :</label>
										<input type="" name="" class="form-control" value="{{ $client->clgender }}" readonly>
										</div>
										<div class="col-md-6">
										<label>Detained(?) :</label>
										<input type="" name="" class="form-control" value="{{ $client->cldetained }}" readonly>
										</div>
										<div class="col-md-6">
										<label>Civil Status :</label>
										<input type="" name="" class="form-control" value="{{ $client->clcivil_status }}" readonly>
										</div>
										<div class="col-md-6">
										<label>Nature of Request :</label>
										<input type="" name="" class="form-control" value="{{ $client->nature_of_request }}" readonly>
										</div><br>
								</div>
							</div>
							</div>							
						</div>
					</div> 	
						@foreach($cases as $case)
						<div id="case" class="tab-content">
							<div class="card1">
							<div class="container-fluid">
								<div class="row" style="height: 490px;">
									<div class="form-group">
										<div class="col-md-12"><br>
										<label>Case Name :</label>
										<label class="form-control" readonly>{{$case->casename}}</label>
										</div>
										<div class="col-md-12">
										<label>Interviewer :</label>
									    <label class="form-control" readonly>{{$case->interviewer}}</label>
										</div>
										<div class="col-md-12">
										<label>Case Category :</label>
									    <label class="form-control" readonly>{{$case->clcomplainant_victim_of}}</label>
										</div>
										<div class="col-md-12">
										<label>Nature of Case :</label>
									    <label class="form-control" readonly>{{$case->nature_of_case}}</label>
										</div>
										<div class="col-md-12">
										<label>Case Involvement :</label>
									    <label class="form-control" readonly>{{$case->clcase_involvement}}</label>
										</div><br>
							</div>
							</div>	
							</div>	
							</div>						
						</div>
						@endforeach
						@foreach($adverses as $adverse)
						<div id="adverse" class="tab-content">
							<div class="card1">
							<div class="container-fluid"><br>
									<div class="row" style="height: 490px;">
									<div class="form-group">
										<div class="col-md-12">
										<label>Adverse Party Type :</label>
									    <label class="form-control" readonly>{{$adverse->advprtytype}}</label>
										</div>
										<div class="col-md-12">
										<label>First Name :</label>
									    <label class="form-control" readonly>{{$adverse->advprtyfname}}</label>
										</div>
										<div class="col-md-12">
										<label>Middle Name :</label>
										<label class="form-control" readonly>{{$adverse->advprtymname}}</label>
										</div>
										<div class="col-md-12">
										<label>Last Name :</label>
										<label class="form-control" readonly>{{$adverse->advprtylname}}</label>
										</div>
										<div class="col-md-12">
										<label>Address :</label>
										<label class="form-control" readonly>{{$adverse->advprtyaddress}}</label>
										</div>
							</div>
							</div>								
						</div>
						@endforeach
					</div>
				</div>
			</div>
				
			</section>
@stop