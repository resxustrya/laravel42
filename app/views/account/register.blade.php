@section('title')
<title>Register - MaidFinder</title>
@stop
@extends('account.layout')
@section('content')
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
        <form class="ui form" action="user-register" method="POST">
              <div class="ui stacked segment">
                <div class="field">
                  <div class="ui left icon input">
                    <i class="user icon"></i>
                    <input type="text" name="email" placeholder="E-mail address">
                  </div>
                </div>
                  <div class='field'>
                      <div class='ui left icon input'>
                          <i class='user icon'></i>
                          <input type="text" name='fname' placeholder="First Name" />
                      </div>
                  </div>
                    <div class='field'>
                      <div class='ui left icon input'>
                          <i class='user icon'></i>
                          <input type="text" name='lname' placeholder="Last Name" />
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
                  <input type="submit"  class="ui fluid large teal submit button" value="Submit" />
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
@stop


