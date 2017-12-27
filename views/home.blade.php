@extends ('layouts.master')

@section ('styles')
	<link rel="stylesheet" type="text/css" href="/css/clasificado.css">
@endsection

@section('content')		
	<div style="height: 120px;width: 100%; background-color: transparent;"></div>
	<div class="sintex-main clear">
		<div class="inner clear">
			<aside class="filtros"><!-- include ('components.filtros')--></aside>
			<section class="clasificados-section">
				@include ('components.clasificados')
			</section>
		</div>
	</div>
@endsection