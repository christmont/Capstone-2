@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')
<section id="middle"><br>

				<div class="container">
					<ul class="nav nav-tabs">
						<li><a href="#criminal"> Criminal</a></li>
						<li><a href="#civil"> Civil</a></li>
						<li><a href="#labor"> Labor</a></li>
						<li><a href="#administrative"> Administrative</a></li>
					</ul>

					
						<div id="criminal" class="tab-content">
							<div class="card1">
							<div class="container"><br>
							
										<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
									<tr>
										<th>Full Name</th>
										<th>Nature of Request</th>
										<th>Case Transfer</th>
										<th>View</th>
									</tr>
								</thead>
				
								<tbody>
								
									<tr>
									
										<td>
											
											 
										</td>
										<td>
											
										</td>
										<td>
											<a class = "btn btn-green" href="">
											Case Transfer </a>
										</td>
										
										<td>
											<a  class = "btn btn-info" href="">
											View </a>
										</td>
									</tr>
								
								</tbody>
							</table>

								
							</div>
							</div>								
						</div>

						<div id="civil" class="tab-content">
							<div class="card1">
							<div class="container"><br>
							
										<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
									<tr>
										<th>Full Name</th>
										<th>Nature of Request</th>
										<th>Case Transfer</th>
										<th>View</th>
									</tr>
								</thead>
				
								<tbody>
								
									<tr>
									
										<td>
											
											 
										</td>
										<td> 
										</td>
										<td>
											<a class = "btn btn-green" href="">
											Case Transfer </a>
										</td>
										
										<td>
											<a  class = "btn btn-info" href="">
											View </a>
										</td>
									</tr>
								
								</tbody>
							</table>

								
							</div>
							</div>								
						</div>
						<div id="labor" class="tab-content">
							<div class="card1">
							<div class="container"><br>
										<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
									<tr>
										<th>Full Name</th>
										<th>Nature of Request</th>
										<th>Case Transfer</th>
										<th>View</th>
									</tr>
								</thead>
				
								<tbody>
								
									<tr>
									
										<td>
											 
											 
										</td>
										<td>
											  
										</td>
										<td>
											<a class = "btn btn-green" href="">
											Case Transfer </a>
										</td>
										
										<td>
											<a  class = "btn btn-info" href="">
											View </a>
										</td>
									</tr>
								
								</tbody>
							</table>

							</div>
							</div>								
						</div>
						<div id="administrative" class="tab-content">
							<div class="card1">
							<div class="container"><br>
									<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
									<tr>
										<th>Full Name</th>
										<th>Nature of Request</th>
										<th>Case Transfer</th>
										<th>View</th>
									</tr>
								</thead>
				
								<tbody>
									<tr>
									
										<td>
											 
										</td>
										<td>
											  
										</td>
										<td>
											<a class = "btn btn-green" href="">
											Case Transfer </a>
										</td>
										
										<td>
											<a  class = "btn btn-info" href="">
											View </a>
										</td>
									</tr>
								
								</tbody>
							</table>

							</div>
							</div>								
						</div>
					</div>
				
			</section>
@stop