@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">






      <!-- Modal Header -->
      <div class="modal-header">
        
        <h4 class="modal-title" id="myModalLabel">Add Case</h4>
      </div>

      <!-- Modal Body -->
      <form action="{{ url('casetbh/register') }}" id="client" method="POST">  
      {{ csrf_field() }}
      <div class="modal-body">
      	<div class="row">
			<div class="form-group">
				<div class="col-md-6">
					<label>Nature of Case  *</label>
					<select name="casetype" class="form-control "required onchange="if (this.value=='otherss'){this.form['otherss'].style.visibility='visible'}else {this.form['otherss'].style.visibility='hidden'};">
					<option value="" selected="selected"></option>
					@foreach($casetypes as $casetype)
      				<option value="{{$casetype->name}}">{{$casetype->name}}</option>
    				@endforeach
					{{-- <option value="otherss">Other</option> --}}
					</select>
					{{-- <input type="textbox" name="otherss" class="form-control required" style="visibility:hidden;"/> --}}
				
				</div>
				<div class="col-md-6">
					<label>Case Name *</label>
					<select name="lawsuit" class="form-control " onchange="if (this.value=='others'){this.form['others'].style.visibility='visible'}else {this.form['others'].style.visibility='hidden'};">
					<option value="" selected="selected"></option>
					@foreach($lawsuits as $lawsuit)
                 <option value="{{$lawsuit->name}}">{{$lawsuit->name}}</option>
    				@endforeach
					{{-- <option value="others">Other</option> --}}
					</select>
					<input type="textbox" name="others" class="form-control required" style="visibility:hidden;"/>
				</div>
				<div class="col-md-6">
					<label>Interviewer *</label>
					<select name="employee" class="form-control " onchange="if (this.value=='others'){this.form['others'].style.visibility='visible'}else {this.form['others'].style.visibility='hidden'};">
					<option value="" selected="selected"></option>
					@foreach($employees as $employee)
      <option value="{{$employee->elname}} , {{$employee->efname}} {{$employee->emname}}">{{$employee->elname}} , {{$employee->efname}} {{$employee->emname}}</option>
    @endforeach
					{{-- <option value="others">Other</option> --}}
					</select>
					<input type="textbox" name="others" class="form-control required" style="visibility:hidden;"/>
				</div>
				
				
				<div class="col-md-6">
					<label>Client Complainant Victim Of *</label><br>
					<select name="Category" class="form-control "required onchange="if (this.value=='other'){this.form['other'].style.visibility='visible'}else {this.form['other'].style.visibility='hidden'};">
					<option value="" selected="selected"></option>
					@foreach($category as $categories)
      <option value="{{$categories->name}}">{{$categories->name}}</option>
    @endforeach
					{{-- <option value="other">Others</option> --}}
					</select>
					<input type="textbox" name="other" class="form-control " style="visibility:hidden;"/>
				</div>
				
			
				<div class="col-md-12">
					<label>Case Involvement *</label>
					<select name="involvement" class="form-control "required onchange="if (this.value=='edu'){this.form['edu'].style.visibility='visible'}else {this.form['edu'].style.visibility='hidden'};">
					<option value="" selected="selected"></option>
					@foreach($involvements as $involvement)
				      <option value="{{$involvement->name}}">{{$involvement->name}}</option>
				    @endforeach
					<option value="edu">Other</option>
					</select>
					<input type="textbox" name="edu" class="form-control required" style="visibility:hidden;"/>
				
				</div>
				
			</div>
		</div>

 
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-green"  >Next</button>
      </div>

    </div>
  </div>
</div>
</section>		
@stop