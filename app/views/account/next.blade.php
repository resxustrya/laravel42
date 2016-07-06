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
     <div class="ui  column centered grid">
  <div class="column">
 
  </div>
  <div class="four column centered row ui  middle aligned aligned center aligned grid very relaxed stackable grid">
    <div class="column">
        <h2 class="ui teal image header">
                <img src="{{ asset('semantic/assets/img/icon.png') }}" class="image">
                <span class="content">
                Register with Email
                </span>
        </h2>
            <form class="ui form">
              <div class="ui stacked segment">
                <div class="field">
                  <div class="ui left icon input">
                    <i class="user icon"></i>
                    <input type="text" name="email" placeholder="E-mail address">
                  </div>
                </div>
                  <div class="field">
                      <div class="ui left icon input">
                          <i class="user icon"></i>
                          <input type="text" name="lname" placeholder="Last Name" />
                      </div>
                  </div>
                  <div class="field">
                      <div class="ui left icon input">
                          <i class="user icon"></i>
                          <input type="text" name="fname" placeholder="First Name" />
                      </div>
                  </div>
                <div class="field">
                  <div class="ui left icon input">
                    <i class="lock icon"></i>
                    <input type="password" name="password" placeholder="Password">
                  </div>
                </div>
                <div class="field">
                  <div class="ui left icon input">
                    <i class="lock icon"></i>
                    <input type="password" name="password1" placeholder="Confirm Password">
                  </div>
                </div>
                <div class="ui fluid large teal submit button">Sign Up</div>
              </div>
              <div class="ui error message"></div>

            </form>

            <div class="ui message">
              Already have an account?<a href="#">Sign In</a>
            </div>
    </div>
      <div class="ui vertical divider">
            Or
     </div>
    <div class="center column">
        <button class="ui  facebook button">
                    <i class="facebook icon"></i>
                        Connect with Facebook to Login
         </button>
    </div>
</div>
  <div class="column"></div>
  </div>
<script src="{{ asset('semantic/assets/js/semantic.min.js') }}"></script>
<script src="{{ asset('semantic/assets/js/myjs.js') }}"></script> 
</body>
</html>
