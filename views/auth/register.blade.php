@extends ('layouts.master')

@section ('styles')
	<link rel="stylesheet" type="text/css" href="/css/login.css">
@endsection

@section ('content')
	<div class="auth-container">
		<div id="wrap">
			<div id="main">
				<div class="auth-title-container">
					<h2 class="auth-title-text">Completa con tus datos</h2>
				</div>
				<div class="auth-datos-container">
					<form class="auth-form" method="POST" action="{{ route('register') }}">
						{{ csrf_field() }}
						<div class="auth-form-row {{ $errors->has('name') ? 'form-data-error' : '' }}">
							<div class="auth-textinput">
								<input name="name" type="text" class="auth-form-input" placeholder="nombre" spellcheck="false" autocorrect="off"></input>
								<label class="auth-form-label">Nombre</label>
								<span class="auth-form-bar"></span>
							</div>	
							@if ($errors->has('name'))
								<div class="form-error-message">{{ $errors->first('name') }}</div>
							@endif
						</div>
						<div class="auth-form-row {{ $errors->has('email') ? 'form-data-error' : '' }}">
							<div class="auth-textinput">
								<input name="email" type="email" class="auth-form-input" placeholder="e-mail" autocomplete="on" autocapitalize="none" spellcheck="false" autocorrect="off"></input>
								<label class="auth-form-label">E-mail</label>
								<span class="auth-form-bar"></span>
							</div>
							@if ($errors->has('email'))
								<div class="form-error-message">{{ $errors->first('email') }}</div>
							@endif
						</div>
						<div class="auth-form-row {{ $errors->has('password') ? 'form-data-error' : '' }}">
							<div class="auth-textinput">
								<input name="password" type="password" class="auth-form-input" placeholder="contraseña" autocomplete="on" autocapitalize="none" spellcheck="false" autocorrect="off"></input>
								<label class="auth-form-label">Contraseña</label>
								<span class="auth-form-bar"></span>
							</div>
							@if ($errors->has('password'))
								<div class="form-error-message">{{ $errors->first('password') }}</div>
							@endif
						</div>
						<div class="auth-form-row">
							<div class="auth-textinput">
								<input name="password_confirmation" type="password" class="auth-form-input" placeholder="contraseña" autocomplete="on" autocapitalize="none" spellcheck="false" autocorrect="off"></input>
								<label class="auth-form-label">Repetir Contraseña</label>
								<span class="auth-form-bar"></span>
							</div>	
						</div>
						<div class="auth-form-action">
							<button type="submit" class="auth-form-button">Continuar</button>
							<p class="auth-form-preg">¿Ya tienes cuenta?</p>
							<a href="{{ route('login') }}" class="auth-form-link">Ingresar</a>
						</div>
					</form>
				</div>
			</div>
		</div>		
	</div>
@endsection