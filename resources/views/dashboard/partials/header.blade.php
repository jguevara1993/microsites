  <header class="main-header">
    <a href="/dashboard" class="logo">
      <span class="logo-mini"><b>A</b>SV</span>
      <span class="logo-lg"><b>Asiviajo</b>.com</span>
    </a>

    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Navegación</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{URL::asset('assets/img/' . Auth::user()->avatar)}}" class="user-image" alt="User Image">
              <span class="hidden-xs"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="{{URL::asset('assets/img/' . Auth::user()->avatar)}}" class="img-circle" alt="User Image">
                <p>{{ Auth::user()->name }} </p>
              </li>
                <li class="user-footer">
                <div class="pull-left">
                  <a href="{{route('profile.edit', ['id' => Auth::user()->id ])}}" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Desconectarse</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
