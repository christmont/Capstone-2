@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')
<br><br>
<section id="middle">
<div class="container">

<form class="form-horizontal" action="/client/register" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
			<div class="form-group">
				<div class="col-md-4">
					<label>First Name *</label>
					<input type="text" name="fname" value="" class="form-control required">
				</div>
				<div class="col-md-4">
					<label>Middle Name *</label>
					<input type="text" name="mname" value="" class="form-control required">
				</div>
				<div class="col-md-4">
					<label>Last Name *</label>
					<input type="text" name="lname" value="" class="form-control required"><br>
				</div><br>
				<div class="col-md-6">
					<label>Religion *</label>
					<input type="text" name="religion" value="" class="form-control required">
				</div>
				<div class="col-md-6">
					<label>Citizenship *</label>
					<input type="text" name="Citizenship" value="" class="form-control required"><br>
				</div>
				<div class="col-md-12">
					<label>Address *</label>
					<input type="text" name="Address" value="" class="form-control required"><br>
				</div>
				<div class="col-md-6">
					<label>E-mail *</label>
					<input type="text" name="Email" value="" class="form-control required">
				</div>
				<div class="col-md-6">
					<label>Birthday *</label>
					<input type="date" name="Birthday" value="" class="form-control required"><br>
				</div>
				<div class="col-md-6">
					<label>Contact Number *</label>
					<input type="text" name="Contact" value="" class="form-control required">
				</div>				
				<div class="col-md-6">
					<label>Monthly Income *</label>
					<input type="text" name="Income" value="" class="form-control required"><br>
				</div>
				<div class="col-md-6">
					<label>Language/Dialect *</label>
					<input type="text" name="Language" value="" class="form-control required">
				</div>
				<div class="col-md-6">
					<label>Educational Attainment *</label>
					<input type="text" name="Educational" value="" class="form-control required"><br>
				</div>
				
				<div class="col-md-6">
					<label>Gender *</label><br>
					<input type="radio" name="gender" value="male">Male
         			<input type="radio" name="gender" value="female"> Female<br><br><br>	
				</div>
				<div class="col-md-6">
					<label>Detained(?) *</label><br>
					<input type="radio" onclick="javascript:DetainedCheck();" name="Detained" id="yesCheck">Yes <input type="radio" 
					onclick="javascript:DetainedCheck();" name="Detained" id="noCheck">No<br>
    				<div id="ifYes" style="display:none;margin-top:3%;">
        			Detained Since<input type="date" name="Detained" value="" class="form-control required">
        			Place of Detention<input type="text" name="Detained" value="" class="form-control required">
    				</div>
				</div>
				<br>
				
				<div class="col-md-6">
					<label>Civil Status *</label><br>
					<input type="radio" name="civilstat" value="single"> Single
          			<input type="radio" name="civilstat" value="married"> Married
          			
          			<input type="radio" name="civilstat" value="widowed"> Widowed
				</div>
			</div>
		</div>

 
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
        <button type="submit" class="btn btn-green"/>Save changes
      </div>

    </div>
</form>
</div>
</section>