@extends('Inspire::layouts.main')
@section('title', $post->PostTitle)
@section('content')



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
