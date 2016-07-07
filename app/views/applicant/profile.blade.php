<!DOCTYPE html>
<html>
    <head>
        <title>Applicant - MaidFinder</title>
    </head>
    <body>
        <h2>Applicant profile</h2>
        <h1>Hi <b> {{ Session::get('applicant')->email }}</b></h1>
        <h1><a href="jobseeker-logout">Logout</a></h1>
    </body>
</html>