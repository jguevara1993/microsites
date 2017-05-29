@extends('Basica::layouts.main')
@section('title', 'Inicio')
@section('content')

<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(../themes/Basica/assets/images/slides/1.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content centered">
                                <h2 class="animation animated-item-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>
                                <p class="animation animated-item-2">Sed mattis enim in nulla blandit tincidunt. Phasellus vel sem convallis, mattis est id, interdum augue. Integer luctus massa in arcu euismod venenatis. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
</section><!--/#main-slider-->

<div class="section">
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
</div>

@stop
