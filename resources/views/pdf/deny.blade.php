@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">


				<!-- page title -->
				<header id="page-header">
					<h1>NOT QUALIFIED FORM</h1>
					
			</header>

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
					
						<!--<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="pull-right">
									<a href="#createprojects" class="btn btn-sm btn-green" data-toggle="modal"><i class="fa fa-plus"></i> New Request</a>
									
								</div>
							</div>
							
						</div>
						 panel content -->
						<div class="panel-body">
							<div class="container-fluid">
								<div class="col-md-6">
								</div>
								<div class="col-md-4">
						<div class="card1">
								<div class="container">
									
										<form>
											<div class="form-group">
									<p>Sorry  but you are not qualified to be a client of PAO due to </p>
											</form>
										    </div>
									
						</div>
							    </div>
								<div class="col-md-6">
							
						</div>
						
										</div>
						</div>			
			</section>
@stop