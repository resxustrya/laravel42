

@extends('layout')
    
@section('content')
    <form action="register" method="POST">
        <fieldset>
            <legend>Emplolyee Information</legend>
            <table border="0">
                <tr>
                    <td><label for="firstname">First Name</label></td>
                    <td><input type="text" name="firstname" /></td>
                </tr>
                <tr>
                    <td><label for="lastname">Last Name</label></td>
                    <td><input type="text" name="lastname" /></td>
                </tr>
                <tr>
                    <td><label for="image">Profile Photo</label></td>
                    <td><input type="file" name="image" /></td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>User account</legend>
            <table border="0">
                <tr>
                    <td><label for="username">Username</label></td>
                    <td><input type="text" name="username" />
                </tr>    
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input type="password" name="password" /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="submit" value="Register" />
                </tr>
            </table>
        </fieldset>     
    </form>
@stop
    