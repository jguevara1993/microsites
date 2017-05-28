@extends('layouts.adminLayout')
@section('title', 'Asiviajo.com')
@section('content')

<section class="content-header">
    <div class="row">
      <div class="col-sm-12">
        <h1>Crear Entrada</h1>
      </div>
      <div class="col-sm-12">
        <p>Aqui puedes crear tus entradas que seran mostradas en la pagina de blog</p>
      </div>
    </div>
</section>

<section class="content">
    <div class="row">
      <div class="col-sm-8">
        <div class="box box-info">
          <div class="box-body">
            <form class="form-horizontal" action="{{ route('blog.store')}}" method="POST"  enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="PostTitle" class="control-label col-sm-2">Titulo: </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="PostTitle" placeholder="Titulo de la entrada">
                </div>
                </div>
                <div class="form-group">
                  <label for="slug" class="control-label col-sm-2">Slug: </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="slug" >
                    <span id="helpBlock" class="help-block">El Slug es un identificador unico y no debe estar en blanco. Ejemplo: Entrada 1.</span>
                  </div>
                </div>
              <div class="form-group">
                <div class="col-sm-12">
                  <textarea name="post" id="post"  class="form-control"></textarea>
                </div>
              </div>
              <div class="col-sm-12">
                <button type="submit" class="btn btn-success" name="button">Crear</button>
                <a href="{{ route('blog.index') }}" class="btn btn-warning">Cancelar</a>
              </div>
            </div>

          </div>
        </div>
        <div class="col-sm-4">
          <div class="box box-info">
            <div class="box-body">
              <div class="form-group">
                <label for="postTags">Etiquetas: </label>
                <input  type="text" name="tags[]" class="form-control" placeholder="Etiquetas" data-role="tagsinput">
                <span id="helpBlock" class="help-block">Cada etiqueta va separado de una coma ( , ).</span>
              </div>

              <div class="form-group">
                <label for="categories" class="control-label">Categoria: </label>
                <div class="multiselect">
                  @foreach($category as $item)
                  <div class="checkbox"><label><input type="checkbox" name="categories[]" value="{{$item->id}}">{{$item->category_name}}</label></div>
                  @endforeach
                </div>
              </div>

              <div class="form-group">
                <label for="postImage">Imagen Destacada: </label>
                <input type="file" name="postImage" id="postImage" onchange="document.getElementById('imgThumbnail').src = window.URL.createObjectURL(this.files[0]);">
                <p class="help-block">Imagen que aparecera al principio del post.</p>
                <div class="col-sm-12">
                <div class="imgThumbnail">
                <img id="imgThumbnail" class="img-responsive" />
                </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  </form>
</section>

@stop
