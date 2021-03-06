@extends('lawyer ui/lawyer ui')
@extends('lawyer ui/lawyer side-nav')
@extends('lawyer ui/lawyer header-main')
@section('contents')

<section id="middle">


				<!-- page title -->
				<header id="page-header">
					<h1>Legal Documentation</h1>
					<ol class="breadcrumb">
						<li><a href="#">Tables</a></li>
						<li class="active">Request tables</li>
						<li class="active">Legal Documentation tables</li>
						<div class="pull-right">
							
						</div>
					</ol>
				</header>
				<!-- /page title -->

				<div id="content" class="padding-20">

					<!-- 
						PANEL CLASSES:
							panel-default
							panel-danger
							panel-warning
							panel-info
							panel-success

						INFO: 	panel collapse - stored on user localStorage (handled by app.js _panels() function).
								All pannels should have an unique ID or the panel collapse status will not be stored!
					-->
					<div id="panel-1" class="panel panel-default">
						<div class="panel-heading">
							<span class="title elipsis">
								<strong>CLIENTS</strong> <!-- panel title -->
							</span>

							<!-- right options -->
							<ul class="options pull-right list-inline">
								<li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Colapse" data-placement="bottom"></a></li>
								<li><a href="#" class="opt panel_fullscreen hidden-xs" data-toggle="tooltip" title="Fullscreen" data-placement="bottom"><i class="fa fa-expand"></i></a></li>
								<li><a href="#" class="opt panel_close" data-confirm-title="Confirm" data-confirm-message="Are you sure you want to remove this panel?" data-toggle="tooltip" title="Close" data-placement="bottom"><i class="fa fa-times"></i></a></li>
							</ul>
							<!-- /right options -->

						</div>
						<!--<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="pull-right">
									<a href="#createprojects" class="btn btn-sm btn-green" data-toggle="modal"><i class="fa fa-plus"></i> New Request</a>
									
								</div>
							</div>
							
						</div>
						 panel content -->
						<div class="panel-body">
							
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
									<tr>
										<th>Full Name</th>
										<th>Document</th>
										<th>Print</th>
									
										<th>Delete</th>
									</tr>
								</thead>
				
								<tbody>
								@foreach ($clients as $client)
									<tr>
									
										<td>
											 {{$client->cllname}}, {{$client->clfname}}  @if ( $client->clmname != "none" )
											 ,{{$client->clmname}}
											 @endif
											 
										</td>
										<td>
											 {{$client->documenttype}}
										</td>
										
										
										<td>
											@if($client->documenttype == 'Affidavit')
											<a  class = "btn btn-info" href="{{route('request.print',$client->id)}}">
											Print </a>
											@elseif($client->documenttype == 'Petition')
											<a  class = "btn btn-info" href="{{route('petitionprint',$client->id)}}">
											Print </a>
											@endif
										</td>
									
										<td>
											
 	 									<form action="{{ route('finishdocu',$client->id) }}" method = "post">
												{{ csrf_field() }}
        									{{ method_field('PUT') }}
											<button type ="submit" class="btn btn-danger fa fa-trash "  href="{{ route('finishdocu',$client->id) }}">
											Delete </button>
										</form>
											
										</td>
									</tr>
								@endforeach	
								</tbody>
								
							</table>

						</div>
						<!-- /panel content -->

						<!-- panel footer -->
						

					</div>
					<!-- /PANEL -->

				</div>
		<script type="text/javascript">
    window.onload = function() {
        document.getElementById('ifYes').style.display = 'none';
    }

    function DetainedCheck() {
        if (document.getElementById('yesCheck').checked) {
            document.getElementById('ifYes').style.display = 'block';
        } 
        else {
            document.getElementById('ifYes').style.display = 'none';
        }
    }

</script>

<script type="text/javascript">
    window.onload = function() {
        document.getElementById('ifMarried').style.display = 'none';
    }

    function civilstatCheck() {
        if (document.getElementById('marriedCheck').checked) {
            document.getElementById('ifMarried').style.display = 'block';
        } 
        else {
            document.getElementById('ifMarried').style.display = 'none';
        }
    }
    $('#client').submit(function(e){
    e.preventDefault();
    $.ajax({
        url:'client/register',
        type:'post',
        data:$('#client').serialize(),
        success:function(){
            //whatever you wanna do after the form is successfully submitted
        }
    });
});
   </script>
<script type="text/javascript">
$(document).ready(function(){
    // Show the Modal on load
  
    
    // Hide the Modal
    $("#myBtn").click(function(){
        $("#bs-example-modal-full").modal("hide");
    });
});
$(document).ready(function(){
$('#submit').click(function() {
    $.ajax({
        url: 'client/register',
        type: 'POST',
        data: {
            fname: 'email@example.com',
            mname: 'hello world!'
        },
        success: function(msg) {
            alert('Email Sent');
        }               
    });
});
});
</script>				
</section>		
@stop