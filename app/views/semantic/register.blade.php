<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Register - MaidFinderPH</title>
   <link rel="stylesheet" type="text/css" href="{{ asset('semantic/assets/css/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('semantic/assets/css/mycss.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('semantic/assets/css/wodry.css')}}">
    <link rel="icon" href="{{ asset('semantic/assets/img/icon.png')}}">
    <script type="text/javascript" src="{{ asset('semantic/assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('semantic/assets/js/wodry.min.js') }}"></script>
    <script>
        
    </script>
</head>
<body>
    <!-------------------------------------------------- Following Menu --------------------------------------------->
    
<div class="ui  fixed menu inverted borderless" style="background-color:#58C9B9;height:8%;">
   <div class="left item">
         <img src="{{ asset('semantic/assets/img/icon.png') }}" alt="MaidFinderPH">
            <a  class="logo wodry " href="/" style="font-family:Dancing Script, cursive;weight:100;font-size:2.5em; "> <span  >MaidFinderPH </span></a>
   </div>
        <div class="right item">
            <a class="item" href="/">Home</a>
            <a class="item" href="#"> Cities</a>
            <a class="item" href="#"> Find a Maid</a>
            <a class="item" href="#"> Get a Job</a>
                <div class="item">
                    <div class="ui buttons">
                      <a href="user-login">
                         <span class="ui button purple">
                            <i class="sign in icon"></i>Login
                         </span>
                       </a>
                    <div class="or"></div>
                        <a href="user-register">
                            <span class="ui button green">
                                <i class="user icon"></i>Sign Up
                            </span>
                        </a>
                    </div>
                </div>                         
        </div>
</div>
<!-----------------------------Content-------------------------------------------->
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
                    <i class="lock icon"></i>
                    <input type="password" name="password" placeholder="Password">
                  </div>
                </div>
                <div class="field">
                  <div class="ui left icon input">
                    <i class="lock icon"></i>
                    <input type="password" name="password" placeholder=" Confirm Password">
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
 <!---------------------THIS IS FOOTER-------------------------------->
 <div class="ui bottom fixed footer" style="bottom:0;position:fixed;width:100%">
  <div class="ui  padded footer  grid" >
  <div class="grey row">
      <div class="column"><i class="icon copyright"></i>2016 MaidFinderPH</div>
  </div>
  </div>
</div>
</body>

</html>
