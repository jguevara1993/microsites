@extends('Stylo::layouts.main')
@section('title', 'Index')
@section('content')

<section id="fh5co-index" data-section="index" style="background-image: url(../themes/Stylo/assets/images/img_bg_3.jpg);" data-stellar-background-ratio="0.5">
  <div class="gradient"></div>
  <div class="container">
    <div class="text-wrap">
      <div class="text-inner">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h1 class="animate-box"><span class="big">Lorem</span> <br><span>ipsum</span> <br><span class="medium">dolor</span><br><span>sit</span> <br> <span class="medium">amet.</span></h1>
            <h2 class="animate-box">Creado por <a href="http://vgtechnology.com.ve" target="_blank" class="fh5co-link">VG TECHNOLOGY</a></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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
