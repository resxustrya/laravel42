

@extends('layout')
    
@section('content')
    <form action="/login" method="POST">
        <table border="0">
            <tr>
                <td><label for="username">Username</label></td>
                <td><input type="text" name="username" /></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" name="password" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="Login" />
            </tr>
        </table>
    </form>
@stop
    