@extends('Colorize::layouts.main')
@section('title', 'Index')
@section('content')

<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <div class="display-t js-fullheight">
          <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
            <h1>Lorem ipsum dolor sit amet &amp; consectetur adipiscing elit</h1>
            <h2>Lorem ipsum dolor sit amet <a href="http://vgtechnology.com.ve" target="_blank">VG TECHNOLOGY</a></h2>
            <p><a class="btn btn-primary btn-lg btn-demo" href="#"></i> Link</a> <a class="btn btn-primary btn-lg btn-learn">Link</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

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
