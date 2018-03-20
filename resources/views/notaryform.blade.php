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
		<form class ="horizontal" action="/notary/register" method="post" enctype="multipart/form-data">
		 {{ csrf_field() }}
		 <div id="clientinfonotary" class="tab-content">
			<div class="card1">
				<div class="container">
					<div class="row" style="height: 490px; width: 100%"><br>
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
								<input type="text" name="lname" value="" class="form-control "required>
							</div>
							
							<div class="col-md-12">
								<label>Address *</label>
								<input type="text" name="Address" value="" class="form-control "required>	
							</div>
							
							<div class="col-md-6">
								<label>CTC No. *</label>
								<input type="text" name="ctcno" value="" class="form-control "required>
							</div>

							<div class="col-md-6">
								<label>Date *</label>
								<input type="text" name="date" value="{{date('F j Y')}}" class="form-control "required readonly>
							</div>

							<div class="col-md-12">
								<label>City. *</label>
								<input type="text" name="city" value="" class="form-control "required>
							</div>
							
				
			<footer style="margin-bottom: 80px; text-align: center;">

					         <a class="btn btn-default btnPrevious" >Back</a>
                             <button type="submit" class="btn btn-green ">Submit</button>
                             <div id = "ifMarried"  style="display:none;">
					         <a  class="btn btn-green btnNext" >Next</a><br><br><br>
					        </div>
				    </footer>
					</div>
				</div>
				</div>
				</div>
			</div>
		</form>
	</div>
</section>
@stop