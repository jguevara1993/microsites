<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name')}} - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="themes/favicon.png" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ Theme::asset('Basica::css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Basica::css/custom.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Basica::css/icomoon-social.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Basica::css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Basica::css/style.css') }}">



  </head>
  <body>
@section('nav')
  @include('Basica::partials.nav')
@show

@yield('content')

@section('footer')
  @include('Basica::partials.footer')
@show


<script src="{{ Theme::asset('Basica::js/jquery-1.9.1.min.js') }}" charset="utf-8"></script>
<script src="{{ Theme::asset('Basica::js/bootstrap.min.js') }}" charset="utf-8"></script>
<script src="{{ Theme::asset('Basica::js/jquery.easing.min.js') }}" charset="utf-8"></script>
<script src="{{ Theme::asset('Basica::js/scrolling-nav.js') }}" charset="utf-8"></script>



  </body>
</html>
