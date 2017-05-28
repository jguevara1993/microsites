@extends('Optimus::layouts.main')
@section('title', $post->PostTitle)
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
      <div class="col-sm-12">
        <img src="../assets/img/{{$post->post_image}}" class="img-responsive">
        <h1>{{$post->PostTitle}}</h1>
        {!! $post->post !!}
      </div>

    </div>
  </div>
</section>
@stop
