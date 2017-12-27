@foreach ($clasificado->Preguntas as $pregunta)

	@if (Auth::user()->id == $clasificado->user_id || Auth::user()->id == $pregunta->user_id)
		<div class="pregunta-container">
			<p class="pregunta-texto">{{ $pregunta->texto }}</p>		
			<div class="pregunta-info">
				<dl class="dl-usuario">
					<dt>Nombre</dt>
					<dd>{{ $pregunta->user->name }}</dd>
					<dt>Fecha</dt>
					<dd>{{ $pregunta->created_at->diffForHumans() }}</dd>
				</dl>
				<dl class="dl-info">
					<dt>Responder</dt>
					@if (sizeof($pregunta->respuestas) < 1 && Auth::user()->id == $clasificado->user_id)
					<dd data-toggle="modal" data-target="#responder-modal-container" onclick="modalResponder(this)" data-id={{ $pregunta->id }}><i class="fa fa-reply"></i> Responder</dd>
					@endif
				</dl>
			</div>

			@foreach ($pregunta->respuestas as $respuesta)
				@include ('components.clasificado.respuesta')
			@endforeach
		</div>
	@endif
@endforeach