<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  @section('title')
  <title>Login - MaidFinder</title>
  @show
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
   @section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('semantic/assets/css/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('semantic/assets/css/mycss.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('semantic/assets/css/wodry.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
    <link rel="icon" href="{{ asset('semantic/assets/img/icon.png') }}">
    <script type="text/javascript" src="{{ asset('semantic/assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('semantic/assets/js/wodry.min.js') }}"></script>
  @show
  <!-- Site Properties -->
  
</head>
<body>
    @include('account.header')
    @yield('content')
    @include('account.footer')
<script src="{{ asset('semantic/assets/js/semantic.min.js') }}"></script>
<script src="{{ asset('semantic/assets/js/myjs.js') }}"></script> 
</body>
</html>
