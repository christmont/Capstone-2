@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')
<section id="middle"><br>

				<div class="container">
					<ul class="nav nav-tabs">
						<li><a href="#mtc"> MTC</a></li>
						<li><a href="#rtc"> RTC</a></li>
						<li><a href="#sandiganbayan"> Sandiganbayan</a></li>
						
					</ul>
					
						<div id="mtc" class="tab-content">
							<div class="panel-body">
							
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
									<tr>
										<th>ITEM NO.</th>
										<th>CONTROL NO.</th>
										<th>PARTY REPRESENTED</th>
										<th>SEX</th>
										<th>CASE TITLE</th>
										<th>CASE NO.</th>
										<th>CAUSE OF ACTION</th>
										<th>CASE STATUS</th>
										<th>DATE</th>
										<th>DECISION</th>
									</tr>
								</thead>
				
								<tbody>
									@foreach($mtccase as $mtccases)
									
									<tr>
									
										
									
									
										<td></td>
										<td>{{$mtccases->control_number}}</td>
										<td>{{$mtccases->clfname}} {{$mtccases->clmname}} {{$mtccases->cllname}}</td>
										<td>{{$mtccases->clgender}}</td>
										<td>{{$mtccases->title}}</td>
										<td>{{$mtccases->caseno}}</td>
										<td>{{$mtccases->casename}}</td>
										<td>{{$mtccases->case_status}}</td>
										<td>@if($mtccases->case_status == 'Arraignment') 
											
											{{$mtccases->arraignmentDate}} 
										    
											@elseif ($mtccases->case_status == 'Preliminary Conference') 
											
											{{$mtccases->prelimconfDate}}
											
											@elseif ($mtccases->case_status == 'Pre-trial') 
											
											{{$mtccases->pretrailDate}}
											
											@elseif ($mtccases->case_status == 'Initial Trial') 
											
											{{$mtccases->inittrialdate}}
											
											@elseif ($mtccases->case_status == 'Trial Proper(Prosecution Evidence)') 
											
											{{$mtccases->prosecevidence}}
											
											@elseif ($mtccases->case_status == 'Trial Proper(Defense Evidence)') 
											
											{{$mtccases->defevidence}}
											
											@elseif ($mtccases->case_status == 'Promulgation') 
											
											{{$mtccases->promulgation}}
											
											@endif</td>
										<td>{{$mtccases->decision}}</td>
									    
									
								     
									</tr>
								     @endforeach
								     
								</tbody>
							</table>

						</div>							
						</div>
						<div id="rtc" class="tab-content">
							<div class="panel-body">
							
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
									<tr>
										<th>ITEM NO.</th>
										<th>CONTROL NO.</th>
										<th>PARTY REPRESENTED</th>
										<th>SEX</th>
										<th>CASE TITLE</th>
										<th>CASE NO.</th>
										<th>CAUSE OF ACTION</th>
										<th>CASE STATUS</th>
										<th>DATE</th>
										<th>DECISION</th>
									</tr>
								</thead>
				
								<tbody>
									@foreach($rtccase as $rtccases)
									
									<tr>
									
										
									
									
										<td></td>
										<td>{{$rtccases->control_number}}</td>
										<td>{{$rtccases->clfname}} {{$rtccases->clmname}} {{$rtccases->cllname}}</td>
										<td>{{$rtccases->clgender}}</td>
										<td>{{$rtccases->title}}</td>
										<td>{{$rtccases->caseno}}</td>
										<td>{{$rtccases->casename}}</td>
										<td>{{$rtccases->case_status}}</td>
										<td>
											@if($rtccases->case_status == 'Arraignment') 				
											
											{{$rtccases->arraignmentDate}} 
										    
											@elseif ($rtccases->case_status == 'Preliminary Conference') 
											
											{{$rtccases->prelimconfDate}}
											
											@elseif ($rtccases->case_status == 'Pre-trial') 
											
											{{$rtccases->pretrailDate}}
											
											@elseif ($rtccases->case_status == 'Initial Trial') 
											
											{{$rtccases->inittrialdate}}
											
											@elseif ($rtccases->case_status == 'Trial Proper(Prosecution Evidence)') 
											
											{{$rtccases->prosecevidence}}
											
											@elseif ($rtccases->case_status == 'Trial Proper(Defense Evidence)') 
											
											{{$rtccases->defevidence}}
											
											@elseif ($rtccases->case_status == 'Promulgation') 
											
											{{$rtccases->promulgation}}
											
											@endif</td>
										</td>
										<td>{{$rtccases->decision}}</td>
									    
									
								     
									</tr>
								     @endforeach
								     
								</tbody>
							</table>

						</div>							
						</div>
						<div id="sandiganbayan" class="tab-content">
							<div class="panel-body">
							
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
									<tr>
										<th>ITEM NO.</th>
										<th>CONTROL NO.</th>
										<th>PARTY REPRESENTED</th>
										<th>SEX</th>
										<th>CASE TITLE</th>
										<th>CASE NO.</th>
										<th>CAUSE OF ACTION</th>
										<th>CASE STATUS</th>
										<th>DATE</th>
										<th>DECISION</th>
									</tr>
								</thead>
				
								<tbody>
									@foreach($sbcase as $sbcases)
									
									<tr>
									
										
									
									
										<td></td>
										<td>{{$sbcases->control_number}}</td>
										<td>{{$sbcases->clfname}} {{$sbcases->clmname}} {{$sbcases->cllname}}</td>
										<td>{{$sbcases->clgender}}</td>
										<td>{{$sbcases->title}}</td>
										<td>{{$sbcases->caseno}}</td>
										<td>{{$sbcases->casename}}</td>
										<td>{{$sbcases->case_status}}</td>
										<td>
											@if($sbcases->case_status == 'Arraignment') 
											
											{{$sbcases->arraignmentDate}}
										    
											@elseif ($sbcases->case_status == 'Preliminary Conference') 
											
											{{$sbcases->prelimconfDate}}
											
											@elseif ($sbcases->case_status == 'Pre-trial') 
											
											{{$sbcases->pretrailDate}}
											
											@elseif ($sbcases->case_status == 'Initial Trial') 
											
											{{$sbcases->inittrialdate}}
											
											@elseif ($sbcases->case_status == 'Trial Proper(Prosecution Evidence)') 
											
											{{$sbcases->prosecevidence}}
											
											@elseif ($sbcases->case_status == 'Trial Proper(Defense Evidence)') 
											
											{{$sbcases->defevidence}}
											
											@elseif ($sbcases->case_status == 'Promulgation') 
											
											{{$sbcases->promulgation}}
											
											@endif
										</td>
										<td>{{$sbcases->decision}}</td>
									    
									
								     
									</tr>
								     @endforeach
								     
								</tbody>
							</table>

						</div>							
						</div>

						
						<footer style="text-align:center">
							<a class = "btn btn-green" href="/print/bycourt">Print</a>
						</footer>
					</div>
				
			</section>
			
@stop