<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		* { margin: 0; padding: 0; }
		@page { size: 210mm 74.25mm; }
		body{
			background-color: #34495E;
			color: white;
			font-family: monospace;
		}
		#qrimg img{
			position: absolute;
			width: 70mm;
			height: 74.25mm;
			z-index: -1;
		}
		#infowrapper{
			position: relative;
			text-align: center;
			width: 130mm;
			left: 139mm;
			top: 50mm;
		}
		#name h1{
			font-size: 55px;
		}
		#name p{
			margin-bottom: 10%;
		}

		#companyname h1{
			font-size: 20px;
		}
		#companyname p{
			margin-bottom: 10%;
		}

		#designation h1{
			font-size: 15px;
		}
		#designation p{
			margin-bottom: 10%;
		}
	</style>
</head>
<body>
	{{-- <img src="http://via.placeholder.com/350x150" id="qrimg"> --}}
@foreach($employees as $lawyer)
	<div id="infowrapper">
		<div id="name">
			<h1>Go to Atty. {{ucfirst($lawyer->efname)}} @if (!empty($lawyer->emname)) 
				
			{{ucfirst($lawyer->emname)}}@endif {{ucfirst($lawyer->elname)}}</h1>
			
		</div>
@endforeach
	</div>
</body>
</html>