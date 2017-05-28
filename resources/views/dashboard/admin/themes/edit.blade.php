@extends('layouts.adminLayout')
@section('title', 'Agregar bloque')
@section('content')

  <section class="content-header">
    <div class="row">
      <div class="col-sm-12">
        <h1>Crear Bloque</h1>
        <p>Crea un nuevo bloque para una pagina</p>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-sm-12">
        <div class="box box-info">
          <div class="box-body">
            <form class="form-horizontal" action="{{ route('themes.update', ['id' => $block->id]) }}" method="POST">
              <div class="form-group">
                <label for="title" class="control-label col-sm-2">Titulo</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="title" placeholder="Titulo del bloque" value="{{ $block->title }}">
                  <span id="helpBlock" class="help-block">Coloca el titulo de este bloque, el titulo estara entre etiquetas <code>h1</code>.</span>

                </div>
              </div>
                <div class="form-group">
                  <label for="" class="control-label col-sm-2">Pagina</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="page">
                      <option value="{{ $block->page }}">{{$block->page}}</option>
                      <option value="index">Inicio</option>
                      <option value="about">Sobre nosotros</option>
                      <option value="promo">Paquetes</option>
                      <option value="contact">Contacto</option>
                      <option value="footer_1">Footer 1</option>
                      <option value="footer_2">Footer 2</option>
                      <option value="footer_3">Footer 3</option>
                      <option value="footer_4">Footer 4</option>

                    </select>
                    <span id="helpBlock" class="help-block">Selecciona la pagina donde quieres esta nuevo bloque.</span>
                  </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  <textarea name="post" id="post" rows="8" cols="80" >{{$block->body}}</textarea>
                </div>
              </div>
              <button type="submit" class="btn btn-success" name="enviar">Guardar</button>
              <a href="{{ route('themes.blocks')}}" class="btn btn-warning">Cancelar</a>

              {{ csrf_field() }}
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

@stop
