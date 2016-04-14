

@extends('layout')

@section('content')
    @if(Auth::check())
        <h3>Hi {{ Auth::user()->name }}</h3>
    @else
        {{Redirect::to('login')}}
    @endif
    <p><a href="/logout">Logout</a></p>
@stop