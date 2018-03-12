@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')
				
<section id="middle">
				<header id="page-header">
					<h1>New Requests</h1>
					<ol class="breadcrumb">
						<li><a href="#">Add</a></li>
						<li class="active">New Requests</li>
						
					</ol>
				</header>
	<div class="container-fluid">
		<ul class="nav nav-tabs">
			<li><a href="#nature">Nature of Request</a></li>
			<li><a href="#clientinfo">Client Info</a></li>
			<li id="ifMarried" style="display:none;"><a href="#clientmarital">Client Marital Info</a></li>
			<li id="ifYes" style="display:none;" ><a href="#detention">Client Detention</a></li>
			<li><a href="#case">Case</a></li>
			<li><a href="#adverse">Adverse</a></li>
			{{-- <li><a href="#case">Case Details</a></li>
			<li><a href="#adverse">Case Adverse</a></li> --}}
		</ul>
		@foreach($clients as $client)
		<form class ="horizontal" action="{{ route('updatecase',$client->id) }}" method="post" enctype="multipart/form-data">
		 {{ csrf_field() }}
      {{ method_field('PUT') }}
		<div id="nature" class="tab-content">
			<div class="card1">

				<div class="container">

					<div class="row">
						<div class="form-group">
							
                 
							<div class="col-md-4">

					<div class="row" style="height: 520px; width: 100%">

				<div class="container">						
					<div class="row" style="height: 490px; width: 100%">
						{{-- 	<form class="form-horizontal" action="/client/register" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }} --}}

						<div class="form-group"><br>
							<div class="col-md-6">
								<label>
									Nature of Request*
								</label>
								<input type ="text" name="nor" value ="{{$client->nature_of_request}}" class="form-control " >required >
					</input>
							</div>
						</div>
					</div>
					<footer style="margin-bottom: 20px; text-align: center;">
					        <a class="btn btn-default btnPrevious" >Back</a>	
					         <a class="btn btn-green btnNext" >Next</a>
				    </footer>
				</div>
			</div>
		</div>

	</div>
</div>
</div>
</div>
</div>



		<div id="clientinfo" class="tab-content">
			<div class="card1">
				<div class="container">
					<div class="row" style="height: 490px; width: 100%"><br>
						<div class="form-group">
							<div class="col-md-4">
								<label>First Name *</label>
								<input type="text" name="cfname" value="{{$client->clfname}}" class="form-control "required/>
							</div>
							<div class="col-md-4">
								<label>Middle Name </label>
								<input type="text" name="cmname" value="{{$client->clmname}}" class="form-control "/>
							</div>
							<div class="col-md-4">
								<label>Last Name *</label>
								<input type="text" name="lname" value="{{$client->cllname}}" class="form-control "required/>
							</div>
							
							<div class="col-md-12">
								<label>Address *</label>
								<input type="text" name="Address" value="{{$client->claddress}}" class="form-control "required/>	
							</div>
							
							<div class="col-md-6">
								<label>Email *</label>
								<input type="email" name="Email" value="{{$client->clemail}}" class="form-control "required/>
							</div>
							<div class="col-md-6">
								<label>Birthday *</label>
								<input type="date" name="Birthday" value="{{$client->clbdate}}" class="form-control "required/>
							</div>
							<div class="col-md-6">
								<label>Contact Number *</label>
								<input type="text" name="Contact" value="{{$client->clcontact_no}}" class="form-control "required/>
							</div>
							<div class="col-md-6">
								<label>Monthly Income *</label>
								<input type="text" name="Income" value="{{$client->clmonthly_net_income}}" class="form-control "required/>
							</div>
							<div class="col-md-6">
								<label>Religion *</label>
								<input type="text" name="religion" value="{{$client->clreligion}}" class="form-control "required/>
							</div>
							<div class="col-md-6">
								<label>Citizenship *</label>
								<input type="text" name="citizenship" value="{{$client->clcitizenship}}" class="form-control "required/>
							</div>
							<div class="col-md-6">
								<label>Language Spoken  *</label>
								<input type="text" name="language" value="{{$client->cllanguage}}" class="form-control "required/>
							
							</div>
							<div class="col-md-6">
								<label>Educational Attainment *</label>
								<input type="text" name="educ" value="{{$client->cleducational_attainment}}" class="form-control "required/>
							</div>
							<div class="col-md-6">
								<label>Gender *</label><br>
								<input type="text" name="gender" value="{{$client->clgender}}" class="form-control "required/>
							</div>
							<div class="form-group"><br>
							<div class="col-md-6">																			
								<label>Civil Status *</label><br>
								<input type="text" name="cstat" value="{{$client->clcivil_status}}" class="form-control "required/>
			          		</div>
			          	    </div>
			          	    <div class="form-group"><br>
			          	    <div class="col-md-6">	
								<label>Detained(?) *</label><br>
								<input type="text" name="detain" value="{{$client->cldetained}}" class="form-control "required/>
						</div>
					    </div>
					</div>
					<footer style="margin-bottom: 20px; text-align: center;">

					         <a class="btn btn-default btnPrevious" >Back</a>
                             <button type="submit" class="btn btn-green ">Submit</button>
                             <div id = "ifMarried"  style="display:none;">
					         <a  class="btn btn-green btnNext" >Next</a>
					        </div>

					       

				    </footer>
				</div>
			</div>
		</div>
	</div>
		<div id="clientmarital" class="tab-content">
			<div class="card1">
				<div class="container">
					<div class="row" style="height: 490px; width: 100%">
						<div class="form-group"><br>
							<div class="col-md-6">																			
								
			        			Spouse First Name<input type="text" name="spouse" value="{{$client->clspouse}}" class="form-control ">
			        			Spouse Address<input type="text" name="spouse_addr" value="{{$client->claddress_of_spouse}}" class="form-control ">
			        			Spouse Contact Number<input type="text" name="spouse_con" value="{{$client->clcontact_no_of_spouse}}" class="form-control ">
		    				</div>
							</div>
						</div>
					</div>
					<footer style="margin-bottom: 20px; text-align: center;">
					         <a class="btn btn-default btnPrevious" >Back</a>
					         <button type="submit" class="btn btn-green ">Submit</button>
					         <a class="btn btn-green btnNext" >Next</a>
				    </footer>
				</div>
			</div>
		</div>
		<div id="detention" class="tab-content">
			<div class="card1">
				<div class="container">
					<div class="row" style="height: 490px; width: 100%">
						<div class="form-group"><br>
							<div class="col-md-6">	
								
		    				
			        			Detained Since<input type="date" name="Detained" value="{{$client->cldetained_since}}" class="form-control ">
			        			Place of Detention<input type="text" name="Detained" value="{{$client->clplace_of_detention}}" class="form-control ">
		    				</div>
							</div>
						</div>
					</div>
					<footer style="margin-bottom: 20px; text-align: center;">

					       

					        <a class="btn btn-default btnPrevious" >Back</a>
					         <a class="btn btn-green btnNext" >Next</a>

				    </footer>
				</div>
			</div>
		</div>
	
		<div id="case" class="tab-content">
			<div class="card1">
				<div class="container">
					<div class="row" style="height: 490px; width: 100%">
						<div class="form-group"><br>
							<div class="col-md-12">
								<label>Case Name *</label><br>	
								<select class="form-control">
									<option></option>
									<option>sample</option>
								</select>
							</div>
							<div class="col-md-6">
								<label>Interviewer *</label><br>
								<select class="form-control">
									<option></option>
									<option>sample</option>
								</select>
							</div>
							<div class="col-md-6">
								<label>Case Category *</label>
								<select class="form-control">
									<option></option>
									<option>sample</option>
								</select>
							</div>
							<div class="col-md-6">
								<label>Nature of Case*</label>
								<select class="form-control">
									<option></option>
									<option>sample</option>
								</select>
							</div>
							<div class="col-md-6">
								<label>Case Involvement *</label>
								<select class="form-control">
									<option></option>
									<option>sample</option>
								</select>
							</div>
						</div>
					</div>
					<footer style="margin-bottom: 20px; text-align: center;">
					        <a class="btn btn-default btnPrevious" >Back</a>
					        <a class="btn btn-green btnNext" >Next</a>
				    </footer>
				</div>
			</div>
		</div>

		<div id="adverse" class="tab-content">
			<div class="card1">
				<div class="container">
					<div class="row" style="height: 490px; width: 100%">
						<div class="form-group"><br>
						<div class="col-md-12">
							<label>Case Involvement *</label>
							<select name="atype" class="form-control "required onchange="if (this.value=='others'){this.form['others'].style.visibility='visible'}else {this.form['others'].style.visibility='hidden'};">
							<option value="" selected="selected"></option>
							@foreach($involvements as $involvement)
		      				<option value="{{$involvement->name}}">{{$involvement->name}}</option>
		    				@endforeach
							 <option value="others">Other</option>
							</select>
							<input type="textbox" name="others" class="form-control required" style="visibility:hidden;"/>
						</div>
						<div class="col-md-4">
							<label>First Name *</label>
							<input type="text" name="fname" value="" class="form-control "required>
						</div>
						<div class="col-md-4">
							<label>Middle Name *</label>
							<input type="text" name="mname" value="" class="form-control "required>
						</div>
						<div class="col-md-4">
							<label>Last Name *</label>
							<input type="text" name="lname" value="" class="form-control "required><br>
						</div>
						<div class="col-md-12">
							<label>Address *</label>
							<input type="text" name="addr" value="" class="form-control "required><br>
						</div>
						</div>
					</div>
					<footer style="margin-bottom: 20px; text-align: center;">
					        <a class="btn btn-default btnPrevious" >Back</a>
					        <button type="submit" class="btn btn-green">Submit</button>
				    </footer>
				</div>
			</div>
		</div> 	</div></form>@endforeach
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
var e = document.getElementById("ddlViewBy");
var strUser = e.options[e.selectedIndex].value;

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
   <script type ="text/javascript">
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
   <script type="text/javascript">
   	$(function(){
   	$(".nav-tabs").tabs();
	$("#nexttab").click(function() {
    var selected = $(".nav-tabs").nav-tabs("option", "selected");
    $(".nav-tabs").nav-tabs("option", "selected", selected + 1);
	});
	})
   </script>

   </script>>

</section>
@stop