@extends('Clean_Dark::layouts.main')
@section('title', 'Blog')
@section('content')

<section>
  <div class="container">
    <div class="row">
          @foreach($block as $post)
              <div class="col-sm-12 scrollclass">
        <div class="col-sm-2 blog-img">
          <a href="{{route('blog.show', ['id' => $post->id])}}"><img src="../assets/img/{{$post->post_image}}" class="img-responsive"></a>
        </div>
        <div class="col-sm-10">
          <a href="{{route('blog.show', ['id' => $post->id])}}"><h1>{{$post->PostTitle}}</h1></a>
          {!! str_limit($post->post) !!}
        </div>

      </div>
        @endforeach
        <div class="col-sm-12">
        {!! $block->render() !!}
        </div>

    </div>
  </div>
</section>

@stop
