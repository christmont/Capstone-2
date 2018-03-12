@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')
<section><br>
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
										<label>First Name :</label>
										</div>
										<div class="form-group">
										<label>Middle Name :</label>
										</div>
										<div class="form-group">
										<label>Last Name :</label>
										</div>
										<div class="form-group">
										<label>Religion :</label>
										</div>
										<div class="form-group">
										<label>Citizenship :</label>
										</div>
										<div class="form-group">
										<label>Address :</label>
										</div>
										<div class="form-group">
										<label>Email :</label>
										</div>
										<div class="form-group">
										<label>Birthday :</label>
										</div>
										<div class="form-group">
										<label>Contact Number :</label>
										</div>
										<div class="form-group">
										<label>Monthly Income :</label>
										</div><div class="form-group">
										<label>Language Spoken :</label>
										</div>
										<div class="form-group">
										<label>Educational Attainment :</label>
										</div>
										<div class="form-group">
										<label>Gender :</label>
										</div>
										<div class="form-group">
										<label>Detained(?) :</label>
										</div>
										<div class="form-group">
										<label>Civil Status :</label>
										</div>
										<div class="form-group">
										<label>Nature of Request :</label>
										</div><br>
							</div>
							</div>								
						</div>
						<div id="case" class="tab-content">
							<div class="card1">
							<div class="container"><br>
										<div class="form-group">
										<label>Cases Name :</label>
										</div>
										<div class="form-group">
										<label>Interviewer :</label>
										</div>
										<div class="form-group">
										<label>Case Category :</label>
										</div>
										<div class="form-group">
										<label>Nature of Case :</label>
										</div>
										<div class="form-group">
										<label>Case Involvement :</label>
										</div><br>
							</div>
							</div>								
						</div>
						<div id="adverse" class="tab-content">
							<div class="card1">
							<div class="container"><br>
										<div class="form-group">
										<label>Adverse Party Type :</label>
										</div>
										<div class="form-group">
										<label>First Name :</label>
										</div>
										<div class="form-group">
										<label>Middle Name :</label>
										</div>
										<div class="form-group">
										<label>Last Name :</label>
										</div>
										<div class="form-group">
										<label>Address :</label>
										</div>
							</div>
							</div>								
						</div>
					</div>
				
			</section>
@stop