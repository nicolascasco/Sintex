@extends ('layouts.master')

@section ('styles')
	<link rel="stylesheet" type="text/css" href="/css/nuevo-clasificado.css">
@endsection

@section ('content')
	<div class="container" id="main">
		<div class="main-content">
			<div class="form-container">
			<h3 id="nuevo-clasificado-title" class="title">Completa con los datos de tu vehiculo</h3>
			<form method="POST" action="{{ route('auto.store') }}" class="nuevo-clasificado-form">
			{{ csrf_field() }}
					<!-- Inicio grupo 1 -->
						<div class="form-group">
							<legend>Describe tu vehiculo</legend>

							<div class="nuevo-form-row {{ $errors->has('titulo') ? 'form-data-error' : '' }}">
								<div class="nuevo-textinput">
									<input class="nuevo-form-input" type="text" name="titulo" maxlength="60" size="70" required value="{{ old('titulo') }}" placeholder="Titulo">
									<label for="titulo">Titulo: <em>*</em></label>
									<span class="nuevo-form-bar"></span>
								</div>
								@if ($errors->has('titulo'))
									<div class="form-error-message">{{ $errors->first('titulo') }}</div>
								@endif
							</div>

							<div class="nuevo-form-row {{ $errors->has('descripcion') ? 'form-data-error' : '' }}">
								<div class="nuevo-textarea">
									<label for="descripcion">Descripcion: <em>*</em></label>
									<div class="textarea-container">
										<textarea class="nuevo-form-textarea" type="text" name="descripcion" required placeholder="Escribe tu descripcion..." rows="10"></textarea>
									</div>
								</div>
								@if ($errors->has('descripcion'))
									<div class="form-error-message">{{ $errors->first('descripcion') }}</div>
								@endif
							</div>

						</div>
						<!-- Fin grupo 1 -->
					
					<!-- Fotos -->

					<!-- Inicio grupo 2 -->
					<div class="form-group">
						<legend>Informacion de tu vehiculo</legend>

						<div class="nuevo-form-row">
							<div class="nuevo-select">
								<label for="tipo">Tipo: <em>*</em></label>
								<div class="select-container">
									<select class="form-control nuevo-form-select" required name="tipo">
										<option value="-1">Seleccionar</option>
										@foreach ($values as $val)
											@if ($val->categoria == 'Tipo_Auto')
											<option value="{{ $val->id }}">{{ $val->value }}</option>									
											@endif
										@endforeach
									</select>
								</div>
							</div>
						</div>

						<div class="nuevo-form-row">
							<div class="nuevo-select">
								<label for="marca">Marca: <em>*</em></label>
								<div class="select-container">
									<select class="form-control nuevo-form-select" required name="marca">
										<option value="-1">Seleccionar</option>
										@foreach ($values as $val)
											@if ($val->categoria == 'Marca_Auto')
											<option value="{{ $val->id }}">{{ $val->value }}</option>									
											@endif
										@endforeach
									</select>
								</div>
							</div>
						</div>

						<div class="nuevo-form-row">
							<div class="nuevo-select">
								<label for="modelo">Modelo: <em>*</em></label>
								<div class="select-container">
									<select class="form-control nuevo-form-select" required name="modelo">
										<option value="-1">Seleccionar</option>
										@foreach ($values as $val)
											@if ($val->categoria == 'Modelo_Auto')
											<option value="{{ $val->id }}">{{ $val->value }}</option>									
											@endif
										@endforeach
									</select>
								</div>
							</div>
						</div>

						<div class="nuevo-form-row">
							<div class="nuevo-select">
								<label for="year">Año: <em>*</em></label>
								<div class="select-container">
									<select class="form-control nuevo-form-select" required name="year">
										<option value="-1">Seleccionar</option>
										@for ($i = 2018; $i > 1949; $i--)
											<option value="{{ $i }}">{{ $i }}</option>									
										@endfor
									</select>
								</div>
							</div>
						</div>

						<div class="nuevo-form-row {{ $errors->has('km') ? 'form-data-error' : '' }}">
							<div class="nuevo-textinput">
								<input class="nuevo-form-input" type="number" name="km" size="7" required value="{{ old('km') }}" placeholder="Km" style="max-width: 320px; ">
								<label for="titulo">Kilometros <em>*</em></label>
								<span class="nuevo-form-bar" style="max-width: 320px; "></span>
							</div>
							@if ($errors->has('email'))
								<div class="form-error-message">{{ $errors->first('email') }}</div>
							@endif
						</div>

						<div class="nuevo-form-row">
							<div class="nuevo-select">
								<label for="color">Color: <em>*</em></label>
								<div class="select-container">
									<select class="form-control nuevo-form-select" required name="color">
										<option value="-1">Seleccionar</option>
										@foreach ($values as $val)
											@if ($val->categoria == 'Color')
											<option value="{{ $val->id }}">{{ $val->value }}</option>									
											@endif
										@endforeach
									</select>
								</div>
							</div>
						</div>

						<div class="nuevo-form-row">
							<div class="nuevo-select">
								<label for="combustible">Combustible: <em>*</em></label>
								<div class="select-container">
									<select class="form-control nuevo-form-select" required name="combustible">
										<option value="-1">Seleccionar</option>
										@foreach ($values as $val)
											@if ($val->categoria == 'Combustible')
											<option value="{{ $val->id }}">{{ $val->value }}</option>									
											@endif
										@endforeach
									</select>
								</div>
							</div>
						</div>

						<div class="nuevo-form-row">
							<div class="nuevo-select">
								<label for="direccion">Direccion: <em>*</em></label>
								<div class="select-container">
									<select class="form-control nuevo-form-select" required name="direccion">
										<option value="-1">Seleccionar</option>
										@foreach ($values as $val)
											@if ($val->categoria == 'Direccion')
											<option value="{{ $val->id }}">{{ $val->value }}</option>									
											@endif
										@endforeach
									</select>
								</div>
							</div>
						</div>

						<div class="nuevo-form-row">
							<div class="nuevo-select">
								<label for="transmision">Transmision: <em>*</em></label>
								<div class="select-container">
									<select class="form-control nuevo-form-select" required name="transmision">
										<option value="-1">Seleccionar</option>
										@foreach ($values as $val)
											@if ($val->categoria == 'Transmision')
											<option value="{{ $val->id }}">{{ $val->value }}</option>									
											@endif
										@endforeach
									</select>
								</div>
							</div>
						</div>

						<div class="nuevo-form-row">
							<div class="nuevo-select">
								<label for="traccion">Traccion: <em>*</em></label>
								<div class="select-container">
									<select class="form-control nuevo-form-select" required name="traccion">
										<option value="-1">Seleccionar</option>
										@foreach ($values as $val)
											@if ($val->categoria == 'Traccion')
											<option value="{{ $val->id }}">{{ $val->value }}</option>									
											@endif
										@endforeach
									</select>
								</div>
							</div>
						</div>

						<div class="nuevo-form-row">
							<div class="nuevo-select">
								<label for="vidrios">Vidrios: <em>*</em></label>
								<div class="select-container">
									<select class="form-control nuevo-form-select" required name="vidrios">
										<option value="-1">Seleccionar</option>
										@foreach ($values as $val)
											@if ($val->categoria == 'Vidrios')
											<option value="{{ $val->id }}">{{ $val->value }}</option>									
											@endif
										@endforeach
									</select>
								</div>
							</div>
						</div>

						<div class="nuevo-form-row">
							<div class="nuevo-select">
								<label for="puertas">Puertas: <em>*</em></label>
								<div class="select-container">
									<select class="form-control nuevo-form-select" required name="puertas">
										<option value="-1">Seleccionar</option>
										@for ($i = 1; $i < 10; $i++)
										<option value="{{ $i }}">{{ $i }}</option>
										@endfor
									</select>
								</div>
							</div>
						</div>

						<div class="nuevo-form-row">
							<div class="nuevo-select">
								<label for="estado">Estado: <em>*</em></label>
								<div class="select-container">
									<select class="form-control nuevo-form-select" required name="estado">
										<option value="-1">Seleccionar</option>
										@foreach ($values as $val)
											@if ($val->categoria == 'Estado')
											<option value="{{ $val->id }}">{{ $val->value }}</option>									
											@endif
										@endforeach
									</select>
								</div>
							</div>
						</div>

						<div class="nuevo-form-row">
							<div class="nuevo-select">
								<label for="vendedor">Vendedor: <em>*</em></label>
								<div class="select-container">
									<select class="form-control nuevo-form-select" required name="vendedor">
										<option value="-1">Seleccionar</option>
										@foreach ($values as $val)
											@if ($val->categoria == 'Vendedor')
											<option value="{{ $val->id }}">{{ $val->value }}</option>									
											@endif
										@endforeach
									</select>
								</div>
							</div>
						</div>
					</div>
					<!-- FIn grupo 2-->
					<!-- Inicio grupo 3 -->
					<div class="form-group">
						<legend>Ubicacion</legend>

						<div class="nuevo-form-row">
							<div class="nuevo-select">
								<label for="provincia">Provincia: <em>*</em></label>
								<div class="select-container">
									<select class="form-control nuevo-form-select" required name="provincia">
										<option value="-1">Seleccionar</option>
										@foreach ($values as $val)
											@if ($val->categoria == 'Provincia')
											<option value="{{ $val->id }}">{{ $val->value }}</option>									
											@endif
										@endforeach
									</select>
								</div>
							</div>
						</div>

						<div class="nuevo-form-row">
							<div class="nuevo-select">
								<label for="ciudad">Ciudad: <em>*</em></label>
								<div class="select-container">
									<select class="form-control nuevo-form-select" required name="ciudad">
										<option value="-1">Seleccionar</option>
										@foreach ($values as $val)
											@if ($val->categoria == 'Ciudad')
											<option value="{{ $val->id }}">{{ $val->value }}</option>									
											@endif
										@endforeach
									</select>
								</div>
							</div>
						</div>
					</div>
					<!-- Fin grupo 3 -->
					<!-- Inicio grupo 4 -->
					<div class="form-group">
						<legend>Informacion de contacto</legend>

						<div class="nuevo-form-row {{ $errors->has('email') ? 'form-data-error' : '' }}">
							<div class="nuevo-textinput">
								<input class="nuevo-form-input" type="text" name="email" maxlength="60" size="70" required value="{{ Auth::user()->email }}" placeholder="Email">
								<label for="titulo">E-mail:</label>
								<span class="nuevo-form-bar"></span>
							</div>
							@if ($errors->has('email'))
								<div class="form-error-message">{{ $errors->first('email') }}</div>
							@endif
						</div>

						<div class="nuevo-form-row {{ $errors->has('telefono') ? 'form-data-error' : '' }}">
							<div class="nuevo-textinput">
								<input class="nuevo-form-input" type="number" name="telefono" maxlength="60" size="70" required value="{{ old('telefono') }}" placeholder="telefono">
									<label for="titulo">Telefono:</label>
									<span class="nuevo-form-bar"></span>
								</div>
								@if ($errors->has('telefono'))
									<div class="form-error-message">{{ $errors->first('telefono') }}</div>
								@endif
							</div>							
					<!-- Fin grupo 3 -->
					<!-- Inicio grupo 5 -->
					<div class="form-group">
							<legend>Precio</legend>

							<div class="nuevo-form-row {{ $errors->has('precio') ? 'form-data-error' : '' }}">
								<div class="nuevo-textinput">
									<input class="nuevo-form-input" type="number" name="precio" size="7" required value="{{ old('precio') }}" placeholder="Precio" style="max-width: 320px; ">
									<label for="titulo">Precio <em>*</em></label>
									<span class="nuevo-form-bar" style="max-width: 320px; "></span>
								</div>
							@if ($errors->has('precio'))
								<div class="form-error-message">{{ $errors->first('precio') }}</div>
							@endif
						</div>
					</div>
					<!-- Fin grupo 5 -->
					<button class="nuevo-form-button" type="submit">Continuar</button>
				</form>
			</div>
		</div>
	</div>
@endsection