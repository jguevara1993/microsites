<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name')}} - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="themes/favicon.png" />

    <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ Theme::asset('Colorize::css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Colorize::css/animate.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Colorize::css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Colorize::css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Colorize::css/style.css') }}">


  </head>
  <body>
    <div class="fh5co-loader"></div>
    <div id="page">

    @section('nav')
      @include('Colorize::partials.nav')
    @show

    @yield('content')

    @section('footer')
      @include('Colorize::partials.footer')
    @show
  </div>

    <script src="{{ Theme::asset('Colorize::js/jquery.min.js') }}" charset="utf-8"></script>
    <script src="{{ Theme::asset('Colorize::js/jquery.easing.1.3.js') }}" charset="utf-8"></script>
    <script src="{{ Theme::asset('Colorize::js/bootstrap.min.js') }}" charset="utf-8"></script>
    <script src="{{ Theme::asset('Colorize::js/jquery.waypoints.min.js') }}" charset="utf-8"></script>
    <script src="{{ Theme::asset('Colorize::js/jquery.flexslider-min.js') }}" charset="utf-8"></script>
    <script src="{{ Theme::asset('Colorize::js/main.js') }}" charset="utf-8"></script>

  </body>
</html>
