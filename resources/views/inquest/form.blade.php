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
				@foreach($inquest as $inquests)
				 <label>Nature of Call *</label><br>
                                <input type="radio" name="noc" value="Legal Advice">Legal Advice
                                <input type="radio" name="noc" value="Legal Assistance"> Legal Assistance <br>   

				 <div class="col-md-6">
					<label>Inquest Lawyer 1 *</label>
					
						@foreach($lawyer1 as $lawyers)
						<input type="hidden" name ="lawyer1" value = "{{$lawyers->id}}">
						<input type="text" name="lawyer1" value="{{$lawyers->efname}} {{$lawyers->emname}} {{$lawyers->elname}}" class="form-control " readonly >
						@endforeach
					
			    </div>
			    <div class="col-md-6">
					<label>Inquest Lawyer 2 *</label>
					
						@foreach($lawyer2 as $secondlawyer)
					<input type="hidden" name ="lawyer2" value = "{{$secondlawyer->id}}">
					<input type="text"  value="{{$secondlawyer->efname}} {{$secondlawyer->emname}} {{$secondlawyer->elname}}" class="form-control " readonly >
						@endforeach
					
			    </div>
			    <div class="col-md-6">
					<label>Inquest Assistant *</label>
					
						@foreach($staff as $staffs)
						<input type="hidden" name ="assistant" value = "{{$staffs->id}}">
						<input type="text"  value="{{$staffs->efname}} {{$staffs->emname}} {{$staffs->elname}}" class="form-control " readonly >
						@endforeach
					
			    </div>
			     <div class="col-md-6">
					<label>Location *</label>
				
					<input type="text" name="location" value="{{$inquests->location}}" class="form-control " required readonly>
					
			    </div>
			    <div class="col-md-6">
					<label>Schedule of Duty *</label>
					@foreach($schedule as $schedules)
					<input type="hidden" name ="sched" value="{{$schedules->id}}" class="form-control ">
					<input type="text" value="{{date('F j Y g:i'strtotime($schedules->start)}}  {{date('F j Y g:i'strtotime($schedules->end)}}" class="form-control " readonly>
					@endforeach
			    </div>
			    <div class="col-md-6"></div>
			    <div class="col-md-6">
					<label>Client Name *</label>
					
						@foreach($clients as $client)
						<input type="hidden" name="client" value = "{{$client->id}}">
						<input type ="text" value ="{{$client->clfname}} {{$client->clmname}} {{$client->cllname}}"</input>
						@endforeach
					
			    </div>
			@endforeach
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