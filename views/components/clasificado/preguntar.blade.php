<section id="preguntas" style="margin-bottom: 300px;">
	<div class="row">
		<div class="col-12 preguntar">
		
			<h1 class="titulo">Preguntar</h1>
			<div class="form-preguntar-container">
				<form method="POST" action="store/pregunta/{{ $clasificado->id }}" class="form-preguntar">
					{{ csrf_field() }}
					<div class="pregunta-textarea">
						<textarea class="preguntar-input" name="texto" placeholder="Escribi tu pregunta..." maxlength="2000">	</textarea>
					</div>
					<button type="submit" class="preguntar-button">Enviar Pregunta</button>
				</form>
			</div>
		</div>
	</div>

	@include ('components.clasificado.pregunta')
</section>