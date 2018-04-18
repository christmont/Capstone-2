@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">
				<header id="page-header">
					<h1>Lawyers</h1>
					<ol class="breadcrumb">
						<li><a href="#">Tables</a></li>
						<li class="active">Lawyers Table</li>
						
					</ol>
				</header>
				<div id="content" class="padding-20">
					<div id="panel-1" class="panel panel-default">
						<div class="panel-heading">
							<span class="title elipsis">
								<strong>Lawyers</strong>
							</span>

							<!-- right options -->
							<ul class="options pull-right list-inline">
								<li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Colapse" data-placement="bottom"></a></li>
								<li><a href="#" class="opt panel_fullscreen hidden-xs" data-toggle="tooltip" title="Fullscreen" data-placement="bottom"><i class="fa fa-expand"></i></a></li>
								<li><a href="#" class="opt panel_close" data-confirm-title="Confirm" data-confirm-message="Are you sure you want to remove this panel?" data-toggle="tooltip" title="Close" data-placement="bottom"><i class="fa fa-times"></i></a></li>
							</ul>
						</div>
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
					</div>
				</div>
<script type="text/javascript">
	var form = document.getElementById("form-id");

document.getElementById("your-id").addEventListener("click", function () {
  form.submit();
});			
</script>						
</section>		
@stop