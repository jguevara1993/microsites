@extends('Inspire::layouts.main')
@section('title', 'Index')
@section('content')

<div id="banner" class="banner">
  <div class="banner-image"></div>
  <div class="banner-caption">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
          <h1 class="text-center">Lorem <span>Ipsum</span></h1>
          <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos debitis provident nulla illum minus enim praesentium repellendus ullam cupiditate reiciendis optio voluptatem, recusandae nobis quis aperiam, sapiente libero ut at.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<section>
  <div class="section clearfix">
  <div class="container">
    <div class="row">
      @foreach($block as $post)
      <div class="col-sm-6 col-md-3 isotope-item web-design">
        <div class="image-box">
          <div class="overlay-container">
            <a href="{{ route('blog.show', ['id' => $post->id ]) }}"><img src="../assets/img/{{$post->post_image}}" class="img-responsive"></a>
          </div>
          <a id="blog-button" class="btn btn-default btn-block" href="{{ route('blog.show', ['id' => $post->id])}}">{{$post->PostTitle}}</a>
        </div>
      </div>
      @endforeach
      <div class="col-sm-12">
      {!! $block->render() !!}
      </div>

    </div>
  </div>
</div>
</section>
@stop
