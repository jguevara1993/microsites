@extends('Aurora::layouts.main')
@section('title', $post->PostTitle)
@section('content')

<div class="container-wrap">
  
  <div id="fh5co-blog">
    <img src="../assets/img/{{ $post->post_image }}" class="img-responsive">
    <h1>{{ $post->PostTitle}}</h1>
    {!! $post->post !!}
  </div>
</div><!-- END container-wrap -->
@stop
