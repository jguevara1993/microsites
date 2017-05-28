@extends('layouts.adminLayout')
@section('title', 'Asiviajo.com')
@section('content')

<section class="content-header">
  <div class="row">
    <div class="col-sm-12">
      <h1>Crear Rol</h1>
      <p>Crear rol para usuarios de Asiviajo</p>
    </div>
  </div>
</section>

<section class="content">
  <div class="row">
    <div class="col-sm-8">
      <div class="box box-info">
        <div class="box-body">
          <form action="#" method="POST">
            <div class="form-group">
              <label for="name">Nombre: </label>
              <input type="text" name="name" class="form-control" value="" placeholder="Nombre del usuario...">
            </div>
            <div class="form-group">
              <label for="email">Email: </label>
              <input type="email" name="email" class="form-control" value="" placeholder="Ej: Fulano@asiviajo.com">
            </div>
            <div class="form-group">
              <label for="password">Contraseña: </label>
              <input type="password" name="password" class="form-control" value="" placeholder="Contraseña...">
            </div>
            <div class="form-group">
              <label for="passwordRepeat">Repetir contraseña: </label>
              <input type="password" name="passwordRepeat" class="form-control" value="" placeholder="Repetir contraseña...">
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <button type="button" name="button" class="btn btn-success">Crear</button>
                <a href="{{ route('user.index') }}" class="btn btn-warning">Cancelar</a>

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@stop
