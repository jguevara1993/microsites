@extends('Stylo::layouts.main')
@section('title', 'Blog')
@section('content')

<section id="fh5co-blog" data-section="blog">
  <div class="fh5co-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12 section-heading text-center">
          <h2 class="animate-box"><span>Blog</span></h2>
          <div class="row">
            <div class="col-md-8 col-md-offset-2 subtext">
              <p>Entradas recientes.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach($block as $post)
        <div class="col-md-4 animate-box blog">
          <a href="{{ route('blog.show', ['id' => $post->id ])  }}" class="entry">
            <div class="blog-bg">
              <img src="../assets/img/{{$post->post_image}}" class="img-responsive">
              <div class="date">
                <small>{{ date('m')}}</small>
              </div>
              <div class="desc">
                {!! str_limit($post->post) !!}
              </div>
            </div>
            <div class="desc-grid">
              <h3>{{ $post->PostTitle }}</h3>
            </div>
          </a>
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
