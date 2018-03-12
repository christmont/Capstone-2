@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">






      <!-- Modal Header -->
      <div class="modal-header">
        
        <h4 class="modal-title" id="myModalLabel">Edit Case</h4>
      </div>
  @foreach($clients as $client)
      <!-- Modal Body -->
      <form action="{{ route('updatecase',$client->id) }}" id="client" method="post">  
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="modal-body">
      	<div class="row">
			<div class="form-group">
				<div class="col-md-6">
					<label>Case Name *</label>
					<input type ="text" name="lawsuit" value ="{{$client->casetobehandled->casename}}" class="form-control " required >
					</input>
				
					{{-- <option value="others">Other</option> --}}
					
				</div>
				<div class="col-md-6">
					<label>Interviewer *</label>
					<input type ="text" name="interviewer" value ="{{$client->casetobehandled->interviewer}}" class="form-control " required >
					</input>
				</div>
				
				
				<div class="col-md-6">
					<label>Case Category *</label><br>
					<input type ="text" name="casecategory" value ="{{$client->casetobehandled->clcomplainant_victim_of}}" class="form-control " required >
					</input>
				</div>
				
				<div class="col-md-6">
					<label>Nature of Case  *</label>
					<input type ="text" name="casetype" value ="{{$client->casetobehandled->nature_of_case}}" class="form-control " required >
					</input>
				
				</div>
				<div class="col-md-6">
					<label>Client Involvement  *</label>
					<input type ="text" name="involvement" value ="{{$client->casetobehandled->clcase_involvement}}" class="form-control " required >
					</input>
				
				</div>
				<div class="col-md-6">
					<label>Adverse Type *</label>
					<input type ="text" name="type" value ="{{$client->adverse->advprtytype}}" class="form-control " required >
					</input>
			   </div>
			   <div class="col-md-6">
					<label>Adverse First Name *</label>
					<input type ="text" name="fname" value ="{{$client->adverse->advprtyfname}}" class="form-control " required >
					</input>
			   </div>
			   <div class="col-md-6">
					<label>Adverse Middle Name </label>
					<input type ="text" name="mname" value ="{{$client->adverse->advprtymname}}" class="form-control "  >
					</input>
			   </div>
			   <div class="col-md-6">
					<label>Adverse Last Name *</label>
					<input type ="text" name="lname" value ="{{$client->adverse->advprtylname}}" class="form-control " required >
					</input>
			   </div>
			   <div class="col-md-6">
					<label>Adverse Address *</label>
					<input type ="text" name="addr" value ="{{$client->adverse->advprtyaddress}}" class="form-control " required >
					</input>
			   </div>
			   <div class="col-md-4">
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
		</div>

 @endforeach
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
       
        <button type="submit" class="btn btn-green"  >Save Changes</button>
      </div>
  </form>

    </div>
  </div>
</div>
</section>		
@stop