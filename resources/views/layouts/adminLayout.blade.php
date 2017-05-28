<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name')}} | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/app.css') }}">
  <script src="{{ URL::asset('vendor/ckeditor/ckeditor.js') }}" charset="utf-8"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body class="skin-blue hold-transition sidebar-mini">
<div class="wrapper">
  @section('main-header')

    @include('dashboard.partials.header')

  @show

  @section('sidebar')

    @include('dashboard.partials.sidebar')

  @show


  <div class="content-wrapper">

    @yield('content')

  </div>

  @section('footer')

    @include('dashboard.partials.footer')

  @show
</div>

<script src="{{ URL::asset('assets/js/app.js') }}"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js" ></script>
<script src="{{ URL::asset('assets/js/main.js') }}"></script>
</body>
</html>
