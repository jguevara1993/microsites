<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name')}} - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="themes/favicon.png" />


    <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ Theme::asset('Aurora::css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Aurora::css/style.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Aurora::css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Aurora::css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Aurora::css/animate.css') }}">


  </head>
  <body>
    <div class="fh5co-loader"></div>
      <div id="page">
        @section('nav')
          @include('Aurora::partials.nav')
        @show

        @yield('content')

        @section('footer')
          @include('Aurora::partials.footer')
        @show
      </div>

      <div class="gototop js-top">
    		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    	</div>

      <script src="{{ Theme::asset('Aurora::js/jquery.min.js') }}" charset="utf-8"></script>
      <script src="{{ Theme::asset('Aurora::js/bootstrap.min.js') }}" charset="utf-8"></script>
      <script src="{{ Theme::asset('Aurora::js/jquery.waypoints.min.js') }}" charset="utf-8"></script>
      <script src="{{ Theme::asset('Aurora::js/jquery.flexslider-min.js') }}" charset="utf-8"></script>
      <script src="{{ Theme::asset('Aurora::js/jquery.magnific-popup.min.js') }}" charset="utf-8"></script>
      <script src="{{ Theme::asset('Aurora::js/magnific-popup-options.js') }}" charset="utf-8"></script>
      <script src="{{ Theme::asset('Aurora::js/jquery.easing.1.3.js') }}" charset="utf-8"></script>
      <script src="{{ Theme::asset('Aurora::js/main.js') }}" charset="utf-8"></script>

  </body>
</html>
