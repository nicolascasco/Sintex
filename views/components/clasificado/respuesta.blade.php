<div class="respuesta-container">
	<p class="pregunta-texto">{{ $respuesta->texto }}</p>
	<div class="pregunta-info">
		<dl class="dl-usuario">
			<dt>Nombre</dt>
			<dd>@if (Auth::user()->name == $respuesta->user->name)
				Tu
				@else
				{{ $respuesta->user->name }}
				@endif
			</dd>
			<dt>Fecha</dt>
			<dd>{{ $respuesta->created_at->diffForHumans() }}</dd>
		</dl>
	</div>
</div>