<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name')}} - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="icon" type="image/png" href="themes/favicon.png" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <link rel="stylesheet" href="{{ Theme::asset('Clean_Light::css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Clean_Light::css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Clean_Light::css/style.css') }}">

  </head>
  <body>

    @section('nav')
      @include('Clean_Light::partials.nav')
    @show

    @section('header')
      @include('Clean_Light::partials.header')
    @show

    @yield('content')

    @section('footer')
      @include('Clean_Light::partials.footer')
    @show


    <script src="{{ Theme::asset('Clean_Light::js/jquery-1.11.1.js') }}" charset="utf-8"></script>
    <script src="{{ Theme::asset('Clean_Light::js/bootstrap.js') }}" charset="utf-8"></script>
    <script src="{{ Theme::asset('Clean_Light::js/jquery.nicescroll.min.js') }}" charset="utf-8"></script>
    <script src="{{ Theme::asset('Clean_Light::js/jquery.easing.min.js') }}" charset="utf-8"></script>
    <script src="{{ Theme::asset('Clean_Light::js/main.js') }}" charset="utf-8"></script>

  </body>
</html>
