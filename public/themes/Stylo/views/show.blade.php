@extends('Stylo::layouts.main')
@section('title', $post->PostTitle)
@section('content')


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
