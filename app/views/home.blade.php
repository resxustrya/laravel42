<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('materialize/css/materialize.css') }}"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="{{ asset('js/jquery.js')}}"></script>
    </head>
    <body>
        <nav class="light-blue lighten-1" role="navigation">
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo" style="margin-left: 10px;">MaidFinder PH</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li>
                    <form>
                        <div class="input-field">
                            <input id="search" type="search" placeholder="Job Search" required>
                            <label for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                        </div>
                    </form>
                </li>
                <li>
                    <a class='dropdown-button btn' href='#' data-activates='dropdown1'>Sign up</a>
                        <!-- Dropdown Structure -->
                        <ul id='dropdown1' class='dropdown-content'>
                          <li><a href="#!">Employeer</a></li>
                          <li><a href="#!">Applicant</a></li>
                        </ul>
                </li>
                <li><a class="waves-effect waves-light btn">Login</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">Javascript</a></li>
                <li><a href="mobile.html">Mobile</a></li>
            </ul>
        </div>
    </nav>
       @yield('content')
    </body>
    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('materialize/js/materialize.min.js') }}"></script>
    <script>
        $(".button-collapse").sideNav();
    </script>
<html>
    