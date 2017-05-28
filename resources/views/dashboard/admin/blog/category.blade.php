@extends('layouts.adminLayout')
@section('title', 'Asiviajo.com')
@section('content')

<section class="content-header">
  <div class="row">
    <div class="col-sm-12">
      @if(session()->has('message'))
      <div class="alert alert-success alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
{{ session()->get('message')}}
</div>
@endif
    </div>
    <div class="col-sm-12">
      <h1>Categorias</h1>
      <p>Aqui puedes agregar categorias nuevas para las entradas</p>
    </div>
  </div>
</section>

<section class="content">
  <div class="row">
    <div class="col-sm-6">
      <div class="box box-info">
        <div class="box-body">
          <form class="form-horizontal" action="{{ route('category.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="category_name" class="col-sm-2 control-label">Nombre:  </label>
            <div class="col-sm-10">
              <input type="text" name="category_name" value="" class="form-control">
            </div>
            </div>
            <div class="form-group">
                <label for="categorySlug" class="col-sm-2 control-label">Slug: </label>
              <div class="col-sm-10">
                <input type="text" name="categorySlug" value="" class=" form-control">
                <span id="helpBlock" class="help-block">Nombre unico con el que se identificara la categoria, ejemplo: categoria de autos: autos.</span>
              </div>
            </div>
            <div class="form-group">
                <label for="categoryDescription" class="col-sm-2 control-label">Descripción: </label>
              <div class="col-sm-10">
                <textarea name="categoryDescription" rows="8" cols="65"></textarea>
              </div>
            </div>
            <div class="col-sm-offset-2">
              <button class="btn btn-success" type="submit">Agregar</button>
              <a href="{{ route('blog.index' )}}" class="btn btn-warning">Cancelar</a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="box box-info">
        <div class="box-body">
          <table class="table table-responsive table-striped">
            <thead>
              <tr>
              <th>ID</th>
              <th>Slug</th>
              <th>Nombre</th>
              <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($category as $item)
              <tr>
              <td>{{ $item->id }}</td>
              <td>{{ $item->slug }}</td>
              <td>{{ $item->category_name }}</td>
              <td><a href="{{ route('category.destroy', ['id' => $item->id]) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
            </tr>
              @endforeach
              {!! $category->render() !!}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@stop
