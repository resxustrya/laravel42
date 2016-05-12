<!doctype html>
<html>
    <head>
        <title>MaidFinder PH</title>
        <meta charset="utf-8">
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="cache-control" content="no-store" />
        <meta http-equiv="cache-control" content="must-revalidate" />
        <meta http-equiv="expires" content="0" />
        <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
        <meta http-equiv="pragma" content="no-cache" />
        <link rel="stylesheet" type="text/css" href="{{ asset('materialize/css/materialize.css') }}"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="{{ asset('materialize/css/icons.css') }}" type="text/css" rel="stylesheet">
        <script src="{{ asset('js/jquery.js')}}"></script>
        <script src="{{ asset('js/angular.min.js')}}"></script>
        
        <style>
            body {
                display: flex;
                min-height: 100vh;
                flex-direction: column;
            }

            main {
                flex: 1 0 auto;
            }
        </style>
    </head>
    <body class="container-fluid">

     
        @include('header')
        @yield('content')
        @include('footer')


        <script src="{{ asset('materialize/js/materialize.min.js') }}"></script>
        <script>
            $(document).ready(function(){
                $('.parallax').parallax();
            });
            $(".button-collapse").sideNav();

            $('.modal-trigger').leanModal();
            (function() {
                $('#search').val('');
            })();
        </script>
    </body>
</html>
    