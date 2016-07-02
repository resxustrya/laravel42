<!doctype html>
<html>
    <head>
        <title>Site-Admin</title>
    </head>
    <body>
        <h1>Admin Account management</h1>
        <form action="/site-admin" method="POST">
            <table>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="text" name="email" /></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input type="password" name="password" /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="login" value='Login' /></td>
                </tr>
            </table>
        </form>
    </body>
</html>