@extends('Clean_Light::layouts.main')
@section('title', $post->PostTitle)
@section('content')

<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 scrollclass">
        <img src="../assets/img/{{$post->post_image}}" class="img-responsive">
        <h1>{{$post->PostTitle}}</h1>
        {!! $post->post !!}
      </div>
    </div>
  </div>
</section>

@stop
