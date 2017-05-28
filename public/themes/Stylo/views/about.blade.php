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

<section id="fh5co-index">
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
