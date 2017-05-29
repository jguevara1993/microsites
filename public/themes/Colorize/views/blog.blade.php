@extends('Colorize::layouts.main')
@section('title', 'Blog')
@section('content')


<section>
  <div class="container">
    <div class="row animate-box">
      <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
        <h2>Blog</h2>
        <p>Entradas recientes.</p>
      </div>
    </div>
    <div class="row">
      @foreach($block as $post)
      <div class="col-md-4">
        <div class="fh5co-blog animate-box">
          <a href="{{ route('blog.show', ['id' => $post->id])}}" class="blog-bg"><img src="../assets/img/{{$post->post_image}}" class="img-responsive"></a>
          <div class="blog-text">
            <span class="posted_on">{{$post->created_at}}</span>
            <h3><a href="{{ route('blog.show', ['id' => $post->id])}}">{{$post->PostTitle}}</a></h3>
            <p>{!! str_limit($post->post) !!}</p>

          </div>
        </div>
      </div>
      @endforeach
      <div class="col-sm-12">
      {!! $block->render() !!}
      </div>

    </div>
  </div>
</section>

@stop
