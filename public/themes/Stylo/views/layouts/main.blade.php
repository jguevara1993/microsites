<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name')}} - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="themes/favicon.png" />

    <link rel="stylesheet" href="{{ Theme::asset('Stylo::css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Stylo::css/animate.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Stylo::css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Stylo::css/style.css') }}">
    <script src="{{ Theme::asset('Stylo::js/modernizr-2.6.2.min.js') }}" charset="utf-8"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:300,400" rel="stylesheet">

  </head>
  <body>
    @section('nav')
      @include('Stylo::partials.nav')
    @show

    @yield('content')

    @section('footer')
      @include('Stylo::partials.footer')
    @show


    <script src="{{ Theme::asset('Stylo::js/jquery.min.js') }}" charset="utf-8"></script>
    <script src="{{ Theme::asset('Stylo::js/jquery.easing.1.3.js') }}" charset="utf-8"></script>
    <script src="{{ Theme::asset('Stylo::js/bootstrap.min.js') }}" charset="utf-8"></script>
    <script src="{{ Theme::asset('Stylo::js/jquery.stellar.min.js') }}" charset="utf-8"></script>
    <script src="{{ Theme::asset('Stylo::js/jquery.waypoints.min.js') }}" charset="utf-8"></script>
    <script src="{{ Theme::asset('Stylo::js/main.js') }}" charset="utf-8"></script>
  </body>
</html>
