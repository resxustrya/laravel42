


@section('title')
    <title>Register - MaidFinder</title>
@stop
@extends('account.layout')
@section('content')
  <div class="ui  column centered grid">
     <div class="four column centered row ui  middle aligned aligned center aligned grid very relaxed stackable grid">
         <div class="five wide column">
        <h2 class="ui teal image header">
                <img src="{{ asset('semantic/assets/img/icon.png') }}" class="image">
                <span class="content">
                Register with Email
                </span>
        </h2>
        @if(Session::has('message'))
            <div class="ui error message">
                <div class="header">
                  Error !
                </div>
                <ul class="list">
                   <li>{{ Session::get('message') }}</li>
                </ul>
            </div>
        @endif
        @if(Session::has('error'))
            <div class="ui error message">
                <div class="header">
                  Error !
                </div>
                <ul class="list">
                    @foreach(Session::get('error')->all() as $msg)
                        <li>{{ $msg }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <?php
            $data = null;
            if(Session::has('input')) {
                $data = Session::get('input');
            }
        ?>
        <form class="ui form" action="user-register" method="POST">
              <div class="ui stacked segment">
                <div class="field">
                  <div class="ui left icon input">
                    <i class="user icon"></i>
                    <input type="text" name="email" placeholder="E-mail address" value="{{ isset($data['email']) ? $data['email'] : '' }}">
                  </div>
                </div>
                  <div class='field'>
                      <div class='ui left icon input'>
                          <i class='user icon'></i>
                          <input type="text" name='fname' placeholder="First Name" value="{{ isset($data['fname']) ? $data['fname'] : '' }}"/>
                      </div>
                  </div>
                    <div class='field'>
                      <div class='ui left icon input'>
                          <i class='user icon'></i>
                          <input type="text" name='lname' placeholder="Last Name" value="{{ isset($data['lname']) ? $data['lname'] : '' }}"/>
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
              Already have an account?<a href="user-login">Sign In</a>
            </div>
    </div>
      <div class="ui vertical divider">
            Or
     </div>
    <div class="five wide column">
        <button class="ui  facebook button">
                    <i class="facebook icon"></i>
                        Connect with Facebook to Login
         </button>
    </div>
</div>
<div class="column" style="margin-bottom:50px;"></div>
</div>


@stop


