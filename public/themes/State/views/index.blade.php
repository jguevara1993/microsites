@extends('State::layouts.main')
@section('title', 'Index')
@section('content')
<aside id="fh5co-hero" class="js-fullheight">
  <div class="flexslider js-fullheight">
    <ul class="slides">
      <li style="background-image: url(../themes/State/assets/images/img_bg_1.jpg);">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text">
              <div class="slider-text-inner">
                <div class="desc">
                  <span class="status">Lorem ipsum</span>
                  <h1>Lorem ipsum</h1>
                  <h2 class="price">$4,000.00</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <p class="details">
                    <span>2000 Lorem ipsum</span>
                    <span>4 Lorem ipsum</span>
                    <span>3 Lorem ipsum</span>
                    <span>2 Lorem ipsum</span>
                  </p>
                  <p><a class="btn btn-primary btn-lg" href="#">Link</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
      </ul>
    </div>
</aside>

<section id="fh5co-features">
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
