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
		<br>
       <div class="container">
     @foreach($inquest as $inquests)
<form class ="horizontal" action="{{ route('lawyerinquestupdate',$inquests->id) }}" method="post" enctype="multipart/form-data">
		 {{ csrf_field() }}
      {{ method_field('PUT') }}
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
					
				 		
						
						<select name="lawyer1" id="">
							<option value=""></option>
							@foreach($lawyer1 as $lawyers)
							<option value="{{$lawyers->id}}">{{$lawyers->efname}} {{$lawyers->emname}} {{$lawyers->elname}}</option>
							@endforeach
						</select>
						
				
						<div id="field_div">
				 		</div>
				</div>
						
					
			    </div>
			    <div class="col-md-6">
			    	<div class="form-group">
					<label>Inquest Lawyer 2 *</label>
					<div class="input-group">
				 		
						
					<select name="lawyer2" id="">
							<option value=""></option>
							@foreach($lawyer2 as $secondlawyer)
							<option value="{{$secondlawyer->id}}">{{$secondlawyer->efname}} {{$secondlawyer->emname}} {{$secondlawyer->elname}}</option>
							@endforeach
						</select>
				</div>
				<div id="field_divs">
				 		</div>
			</div>
						
					
			    </div>
			    <div class="col-md-6">
			    	<div class="form-group">
					<label>Inquest Assistant *</label>
					<div class="input-group">
				 	
				 		
						<select name="staff" id="">
							<option value=""></option>
							@foreach($staff as $staffs)
							<option value="{{$staffs->id}}">{{$staffs->efname}} {{$staffs->emname}} {{$staffs->elname}}</option>
							@endforeach
						</select>
					</div>
					<div id="field_divss">
				 		</div>
				</div>
					
			    </div>
			     <div class="col-md-6">
			    	<div class="form-group">
					<label>Location *</label>
					<div class="input-group">
				 		
					<input type="text" name="location" value="{{$inquests->location}}" class="form-control " required >
					</div>
					<div id="field_divsss">
				 		</div>
				</div>
			    </div>
			    <div class="col-md-6">
			    	<div class="form-group">
					<label>Schedule of Duty *</label>
					<div class="input-group">
				 		<div class="input-group-addon">
				 			<button class="fa fa-pencil" onclick="add_fieldssss();"></button>
				 		</div>
				  @foreach($schedule as $schedules)
					<input type="hidden" name ="sched" value="{{$schedules->id}}" class="form-control ">
					<input type="text" value="{{date('F j Y g:i a',strtotime($schedules->start))}}  {{date('F j Y g:i a',strtotime($schedules->end))}}" class="form-control " readonly>
				  @endforeach
				</div>
				<div id="field_divssss">
				 		</div>
			</div>
			    </div>
			    <div class="col-md-12">
			    	<div class="form-group">
					<label>Client Name *</label>
					<div class="input-group">
				 		
						
						<select name="client" id="">
							<option value=""></option>
							@foreach($clients as $client)
							<option value="{{$client->id}}">{{$client->clfname}} {{$client->clmname}} {{$client->cllname}}</option>
							@endforeach
						</select>
					</div>
					<div id="field_divsssss">
				 		</div>
				</div>
						
						
			    </div>
			
			</div>
		</div>
		</div>
		<footer style="text-align: center;"><Br>
			<button type ="submit" class="btn btn-green">Submit</button>
		</footer>
      	
</form>
    </div>
@endforeach
</section>
	<script type="text/javascript">
function add_field()
{
  var total_text=document.getElementsByClassName("input_text");
  total_text=total_text.length+1;
  document.getElementById("field_div").innerHTML=document.getElementById("field_div").innerHTML+
s
  "<p id='input_text"+total_text+"_wrapper'><input type='text' name = 'lawyer1edit' class='form-control' id='input_text"+total_text+"' placeholder='Enter Text'><input type='button' class='btn btn-warning' value='Remove' onclick=remove_field('input_text"+total_text+"');></p>";

  "<p id='input_text"+total_text+"_wrapper'><input type='text' class='form-control' id='input_text"+total_text+"' placeholder='Enter Text'><input type='button' class='btn btn-warning' value='Remove' onclick=remove_field('input_text"+total_text+"');></p>";

}
function remove_field(id)
{
  document.getElementById(id+"_wrapper").innerHTML="";
}
</script>
<script type="text/javascript">
function add_fields()
{
  var total_text=document.getElementsByClassName("input_texts");
  total_text=total_text.length+1;
  document.getElementById("field_divs").innerHTML=document.getElementById("field_divs").innerHTML+

  "<p id='input_texts"+total_text+"_wrapper'><input type='text' name = 'lawyer2edit' class='form-control' id='input_texts"+total_text+"' placeholder='Enter Text'><input type='button' class='btn btn-warning' value='Remove' onclick=remove_fields('input_texts"+total_text+"');></p>";

  "<p id='input_texts"+total_text+"_wrapper'><input type='text' class='form-control' id='input_texts"+total_text+"' placeholder='Enter Text'><input type='button' class='btn btn-warning' value='Remove' onclick=remove_fields('input_texts"+total_text+"');></p>";

}
function remove_fields(id)
{
  document.getElementById(id+"_wrapper").innerHTML="";
}
</script>
<script type="text/javascript">
function add_fieldss()
{
  var total_text=document.getElementsByClassName("input_textss");
  total_text=total_text.length+1;
  document.getElementById("field_divss").innerHTML=document.getElementById("field_divss").innerHTML+

  "<p id='input_textss"+total_text+"_wrapper'><input type='text' name = 'assistantedit' class='form-control' id='input_textss"+total_text+"' placeholder='Enter Text'><input type='button' class='btn btn-warning' value='Remove' onclick=remove_fieldss('input_textss"+total_text+"');></p>";

  "<p id='input_textss"+total_text+"_wrapper'><input type='text' class='form-control' id='input_textss"+total_text+"' placeholder='Enter Text'><input type='button' class='btn btn-warning' value='Remove' onclick=remove_fieldss('input_textss"+total_text+"');></p>";

}
function remove_fieldss(id)
{
  document.getElementById(id+"_wrapper").innerHTML="";
}
</script>
<script type="text/javascript">
function add_fieldsss()
{
  var total_text=document.getElementsByClassName("input_textsss");
  total_text=total_text.length+1;
  document.getElementById("field_divsss").innerHTML=document.getElementById("field_divsss").innerHTML+

  "<p id='input_textsss"+total_text+"_wrapper'><input type='text' name = 'locationedit' class='form-control' id='input_textsss"+total_text+"' placeholder='Enter Text'><input type='button' class='btn btn-warning' value='Remove' onclick=remove_fieldsss('input_textsss"+total_text+"');></p>";

  "<p id='input_textsss"+total_text+"_wrapper'><input type='text' class='form-control' id='input_textsss"+total_text+"' placeholder='Enter Text'><input type='button' class='btn btn-warning' value='Remove' onclick=remove_fieldsss('input_textsss"+total_text+"');></p>";

}
function remove_fieldsss(id)
{
  document.getElementById(id+"_wrapper").innerHTML="";
}
</script>
<script type="text/javascript">
function add_fieldssss()
{
  var total_text=document.getElementsByClassName("input_textssss");
  total_text=total_text.length+1;
  document.getElementById("field_divssss").innerHTML=document.getElementById("field_divssss").innerHTML+
  "<p id='input_textssss"+total_text+"_wrapper'><input type='text' class='form-control' id='input_textssss"+total_text+"' placeholder='Enter Text'><input type='button' class='btn btn-warning' value='Remove' onclick=remove_fieldssss('input_textssss"+total_text+"');></p>";
}
function remove_fieldssss(id)
{
  document.getElementById(id+"_wrapper").innerHTML="";
}
</script>
<script type="text/javascript">
function add_fieldsssss()
{
  var total_text=document.getElementsByClassName("input_textsssss");
  total_text=total_text.length+1;
  document.getElementById("field_divsssss").innerHTML=document.getElementById("field_divsssss").innerHTML+

  "<p id='input_textsssss"+total_text+"_wrapper'><input type='text' name = 'clientedit' class='form-control' id='input_textsssss"+total_text+"' placeholder='Enter Text'><input type='button' class='btn btn-warning' value='Remove' onclick=remove_fieldsssss('input_textsssss"+total_text+"');></p>";

  "<p id='input_textsssss"+total_text+"_wrapper'><input type='text' class='form-control' id='input_textsssss"+total_text+"' placeholder='Enter Text'><input type='button' class='btn btn-warning' value='Remove' onclick=remove_fieldsssss('input_textsssss"+total_text+"');></p>";

}
function remove_fieldsssss(id)
{
  document.getElementById(id+"_wrapper").innerHTML="";
}
</script>
@stop