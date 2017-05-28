@extends('Stylo::layouts.main')
@section('title', $post->PostTitle)
@section('content')

<section id="fh5co-index" data-section="index" style="background-image: url(../themes/Stylo/assets/images/img_bg_3.jpg);" data-stellar-background-ratio="0.5">
  <div class="gradient"></div>
  <div class="container">
    <div class="text-wrap">
      <div class="text-inner">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="fh5co-blog" data-section="blog">
  <div class="fh5co-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12 section-heading text-center">
          <h2 class="animate-box"><span>{{ $post->PostTitle }}</span></h2>
          <img src="../assets/img/{{$post->post_image}}" class="img-responsive">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 subtext">
              {!! $post->post !!}
            </div>
          </div>
        </div>
      </div>

      </div>
    </div>
</section>


@stop
