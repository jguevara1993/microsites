@extends('Aurora::layouts.main')
@section('title', 'Blog')
@section('content')

<div class="container-wrap">

  <div id="fh5co-blog">
    <div class="row">
      @foreach($block as $post)
      <div class="col-md-4">
        <div class="fh5co-blog animate-box">
          <a href="{{ route('blog.show', ['id' => $post->id]) }}"><img src="assets/img/{{$post->post_image}}" class="img-responsive"></a>
          <div class="blog-text">
            <span class="posted_on">{{$post->created_at}}</span>
            <h3><a href="#">{{$post->PostTitle}}</a></h3>
            <p>{!! str_limit($post->post) !!}</p>
          </div>
        </div>
      </div>
      @endforeach
      <div class="col-sm-12">
      {!! $block->render() !!}
      </div>
    </div>
  </div>
</div><!-- END container-wrap -->

@stop
