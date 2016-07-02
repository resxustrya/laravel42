<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Login Example - Semantic</title>
   <link rel="stylesheet" type="text/css" href="{{ asset('semantic/assets/css/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('semantic/assets/css/mycss.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('semantic/assets/css/wodry.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>

    <link rel="icon" href="{{ asset('semantic/assets/img/icon.png') }}">
    <script type="text/javascript" src="{{ asset('semantic/assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('semantic/assets/js/wodry.min.js') }}"></script>
    <!--<script type="text/javascript " src="{{ asset('semantic/assets/js/myscript.js') }}"></script>-->
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
    <!--FACEBOOK COMMENT PLUGIN-->

    <!-- Following Menu -->
<div class="ui  fixed menu borderless">
   <div class="left item">
            <a  class="logo wodry" href="/" style="font-family:Dancing Script, cursive;weight:100;font-size:2.5em;"> <span  >MaidFinderPH </span></a>
        </div>
  <div class="ui container">
        <div class="right item">
            <a class="item" href="landing.blade.php.html">Home</a>
            <a class="item" href="#"> Cities</a>
            <a class="item" href="#"> Find a Maid</a>
            <a class="item" href="#"> Get a Job</a>
                <div class="item">
                    <div class="ui buttons">
                      <a href="login.html">
                         <button class="ui button purple">
                            <i class="sign in icon"></i>Login
                         </button>
                       </a>
                    <div class="or"></div>
                        <button class="ui button green">
                            <i class="user icon"></i>Sign Up
                        </button>  
                    </div>
                </div>                         
        </div>
  </div>
</div>
<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <img src="{{ asset('semantic/assets/img/MFlogo.png') }}" class="image">
      <span class="content">
        Log-in to your account
      </span>
      <h2>
         
      </h2>
    </h2>
      <form class="ui large form" action="login-handle" method="POST">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="E-mail address">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
          <div class="inline fields">
              <div class="field">
                  <label>Applicant</label>
                   <input type="radio" name="type" value="app">
              </div>
              <div class="field">
                  <label>Employer</label>
                  <input type="radio" name="type" value="emp">
              </div>
             
          </div>
        <input type="submit" class="ui fluid large teal submit button" value="Login" />
      </div>

          <div class="ui error message">
              
          </div>

    </form>

    <div class="ui message">
      New to us? <a href="#">Sign Up</a>
    </div>
  </div>
</div>

<!-- FOOTER -->
<div class="ui inverted vertical footer segment" style="background-color:#009688">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">About</h4>
          <div class="ui inverted link list">
            <a href="#wwa" class="item" >Who we are?</a>
            <a href="#contact" class="item" >Contact Us</a>
          </div>
           <p class="ui inverted"> <i class="copyright icon">MaidProviderPH  2016</i></p>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Features</h4>
          <div class="ui inverted link list">
            <a href="#hdiw" class="item">How does it work?</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Get the App</h4>
          <button class="ui inverted purple  button "><i class="download icon"></i>Download</button>
          <h4>Connect with Us</h4>
          <button class="ui circular facebook icon button">
             <i class="facebook icon"></i>
          </button>
          <button class="ui circular twitter icon button">
            <i class="twitter icon"></i>
          </button>
          <button class="ui circular linkedin icon button">
            <i class="linkedin icon"></i>
          </button>
          <button class="ui circular instagram icon button">
            <i class="instagram icon"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
