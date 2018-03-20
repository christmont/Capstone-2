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
            
            <label> Lawyer Name</label>

           <select name="lawyer" class="form-control " required onchange="if (this.value=='edu'){this.form['edu'].style.visibility='visible'}else {this.form['edu'].style.visibility='hidden'};">
            @foreach($lawyer as $lawyers)
                <option value="" selected="selected"></option>
                

                <option value="{{$lawyers->id}}">{{$lawyers->efname}} {{$lawyers->emname}} {{$lawyers->elname}}</option>
              
                {{-- <option value="edu">Other</option> --}}
            </select><br>
            @endforeach  
           <br>
        </div>
        @foreach($schedule as $sched)
        <div class="col-md-6">
            <label>Schedule Type</label>
            <select name="type" class="form-control " required onchange="if (this.value=='edu'){this.form['edu'].style.visibility='visible'}else {this.form['edu'].style.visibility='hidden'};">
                <option value="{{$schedule->type}}" selected="selected"></option>
                @foreach($scheduletype as $scheduletypes)

                <option value="{{$scheduletypes->name}}">{{$scheduletypes->name}}</option>
                @endforeach
                {{-- <option value="edu">Other</option> --}}
            </select><br>
        </div>
        <div class='col-md-6'>
            <div>
                <label>Start time and date</label>
            </div>
            <div class='input-group date'   >
                <input id='datetimepicker6' name ="start" value="{{$schedule->start}}"class="form-control" />
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
                <input id='datetimepicker7' name ="end" value ="{{$schedule->end}}" class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span><br>
            </div>
    </div>

        @endforeach
</div>
    
</div>
<footer style="text-align: center;" ><br>
    <button type="submit" class="btn btn-green">New Schedule</button><br><br>
    </footer>
</form></div>
</section>
@stop