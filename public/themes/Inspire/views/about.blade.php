@extends('Inspire::layouts.main')
@section('title', 'Sobre nosotros')
@section('content')



<section>
  <div class="section clearfix">
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
</section>
@stop
