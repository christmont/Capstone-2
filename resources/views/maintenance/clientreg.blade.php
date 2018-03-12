@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">
<div class="container">
<br><br>
      <!-- Modal Header -->
     <center> <header>
      
        <h4>Add Client</h4>
      </header></center>

      <!-- Modal Body -->
      <form action="{{ url('client/register') }}" id="client" method="POST">
      {{ csrf_field() }}
      <div class="modal-body">
      	<div class="row">
			<div class="form-group">
				<div class="col-md-4">
					<label>First Name *</label>
					<input type="text" name="fname" value="" class="form-control "required>
				</div>
				<div class="col-md-4">
					<label>Middle Name </label>
					<input type="text" name="mname" value="" class="form-control ">
				</div>
				<div class="col-md-4">
					<label>Last Name *</label>
					<input type="text" name="lname" value="" class="form-control "required><br>
				</div><br>
				<div class="col-md-6">
					<label>Religion *</label>
					<select name="religion" class="form-control "required onchange="if (this.value=='others'){this.form['others'].style.visibility='visible'}else {this.form['others'].style.visibility='hidden'};">
					<option value="" selected="selected"></option>
					@foreach($religions as $religion)
      <option value="{{$religion->name}}">{{$religion->name}}</option>
    @endforeach
					{{-- <option value="others">Other</option> --}}
					</select>
					<input type="textbox" name="others" class="form-control required" style="visibility:hidden;"/>
				</div>
				<div class="col-md-6">
					<label>Citizenship *</label><br>
					<select name="Citizenship" class="form-control "required onchange="if (this.value=='other'){this.form['other'].style.visibility='visible'}else {this.form['other'].style.visibility='hidden'};">
					<option value="" selected="selected"></option>
					@foreach($citizenships as $citizen)
      <option value="{{$citizen->name}}">{{$citizen->name}}</option>
    @endforeach
					{{-- <option value="other">Others</option> --}}
					</select>
					<input type="textbox" name="other" class="form-control " style="visibility:hidden;"/>
				</div>
				<div class="col-md-12">
					<label>Address *</label>
					<input type="text" name="Address" value="" class="form-control "required><br>
				</div>
				<div class="col-md-6">
					<label>Email *</label>
					<input type="email" name="Email" value="" class="form-control "required>
				</div><br>
				<div class="col-md-6">
					<label>Birthday *</label>
					<input type="date" name="Birthday" value="" class="form-control "required><br>
				</div>
				<div class="col-md-6">
					<label>Contact Number *</label>
					<input type="number" name="Contact" value="" class="form-control "required>
				</div>			<br>	
				<div class="col-md-6">
					<label>Monthly Income *</label>
					<input type="number" name="Income" value="" class="form-control "required><br>
				</div>
				<div class="col-md-6">
					<label>Language Spoken  *</label>
					<select name="Language" class="form-control "required onchange="if (this.value=='otherss'){this.form['otherss'].style.visibility='visible'}else {this.form['otherss'].style.visibility='hidden'};">
					<option value="" selected="selected"></option>
					@foreach($languages as $language)
      <option value="{{$language->name}}">{{$language->name}}</option>
    @endforeach
					{{-- <option value="otherss">Other</option> --}}
					</select>
					<input type="textbox" name="otherss" class="form-control required" style="visibility:hidden;"/>
				
				</div>
				<div class="col-md-6">
					<label>Educational Attainment *</label>
					<select name="Educational" class="form-control " required onchange="if (this.value=='edu'){this.form['edu'].style.visibility='visible'}else {this.form['edu'].style.visibility='hidden'};">
					<option value="" selected="selected"></option>
					@foreach($educations as $education)
      <option value="{{$education->name}}">{{$education->name}}</option>
    @endforeach
					{{-- <option value="edu">Other</option> --}}
					</select>
					<input type="textbox" name="edu" class="form-control required" style="visibility:hidden;"/>
				
				</div>
				<div class="col-md-6">
					<label>Gender *</label><br>
					<input type="radio" name="gender" value="male">Male
         			<input type="radio" name="gender" value="female"> Female<br><br><br>	
				</div>
				<div class="col-md-6">
					<label>Detained(?) *</label><br>
					<input type="radio" onclick="javascript:DetainedCheck();" name="detained" id="yesCheck" value = "yes">Yes 
					<input type="radio" onclick="javascript:DetainedCheck();" name="detained" id="noCheck" value = "no" >No<br>
    				<div id="ifYes" style="display:none;margin-top:3%;">
        			Detained Since<input type="date" name="Detained" value="" class="form-control ">
        			Place of Detenstion<input type="text" name="Detained" value="" class="form-control ">
    				</div>
				</div>
				
				<div class="col-md-6"><br>																			
					<label>Civil Status *</label><br>
					<input type="radio" onclick="javascript:civilstatCheck();" name="civilstat" value="single"  id="noCheck"> Single
          			<input type="radio" onclick="javascript:civilstatCheck();" name="civilstat" id="marriedCheck" value="married" > Married
          			<input type="radio" onclick="javascript:civilstatCheck();" name="civilstat" value="divorced"  id="noCheck"> Divorced
          			<input type="radio"  onclick="javascript:civilstatCheck();" name="civilstat" value="widowed" id="noCheck"> Widowed
          			<div id="ifMarried" style="display:none;margin-top:3%;">
        			Spouse Name<input type="text" name="spouse" value="" class="form-control ">
        			Spouse Address<input type="text" name="spouse_addr" value="" class="form-control ">
        			Spouse Contact Number<input type="text" name="spouse_con" value="" class="form-control ">
    				</div>
				</div><br>
				<div class="col-md-6">
					<label>Nature of Request *</label>
					<select name="nor" class="form-control "required onchange="if (this.value=='others'){this.form['others'].style.visibility='visible'}else {this.form['others'].style.visibility='hidden'};">
					<option value="" selected="selected"></option>
					@foreach($religions as $religion)
      <option value="{{$religion->name}}">{{$religion->name}}</option>
    @endforeach
					{{-- <option value="others">Other</option> --}}
					</select>
					<input type="textbox" name="others" class="form-control " style="visibility:hidden;"/>
				</div>
			</div>
		</div>

 
      </div>

      <!-- Modal Footer -->
      <footer><center>
        <button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
        <button type="submit" class="btn btn-green ">Next</button>
         <br><br><br><br></center>
      </footer><br>
</form>





</div>
			
		<script type="text/javascript">
    window.onload = function() {
        document.getElementById('ifYes').style.display = 'none';
    }

    function DetainedCheck() {
        if (document.getElementById('yesCheck').checked) {
            document.getElementById('ifYes').style.display = 'block';
        } 
        else {
            document.getElementById('ifYes').style.display = 'none';
        }
    }

</script>

<script type="text/javascript">
    window.onload = function() {
        document.getElementById('ifMarried').style.display = 'none';
    }

    function civilstatCheck() {
        if (document.getElementById('marriedCheck').checked) {
            document.getElementById('ifMarried').style.display = 'block';
        } 
        else {
            document.getElementById('ifMarried').style.display = 'none';
        }
    }
   
   </script>



						
</section>		
@stop