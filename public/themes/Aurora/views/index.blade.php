@extends('Aurora::layouts.main')
@section('title', 'Inicio')
@section('content')

<div class="container-wrap">
  

  <div id="fh5co-index">
    @foreach($block as $block)
    <h1>{{ $block->title }}</h1>
    <p>{!! $block->body !!}</p>
    @endforeach

  </div>
</div><!-- END container-wrap -->

@stop
