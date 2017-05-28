<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name')}} - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="themes/favicon.png" />

    <link rel="stylesheet" href="{{ Theme::asset('Optimus::css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Optimus::css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Optimus::css/custom-fonts.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Optimus::css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Optimus::css/style.css') }}">

  </head>
  <body>

  <div id="wrapper" class="home-page">
    @section('nav')
      @include('Optimus::partials.nav')
    @show

    @yield('content')

    @section('footer')
      @include('Optimus::partials.footer')
    @show
  </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

    <script src="{{ Theme::asset('Optimus::js/jquery.js') }}" charset="utf-8"></script>
    <script src="{{ Theme::asset('Optimus::js/jquery.easing.1.3.js') }}" charset="utf-8"></script>
    <script src="{{ Theme::asset('Optimus::js/bootstrap.min.js') }}" charset="utf-8"></script>
    <script src="{{ Theme::asset('Optimus::js/jquery.flexslider.js') }}" charset="utf-8"></script>
    <script src="{{ Theme::asset('Optimus::js/animate.js') }}" charset="utf-8"></script>
    <script src="{{ Theme::asset('Optimus::js/main.js') }}" charset="utf-8"></script>

  </body>
</html>
