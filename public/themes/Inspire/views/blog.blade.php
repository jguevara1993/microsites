@extends('Inspire::layouts.main')
@section('title', 'Blog')
@section('content')


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
