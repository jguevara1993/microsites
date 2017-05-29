@extends('Optimus::layouts.main')
@section('title', 'Blog')
@section('content')


<section id="content">
  <div class="container">
    <div class="row">
      <div class="row service-v1 margin-bottom-40">
        @foreach($block as $post)
          <div class="col-md-4 md-margin-bottom-40">
            <a href="{{ route('blog.show', ['id' => $post->id ]) }}"> <img class="img-responsive" src="../assets/img/{{ $post->post_image }}"></a>
              <a href="{{ route('blog.show', ['id' => $post->id ]) }}"> <h3>{{ $post->PostTitle }}</h3></a>
              <p>{!! str_limit($post->post) !!}</p>
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
