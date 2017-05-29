@extends('Basica::layouts.main')
@section('title', 'Paquetes')
@section('content')

<div class="section section-breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Paquetes</h1>
      </div>
    </div>
  </div>
</div>

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
