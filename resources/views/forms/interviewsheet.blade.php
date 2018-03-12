<!doctype html>
<html lang="en-US">
   
    <head>
    	<style type="text/css">
		header h1
		{
			font-size: 18px;
		}
		header h2
		{
			font-size: 15px;
		}
		header h3
		{
			font-size: 10px;
		}
		header h5
		{
			font-size: 8px;
		}
    	</style>
    </head>
    <body>


        <!-- WRAPPER -->
        <div id="wrapper" class="clearfix">

            <!-- 
                ASIDE 
                Keep it outside of #wrapper (responsive purpose)
            -->
            
            <!-- /ASIDE -->

<section id="middle">
				<!-- /page title -->

				<div id="content" class="padding-20">
					

					<div class="panel panel-default">
						<div class="panel-body">

							<div class="row" style="margin-left: 15px;margin-right: 15px;">
								<header>
									<h1 style="text-align: center;">INTERVIEW SHEET/CLIENTS PROFILE</h1>
								</header>
								<div class="col-md" style="text-align: center;">
									<h5> Region NCR</h5>
									<h5> District Office Central Office</h5>
								</div>

								<div class="col-md-6 col-sm-6 text-left">

									<h5> Date: {{$date}} </h5>
									<h5> Control No:{{$controlno}} </h5>
									<br>
									<h5> Interviewer:{{$interviewer}} </h5>
									<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Name & Signature)</h5>
								</div>

								<div class="col-md-6 col-sm-6 text-right">

									<h5> Assigned to: {{$lawyer}}</h5>
									<h5> Referred/Indorsed by:</h5>
									<h5> Refer to: </h5>
									<h5>(Name & Signature) Public Attorney&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
									<h5> Approved by: </h5>
									<h5>(Name & Signature) DPA / OIC-DPA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
								</div>
								</div>

							</div>	
						</div>
					</div>

					<div id="content" class="padding-20">

					<div class="panel panel-default">
						<div class="panel-body">

							<div class="row" style="margin-left: 15px;margin-right: 15px;">
								<header>
									<h3 style="text-align: center;">NATURE OF REQUEST(to be filled up by PAO personel)</h3>
								</header>

								<div class="col-md-4">
									<h5>{{$request}}</h5>
									
								</div>

								

							</div>

							</div>	
						</div>
					</div>

					<div id="content" class="padding-20">

					<div class="panel panel-default">
						<div class="panel-body">

							<div class="row" style="margin-left: 15px;margin-right: 15px;">
								<header>
									<h3 style="text-align: center;">CLIENT'S PERSONAL CIRCUMSTANCES</h3>
								</header>

								<div class="col-md-6 col-sm-6 text-left">

									<h5> Name: {{$name}}</h5>
									<h5> Religion: {{$religion}}</h5>
									<h5> Citizenship: {{$citizenship}}</h5>
									<h5> Address: {{$address}}</h5>
									<h5> E-mail: {{$email}}</h5>
									<h5> Individual Monthly Net Income: {{$income}}</h5>
									<h5> Detained: {{$detain}}</h5>
									<h5> Detained Since: {{$detainedsince}}</h5>
								</div>

								<div class="col-md-6 col-sm-6 text-right">
									<div class="col-md-3">
										<h5> Age: ________</h5>
									</div>
									<div class="col-md-3">
										<h5> Gender: {{$gender}}</h5>
									</div>
									<div class="col-md-6">
										<h5> Civil Status: {{$cstat}}</h5>
									</div>
									<div class="col-md-12">
									<h5> Educational Attainment: {{$educ}}</h5>
									<h5> Language/Dialect: {{$language}}</h5>
									<h5> Contact No.: {{$contact}}</h5>
									<h5> Spouse: {{$spouse}}</h5>
									<h5> Address of Spouse: {{$spouseaddr}}</h5>
									<h5> Contact No. of Spouse: {{$spousecon}}</h5>
									<h5> Place of Detention: {{$detention}}</h5>
									</div>
								</div>

							</div>

							</div>	
						</div>
					</div>

					

					<div id="content" class="padding-20">

					<div class="panel panel-default">
						<div class="panel-body">

							<div class="row" style="margin-left: 15px;margin-right: 15px;">
								<header>
									<h2 style="text-align: center;">NATURE OF THE CASE</h2>
								</header>

								<div class="col-md-4">
									<h5> {{$casetype}}</h5>
									<h5> Pls. Specify: {{$casename}}</h5>
									
								

							</div>

							</div>	
						</div>
					</div>
					<div id="content" class="padding-20">
					<div class="panel panel-default">
						<div class="panel-body">

							<div class="row" style="margin-left: 15px;margin-right: 15px;">
								<header>
									<h2 style="text-align: center;">CLIENT'S CASE INVOLVEMENT</h2>
								</header>

								<div class="col-md-3">
									<h5>{{$involvement}}</h5>
									
								</div>
								
								<div class="col-md-12">
									<h5><input type="checkbox" name="of"> Complainant/Victim of:</h5>
								</div>
								<div class="col-md-4">
									<h5>a)&nbsp;&nbsp;&nbsp;{{$category}}</h5>
									
								</div>
								
							</div>
							</div>	
						</div>
					</div>
					

					

					<div id="content" class="padding-20">

					<div class="panel panel-default">
						<div class="panel-body">

							<div class="row" style="margin-left: 15px;margin-right: 15px;">
								<header>
									<h2 style="text-align: center;">ADVERSE PARTY </h2>
								</header>

								<div class="col-md-6 col-sm-6 text-left">

									<h5>{{ $advtype}}</h5>
									
									<h5> NAME: 	{{$advname}}								    <br>
																							<br></h5>
								</div>
								<div class="col-md-6 col-sm-6">
									<h5>
										
									</h5><br><br>
									<h5>ADDRESS         {{$advaddr }}                           <br>
																						   <br>
																						   </h5>
								</div>
								</div>

							</div>	
						</div>
					</div>

					<div id="content" class="padding-20">

					<div class="panel panel-default">
						<div class="panel-body">

							<div class="row" style="margin-left: 15px;margin-right: 15px;">
								<header>
									<h2 style="text-align: center;">FACTS OF THE CASE </h2>
								</header>

								<div class="col-md-12 col-sm-12">
									<p>_________________________________________________________________________________________________________________________________________________________________________________________________<br>_________________________________________________________________________________________________________________________________________________________________________________________________<br>_________________________________________________________________________________________________________________________________________________________________________________________________<br></p>
								</div>

							</div>	
						</div>
					</div>
				</div>

				<div id="content" class="padding-20">

					<div class="panel panel-default">
						<div class="panel-body">

							<div class="row" style="margin-left: 15px;margin-right: 15px;">
								<header>
									<h2 style="text-align: center;">CAUSE OF ACTION/NATURE OF OFFENSE</h2>
								</header>

								<div class="col-md-12 col-sm-12">
									<p>_________________________________________________________________________________________________________________________________________________________________________________________________<br>_________________________________________________________________________________________________________________________________________________________________________________________________<br>_________________________________________________________________________________________________________________________________________________________________________________________________<br></p>
								</div>

							</div>	
						</div>
					</div>
				</div>

				<div id="content" class="padding-20">

					<div class="panel panel-default">
						<div class="panel-body">

							<div class="row" style="margin-left: 15px;margin-right: 15px;">
								<header>
									<h2 style="text-align: center;">OTHER RELATED PENDING/CONCLUDED CASE(S) </h2>
								</header>

								<div class="col-md-12">
									<h5>Cause of Action/Nature of offense: ____________________________________________________________________________________________________________________________________________________________<br>________________________________________________________________________________________________________________________________________________________________________________________________<br></h5>
									<h5>Court/Body/Tribunal: __________________________________________________________________________________________________________________________________________________________________________</h5>
								</div>

							</div>	
						</div>
					</div>
				</div>

				<div id="content" class="padding-20">

					<div class="panel panel-default">
						<div class="panel-body">

							<div class="row" style="margin-left: 15px;margin-right: 15px;">
								<header>
									<h2 style="text-align: center;">PROOF OF INDIGENCY SUBMITTED</h2>
								</header>

								<div class="col-md-3">
									<input type="checkbox" name="income"> Income Tax Return
								</div>
								<div class="col-md-3">
									<input type="checkbox" name="barangay"> Certification from Barangay
								</div>
								<div class="col-md-3">
									<input type="checkbox" name="certification"> Certification (DSWD)
								</div>
								<div class="col-md-3">
									<input type="checkbox" name="others"> Others(payslips, etc.)
								</div>
								<div class="col-md-6">
									
								</div>
								<div class="col-md-6"><br><br>
									<h5 style="text-align: center;">________________________________</h5>
									<h5 style="text-align: center;">Party/Representative</h5>
								</div>
							</div>	
						</div>
					</div>
				</div>

				<div id="content" class="padding-20">

					<div class="panel panel-default">
						<div class="panel-body">

							<div class="row" style="margin-left: 15px;margin-right: 15px;">
								<header>
									<h2 style="text-align: center;">AFFIDAVIT OF INDIGENCY</h2>
								</header>
								<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I,{{$name}} of legal age, {{$cstat}} and residing at {{$address}} and having been duly sworn in accordance with law, depose and say:</h5><br>
								<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. That I desire to avail of the free legal service of the Public Attorney's Office:</h5>
								<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. That my monthly salary/income is P{{$income}}</h5>
								<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. That I am executing this affidavit to entitle me to the desired legal services</h5>
								<div class="col-md-6 col-sm-6 text-left"></div>
								<div class="col-md-6 col-sm-6 text-right">
									<h5>{{$name}}</h5>
									<h5>Signature of Affiant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
								</div>
								<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SUBSCRIBED AND SWORN to before me this _________ day of ____________________________ 20______ in ______________________________________________________________, Philippines, and I have read and translated the foregoing Affidavit to a dialect understood by the affiliant.<br><br><br><br><br><br></h5>
							</div>	
						</div>
					</div>
				</div>

					

				</div>
				

                

    
        <!-- JAVASCRIPT FILES -->

       
        <!-- PAGE LEVEL SCRIPT -->
        
    
    </body>
</html>
