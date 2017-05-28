@extends('layouts.adminLayout')
@section('content')
<section class="content-header">
  <div class="row">
    <div class="col-sm-12">
      <h1>Configurar Sitio</h1>
      <p>Elije la configuración de tu sitio</p>
    </div>
  </div>
</section>

<section class="content">
  <div class="row">
    <div class="col-sm-12">
      <form class="form-horizontal" action="{{route('config.update')}}" method="post">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Redes Sociales</h3>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label for="facebook" class="control-label col-sm-2">Facebook</label>
              <div class="col-sm-4">
                <input type="text" name="facebook" class="form-control" placeholder="PaginaDeFacebook">
                <span id="helpBlock" class="help-block"></span>

              </div>
            </div>
            <div class="form-group">
              <label for="twitter" class="control-label col-sm-2">Twitter</label>
              <div class="col-sm-4">
                <input type="text" name="twitter" class="form-control" placeholder="NombreDeCuenta">
                <span id="helpBlock" class="help-block"></span>

              </div>
            </div>
            <div class="form-group">
              <label for="Linkedin" class="control-label col-sm-2">Linkedin</label>
              <div class="col-sm-4">
                <input type="text" name="linkedin" class="form-control" placeholder="nombre_de_perfil">
                <span id="helpBlock" class="help-block"></span>

              </div>
            </div>
            <div class="form-group">
              <label for="instagram" class="control-label col-sm-2">Instagram</label>
              <div class="col-sm-4">
                <input type="text" name="instagram" class="form-control" placeholder="@nombredecuenta">
                <span id="helpBlock" class="help-block"></span>

              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <button type="submit" class="btn btn-success" name="button">Aplicar</button>
        </div>
        {{ csrf_field() }}
          </form>

    </div>
  </div>
</section>
@stop
