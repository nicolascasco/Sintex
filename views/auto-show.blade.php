@extends ('layouts.master')

@section ('styles')
	<link rel="stylesheet" type="text/css" href="/css/clasificado-show.css">
	<script type="text/javascript" src="/js/clasificado-show.js"></script>
@endsection

@section ('content')
	<div class="container" id="main">
		<div class="main-content">
			@include ('components.clasificado.auto-principal')

			@include ('components.clasificado.auto-descripcion')

			@include ('components.clasificado.vendedor')
		</div>

		@auth
			@include ('components.clasificado.preguntar')
		@endauth

		@include ('components.clasificado.responder-modal')
@endsection