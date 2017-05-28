@extends('Inspire::layouts.main')
@section('title', $post->PostTitle)
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
      <div class="col-sm-12 text-center">
        <img src="../assets/img/{{$post->post_image}}">
      </div>
      <div class="col-sm-12">
        <h1>{{$post->PostTitle}}</h1>
        {!! $post->post !!}
      </div>
    </div>
  </div>
</div>
</section>
@stop
