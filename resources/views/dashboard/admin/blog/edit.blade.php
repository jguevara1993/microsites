@extends('layouts.adminLayout')
@section('title', 'Asiviajo.com')
@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <h1>Editar Entrada {{ $post->id }}</h1>
        <p>Aqui puedes editar tus entradas que seran mostradas en la pagina de blog</p>

      </div>
      <div class="col-xs-8">
        <form class="form-horizontal" action="{{ route('blog.update', ['id' => $post->id]) }}" method="POST" enctype="multipart/form-data">

          <div class="form-group">
            <label for="PostTitle" class="col-sm-2 control-label">Titulo: </label>
            <div class="col-sm-10">
            <input type="text" name="PostTitle" id="PostTitle"  class="form-control" placeholder="Titulo del post..." value="{{ $post->PostTitle}}">
          </div>
          </div>
          <input type="hidden" name="editForm" value="editForm">
          <div class="form-group">
            <div class="col-sm-12">
            <textarea name="post" rows="8" id="post" cols="80" class="form-control"> {{ $post->post}}</textarea>
          </div>
          </div>
          <div class="col-sm-12">
            <button type="submit" class="btn btn-success" name="buttonSubmit">Editar</button>
            <a class="btn btn-warning" href="{{ route('blog.index')}}" role="button">Cancelar</a>

          </div>
      </div>
        <div class="col-xs-4">
          <div class="post-panel">
        </div>
        <div class="post-panel-2">
          <table class="table table-bordered">
            <tr>
              <th>Estatus: </th>
              <td>Activo</td>
            </tr>
            <tr>
              <th>Fecha de creacion: </th>
              <td>{{ $post->created_at->format('d-m-Y H:i:s') }}</td>
            </tr>
          </table>
        </div>
        <div class="post-panel-3">
            <div class="form-group" >
              <label for="tagsEdit">Etiquetas: </label>
              <input type="text" name="tags[]" value="<?php foreach($post->tags as $tag){echo $tag->tag;}?>" data-role="tagsinput">
              </div>
                <div class="form-group">
              <label>Categoria: </label>
              <div class="multiselect">
                @foreach($categories as $category)
                  <label>{{ Form::checkbox('categories[]', $category->id, $post->categories->contains($category->id) ? true : false)}} {{$category->category_name}}</label>
                @endforeach
              </div>
            </div>
          <div class="form-group">
            <label for="postImage">Imagen Destacada: </label>
            <input type="file" name="postImage" id="postImage" onchange="document.getElementById('imgThumbnail').src = window.URL.createObjectURL(this.files[0]);">
            <p class="help-block">Imagen que aparecera al principio del post.</p>
          <div class="imgThumbnail">
            <img id="imgThumbnail" src="../../../assets/img/{{$post->post_image}}" class="img-responsive" />
          </div>
        </div>
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@stop
