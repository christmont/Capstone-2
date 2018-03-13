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
							<div class="panel-body">
							
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
									<tr>
										<th>ITEM NO.</th>
										<th>CONTROL NO.</th>
										<th>PARTY REPRESENTED</th>
										<th>GENDER/SEX</th>
										<th>TITLE OF THE CASE</th>
										<th>COURT/BODY</th>
										<th>CASE NO.</th>
										<th>CAUSE OF ACTION</th>
										<th>STATUS OF THE CASE</th>
									</tr>
								</thead>
				
								<tbody>
									@foreach($criminalreport as $criminalreports)
									 @foreach($criminalcourts as $criminalcourt)
									<tr>
									
										
									
									
										<td></td>
										<td>{{$criminalreports->control_number}}</td>
										<td>{{$criminalreports->clfname}} {{$criminalreports->clmname}} {{$criminalreports->cllname}}</td>
										<td>{{$criminalreports->clgender}}</td>
										<td>{{$criminalreports->title}}</td>
										<td>{{$criminalcourt->name}}</td>
										<td>{{$criminalreports->caseno}}</td>
										<td>{{$criminalreports->casename}}</td>
										<td>{{$criminalreports->case_status}}</td>
									    
									
								     
									</tr>
								     @endforeach
								      @endforeach
								</tbody>
							</table>

						</div>							
						</div>

						<div id="civil" class="tab-content">
							<div class="panel-body">
							
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
									<tr>
										<th>ITEM NO.</th>
										<th>CONTROL NO.</th>
										<th>PARTY REPRESENTED</th>
										<th>GENDER/SEX</th>
										<th>TITLE OF THE CASE</th>
										<th>COURT/BODY</th>
										<th>CASE NO.</th>
										<th>CAUSE OF ACTION</th>
										<th>STATUS OF THE CASE</th>
									</tr>
								</thead>
				
								<tbody>
									<tr>
									@foreach($civilreport as $civilreports)
									 @foreach($civilcourts as $civilcourt)
										
									
									
										<td></td>
										<td>{{$civilreports->control_number}}</td>
										<td>{{$civilreports->clfname}} {{$civilreports->clmname}} {{$civilreports->cllname}}</td>
										<td>{{$civilreports->clgender}}</td>
										<td>{{$civilreports->title}}</td>
										<td>{{$civilcourt->name}}</td>
										<td>{{$civilreports->caseno}}</td>
										<td>{{$civilreports->casename}}</td>
										<td>{{$civilreports->case_status}}</td>
									    
									
								     @endforeach
								      @endforeach
									</tr>
								
								</tbody>
							</table>

						</div>							
						</div>
						<div id="labor" class="tab-content">
							<div class="panel-body">
							
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
									<tr>
										<th>ITEM NO.</th>
										<th>CONTROL NO.</th>
										<th>PARTY REPRESENTED</th>
										<th>GENDER/SEX</th>
										<th>TITLE OF THE CASE</th>
										<th>COURT/BODY</th>
										<th>CASE NO.</th>
										<th>CAUSE OF ACTION</th>
										<th>STATUS OF THE CASE</th>
									</tr>
								</thead>
				
								<tbody>
									<tr>
									@foreach($laborreport as $laborreports)
									 @foreach($laborcourts as $laborcourt)
										
									
									
										<td></td>
										<td>{{$laborreports->control_number}}</td>
										<td>{{$laborreports->clfname}} {{$laborreports->clmname}} {{$laborreports->cllname}}</td>
										<td>{{$laborreports->clgender}}</td>
										<td>{{$laborreports->title}}</td>
										<td>{{$laborcourt->name}}</td>
										<td>{{$laborreports->caseno}}</td>
										<td>{{$laborreports->casename}}</td>
										<td>{{$laborreports->case_status}}</td>
									    
									
								     @endforeach
								      @endforeach
									</tr>
								
								</tbody>
							</table>

						</div>							
						</div>
						<div id="administrative" class="tab-content">
							<div class="panel-body">
							
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
									<tr>
										<th>ITEM NO.</th>
										<th>CONTROL NO.</th>
										<th>PARTY REPRESENTED</th>
										<th>GENDER/SEX</th>
										<th>TITLE OF THE CASE</th>
										<th>COURT/BODY</th>
										<th>CASE NO.</th>
										<th>CAUSE OF ACTION</th>
										<th>STATUS OF THE CASE</th>
									</tr>
								</thead>
				
								<tbody>
									@foreach($administrativereport as $administrativereports)
									 @foreach($administrativecourts as $administrativecourt)
										
									<tr>
									
										<td></td>
										<td>{{$administrativereports->control_number}}</td>
										<td>{{$administrativereports->clfname}} {{$administrativereports->clmname}} {{$administrativereports->cllname}}</td>
										<td>{{$administrativereports->clgender}}</td>
										<td>{{$administrativereports->title}}</td>
										<td>{{$administrativecourt->name}}</td>
										<td>{{$administrativereports->caseno}}</td>
										<td>{{$administrativereports->casename}}</td>
										<td>{{$administrativereports->case_status}}</td>
									    
									</tr>
								     @endforeach
								      @endforeach
									     
							</table>
								
						</div>							
						</div>
						<footer style="text-align:center">
							<a class = "btn btn-green" href="/print/yearend">Print</a>
						</footer>
					</div>
				
			</section>
			
@stop