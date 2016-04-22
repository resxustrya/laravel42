

@extends('layout')
    
@section('content')
 <div class="row">
    <h1> {{ Session::get('message') }}</h1>
    <form  method="POST" action="/login" class="col s12">
        {{ Form::token() }}
      <div class="row">
        <div class="input-field col s4">
          <input id="username" name="username" type="text" class="validate">
          <label for="username">Username</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4">
          <input name="password" id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
       <div class="row">
        <div class="input-field col s4">
           <button class="btn waves-effect waves-light" type="submit" name="action">Login
               <i class="material-icons right">send</i>
           </button>
        </div>
      </div>
    </form>
  </div>
@stop
    