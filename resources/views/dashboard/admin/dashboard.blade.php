@extends('layouts.adminLayout')
@section('title', 'Asiviajo.com')
@section('content')

<section class="content-header">
  <div class="row">
    <div class="col-sm-12">
      <h1>Bienvenido, {{ Auth::user()->name }} <small></small></h1>
    </div>
  </div>
</section>

<section class="content">
  <div class="row">
    <div class="col-sm-4">
      <div class="box box-info">
        <div class="box-header with-border text-center">
          <h3 class="box-title ">Mensajes</h3>
        </div>
        <div class="box-body">
          @if(session()->has('message_error'))
          <h4 class="text-danger">{{session()->get('message_error')}}</h4>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>

@stop
