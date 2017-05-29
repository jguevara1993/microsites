@extends('Aurora::layouts.main')
@section('title', 'Sobre nosotros')
@section('content')

<div class="container-wrap">

  <div id="fh5co-about">
    @foreach($block as $block)
    <h1>{{ $block->title }}</h1>
    <p>{!! $block->body !!}</p>
    @endforeach


  </div>
</div><!-- END container-wrap -->

@stop
