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
					<select id ="ct"name="casetype" class="form-control "required onchange="getval(this);">
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
					<select id = "criminal"  name="criminal" class="form-control " >
					<option value="" selected="selected"></option>

					@foreach($criminal as $criminals)
					
                	<option value="{{$criminals->name}}">{{$criminals->name}}</option>
                  

    				@endforeach
					{{-- <option value="others">Other</option> --}}
					</select>
					<select id = "civil" style = "display:none" name="civil" class="form-control " >
					<option value="" selected="selected"></option>

					@foreach($civil as $civils)
					
                 <option value="{{$civils->name}}">{{$civils->name}}</option>
                  

    				@endforeach
					{{-- <option value="others">Other</option> --}}
					</select>
					<select id = "labor" style = "display:none" name="labor" class="form-control " >
					<option value="" selected="selected"></option>

					@foreach($labor as $labors)
					
                 <option value="{{$labors->name}}">{{$labors->name}}</option>
                  

    				@endforeach
					{{-- <option value="others">Other</option> --}}
					</select>
					<select id = "administrative" style = "display:none" name="administrative" class="form-control " >
					<option value="" selected="selected"></option>

					@foreach($administrative as $administratives)
					
                 <option value="{{$administratives->name}}">{{$administratives->name}}</option>
                  

    				@endforeach
					{{-- <option value="others">Other</option> --}}
					</select>
					
				</div>
				<div class="col-md-6">
					<label>Interviewer *</label>
					
					<input type="text" name="employee" class="form-control required" value =" {{ ucwords(Auth::user()->efname) . '  ' . ucwords(Auth::user()->emname) . '  ' . ucwords(Auth::user()->elname) }}" readonly/>
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
<script type="text/javascript">
   function getval(ct)
{
    

    if(ct.value == 'Criminal')
    {
    	 
    	 	document.getElementById('criminal').style.display = 'block';
    	 	document.getElementById('administrative').style.display = 'none';
    	 	document.getElementById('civil').style.display = 'none';
    	 	document.getElementById('labor').style.display = 'none';

    	 
    }
    else if(ct.value == 'Civil')
    {
    	document.getElementById('civil').style.display = 'block';
    	document.getElementById('criminal').style.display = 'none';
    	document.getElementById('administrative').style.display = 'none';
    	document.getElementById('labor').style.display = 'none';
    }
      else if(ct.value == 'Labor')
    {
    	document.getElementById('labor').style.display = 'block';
    	document.getElementById('criminal').style.display = 'none';
    	document.getElementById('administrative').style.display = 'none';
    	document.getElementById('civil').style.display = 'none';
    }

  else if(ct.value == 'Administrative')
    {
    	document.getElementById('administrative').style.display = 'block';
    	document.getElementById('criminal').style.display = 'none';
    	document.getElementById('civil').style.display = 'none';
    	document.getElementById('labor').style.display = 'none';
    }



}
</script>
</section>		
@stop