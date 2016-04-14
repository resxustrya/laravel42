<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('materialize/css/materialize.css') }}"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <h1>This is a material design </h1>
        <div>
            <a class="btn" onclick="Materialize.toast('I am a toast', 4000)">Toast!</a>
        </div>
        <div>
            <a class='dropdown-button btn' href='#' data-activates='dropdown1'>Drop Me!</a>
            <!-- Dropdown Structure -->
            <ul id='dropdown1' class='dropdown-content'>
              <li><a href="#!">one</a></li>
              <li><a href="#!">two</a></li>
              <li class="divider"></li>
              <li><a href="#!">three</a></li>
            </ul>
        </div>
    </body>
    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('materialize/js/materialize.min.js') }}"></script>
<html>
    