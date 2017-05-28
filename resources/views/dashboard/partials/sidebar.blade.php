<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{URL::asset('assets/img/' . Auth::user()->avatar)}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
      </div>
    </div>
    <ul class="sidebar-menu">
      <li class="header">Navegación</li>
      <li><a href="{{ url('dashboard') }}"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
      <li class="treeview">
        <a href="#"><i class="fa fa-edit"></i> <span>Blog</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('blog.index') }}">Ver entradas</a></li>
          <li><a href="{{ route('blog.create') }}">Nueva entrada</a></li>
          <li><a href="{{ route('category.index') }}">Categorias</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-edit"></i><span>Plantillas</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
      <li><a href="{{ route('themes.index') }}"><i class="fa fa-info"></i><span>Ver Plantillas</span></a></li>
      <li><a href="{{ route('themes.blocks') }}"><i class="fa fa-info"></i><span>Editar Plantilla</span></a></li>

    </ul>
      </li>
      <li><a href="{{ route('config.index') }}"><i class="fa fa-gear"></i> <span>Configuración</span></a></li>
      <li><a href="{{ url('/logout') }}"><i class="fa fa-remove"></i> <span>Desconectarse</span></a></li>
      </li>
    </ul>
  </section>
</aside>
