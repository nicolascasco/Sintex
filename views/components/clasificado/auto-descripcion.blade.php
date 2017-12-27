<div class="row">
	<div class="col-12 informacion-container">
		<h1 class="block-title">Informacion del vehiculo</h1>

		<div class="row">
			<div class="col-6 informacion-column">
				<ul class="informacion-list">
					<li class="informacion-item">
						<span class="informacion-nombre">Marca: </span>
						<span class="informacion">{{ $clasificado->pivotear($auto->marca) }}</span>
					</li>
					<li class="informacion-item">
						<span class="informacion-nombre">Modelo: </span>
						<span class="informacion">{{ $clasificado->pivotear($auto->modelo) }}</span>
					</li>
					<li class="informacion-item">
						<span class="informacion-nombre">Año: </span>
						<span class="informacion">{{ $auto->year }}</span>
					</li>
					<li class="informacion-item">
						<span class="informacion-nombre">Color: </span>
						<span class="informacion">{{ $clasificado->pivotear($auto->color) }}</span>
					</li>
					<li class="informacion-item">
						<span class="informacion-nombre">Kilometros: </span>
						<span class="informacion"><?php echo number_format($clasificado->precio, 0, ',', '.'); ?> km</span>
					</li>
					<li class="informacion-item">
						<span class="informacion-nombre">Combustible: </span>
						<span class="informacion">{{ $clasificado->pivotear($auto->combustible) }}</span>
					</li>
					<li class="informacion-item">
						<span class="informacion-nombre">Estado: </span>
						<span class="informacion">{{ $clasificado->pivotear($auto->estado) }}</span>
					</li>
				</ul>
			</div>

			<div class="col-6 informacion-column">
				<ul class="informacion-list">
					<li class="informacion-item">
						<span class="informacion-nombre">direccion: </span>
						<span class="informacion">{{ $clasificado->pivotear($auto->direccion) }}</span>
					</li>
					<li class="informacion-item">
						<span class="informacion-nombre">Transmision: </span>
						<span class="informacion">{{ $clasificado->pivotear($auto->transmision) }}</span>
					</li>
					<li class="informacion-item">
						<span class="informacion-nombre">Traccion: </span>
						<span class="informacion">{{ $clasificado->pivotear($auto->traccion) }}</span>
					</li>
					<li class="informacion-item">
						<span class="informacion-nombre">Vidrios: </span>
						<span class="informacion">{{ $clasificado->pivotear($auto->vidrios) }}</span>
					</li>
					<li class="informacion-item">
						<span class="informacion-nombre">Puertas: </span>
						<span class="informacion">{{ $auto->puertas }}</span>
					</li>
					<li class="informacion-item">
						<span class="informacion-nombre">Estado: </span>
						<span class="informacion">{{ $clasificado->pivotear($auto->estado) }}</span>
					</li>
					<li class="informacion-item">
						<span class="informacion-nombre">Vendedor: </span>
						<span class="informacion">{{ $clasificado->pivotear($auto->vendedor) }}</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>