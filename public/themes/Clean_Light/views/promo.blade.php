@extends('Clean_Light::layouts.main')
@section('title', 'Paquetes')
@section('content')
<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 scrollclass">
        @foreach($block as $block)
          <h1>{{ $block->title }}</h1>
          <p>{!! $block->body !!}</p>
          @endforeach
      </div>
    </div>
  </div>
</section>

@stop
