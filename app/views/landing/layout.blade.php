<!DOCTYPE html>
<html lang="en">
<head>
    <title>MaidFinder PH</title>
    <meta charset="utf-8">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="cache-control" content="no-store" />
    <meta http-equiv="cache-control" content="must-revalidate" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>


    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="{{ asset('materialize/css/materialize.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{ asset('materialize/css/icons.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{ asset('materialize/landing/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script>
        $(document).ready(function() {
            var bg = $('#bg');
            bg.load();
            bg.autoplay = true;
            bg.loop = true;

        });
    </script>
</head>
<body class="">

<div class="container-fluid">
    
    @include('landing.header')
    @include('landing.top-header')
    @yield('content')
    @include('landing.footer')
</div>
<!--  Scripts-->

<script src="{{ asset('materialize/js/materialize.js')}}"></script>
<script src="{{ asset('materialize/js/init.js') }}"></script>
</body>
</html>
