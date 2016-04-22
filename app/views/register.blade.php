

@extends('layout')
    
@section('content')
 <div class="row">
    <form  method="POST" action="/register" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input name="email" placeholder="Email" id="email" type="text" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
            <input id="username" name="username" type="text" class="validate">
            <label for="username">Username</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input name="password" id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
        <div class="row">
        <div class="input-field col s6">
          <input name="role" id="role" type="text" class="validate">
          <label for="password">Role</label>
        </div>
      </div>
       <div class="row">
        <div class="input-field col s6">
           <button class="btn waves-effect waves-light" type="submit" name="action">Submit
               <i class="material-icons right">send</i>
           </button>
        </div>
      </div>
    </form>
  </div>
@stop
    