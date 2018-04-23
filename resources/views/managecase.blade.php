@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">
				<header id="page-header">
					<h1>Manage Case</h1>
					<ol class="breadcrumb">
						<li><a href="#">Tables</a></li>
						<li class="active">Case </li>
					</ol>
				</header>
				<div id="content" class="padding-20">
					<div id="panel-1" class="panel panel-default">
						<div class="panel-heading">
							<span class="title elipsis">
								<strong>Manage Case</strong>
							</span>
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
										<th>Client Name</th>
										<th>Case Name</th>
										<th>Case Status</th>
										<th>Edit</th>
									</tr>
								</thead>
								<tbody>
								@foreach($allcases as $case)
									<tr>
										
										<td>
											 {{$case->clfname}} {{$case->clmname}} {{$case->cllname}}
										</td>
									
										<td>
											 {{$case->casename}} 
										</td>
										<td>
											 {{$case->case_status}} 
										</td>
									   
										<td>
											  	<a class="btn btn-primary"  href="{{route('showeditcase',$case->client_id)}}">
											  	<i class="fa fa-pencil"></i> Edit</a>
										</td>
									</tr>
									@endforeach	
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</section>
@stop