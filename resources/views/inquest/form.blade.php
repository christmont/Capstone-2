@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">
 
		<header id="page-header">
					<h1> Inquest Form</h1>
					<ol class="breadcrumb">
						<li><a href="#"> Forms</a></li>
						<li class="acsive"> Inquest</li>
					</ol>
		</header>
       <div class="container">
      <form name="myForm" id="exampleForm">
      	<div class="row">
			<div class="form-group">
				<div class="col-md-6" id="container_width">
					<label>Inquest Lawyer *</label><input type="button" name="increment" id="increment" value="+">
					<input type='text' name='width[]' class='form-control'>
			    </div>
			    <div class="col-md-6">
					<label>Inquest Assistant *</label>
					<input type="text" name="name" value="" class="form-control required">
			    </div>
			    <div class="col-md-6">
					<label>Schedule of Duty *</label>
					<input type="text" name="name" value="" class="form-control required">
			    </div>
			    <div class="col-md-6"></div>
			    <div class="col-md-6">
					<label>Client Name *</label>
					<select class="form-control">
						<option></option>
						<option>Ryan&Friency</option>
					</select>
			    </div>

			</div>
		</div>
		</div>
		<footer style="text-align: center;"><Br>
			<a class="btn btn-green">Submit</a>
		</footer>
      	
</form>
    </div>

</section>
@stop