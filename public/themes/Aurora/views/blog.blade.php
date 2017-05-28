@extends('Aurora::layouts.main')
@section('title', 'Sobre nosotros')
@section('content')

<div class="container-wrap">
  <aside id="fh5co-hero">
    <div class="flexslider">
      <ul class="slides">
        <li style="background-image: url(./themes/Aurora/assets/images/img_bg_3.jpg);">
          <div class="overlay-gradient"></div>
          <div class="container-fluids">
            <div class="row">
              <div class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
                <div class="slider-text-inner text-center">
                </div>
              </div>
            </div>
          </div>
        </li>
        </ul>
      </div>
  </aside>

  <div id="fh5co-blog">
    <div class="row">
      @foreach($block as $post)
      <div class="col-md-4">
        <div class="fh5co-blog animate-box">
          <a href="{{ route('blog.show', ['id' => $post->id]) }}"><img src="assets/img/{{$post->post_image}}" class="img-responsive"></a>
          <div class="blog-text">
            <span class="posted_on">{{$post->created_at}}</span>
            <h3><a href="#">{{$post->PostTitle}}</a></h3>
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
</div><!-- END container-wrap -->

@stop
