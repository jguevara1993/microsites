@extends('layouts.adminLayout')
@section('title', 'Bloques')
@section('content')

<section class="content-header">
  <div class="row">
    <div class="col-sm-12">
      @if (session()->has('message'))
      <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-check"></i> ¡Exito!</h4>
              {{ session()->get('message') }}
            </div>
            @endif
    <h1>Editar Tema</h1>
    <p>En esta seccion podras incluir bloques de informacion para editar tu tema.</p>

    </div>
  </div>
</section>

<section class="content">
  <div class="row">
    <div class="col-sm-6">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Index</h3>
          <div class="box-tool pull-right">
            <a href="{{ route('themes.create') }}" class="btn btn-box-tool"><i class="fa fa-plus-square-o fa-lg"></i></a>
          </div>
        </div>
        <div class="box-body">
          <table class="table table-striped">
            <tr>
              <th>id</th>
              <th>Contenido</th>
              <th> </th>
            </tr>
            @foreach ($indexBlock as $item)
            <tr>
              <td>{{ $item->id }}</td>
              <td><strong>{{ $item->title }}</strong><br>{{ str_limit($item->body) }}</td>
              <td>
                <a href="{{ route('themes.edit', ['id' => $item->id ])}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                <a href="{{ route('themes.destroy', ['id' => $item->id])}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
              </td>
            </tr>
            @endforeach
            {{ $indexBlock->render() }}
          </table>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">About</h3>
          <div class="box-tool pull-right">
            <a href="{{ route('themes.create') }}" class="btn btn-box-tool"><i class="fa fa-plus-square-o fa-lg"></i></a>
          </div>
        </div>
        <div class="box-body">
          <table class="table table-striped">
            <tr>
              <th>id</th>
              <th>Contenido</th>
              <th></th>
            </tr>
            <tr>
              @foreach($aboutBlock as $item)
              <td>{{ $item->id }}</td>
              <td><strong>{{ $item->title }}</strong><br>{{ str_limit($item->body) }}</td>
              <td>
                <a href="{{ route('themes.edit', ['id' => $item->id ])}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                <a href="{{ route('themes.destroy', ['id' => $item->id])}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
              </td>
            </tr>
            @endforeach
            {{ $aboutBlock->render() }}
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Paquetes</h3>
          <div class="box-tool pull-right">
            <a href="{{ route('themes.create') }}" class="btn btn-box-tool"><i class="fa fa-plus-square-o fa-lg"></i></a>
          </div>
        </div>
        <div class="box-body">
          <table class="table table-striped">
            <tr>
              <th>id</th>
              <th>Contenido</th>
              <th></th>
            </tr>
            @foreach ($promoBlock as $item)
            <tr>
              <td>{{ $item->id }}</td>
              <td><strong>{{ $item->title }}</strong><br>{{ str_limit($item->body) }}</td>
              <td>
                <a href="{{ route('themes.edit', ['id' => $item->id ])}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                <a href="{{ route('themes.destroy', ['id' => $item->id])}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
              </td>

            </tr>
            @endforeach
            {{ $promoBlock->render() }}
          </table>
        </div>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Contacto</h3>
          <div class="box-tool pull-right">
            <a href="{{ route('themes.create') }}" class="btn btn-box-tool"><i class="fa fa-plus-square-o fa-lg"></i></a>
          </div>
        </div>
        <div class="box-body">
          <table class="table table-striped">
            <tr>
              <th>id</th>
              <th>Contenido</th>
              <th></th>
            </tr>
            @foreach ($contactBlock as $item)
            <tr>
              <td>{{ $item->id }}</td>
              <td><strong>{{ $item->title }}</strong><br>{{ str_limit($item->body) }}</td>
              <td>
                <a href="{{ route('themes.edit', ['id' => $item->id ])}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                <a href="{{ route('themes.destroy', ['id' => $item->id])}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
              </td>

            </tr>
            @endforeach
            {{ $contactBlock->render() }}
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Footer</h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-sm-3">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Sección 1</h3>
                  <div class="box-tool pull-right">
                    <a href="{{ route('themes.create') }}" class="btn btn-box-tool"><i class="fa fa-plus-square-o fa-lg"></i></a>
                  </div>
                </div>
                <div class="box-body">
                  <table class="table table-striped">
                    <tr>
                      <th>id</th>
                      <th>Contenido</th>
                      <th></th>
                    </tr>
                    @foreach ($footer_1_Block as $item)
                    <tr>
                      <td>{{ $item->id }}</td>
                      <td><strong>{{ $item->title }}</strong><br>{{ str_limit($item->body) }}</td>
                      <td>
                        <a href="{{ route('themes.edit', ['id' => $item->id ])}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a href="{{ route('themes.destroy', ['id' => $item->id])}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      </td>

                    </tr>
                    @endforeach
                    {{ $footer_1_Block->render() }}

                  </table>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Sección 2</h3>
                  <div class="box-tool pull-right">
                    <a href="{{ route('themes.create') }}" class="btn btn-box-tool"><i class="fa fa-plus-square-o fa-lg"></i></a>
                  </div>

                </div>
                <div class="box-body">
                  <table class="table table-striped">
                    <tr>
                      <th>id</th>
                      <th>Contenido</th>
                      <th></th>
                    </tr>
                    @foreach ($footer_2_Block as $item)
                    <tr>
                      <td>{{ $item->id }}</td>
                      <td><strong>{{ $item->title }}</strong><br>{{ str_limit($item->body) }}</td>
                      <td>
                        <a href="{{ route('themes.edit', ['id' => $item->id ])}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a href="{{ route('themes.destroy', ['id' => $item->id])}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      </td>

                    </tr>
                    @endforeach
                    {{ $footer_2_Block->render() }}

                  </table>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Sección 3</h3>
                  <div class="box-tool pull-right">
                    <a href="{{ route('themes.create') }}" class="btn btn-box-tool"><i class="fa fa-plus-square-o fa-lg"></i></a>
                  </div>
                </div>
                <div class="box-body">
                  <table class="table table-striped">
                    <tr>
                      <th>id</th>
                      <th>Contenido</th>
                      <th></th>
                    </tr>
                    @foreach ($footer_3_Block as $item)
                    <tr>
                      <td>{{ $item->id }}</td>
                      <td><strong>{{ $item->title }}</strong><br>{{ str_limit($item->body) }}</td>
                      <td>
                        <a href="{{ route('themes.edit', ['id' => $item->id ])}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a href="{{ route('themes.destroy', ['id' => $item->id])}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      </td>

                    </tr>
                    @endforeach
                    {{ $footer_3_Block->render() }}

                  </table>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Sección 4</h3>
                  <div class="box-tool pull-right">
                    <a href="{{ route('themes.create') }}" class="btn btn-box-tool"><i class="fa fa-plus-square-o fa-lg"></i></a>
                  </div>
                </div>
                <div class="box-body">
                  <table class="table table-striped">
                    <tr>
                      <th>id</th>
                      <th>Contenido</th>
                      <th></th>
                    </tr>
                    @foreach ($footer_4_Block as $item)
                    <tr>
                      <td>{{ $item->id }}</td>
                      <td><strong>{{ $item->title }}</strong><br>{{ str_limit($item->body) }}</td>
                      <td>
                        <a href="{{ route('themes.edit', ['id' => $item->id ])}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a href="{{ route('themes.destroy', ['id' => $item->id])}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      </td>
                    </tr>
                    @endforeach
                    {{ $footer_4_Block->render() }}

                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="row">
    <div class="col-sm-12">
      <div class="box box-info">
        <div class="box-header">
          <h3 class="box-title">Cabecera</h3>
        </div>
        <div class="box-body">

   <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target=".bs-example-modal-lg">
    Cambiar Imagen
  </button>


  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
                <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Manejador de Archivos</h4>
        </div>
        <div class="modal-body">
          <iframe src="/admin/filemanager/dialog" width="100%" height="600" style="border:none;"></iframe>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>




        </div>
      </div>
    </div>
  </div>
@stop
