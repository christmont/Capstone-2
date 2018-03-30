@extends('lawyer ui/lawyer ui')
@extends('lawyer ui/lawyer side-nav')
@extends('lawyer ui/lawyer header-main')
@section('contents')
<section id="middle">
@foreach($inquests as $inquest)
		<header id="page-header">
					<h1> Inquest Form</h1>
					<ol class="breadcrumb">
						<li><a href="#"> Forms</a></li>
						<li class="acsive"> Inquest</li>
					</ol>
		</header>
		<br>
       <div class="container">
      <form name="myForm" id="exampleForm">
      	<div class="row">
			<div class="form-group">
				<div class="col-md-6">
				 <label>Nature of Call *</label><br>
                                <input type="radio" name="noc" value="Legal Advice">Legal Advice
                                <input type="radio" name="noc" value="Legal Assistance"> Legal Assistance <br>   
				</div>
				 <div class="col-md-6">
				 	<div class="form-group">
					<label class="control-label">Inquest Lawyer 1 *</label>
					<div class="input-group">
				 		<div class="input-group-addon">
				 			<a class ="fa fa-pencil"></a>
				 		</div>
						@foreach($lawyer1 as $lawyers)
						<input type="hidden" name ="lawyer1" value = "{{$lawyers->id}}">
						<input type="text" name="lawyer1" value="{{$lawyers->efname}} {{$lawyers->emname}} {{$lawyers->elname}}" class="form-control " readonly a class ="pull-right btn btn-warning">
					</div>
				</div>
						@endforeach
					
			    </div>
			    <div class="col-md-6">
			    	<div class="form-group">
					<label>Inquest Lawyer 2 *</label>
					<div class="input-group">
				 		<div class="input-group-addon">
				 			<a class ="fa fa-pencil"></a>
				 		</div>
						@foreach($lawyer2 as $secondlawyer)
					<input type="hidden" name ="lawyer2" value = "{{$secondlawyer->id}}">
					<input type="text"  value="{{$secondlawyer->efname}} {{$secondlawyer->emname}} {{$secondlawyer->elname}}" class="form-control " readonly >
				</div>
			</div>
						@endforeach
					
			    </div>
			    <div class="col-md-6">
			    	<div class="form-group">
					<label>Inquest Assistant *</label>
					<div class="input-group">
				 		<div class="input-group-addon">
				 			<a class ="fa fa-pencil"></a>
				 		</div>
				 		@foreach($staff as $staffs)
						<input type="hidden" name ="assistant" value = "{{$staffs->id}}">
						<input type="text"  value="{{$staffs->efname}} {{$staffs->emname}} {{$staffs->elname}}" class="form-control " readonly >
						@endforeach
					</div>
				</div>
			    </div>
			     <div class="col-md-6">
			    	<div class="form-group">
					<label>Location *</label>
					<div class="input-group">
				 		<div class="input-group-addon">
				 			<a class ="fa fa-pencil"></a>
				 		</div>
					<input type="text" name="location" value="{{$inquest->location}}" class="form-control " required readonly>
					</div>
				</div>
			    </div>
			    <div class="col-md-6">
			    	<div class="form-group">
					<label>Schedule of Duty *</label>
					<div class="input-group">
				 		<div class="input-group-addon">
				 			<a class ="fa fa-pencil"></a>
				 		</div>
					<input type="hidden" name ="sched" value="{{$schedule->id}}" class="form-control ">
					<input type="text" value="{{date('F j Y g:i a',strtotime($schedule->start))}}  {{date('F j Y g:i a',strtotime($schedule->end))}}" class="form-control " readonly>
				</div>
			</div>
			    </div>
			    <div class="col-md-12">
			    	<div class="form-group">
					<label>Client Name *</label>
					<div class="input-group">
				 		<div class="input-group-addon">
				 			<a class ="fa fa-pencil"></a>
				 		</div>
						@foreach($clients as $client)
						<input type="hidden" name="client" value = "{{$client->id}}"  class="form-control ">
						<input type ="text" value ="{{$client->clfname}} {{$client->clmname}} {{$client->cllname}}"  class="form-control " readonly/>
					</div>
				</div>
						@endforeach
					
			    </div>
			
			</div>
		</div>
		</div>
		<footer style="text-align: center;"><Br>
			<a class="btn btn-green">Submit</a>
		</footer>
      	
</form>
    </div>
@endforeach
</section>
@stop