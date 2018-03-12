@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif

				<!-- page title -->
				<header id="page-header">
					<h1>Decision </h1>
					<ol class="breadcrumb">
						<li><a href="#">Tables</a></li>
						<li class="active">Decision </li>
						<div class="pull-right">
							<a  class="btn btn-green" href="/decision/register" ><i class="fa fa-plus"></i>New Decision</a>
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
								<strong>Decision</strong> <!-- panel title -->
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
										<th>Name</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
<tbody>
								@foreach ($decision as $decide)
									<tr>
										<td>
											 {{$decide->name}}
										</td>

										
										
										<td>
											   <button type="button" class="btn btn-primary" data-toggle="modal" href=".bs-example-modal-lg{{ $decide->id }}">
											  	<i class="fa fa-pencil"></i> Edit</button>

											  	<div class="modal fade bs-example-modal-lg{{ $decide->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
<form id="update-language-form" action="{{ route('editdecision',$decide->id) }}" method="post">
                            {{ csrf_field() }}
{{ method_field('PUT') }}
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myLargeModalLabel">Edit Decision</h4>
								</div>

								<!-- body modal -->
								<div class="modal-body">
															
								<form>
						      	<div class="row">
									<div class="form-group">
										<div class="col-md-4">
											<label>Name *</label>
											<input type="text" name="name" value="{{ $decide->name }}" class="form-control ">
										</div>
										
				
		</div>

  </div>
											<div class="modal-footer"><center>
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        <button type="submit" class="btn btn-green">Submit</button></center>
						      </div>
										</form>
									    </div>
									</div></div></div>
										</td>
										<td>
											<form action="{{ route('deldecision', $decide->id) }}" method = "post">
												{{ csrf_field() }}
        {{ method_field('DELETE') }}
											<button type ="submit" class="btn btn-danger delete-user" onclick="return confirm('Are you sure?')" href="{{ route('deldecision',$decide->id) }}"><i class="fa fa-trash"></i>
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
			</section>
@stop