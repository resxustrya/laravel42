<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
  Return View::make('home');
});

Route::get('create/user', function(){
   
    Schema::create('users', function($table){
       
        $table->increments('id');
        $table->string('email');
        $table->string('username');
        $table->string('password');
        $table->string('role');
        $table->rememberToken();
        $table->timestamps();
    });
    
    return "New users table created";
});

Route::get('drop', function() {
    Schema::drop('users');
    return "users table drop";
});

Route::get('register', function() {
   
    return View::make('register');
});


Route::post('register',function(){
    $user = new User;
    $user->email = Input::get("email");
    $user->username = trim(Input::get('username'));
    $user->role = trim(Input::get('role'));
    $user->password = trim(Hash::make(Input::get('password')));
    $user->save();
    
    return "New User was created";
});

Route::get('login', function() {
   return View::make('login')
       ->with('title','User Login')
       ->with('message','Welcome to MaidFinder PH');
});

Route::post('search', function(){
   $user = User::find(Input::get('search')) ;
   if($user != null) {
       return $user;
   } else {
       return "New result found";
   }
});

Route::get('angular', function() {
    return View::make('angular');
});


Route::post('login', function() {
   
    $user = array('username' => Input::get('username'), 'password' => Input::get('password'));
    if(Auth::attempt($user)) {
       Session::put('islogin',true);
        return Redirect::to('profile');
    } else {
        return Redirect::to('login')->with('message', 'Login Failed');
    }
});

Route::group(array('before' => 'admin'), function() {
   
    Route::get('page1', function() {
       return "page1"; 
    });
    
    Route::get('page2', function() {
       return "Page2";
    });
});


Route::get('profile', array('before' => 'authcheck',function() {
    return View::make('profile');
}));

Route::get('logout',array('after' => 'invalidate-browser-cache',function() {
      Auth::logout();
      Session::put('islogin',false);
    return Redirect::to('/');
}));

Route::get('authcheck', function() {
   if(Session::get('islogin') == true) {
       return 0;
   }
   return 1;
});

Route::get('users',function() {
    $users = DB::table('users')->paginate(2);

    return View::make('users')->with('users',$users);
});

Route::get('pdf',function() {
	$pdf = App::make('dompdf');

        $html = <<< REPORT
                <html>
                <head>
                    <style>
                        body{
                            font-family: 'sans serif';
                            color: red;
                        }
                    </style>
                    <link rel='stylesheet' type='text/css' href='../public/materialize/materialize.css' />
                </head>
                <body>
                    <H1>This is a pdf report using heredoc</h1>
                    <a href="/login" class="waves-effect waves-light btn">Login</a></li>

                </body>
                </html>
REPORT;
                
	$pdf->loadHTML($html);
	return $pdf->stream();
});

Route::resource('employee', 'EmployeeController');
