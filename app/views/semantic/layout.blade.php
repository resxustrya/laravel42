<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
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
    <script type="text/javascript " src="{{ asset('semantic/assets/js/myscript.js') }}"></script>
  @show
  <!-- Site Properties -->
  <title>Login Example - Semantic</title>
  <style>
     body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
</head>
<body>
    @include('semantic.header')
    @yield('content')
    @include('semantic.footer')
<script src="{{ asset('semantic/assets/js/semantic.min.js') }}"></script>
<script src="{{ asset('semantic/assets/js/myjs.js') }}"></script> 
</body>
</html>
