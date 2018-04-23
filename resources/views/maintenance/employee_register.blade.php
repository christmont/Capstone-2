@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')
<br><br>
<section id="middle">
	<div class="container">
<header>
       <br>
        <h4>Add Employee</h4><br>
 </header>

      <!-- Modal Body -->
      <form action="{{ url('employee/register') }}" method="POST">
      {{ csrf_field() }}
      	<div class="row">
			<div class="form-group">
				<div class="col-md-4">
					<label>First Name *</label>
					<input type="text" name="efname" value="" class="form-control required">
				</div>
				<div class="col-md-4">
					<label>Middle Name </label>
					<input type="text" name="emname" value="" class="form-control required">
				</div>
				<div class="col-md-4">
					<label>Last Name *</label>
					<input type="text" name="elname" value="" class="form-control required">
				</div>
				<div class="col-md-4">
					<label>E-mail *</label>
					<input type="text" name="email" value="" class="form-control required">
				</div>
				<div class="col-md-4">
					<label>Position *</label>
					<select name="position" class="form-control " required onchange="if (this.value=='edu'){this.form['edu'].style.visibility='visible'}else {this.form['edu'].style.visibility='hidden'};">
					<option value="" selected="selected"></option>
					@foreach($positions as $position)
      <option value="{{$position->name}}">{{$position->name}}</option>
    @endforeach
					{{-- <option value="edu">Other</option> --}}
					</select>
					<input type="textbox" name="edu" class="form-control required" style="visibility:hidden;"/>
				
				</div>
				</div>
				<div class="col-md-4">
					<label>Contact No. *</label>
					<input type="text" name="contact" value="" class="form-control required">
				</div>
				<div class ="col-md-4">
				
				<label >Assigned to Court</label>
				<select name="court" class="form-control "  onchange="if (this.value=='edu'){this.form['edu'].style.visibility='visible'}else {this.form['edu'].style.visibility='hidden'};">
					<option value="" selected="selected"></option>
					@foreach($courts as $court)
      <option value="{{$court->id}}">{{$court->name}}</option>
    @endforeach
					{{-- <option value="edu">Other</option> --}}
					</select>
					<input type="textbox" name="edu" class="form-control required" style="visibility:hidden;"/>
				
				</div>

				<div class="col-md-4">
					<label>Password *</label>
					<input type="password" name="password" value="" class="form-control required">
				</div>
				
				
			</div>
	

    

      <!-- Modal Footer -->
      <footer>
        
        <button type="submit" class="btn btn-green">Submit</button>
     </footer>

    </div>
  </div>
</div>
</form>
</div>
</section>
@stop