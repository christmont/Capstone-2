@extends('lawyer ui/lawyer ui')
@extends('lawyer ui/lawyer side-nav')
@extends('lawyer ui/lawyer header-main')
@section('contents')



<section id="middle">

<div class="container">
			<div class="content">
				<br>
				
				<center><h1>Notary File View</h1></center>
				@foreach($notaries as $notary)
				<center><img src="{{asset($notary->image)}}" width="70%"></center><br><br><br><br>
				@endforeach
			</div>
		</div>
		</section>
@stop	