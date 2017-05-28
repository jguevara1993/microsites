<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name')}} - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="themes/favicon.png" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ Theme::asset('Inspire::css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Inspire::css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Inspire::css/animations.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Inspire::css/style.css') }}">



  </head>
  <body>
    <div class="scrollToTop"><i class="icon-up-open-big"></i></div>

    @section('nav')
      @include('Inspire::partials.nav')
    @show

    @yield('content')

    @section('footer')
      @include('Inspire::partials.footer')
    @show

<script src="{{ Theme::asset('Inspire::js/jquery.min.js') }}" charset="utf-8"></script>
<script src="{{ Theme::asset('Inspire::js/bootstrap.min.js') }}" charset="utf-8"></script>
<script src="{{ Theme::asset('Inspire::js/isotope.pkgd.min.js') }}" charset="utf-8"></script>
<script src="{{ Theme::asset('Inspire::js/jquery.backstretch.min.js') }}" charset="utf-8"></script>
<script src="{{ Theme::asset('Inspire::js/jquery.appear.js') }}" charset="utf-8"></script>
<script src="{{ Theme::asset('Inspire::js/modernizr.js') }}" charset="utf-8"></script>
<script src="{{ Theme::asset('Inspire::js/main.js') }}" charset="utf-8"></script>





  </body>
</html>
