@extends('layouts.adminLayout')
@section('title', 'Asiviajo.com')
@section('content')

  <section class="content-header">
    <div class="row">
      <div class="col-sm-12">
        @if(session()->has('message'))
          {{ session()->get('message') }}
        @endif
        <h1>Plantillas</h1>
        <p>Cambia la plantilla de tu sitio y dale un nuevo estilo</p>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="row">
      @foreach($themes as $themes)
        <div class="col-sm-12 col-md-3">
          <div class="box box-info">
            <div class="box-body">
              <h1>{{$themes->theme_name}}</h1>
              <a href="../themes/{{$themes->theme_name}}/assets/images/{{$themes->theme_image}}" target="_blank"><img src="../themes/{{$themes->theme_name}}/assets/images/{{$themes->theme_image}}" class="img-responsive"></a>
            </div>
              <div class="box-footer">
              <form class="" action="{{ route('themes.set') }}" method="POST">
              <input type="hidden" name="slug" value="{{ $themes->slug }}">
              <button type="submit" class="btn btn-info">Aplicar</button>
              {{ csrf_field() }}
            </form>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>
@stop
