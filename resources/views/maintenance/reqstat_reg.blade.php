@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')  
@section('content')
<br><br>
<section id="middle">
  <div class="container">
<header><br>
        <h4>Add Request Status</h4>
</header>
      <!-- Modal Body -->
      <form action="{{ url('reqstat/register') }}" method="POST">
      {{ csrf_field() }}
      	<div class="row">
			<div class="form-group">
				<div class="col-md-4">
					<label>Name *</label>
					<input type="text" name="name" value="" class="form-control required"><br>
          
				</div>
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