@extends('lawyer ui/lawyer ui')
@extends('lawyer ui/lawyer side-nav')
@extends('lawyer ui/lawyer header-main')
@section('contents')
				
<section id="middle">
				<header id="page-header">
					<h1>Manage Case</h1>
					<ol class="breadcrumb">
						<li><a href="#">Edit/Delete</a></li>
						<li class="active">Edit/Delete Case</li>
						
					</ol>
				</header>
	<div class="container-fluid">
		<ul class="nav nav-tabs">
			<li><a href="#nature" class="hoverable">Nature of Request</a></li>
			<li><a href="#clientinfo" class="hoverable">Client Info</a></li>
			<li ><a href="#clientmarital" class="hoverable">Client Marital Info</a></li>
			<li><a href="#detention" class="hoverable">Client Detention</a></li>
			<li><a href="#case" class="hoverable">Case Details</a></li>
			<li><a href="#adverse" class="hoverable">Case Adverse</a></li>
			
		</ul>
		@foreach($clients as $client)
		 <form action="{{ route('updatecase',$client->id) }}" id="client" method="post">  
      {{ csrf_field() }}
      {{ method_field('PUT') }}
		<div id="nature" class="tab-content">
			<div class="card1">

				<div class="container">

					<div class="row" style="height: 520px; width: 100%">
                 
						<div class="col-md-12">
							<div class="form-group">
							
						{{-- 	<form class="form-horizontal" action="/client/register" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }} --}}
								<label><br>
									Nature of Request*
								</label>
								<input type ="text" name="nor" value ="{{$client->nature_of_request}}" class="form-control " required >
							</div>
						</div>
					</div>
				</div>
				<footer style="margin-bottom: 80px; text-align: center;">
					        <a class="btn btn-default btnPrevious" >Back</a>	
					         <a class="btn btn-green btnNext" >Next</a>
					         <br>
					         <br>
				    </footer>
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
								<input type="text" name="clname" value="{{$client->cllname}}" class="form-control "required/>
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
				</div>
			</div>

					<footer style="margin-bottom: 80px; text-align: center;">
						<br><br>
					         <a class="btn btn-default btnPrevious" >Back</a>
                            {{--  <button type="submit" class="btn btn-green ">Submit</button> --}}
                            
					         <a  class="btn btn-green btnNext" >Next</a>
					    <br><br>
					</footer>
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
					<footer style="margin-bottom: 80px; text-align: center;">

					         <a class="btn btn-default btnPrevious" >Back</a>
					         <button type="submit" class="btn btn-green ">Submit</button>
					         <a class="btn btn-green btnNext" >Next</a>
					         <br><br>
				    </footer>
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
					<footer style="margin-bottom: 80px; text-align: center;">

					       

					        <a class="btn btn-default btnPrevious" >Back</a>
					         <a class="btn btn-green btnNext" >Next</a>
					         <br><br>
				    </footer>
				</div>
			</div>
	     @endforeach
	      @foreach($client->casetobehandled as $case)
		<div id="case" class="tab-content">
			<div class="card1">
				<div class="container">
					<div class="row" style="height: 490px; width: 100%">
						<div class="form-group"><br>
							<div class="col-md-6">
								<label>Case Number *</label>
								<input type ="text" name="caseno" value ="{{$case->caseno}}" class="form-control " required >
							</div>
							<div class="col-md-6">
								<label>Case Title *</label>
								<input type ="text" name="casetitle" value ="{{$case->title}}" class="form-control " required >
							</div>
							<div class="col-md-12">
								
								<label>Case Name *</label><br>	
								<input type ="text" name="lawsuit" value ="{{$case->casename}}" class="form-control " required >
							</div>
							<div class="col-md-6">
								<label>Interviewer *</label><br>
								<input type ="text" name="interviewer" value ="{{$case->interviewer}}" class="form-control " required >
							</div>
							<div class="col-md-6">
								<label>Case Category *</label>
								<input type ="text" name="casecategory" value ="{{$case->clcomplainant_victim_of}}" class="form-control " required >
							</div>
							<div class="col-md-6">
								<label>Nature of Case*</label>
								<input type ="text" name="casetype" value ="{{$case->nature_of_case}}" class="form-control " required >
							</div>
							<div class="col-md-6">
								<label>Case Involvement *</label>
								<input type ="text" name="involvement" value ="{{$case->clcase_involvement}}" class="form-control " required >
							</div>
			                   @endforeach
				<div class="col-md-6">
					<label> Case Status</label>
					<select name="casestatus" class="form-control " required onchange="if (this.value=='edu'){this.form['edu'].style.visibility='visible'}else {this.form['edu'].style.visibility='hidden'};">
					<option value="" selected="selected"></option>
					@foreach($status as $stat)
      <option value="{{$stat->name}}">{{$stat->name}}</option>
                    @endforeach
					{{-- <option value="edu">Other</option> --}}
					</select>
					<input type="textbox" name="edu" class="form-control required" style="visibility:hidden;"/>
				     
				</div>
				</div>
					    <div class="col-md-6">
					<label> Case Decision</label>
					<select name="decision" class="form-control "  onchange="if (this.value=='edu'){this.form['edu'].style.visibility='visible'}else {this.form['edu'].style.visibility='hidden'};">
					<option value="" selected="selected"></option>
					@foreach($decision as $dec)
      <option value="{{$dec->name}}">{{$dec->name}}</option>
                   @endforeach
					{{-- <option value="edu">Other</option> --}}
					</select>
					<input type="textbox" name="edu" class="form-control required" style="visibility:hidden;"/>
				      
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
     @foreach($adverses as $adverse)
		<div id="adverse" class="tab-content">
			<div class="card1">
				<div class="container">
					<div class="row" style="height: 490px; width: 100%">
						<div class="form-group"><br>
						<div class="col-md-12">
							<label>Adverse Type *</label>
					<input type ="text" name="type" value ="{{$adverse->advprtytype}}" class="form-control " required >
						</div>
						<div class="col-md-4">
						<label>Adverse First Name *</label>
					<input type ="text" name="fname" value ="{{$adverse->advprtyfname}}" class="form-control " required >
						</div>
						<div class="col-md-4">
							<label>Adverse Middle Name </label>
					<input type ="text" name="mname" value ="{{$adverse->advprtymname}}" class="form-control "  >
						</div>
						<div class="col-md-4">
							<label>Adverse Last Name *</label>
					<input type ="text" name="lname" value ="{{$adverse->advprtylname}}" class="form-control " required >
						</div>
						<div class="col-md-12">
							<label>Adverse Address *</label>
					<input type ="text" name="addr" value ="{{$adverse->advprtyaddress}}" class="form-control " required >
						</div>
						</div>
	@endforeach
					</div>
					<footer style="margin-bottom: 20px; text-align: center;">
					        <a class="btn btn-default btnPrevious" >Back</a>
					        <button type="submit" class="btn btn-green">Submit</button>
				    </footer>
				</div>
			</div>
		</div> 	
	</div>
</form>
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

  

</section>
@stop