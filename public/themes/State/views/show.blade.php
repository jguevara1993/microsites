@extends('State::layouts.main')
@section('title', $post->PostTitle)
@section('content')

<section id="fh5co-features">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <img src="../assets/img/{{ $post->post_image}}" class="img-responsive">

      </div>
      <div class="col-sm-12">
      <h1>{{ $post->PostTitle }}</h1>
      {!! $post->post !!}
      </div>
    </div>
  </div>
</section>


@stop
