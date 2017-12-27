  <header role="banner" class="navbar navbar-toggleable-md navbar-light bg-faded nav-header nav-header-sticky" style="padding: 0; position: fixed; z-index: 900;">
    <div class="nav-bounds">
      <a class="navbar-brand nav-logo" href="{{ url('/') }}"></a>
        <input type="checkbox" id="nav-header-menu-switch">
        <div class="nav-header-menu-wrapper">
          <label for="nav-header-menu-switch" aria-controls="nav-header-menu">
          <!--<span class="notify-bubble"></span>-->
          <span class="hamburger-top-bread"></span>
          <span class="hamburger-patty"></span>
          <span class="hamburger-bottom-bread"></span>
        </label>
        <nav id="nav-header-menu">
          @guest
            <a tabindex="2" class="opcion opcion-register" href="{{ route('register') }}">
              <i class="fa fa-user-plus fa-2x" aria-hidden="true"></i>
              <span>Registrarse</span>
            </a>
            <a tabindex="3" class="opcion opcion-login" href="{{ route('login') }}">
              <i class="fa fa-sign-in fa-2x" aria-hidden="true"></i>
              <span>Ingresar</span>
            </a>
          @else
            <a tabindex="2" class="opcion opcion-user" href="">
              <i class="fa fa-user-o fa-2x" aria-hidden="true"></i>
              <span>{{ Auth::user()->name }}</span>
            </a>
            <a tabindex="3" class="opcion opcion-notificaciones" href="">
              <i class="fa fa-bell-o fa-2x" aria-hidden="true">
                <!--<span class="notify-bubble-count">99</span>-->
              </i>
              <span class="texto">Notificaciones</span>
            </a>
          @endguest
            <a tabindex="4" class="opcion opcion-publicar" href="{{ route('auto.create') }}">
              <i class="fa fa-tag fa-2x" aria-hidden="true"></i>
              <span>Publicar</span>
            </a>
          @auth
            <a tabindex="5" class="opcion opcion-salir" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <i class="fa fa-sign-out fa-2x" aria-hidden="true"></i>
              <span>Salir</span>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </a>
          @endauth
        </nav>
        <form class="nav-search" action="/" method="GET" role="search">
          <input tabindex="1" type="text" class="nav-search-input" name="busqueda" maxlength="120" autocomplete="off" autocorrect="off" spellcheck="false" autofocus placeholder="Buscar..." autocomplete="off">
          <button type="submit" class="nav-search-btn">
            <i class="fa fa-search" aria-hidden="true"></i>
          </button>
        </form>
        </div>  
    </div>
  </header>