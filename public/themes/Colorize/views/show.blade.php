@extends('Colorize::layouts.main')
@section('title', $post->PostTitle)
@section('content')

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
