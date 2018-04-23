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
			<li><a href="#clientinfonotary">Client Info</a></li>
		</ul>
		<form class ="horizontal" action="/docu/register" method="post" enctype="multipart/form-data">
		 {{ csrf_field() }}
		 <div id="clientinfonotary" class="tab-content">
			<div class="card1">
				<div class="container">
					<div class="row" style="height: 490px; width: 100%"><br>
						<div class="form-group">

							<div class="col-md-4">
								<label>Document*</label>
								<select name="document" id="docu" onchange="getvalue(this);">
									<option value=""></option>
									@foreach($type as $types)
									<option value="{{$types->name}}">{{$types->name}}</option>
									@endforeach
								</select>
							</div>

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
								<input type="text" name="lname" value="" class="form-control "required>
							</div>
							
							<div class="col-md-12">
								<label>Address *</label>
								<input type="text" name="Address" value="" class="form-control "required>	
							</div>

							<div class="col-md-12">
								<label>CTC No *</label>
								<input type="text" name="ctcno" value="" class="form-control "required>	
							</div>

							<div class="col-md-6">
								<label>CTC No issue date *</label>
								<input type="date" name="ctcdate" value="" class="form-control "required >
							</div>

							
							
							<div class="col-md-6">
								<label>Date *</label>
								<input type="text" name="date" value="{{date('F j Y')}}" class="form-control "required readonly>
							</div>


							<div class="col-md-12">
								<label>City. *</label>
								<input type="text" name="city" value="" class="form-control "required>
							</div>
							<div id = "affidavit" style ="display:none" class ="col-md-6">
								<label>Civil Status *</label><br>
								<input type="radio" onclick="javascript:civilstatCheck();" name="civilstat" value="single"  id="noCheck"> Single
			          			<input type="radio" onclick="javascript:civilstatCheck();" name="civilstat" id="marriedCheck" value="married" > Married
			          			<input type="radio" onclick="javascript:civilstatCheck();" name="civilstat" value="divorced"  id="noCheck"> Divorced
			          			<input type="radio"  onclick="javascript:civilstatCheck();" name="civilstat" value="widowed" id="noCheck"> Widowed

							</div>
							<div id="ifMarried" style="display:none;">
						    	Spouse Name<input type="text" name="spouse" value="" class="form-control ">
			        		</div>

			        		<div id="petition" style ="display:none" class = "col-md-6">
			        			<label>Email *</label>
								<input type="email" name="Email" value="" class="form-control ">
			        			<label>Contact Number *</label>
								<input type="number" name="Contact" value="" class="form-control ">
								<label>Court*</label>
								<select name="court"  >
									<option value=""></option>
									@foreach($court as $courts)
									<option value="{{$courts->name}}">{{$courts->name}}</option>
									@endforeach
								</select>
			        		</div>
				
				
				</div>
			</div>
							
				
			<footer style="margin-bottom: 80px; text-align: center;">

					      
                             <button type="submit" class="btn btn-green ">Submit</button>
                          
				    </footer>
					</div>
				</div>
				</div>
				</div>
			</div>
		</form>
	</div>
	 <script type="text/javascript">
   function getvalue(docu)
{
    if(docu.value == 'Affidavit')
    {
    	 
    	 	document.getElementById('affidavit').style.display = 'block';
    	 	document.getElementById('petition').style.display = 'none';
    	 	


    	 
    }
    else if(docu.value == 'Petition')
    {
    		document.getElementById('petition').style.display = 'block';
    	 	document.getElementById('affidavit').style.display = 'none';
    	 
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
</section>
@stop