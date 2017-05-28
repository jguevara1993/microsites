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
      <div class="col-sm-12">
        @foreach($block as $block)
        <h1>{{ $block->title }}</h1>
        <p>{!! $block->body !!}</p>
        @endforeach
      </div>
    </div>
  </div>
</section>
@stop
