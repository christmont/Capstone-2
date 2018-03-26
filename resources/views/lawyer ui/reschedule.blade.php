@extends('lawyer ui/lawyer ui')
@extends('lawyer ui/lawyer side-nav')
@extends('lawyer ui/lawyer header-main')
@section('contents')

<section id="middle">


                <!-- page title -->
<header id="page-header">
    <h1>Schedule</h1>
</header>
<div class="card">
    <div class="container">
        <div class="row" style="height: 500px;">
        
         
          
        <form action="{{ route('schededit',$schedules->id) }}" method= "post">
        {{csrf_field()}}
        {{ method_field('PUT') }}
        <div class="form-group">
        <div class="col-md-6">
            <label> Lawyer Name</label>
           
            @foreach($lawyer as $lawyers)
            <input type="text" value="{{$lawyers->efname}} {{$lawyers->emname}} {{$lawyers->elname}}" readonly class="form-control">
            @endforeach
           <br>
        </div>
        
        <div class="col-md-6">
            <label> Control Number</label>
          
            @foreach($client as $clients)
             @foreach($clients->casetobehandled as $con)
            <input type="text" value ="{{$con->control_number}}" readonly class="form-control">
             @endforeach
            @endforeach
           
           <br>
        </div>
        
        <div class="col-md-6">
            <label> Client Name</label>
          
            @foreach($client as $clients)
          <input type="text" value="{{$clients->clfname}} {{$clients->clmname}} {{$clients->cllname}}" readonly class="form-control">  
            @endforeach
          
        </div>
        
       
          <div class="col-md-6">
            <label>Schedule Type</label>
           <input type="text" value ="{{$schedules->type}}" readonly class="form-control">
            <br>
        </div>
       
        <div class='col-md-6'>
            <div>
                <label>Start time and date</label>
            </div>
            <div class='input-group date'   >
                
                <input id='datetimepicker6' name ="start"  class="form-control" />
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
    <button type="submit" class="btn btn-primary">Reschedule</button><br><br>
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
</section>
@stop