@extends('Colorize::layouts.main')
@section('title', 'Inicio')
@section('content')


<section>
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
