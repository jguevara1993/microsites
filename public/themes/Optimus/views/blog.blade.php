@extends('Optimus::layouts.main')
@section('title', 'Index')
@section('content')
<section id="banner">

<!-- Slider -->
      <div id="main-slider" class="flexslider">
          <ul class="slides">
            <li>
              <img src="../themes/Optimus/assets/images/slides/1.jpg" alt="" />
              <div class="flex-caption">
                  <h3>Creative</h3>
        <p>We create the opportunities</p>

              </div>
            </li>
          </ul>
      </div>
<!-- end slider -->
</section>

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
