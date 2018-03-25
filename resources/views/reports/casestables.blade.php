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
										<th>STATUS DATE</th>
										<th>DECISION</th>
									</tr>
								</thead>
			
								<tbody>
									@foreach($criminalreport as $key => $criminalreports)
									 @foreach($criminalcourts as $criminalcourt)
									<tr>
									
										
									
									
										<td>{{$key+=1}}</td>
										<td>{{$criminalreports->control_number}}</td>
										<td>{{$criminalreports->clfname}} {{$criminalreports->clmname}} {{$criminalreports->cllname}}</td>
										<td>{{$criminalreports->clgender}}</td>
										<td>{{$criminalreports->title}}</td>
										<td>{{$criminalcourt->name}}</td>
										<td>{{$criminalreports->caseno}}</td>
										<td>{{$criminalreports->casename}}</td>
										<td>{{$criminalreports->case_status}}</td>
										<td>
											@if($criminalreports->case_status == 'Arraignment') 
											
											{{$criminalreports->arraignmentDate}} 
										    
											@elseif ($criminalreports->case_status == 'Preliminary Conference') 
											
											{{$criminalreports->prelimconfDate}}
											
											@elseif ($criminalreports->case_status == 'Pre-trial') 
											
											{{$criminalreports->pretrailDate}}
											
											@elseif ($criminalreports->case_status == 'Initial Trial') 
											
											{{$criminalreports->inittrialdate}}
											
											@elseif ($criminalreports->case_status == 'Trial Proper(Prosecution Evidence)') 
											
											{{$criminalreports->prosecevidence}}
											
											@elseif ($criminalreports->case_status == 'Trial Proper(Defense Evidence)') 
											
											{{$criminalreports->defevidence}}
											
											@elseif ($criminalreports->case_status == 'Promulgation') 
											
											{{$criminalreports->promulgation}}
											
											@endif
										</td>
										<td>{{$criminalreports->decision}}</td>
									    
									
								     
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
										<th>STATUS DATE</th>
										<th>DECISION</th>
									</tr>
								</thead>
				@foreach($civilreport as $key =>  $civilreports)
									 @foreach($civilcourts as $civilcourt)

								<tbody>
									<tr>
									
										
									
									
										<td>{{$key+1}}</td>
										<td>{{$civilreports->control_number}}</td>
										<td>{{$civilreports->clfname}} {{$civilreports->clmname}} {{$civilreports->cllname}}</td>
										<td>{{$civilreports->clgender}}</td>
										<td>{{$civilreports->title}}</td>
										<td>{{$civilcourt->name}}</td>
										<td>{{$civilreports->caseno}}</td>
										<td>{{$civilreports->casename}}</td>
										<td>{{$civilreports->case_status}}</td>
										<td>
											@if($civilreports->case_status == 'Arraignment') 
											
											{{$civilreports->arraignmentDate}} 
										    
											@elseif ($civilreports->case_status == 'Preliminary Conference') 
											
											{{$civilreports->prelimconfDate}}
											
											@elseif ($civilreports->case_status == 'Pre-trial') 
											
											{{$civilreports->pretrailDate}}
											
											@elseif ($civilreports->case_status == 'Initial Trial') 
											
											{{$civilreports->inittrialdate}}
											
											@elseif ($civilreports->case_status == 'Trial Proper(Prosecution Evidence)') 
											
											{{$civilreports->prosecevidence}}
											
											@elseif ($civilreports->case_status == 'Trial Proper(Defense Evidence)') 
											
											{{$civilreports->defevidence}}
											
											@elseif ($civilreports->case_status == 'Promulgation') 
											
											{{$civilreports->promulgation}}
											
											@endif
										</td>
										<td>{{$civilreports->decision}}</td>
									    
									
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
									    <th>STATUS DATE</th>
										<th>DECISION</th>
									</tr>
								</thead>
				@foreach($laborreport as $key => $laborreports)
									 @foreach($laborcourts as $laborcourt)
								<tbody>
									<tr>
									
										
									
									
										<td>{{$key+1}}</td>
										<td>{{$laborreports->control_number}}</td>
										<td>{{$laborreports->clfname}} {{$laborreports->clmname}} {{$laborreports->cllname}}</td>
										<td>{{$laborreports->clgender}}</td>
										<td>{{$laborreports->title}}</td>
										<td>{{$laborcourt->name}}</td>
										<td>{{$laborreports->caseno}}</td>
										<td>{{$laborreports->casename}}</td>
										<td>{{$laborreports->case_status}}</td>
										<td>
											@if($laborreports->case_status == 'Arraignment') 
											
											{{$laborreports->arraignmentDate}} 
										    
											@elseif ($laborreports->case_status == 'Preliminary Conference') 
											
											{{$laborreports->prelimconfDate}}
											
											@elseif ($laborreports->case_status == 'Pre-trial') 
											
											{{$laborreports->pretrailDate}}
											
											@elseif ($laborreports->case_status == 'Initial Trial') 
											
											{{$laborreports->inittrialdate}}
											
											@elseif ($laborreports->case_status == 'Trial Proper(Prosecution Evidence)') 
											
											{{$laborreports->prosecevidence}}
											
											@elseif ($laborreports->case_status == 'Trial Proper(Defense Evidence)') 
											
											{{$laborreports->defevidence}}
											
											@elseif ($laborreports->case_status == 'Promulgation') 
											
											{{$laborreports->promulgation}}
											
											@endif
										</td>
										<td>{{$laborreports->decision}}</td>
									    
									
								    
									</tr>
								 @endforeach
								      @endforeach
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
										<th>STATUS DATE</th>
										<th>DECISION</th>
									</tr>
								</thead>
				
								<tbody>
									@foreach($administrativereport as $key => $administrativereports)
									 @foreach($administrativecourts as $administrativecourt)
										
									<tr>
									
										<td>{{$key +1}}</td>
										<td>{{$administrativereports->control_number}}</td>
										<td>{{$administrativereports->clfname}} {{$administrativereports->clmname}} {{$administrativereports->cllname}}</td>
										<td>{{$administrativereports->clgender}}</td>
										<td>{{$administrativereports->title}}</td>
										<td>{{$administrativecourt->name}}</td>
										<td>{{$administrativereports->caseno}}</td>
										<td>{{$administrativereports->casename}}</td>
										<td>{{$administrativereports->case_status}}</td>
										<td>
											@if($administrativereports->case_status == 'Arraignment') 
											
											{{$administrativereports->arraignmentDate}} 
										    
											@elseif ($administrativereports->case_status == 'Preliminary Conference') 
											
											{{$administrativereports->prelimconfDate}}
											
											@elseif ($administrativereports->case_status == 'Pre-trial') 
											
											{{$administrativereports->pretrailDate}}
											
											@elseif ($administrativereports->case_status == 'Initial Trial') 
											
											{{$administrativereports->inittrialdate}}
											
											@elseif ($administrativereports->case_status == 'Trial Proper(Prosecution Evidence)') 
											
											{{$administrativereports->prosecevidence}}
											
											@elseif ($administrativereports->case_status == 'Trial Proper(Defense Evidence)') 
											
											{{$administrativereports->defevidence}}
											
											@elseif ($administrativereports->case_status == 'Promulgation') 
											
											{{$administrativereports->promulgation}}
											
											@endif
										</td>
										<td>{{$administrativereports->decision}}</td>
									    
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