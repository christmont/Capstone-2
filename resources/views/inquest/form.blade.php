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
				 <div class="col-md-6">
					<label>Inquest Lawyer 1 *</label>
					<select name = "lawyer1" class="form-control">
						<option></option>
						@foreach($lawyer1 as $lawyers)
						<option value="$lawyers->employee_id">{{$lawyers->efname}} {{$lawyers->emname}} {{$lawyers->elname}} </option>
						@endforeach
					</select>
			    </div>
			    <div class="col-md-6">
					<label>Inquest Lawyer 2 *</label>
					<select name="lawyer2" class="form-control">
						<option></option>
						@foreach($lawyer2 as $secondlawyer)
						<option value="$secondlawyer->employee_id">{{$secondlawyer->efname}} {{$secondlawyer->emname}} {{$secondlawyer->elname}} </option>
						@endforeach
					</select>
			    </div>
			    <div class="col-md-6">
					<label>Inquest Assistant *</label>
					<select name="assistant" class="form-control">
						<option></option>
						@foreach($staff as $staffs)
						<option value="$staffs->employee_id">{{$staffs->efname}} {{$staffs->emname}} {{$staffs->elname}} </option>
						@endforeach
					</select>
			    </div>
			     <div class="col-md-6">
					<label>Location *</label>
				
					<input type="text" name="location" value="" class="form-control " required >
					
			    </div>
			    <div class="col-md-6">
					<label>Schedule of Duty *</label>
					@foreach($schedule as $schedules)
					<input type="hidden"  value="" class="form-control ">
					<input type="text" value="{{date('F j Y g:i'strtotime($schedules->start)}}  {{date('F j Y g:i'strtotime($schedules->end)}}" class="form-control " readonly>
					@endforeach
			    </div>
			    <div class="col-md-6"></div>
			    <div class="col-md-6">
					<label>Client Name *</label>
					<select class="form-control">
						<option></option>
						@foreach($clients as $client)
						<option value ="{{$client->id}}">{{$client->clfname}} {{$client->clmname}} {{$client->cllname}}</option>
						@endforeach
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