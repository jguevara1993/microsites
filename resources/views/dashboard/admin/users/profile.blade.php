@extends('layouts.adminLayout')
@section('title', 'Asiviajo.com')
@section('content')

<section class="content-header">
  <div class="row">
    <div class="col-sm-12">
      <h1>Perfil</h1>
      <p>Perfil de {{ Auth::user()->name }}</p>
    </div>
  </div>
</section>

<section class="content">
  <div class="row">
    <div class="col-sm-12">
      <div class="box box-info">
        <div class="box-body">
          <form class="form-horizontal" action="{{ route('profile.update', ['id' => $user->id])}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
          <div class="col-sm-6">
              <div class="form-group">
                <label for="name" class="control-label col-sm-4">Nombre Completo: </label>
                <div class="col-sm-8">
                  <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="control-label col-sm-4">Correo Electronico: </label>
                <div class="col-sm-8">
                  <input type="text" name="email" value="{{ Auth::user()->email }}" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="control-label col-sm-4">Contraseña: </label>
                <div class="col-sm-8">
                  <input type="password" name="password" placeholder="Ingresa tu contraseña" class="form-control" required>
                </div>
              </div>
              <div class="form-group">
                <label for="repeatPassword" class="control-label col-sm-4">Repite Contraseña: </label>
                <div class="col-sm-8">
                  <input type="password" name="repeatPassword" placeholder="Repite el password" class="form-control" required>
                </div>
              </div>
              <div class="form-group">
                <label for="user_role" class="control-label col-sm-4">Rol: </label>
                <div class="col-sm-8">
                  @if(Auth::user()->user_role = '1')
                  <input type="text" name="user_role" value="Administrador" class="form-control">
                  @endif
                </div>
              </div>
              <button type="submit" class="btn btn-success btn-block" name="button">Aplicar cambios</button>
            </div>
            <div class="col-sm-6">
              <div class="col-sm-12 text-center">
                <div class="form-group">
                  <label for="avatar">Imagen de Perfil </label>
                  <div class="user-avatar">
                  <img id="avatar" src="{{ URL::asset('assets/img/' . Auth::user()->avatar)}}"  />
                  </div>
                  <input type="file" name="avatar" id="avatar">

            </div>
              </div>
            </div>
            {{ csrf_field() }}
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@stop
