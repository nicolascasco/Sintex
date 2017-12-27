<div class="row">
	<div class="col-12 col-md-8 clasificado-block">
		<div class="image-container">
			<img class="clasificado-image" src="/img/auto.jpg">
		</div>
	</div>
	<div class="col-12 col-md-4 block-main-description">
		<article class="clasificado-dl">
			<dl>
				<dt>Año</dt>
				<dd>{{ $auto->year }}</dd>
				<dt>Kilometros</dt>
				<dd><?php echo number_format($auto->km, 0, ',', '.'); ?> km</dd>
			</dl>
		</article>
		<div class="clasificado-titulo">
			<h1 class="titulo">{{ $clasificado->titulo }}</h1>
		</div>
		<div class="clasificado-precio">
			<span class="moneda">$</span>
			<span class="precio"><?php echo number_format($clasificado->precio, 0, ',', '.'); ?></span>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-12 descripcion">
		<h1 class="block-title">Descripcion</h1>
		<p class="clasificado-descripcion">{{ $clasificado->descripcion }}</p>
	</div>
</div>