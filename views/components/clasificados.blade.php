<ul class="clasificados-list clear">
	@foreach ($clasificados as $clasificado)
		<li class="clasificado">
			<a href="{{ url($clasificado->url.'?c='.$clasificado->id) }}">
				<div class="row">
					<div class="clasificado-image">
						<img alt="" src="/img/auto.jpg">
					</div>
					<div class="clasificado-info-container">
						<div class="clasificado-info">
							<h2 class="clasificado-title">
								<span class="main-title">{{ $clasificado->titulo }}</span>
							</h2>
							<div class="precio-container">
								<div class="precio">
									<span class="moneda">$</span>
									<span class="total"><?php echo number_format($clasificado->precio, 0, ',', '.'); ?></span>
								</div>
							</div>
							<div class="clasificado-column">
								<div class="info-container">
									<div class="info">
										<p>{{ $clasificado->pivotear($clasificado->provincia) }}, {{ $clasificado->pivotear($clasificado->ciudad) }}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
		</li>
	@endforeach
</ul>