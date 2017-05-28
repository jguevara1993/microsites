@extends('layouts.adminLayout')
@section('title', 'Asiviajo.com')
@section('content')

<section class="content-header">
  <div class="row">
    <div class="col-sm-12">
      <h1>Roles</h1>
      <p>Lista de roles para usuarios de asiviajo</p>
    </div>
  </div>
</section>

<section class="content">
  <div class="row">
    <div class="col-sm-12">
      <div class="box box-info">
        <div class="box-body">
          <div class="col-sm-12">
            <a href="{{ route('user.create') }}" class="btn btn-success">Crear Nuevo</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@stop
