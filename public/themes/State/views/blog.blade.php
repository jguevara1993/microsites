@extends('State::layouts.main')
@section('title', 'Blog')
@section('content')
<aside id="fh5co-hero" class="js-fullheight">
  <div class="flexslider js-fullheight">
    <ul class="slides">
      <li style="background-image: url(../themes/State/assets/images/img_bg_1.jpg);">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text">
              <div class="slider-text-inner">
                <div class="desc">
                  <span class="status">Lorem ipsum</span>
                  <h1>Lorem ipsum</h1>
                  <h2 class="price">$4,000.00</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <p class="details">
                    <span>2000 Lorem ipsum</span>
                    <span>4 Lorem ipsum</span>
                    <span>3 Lorem ipsum</span>
                    <span>2 Lorem ipsum</span>
                  </p>
                  <p><a class="btn btn-primary btn-lg" href="#">Link</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
      </ul>
    </div>
</aside>

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
