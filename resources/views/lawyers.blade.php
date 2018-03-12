@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">


				<!-- page title -->
				<header id="page-header">
					<h1>Lawyers</h1>
					<ol class="breadcrumb">
						<li><a href="#">Tables</a></li>
						<li class="active">Lawyers Table</li>
						
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
								<strong>Lawyers</strong> <!-- panel title -->
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
										<th>Check Lawyer</th>
									    <th> Handle Case</th>
										<th>Lawyer Name</th>
										<th>Status</th>
										<th>Case Count</th>

									</tr>
								</thead> 
							@foreach($employees as $lawyer)
							

								
								<tbody>
									<tr>
							<form id ="form-id" action = "{{route('requestlawyer',$lawyer->id)}}" method = "post">
		   					{{ csrf_field() }}
       						{{ method_field('PUT') }}
										<td><input type="checkbox" name="lawyer[]" value="{{$lawyer->id}}"></td>
										<td><label for="canhandlecase">Yes</label>  <input type="radio" name="canhandlecase[]" value="1"><label for="canhandlecase">No</label>  <input type="radio" name="canhandlecase[]" value="0"></td>
										<td>{{$lawyer->efname}} {{$lawyer->emname}} {{$lawyer->elname}}</td>
										@if($lawyer->status == 1 )
										<td>Can Handle Case</td>
										@else
									    <td>Cannot Handle Case</td>
										@endif 
										<td> {{$lawyer->casecount}} </td>
									</tr>
								</tbody>

						 
							@endforeach
						
							</table>
 							<footer>
								<center> <button id ="your-id" onclick="document.getElementById('form-id').submit();" type="submit" class="btn btn-green ">Submit</button></center>
							</footer>
							</form>
						    
						</div>
                        
						<!-- /panel content -->

						<!-- panel footer -->
						
					</div>
					<!-- /PANEL -->

				</div>
<script>
	var form = document.getElementById("form-id");

document.getElementById("your-id").addEventListener("click", function () {
  form.submit();
});			
</script>						
</section>		
@stop