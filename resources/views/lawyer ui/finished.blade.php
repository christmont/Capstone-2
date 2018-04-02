@extends('lawyer ui/lawyer ui')
@extends('lawyer ui/lawyer side-nav')
@extends('lawyer ui/lawyer header-main')
@section('contents')

<section id="middle">


				<!-- page title -->
				<header id="page-header">
					<h1>Finished Documents</h1>
					<ol class="breadcrumb">
						<li><a href="#">Tables</a></li>
						<li class="active">Documents</li>
						
					</ol>
				</header>
				<div id="content" class="padding-20">
					<div id="panel-1" class="panel panel-default">
						<div class="panel-heading">
							<span class="title elipsis">
								<strong>Inquest Table</strong>
							</span></div>
						<div class="panel-body">
							
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
									<tr>
										<th>Client Name</th>
										<th>Document Date Issued</th>
										<th>View</th>	
									</tr>
								</thead>
								<tbody>
									@foreach($finish as $finishs)
									<tr>
										<td>{{ucfirst($finishs->clfname)}} {{ucfirst($finishs->clmname)}} {{ucfirst($finishs->cllname)}}</td>
										<td>{{date('F j Y',strtotime($finishs->clnotarydate))}}</td>
										<td>
												<div class="btn-group" role="group" aria-label="Basic example">
  							
  							<a  class="btn btn-info" href="{{ route('inquestedit',$finishs->id) }}">View</a>
 	 								
								</div>
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