@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">





      <!-- Modal Header -->
      <div class="modal-header">
       
        <h4 class="modal-title" id="myModalLabel">Add Adverse Party</h4>
      </div>

      <!-- Modal Body -->
    
    <form action="{{ url('adverse/register') }}" id="client" method="POST">  
      {{ csrf_field() }}
      <div class="modal-body">
      	<div class="row">
			<div class="form-group">
				<div class="col-md-12">
					<label>Case Involvement *</label>
					@if($casetbh->clcase_involvement == 'Accused' || $casetbh->clcase_involvement == 'Defendant')
					<select name="accussed" class="form-control " >
					<option value="" selected="selected"></option>
					@foreach($accussed as $involvement)
				      <option value="{{$involvement->name}}">{{$involvement->name}}</option>
				    @endforeach
					{{-- <option value="others">Other</option> --}}
					</select>
					@elseif($casetbh->clcase_involvement == 'Petitioner' || $casetbh->clcase_involvement == 'Plaintiff')
					<select name="attacker" class="form-control " >
					<option value="" selected="selected"></option>
					@foreach($attacker as $involvement)
				      <option value="{{$involvement->name}}">{{$involvement->name}}</option>
				    @endforeach
				</select>

					@endif
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

 
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
        <button type="submit" class="btn btn-green" >Submit</button>
      </div>
</form>
    </div>
  </div>
</div>
</section>		
@stop