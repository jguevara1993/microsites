@extends('Colorize::layouts.main')
@section('title', $post->PostTitle)
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
      <div class="col-sm-12 text-center">
        <img src="../assets/img/{{$post->post_image}}" class="img-responsive">
        <h1>{{$post->PostTitle}}</h1>
      </div>
      <div class="col-sm-12">
        {!! $post->post !!}
      </div>
    </div>
  </div>
</section>

@stop
