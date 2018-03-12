@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">


				<!-- page title -->
				<header id="page-header">
					<h1>Court  </h1>
					<ol class="breadcrumb">
						<li><a href="#">Tables</a></li>
						<li class="active">Court </li>
						<div class="pull-right">
							<a  class="btn btn-green" href="/court/register" ><i class="fa fa-plus"></i>New Court </a>
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
								<strong>Court </strong> <!-- panel title -->
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
										<th>Branch</th>
										<th>Type</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
<tbody>
								@foreach ($courts as $cou)
									<tr>
										<td>
											 {{$cou->name}}
										</td>
										<td>
											{{$cou->branch}}
										</td>
										<td>
											 {{$cou->court_type}}
										</td>

										
										<td>
											   <button type="button" class="btn btn-primary" data-toggle="modal" href=".bs-example-modal-lg{{ $cou->id }}">
											  	<i class="fa fa-pencil"></i> Edit</button>

											  	<div class="modal fade bs-example-modal-lg{{ $cou->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
<form id="update-language-form" action="{{ route('editcou',$cou->id) }}" method="post">
                            {{ csrf_field() }}
{{ method_field('PUT') }}
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myLargeModalLabel">Edit Court</h4>
								</div>

								<!-- body modal -->
								<div class="modal-body">
															
								<form>
						      	<div class="row">
									<div class="form-group">
										<div class="col-md-4">
											<label>Name *</label>
											<input type="text" name="name" value="{{ $cou->name }}" class="form-control ">
										</div>
										<div class="col-md-4">
											<label>Court type *</label>
											<select name="type" class="form-control " required onchange="if (this.value=='edu'){this.form['edu'].style.visibility='visible'}else {this.form['edu'].style.visibility='hidden'};">
											<option value="" selected="selected"></option>
											@foreach($courttypes as $ct)
						      <option value="{{$ct->name}}">{{$ct->name}}</option>
						    @endforeach
											{{-- <option value="edu">Other</option> --}}
											</select>
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
											<form action="{{ route('delcou', $cou->id) }}" method = "post">
												{{ csrf_field() }}
        {{ method_field('DELETE') }}
											<button type ="submit" class="btn btn-danger delete-user" onclick="return confirm('Are you sure?')" href="{{ route('delcou',$cou->id) }}"><i class="fa fa-trash"></i>
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