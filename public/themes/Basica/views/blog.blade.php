@extends('Basica::layouts.main')
@section('title', 'Index')
@section('content')

<div class="section section-breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Blog</h1>
      </div>
    </div>
  </div>
</div>

<div class="section">
<div class="container">
<div class="row">
  @foreach($block as $post)
  <div class="col-sm-6">
    <div class="blog-post blog-single-post">
      <div class="single-post-title">
        <h2>{{$post->PostTitle}}</h2>
      </div>

      <div class="single-post-image">
        <a href="{{ route('blog.show', ['id' => $post->id ])}}"><img src="../assets/img/{{$post->post_image}}" alt="Post Title"></a>
      </div>

      <div class="single-post-info">
        <i class="glyphicon glyphicon-time"></i>{{$post->created_at}}
      </div>

      <div class="single-post-content">
        <p>
          {!! str_limit($post->post) !!}
        </p>
      <a href="{{ route('blog.show', ['id' => $post->id ]) }}" class="btn">Leer Mas</a>
      </div>
    </div>
  </div>
@endforeach
<div class="col-sm-12">
{!! $block->render() !!}
</div>

</div>
</div>
</div>


@stop
