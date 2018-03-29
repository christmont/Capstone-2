@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">


				<!-- page title -->
<header id="page-header">
	<h1>Schedule</h1>
</header>
<div class="card">
	<div class="container">
        <div class="row" style="height: 500px;">
        <form action="{{ url('schedule/register') }}" method= "post">
        {{csrf_field()}}
        <div class="form-group">
         <div class="col-md-6">
            <label>Schedule Type</label>
            <select id = "type" name="schedtype" class="form-control " required onchange="getvalue(this);">
                <option value="" selected="selected"></option>
                @foreach($scheduletype as $scheduletypes)
                <option value="{{$scheduletypes->name}}">{{$scheduletypes->name}}</option>
                @endforeach
                {{-- <option value="edu">Other</option> --}}
            </select><br>
        </div>

        <div  class="col-md-6">
            <label> Lawyer Name</label>
            <select name="lawyer" class="form-control">
			<option value="" selected="selected"></option>
			@foreach($lawyer as $lawyers)
            <option value="{{$lawyers->id}}">{{$lawyers->efname}} {{$lawyers->emname}} {{$lawyers->elname}}</option>
            @endforeach
		    </select><br>
        </div>

        <div id ="inquest" style="display:none" class="col-md-6">
        <label>Inquest Lawyer 2 *</label>
        <select name="secondlawyer" class="form-control">
        <option></option>
        @foreach($lawyer2 as $secondlawyer)
        <option value="{{$secondlawyer->id}}">{{$secondlawyer->efname}} {{$secondlawyer->emname}} {{$secondlawyer->elname}} </option>
        @endforeach
        </select>
         <label>Inquest Assistant *</label>
        <select name="assistant" class="form-control">
        <option></option>
        @foreach($staff as $staffs)
        <option value="{{$staffs->id}}">{{$staffs->efname}} {{$staffs->emname}} {{$staffs->elname}} </option>
        @endforeach
        </select> <br>
        
                                <label>Nature of Call *</label><br>
                                <input type="radio" name="noc" value="Legal Advice">Legal Advice
                                <input type="radio" name="noc" value="Legal Assistance"> Legal Assistance <br>   
        
        <label>Location *</label>
                
        <input type="text" name="location" value="" class="form-control"><br>

         <label> Client Name</label>
            <select  name="inquest" class="form-control" >
            <option value="" selected="selected"></option>
            @foreach($inquest as $inquests)
            <option value="{{$inquests->id}}">{{$inquests->clfname}} {{$inquests->clmname}} {{$inquests->cllname}}</option>
            @endforeach
            </select><br>

        </div>

     
        <div id ="hearing" style="display:none" class="col-md-6">
            <label> Control Number</label>
           <select name="con" class="form-control">
            <option value="" selected="selected"></option>
            @foreach($client as $clients)
             @foreach($clients->casetobehandled as $con)
            <option value="{{$con->control_number}}">{{$con->control_number}} </option>
             @endforeach
            @endforeach
            </select>
           <br>
           <label> Client Name</label>
            <select  name="client" class="form-control" >
            <option value="" selected="selected"></option>
            @foreach($client as $clients)
            <option value="{{$clients->id}}">{{$clients->clfname}} {{$clients->clmname}} {{$clients->cllname}}</option>
            @endforeach
            </select><br>
        </div>
        
      

       

        
        
       
        <div class='col-md-6'>
            <div>
                <label>Start time and date</label>
            </div>
            <div class='input-group date'   >
                <input id='datetimepicker6' name ="start" class="form-control" />
                <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
                </span><br>
            </div>
        </div>
    <div class='col-md-6'>
            <div>
                <label>End time and Date</label>
            </div>
            <div class='input-group date'>
                <input id='datetimepicker7' name ="end" class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span><br>
            </div>
    </div>

        
</div>
    
</div>
<footer style="text-align: center;" ><br>
    <button   type="submit" class="btn btn-green">Submit</button><br><br>
     
    </footer>
</form>
</div>
 <script>
   function getval(client)
{
    if(client.value !== null)
    {
         
            document.getElementById('controlno').style.display = 'block';
            

         
    }
    else
    {
        document.getElementById('controlno').style.display = 'none';
        
    }
}

   </script>
   <script>
   function getvalue(type)
{
    if(type.value == 'Hearing')
    {
         
            document.getElementById('hearing').style.display = 'block';
            document.getElementById('inquest').style.display = 'none';
            

         
    }
    else if(type.value == 'For Inquest')
    {
            document.getElementById('inquest').style.display = 'block';
            document.getElementById('hearing').style.display = 'none';
           
    }
    
}
   </script>
</section>
@stop