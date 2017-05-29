@extends('State::layouts.main')
@section('title', 'Blog')
@section('content')


<div id="fh5co-blog-section" class="fh5co-section-gray">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
        <h3>Blog</h3>
        <p>Entradas Recientes.</p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row row-bottom-padded-md">
      @foreach($block as $post)
      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="fh5co-blog animate-box">
          <a href="{{ route('blog.show', ['id' => $post->id]) }}"><img class="img-responsive" src="../assets/img/{{$post->post_image}}" alt=""></a>
          <div class="blog-text">
            <div class="prod-title">
              <h3><a href="{{ route('blog.show', ['id' => $post->id]) }}">{{ $post->PostTitle}}</a></h3>
              <span class="posted_by">{{ $post->created_at}}</span>
              <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
              {!! str_limit($post->post) !!}
              <p><a href="{{ route('blog.show', ['id' => $post->id]) }}">Leer Mas...</a></p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <div class="col-sm-12">
      {!! $block->render() !!}
      </div>

    </div>
      </div>
      <div class="clearfix visible-md-block"></div>
    </div>

  </div>
</div>
<!-- fh5co-blog-section -->


@stop
