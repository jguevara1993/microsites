@extends('layouts.adminLayout')
@section('title', 'Asiviajo.com')
@section('content')
<section class="content-header">
    <div class="row">
      <div class="col-sm-12">
        @if(session()->has('messageDelete'))
          <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ session()->get('messageDelete') }}
        </div>

        @elseif(session()->has('messageSuccess'))
        <div class="alert alert-success alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
{{ session()->get('messageSuccess') }}
</div>

      @elseif(session()->has('messageEdit'))
      <div class="alert alert-success alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
{{ session()->get('messageEdit') }}
</div>
@endif
<h1>Blog / Entradas</h1>
<p>En este seccion puedes ver las entradas y selecionarlas para editarlas, eliminarlas o crear una nueva.</p>

  </div>
  </div>

</section>

  <section id="manage-blog" class="content">
    <div class="box box-info">
      <div class="box-body">
      <div class="row">
        <div class="col-sm-12">
          <a class="btn btn-success" href="{{route('blog.create')}}" role="button">Crear nuevo</a>
        </div>

        <div class="col-sm-12" id="blog-table">
            <table class="table table-striped">
                <tr>
                  <th>ID</th>
                  <th>Slug</th>
                  <th>Titulo</th>
                  <th>Post</th>
                  <th>Categorias</th>
                  <th>Etiquetas</th>
                  <th>Fecha de creación</th>
                  <th> </th>
                </tr>

              @foreach($post as $item)
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->slug}}</td>
                <td>{{$item->PostTitle}}</td>
                <td class="post-title">{{ str_limit($item->post)}}</td>
                <td>
                @foreach($item->categories as $category)
                <p>{{ $category->category_name}}</p>
                @endforeach
              </td>
                <td>
                @foreach($item->tags as $tag)
                <p>{{$tag->tag}}</p>
                @endforeach
              </td>
                <td>{{$item->created_at}}</td>
                <td>
                  <a href="{{ route('blog.show', ['id' => $item->id ]) }}" class="btn btn-info" target="_blank"><i class="fa fa-search" aria-hidden="true"></i></a>
                  <a href="{{ route('blog.edit', ['id'=> $item->id]) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                  <a href="{{ route('blog.destroy', ['id' => $item->id ]) }}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </td>
              </tr>
              @endforeach
              {!! $post->render() !!}
            </table>
        </div>
      </div>
    </div>
  </section>
@stop
