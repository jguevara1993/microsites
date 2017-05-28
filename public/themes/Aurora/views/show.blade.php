@extends('Aurora::layouts.main')
@section('title', $post->PostTitle)
@section('content')

<div class="container-wrap">
  <aside id="fh5co-hero">
    <div class="flexslider">
      <ul class="slides">
        <li style="background-image: url(../themes/Aurora/assets/images/img_bg_3.jpg);">
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
    <img src="../assets/img/{{ $post->post_image }}" class="img-responsive">
    <h1>{{ $post->PostTitle}}</h1>
    {!! $post->post !!}
  </div>
</div><!-- END container-wrap -->
@stop
