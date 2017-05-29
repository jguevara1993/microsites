@extends('Stylo::layouts.main')
@section('title', 'Contacto')
@section('content')


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
