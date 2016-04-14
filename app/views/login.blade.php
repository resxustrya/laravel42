

@extends('layout')

@section('content')
    @if(Auth::check())
        <h4>You are curently logged in</h4>
    @endif
    <form action="/login" method="POST">
        <table border="0">
            <tr>
                <td><label for="username">Username</label></td>
                <td><input type="text" name="username" /></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit" /></td>
            </tr>
        </table>
    </form>
@stop