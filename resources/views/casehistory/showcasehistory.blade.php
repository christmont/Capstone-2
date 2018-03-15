@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">
	


				<!-- page title -->
				<header id="page-header">
					<h1>Case History</h1>
					<ol class="breadcrumb">
						<li><a href="#">Tables</a></li>
						<li class="active">Case </li>
					</ol>
				</header>
				<!-- /page title -->


      <!-- Modal Header -->

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
								<strong>Case History</strong> <!-- panel title -->
							</span>

							<!-- right options -->
							<ul class="options pull-right list-inline">
								<li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Colapse" data-placement="bottom"></a></li>
								<li><a href="#" class="opt panel_fullscreen hidden-xs" data-toggle="tooltip" title="Fullscreen" data-placement="bottom"><i class="fa fa-expand"></i></a></li>
								<li><a href="#" class="opt panel_close" data-confirm-title="Confirm" data-confirm-message="Are you sure you want to remove this panel?" data-toggle="tooltip" title="Close" data-placement="bottom"><i class="fa fa-times"></i></a></li>
							</ul>
							<!-- /right options -->

						</div>
						<div class="panel-body">
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
									<tr>
										<th>Control Number</th>
										<th>Client Name</th>
										<th>Case Number</th>
										<th>Case Title</th>
										<th>Case Name</th>
										<th>Assigned To</th>
										<th>Court</th>
										<th>Verdict</th>
										<th>View</th>
									</tr>
								</thead>
								<tbody>
								@foreach ($casehistory as $client)
									<tr>
										
										<td>
											{{$client->control_number}}
										</td>
										<td>
											 {{$client->clfname}} {{$client->clmname}} {{$client->cllname}}
										</td>
										
										<td>
											 {{$client->caseno}}
										</td>
									
										<td>
											{{$client->title}}
										</td>
									
										
										<td>
											 {{$client->casename}} 
										</td>
										 @foreach($lawyer as $lawyers) 
										<td>
											Atty. {{$lawyers->efname}} {{$lawyers->emname}} {{$lawyers->elname}}
										</td>
										 @endforeach
							   @foreach($court as $courts)    
										<td>
											 {{$courts->name}}
										</td>
											
										<td>
											 {{$client->decision}} 
										</td>
							   @endforeach
										<td>
											  	<a class="btn btn-primary"  href="{{route('casehistory.view',$client->id)}}">
											  	<i class="fa fa-eye"></i> </a>
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
			</section>
@stop