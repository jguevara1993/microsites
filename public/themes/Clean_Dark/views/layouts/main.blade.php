<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name')}} - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="icon" type="image/png" href="themes/favicon.png" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <link rel="stylesheet" href="{{ Theme::asset('Clean_Dark::css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Clean_Dark::css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Clean_Dark::css/style.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Clean_Dark::css/dark.css') }}">

  </head>
  <body>

    @section('nav')
      @include('Clean_Dark::partials.nav')
    @show

    @section('header')
      @include('Clean_Dark::partials.header')
    @show

    @yield('content')

    @section('footer')
      @include('Clean_Dark::partials.footer')
    @show


    <script src="{{ Theme::asset('Clean_Dark::js/jquery-1.11.1.js') }}" charset="utf-8"></script>
    <script src="{{ Theme::asset('Clean_Dark::js/bootstrap.js') }}" charset="utf-8"></script>
    <script src="{{ Theme::asset('Clean_Dark::js/jquery.nicescroll.min.js') }}" charset="utf-8"></script>
    <script src="{{ Theme::asset('Clean_Darkt::js/jquery.easing.min.js') }}" charset="utf-8"></script>
    <script src="{{ Theme::asset('Clean_Dark::js/main.js') }}" charset="utf-8"></script>

  </body>
</html>
