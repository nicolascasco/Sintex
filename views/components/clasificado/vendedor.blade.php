<div class="row">
	<div class="col-12 informacion-container">
		<h1 class="block-title">Informacion del vendedor</h1>

		<div class="row">
			<div class="col-6 informacion-column">
				<ul class="informacion-list">
					<li class="informacion-item">
						<span class="informacion-nombre">Nombre: </span>
						<span class="informacion">{{ $clasificado->user->name }}</span>
					</li>
					<li class="informacion-item">
						<span class="informacion-nombre">E-mail: </span>
						<span class="informacion">{{ $clasificado->email }}</span>
					</li>
					<li class="informacion-item">
						<span class="informacion-nombre">Telefono: </span>
						<span class="informacion">{{ $clasificado->telefono }}</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>