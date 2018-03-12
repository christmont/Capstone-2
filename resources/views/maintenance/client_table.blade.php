@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">


				<!-- page title -->
				<header id="page-header">
					<h1>Request TABLE</h1>
					<ol class="breadcrumb">
						<li><a href="#">Tables</a></li>
						<li class="active">Request tables</li>
						<div class="pull-right">
							<a  class="btn btn-green" href="/client/register" ><i class="fa fa-plus"></i> New Request</a>
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
										<th>Nature of Request</th>
										<th>Monthly Income</th>
										<th>Approve</th>
										<th>Deny</th>
										<th>View</th>
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
											 {{$client->nature_of_request}}
										</td>
										<td class="center">
											 {{$client->clmonthly_net_income}}
										</td>
										<td>
											<a class = "btn btn-success" href="{{route('request.approve',$client->id)}}">
											Approve </a>
										</td>
										<td>
											<a  class = "btn btn-danger" href="{{route('request.deny',$client->id)}}">
											Deny </a>
										</td>
										<td>
											<a  class = "btn btn-info" href="{{route('request.view',$client->id)}}">
											View </a>
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
   <script>
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

</script>
						
</section>		
@stop