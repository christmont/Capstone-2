
@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')  
@section('content')
<section id="middle">
    <header id="page-header">
        <h1>NEW SCHEDULE</h1>
    </header>
<br><br>
<div class="container">
    <div class="col-md-4">
    <form action="{{ url('schedule/register') }}" method= "post">
        {{csrf_field()}}
        <div class="form-group">
            <label>Name</label>
            <select id = "type" name="schedtype" class="form-control " required onchange="getval(this);">
                    <option value="" selected="selected"></option>
                    @foreach($scheduletype as $scheduletypes)
      <option value="{{$$scheduletypes->name}}">{{$scheduletypes->name}}</option>
    @endforeach
                    {{-- <option value="edu">Other</option> --}}
                    </select>
    </div>
    <div class='col-md-4'>
        <div class="form-group">
            <div>
                <label>Start time and date</label>
            </div>
            <div class='input-group date' >
                <input id='datetimepicker6' name ="start" class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class='col-md-4'>
        <div class="form-group">
            <div>
                <label>End time and Date</label>
            </div>
            <div class='input-group date'>
                <input id='datetimepicker7' name ="end" class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <center>
    <footer><br><br><br><br><br><br><br><br>
        
        <button type="submit" class="btn btn-green"/>Submit
      </footer></center></form>
</div>
</section>

<script>
   function getval(nor)
{
    if(type.value == 'Hearing')
    {
         
            document.getElementById('notary').style.display = 'block';
            document.getElementById('or').style.display = 'none';
            document.getElementById('tab').style.display = 'none';
            document.getElementById('docu').style.display = 'none';

         
    }
    else if(type.value == 'For Inquest')
    {
            document.getElementById('docu').style.display = 'block';
            document.getElementById('or').style.display = 'none';
            document.getElementById('tab').style.display = 'none';
            document.getElementById('notary').style.display = 'none';
    }
    
}
   </script>  
@stop