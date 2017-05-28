<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name')}} - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="themes/favicon.png" />

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ Theme::asset('State::css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('State::css/animate.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('State::css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('State::css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('State::css/superfish.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('State::css/style.css') }}">


    </head>
    <body>
      <div id="fh5co-wrapper">
      <div id="fh5co-page">

      @section('nav')
        @include('State::partials.nav')
      @show

      @yield('content')

      @section('footer')
        @include('State::partials.footer')
      @show

    </div>
  </div>


  <script src="{{ Theme::asset('State::js/jquery.min.js') }}" charset="utf-8"></script>
  <script src="{{ Theme::asset('State::js/jquery.easing.1.3.js') }}" charset="utf-8"></script>
  <script src="{{ Theme::asset('State::js/bootstrap.min.js') }}" charset="utf-8"></script>
  <script src="{{ Theme::asset('State::js/jquery.flexslider-min.js') }}" charset="utf-8"></script>
  <script src="{{ Theme::asset('State::js/sticky.js') }}" charset="utf-8"></script>
  <script src="{{ Theme::asset('State::js/superfish.js') }}" charset="utf-8"></script>
  <script src="{{ Theme::asset('State::js/jquery.waypoints.min.js') }}" charset="utf-8"></script>
  <script src="{{ Theme::asset('State::js/hoverIntent.js') }}" charset="utf-8"></script>
  <script src="{{ Theme::asset('State::js/respond.min.js') }}" charset="utf-8"></script>
  <script src="{{ Theme::asset('State::js/classie.js') }}" charset="utf-8"></script>
  <script src="{{ Theme::asset('State::js/main.js') }}" charset="utf-8"></script>

  </body>
</html>
