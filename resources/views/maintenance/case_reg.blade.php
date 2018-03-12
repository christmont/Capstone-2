@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')  
@section('content')
<br><br>
<section id="middle">
  <div class="container">
<header><br>
        <h4>Add Case</h4>
</header>
      <!-- Modal Body -->
      <form action="{{ url('lawsuit/register') }}" method="POST">
      {{ csrf_field() }}
      	<div class="row">
			<div class="form-group">
				<div class="col-md-4">
					<label>Name *</label>
					<input type="text" name="name" value="" class="form-control required"><br>
          <div class="col-md-4">
          <label>Case Type *</label>
          <select name="casetype" class="form-control "required onchange="if (this.value=='others'){this.form['others'].style.visibility='visible'}else {this.form['others'].style.visibility='hidden'};">
          <option value="" selected="selected"></option>
          @foreach($casetype as $casetypes)
      <option value="{{$casetypes->id}}">{{$casetypes->name}}</option>
    @endforeach
          {{-- <option value="others">Other</option> --}}
          </select>
          <input type="textbox" name="others" class="form-control required" style="visibility:hidden;"/>
        </div>
				</div>
			</div>
		</div>


      <!-- Modal Footer -->
      <footer>
        <button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
        <button type="submit" class="btn btn-green">Submit</button>
      </footer>

    </div>
  </div>
</div>
</form>
</div>
</section>
@stop