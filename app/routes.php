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
  return View::make('home');
});

Route::get('create/user', function(){
   
    Schema::create('employee', function($table){
       $table->increments('empid');
       $table->string("firstname");
       $table->string("lastname");
       $table->timestamps();
    });
    
    Schema::create('users', function($table){
        
        $table->increments('id');
        $table->string("username");
        $table->string("password");
        $table->string("email");
        $table->integer("empid")->unsigned();
        $table->timestamps();
        $table->rememberToken();
        $table->foreign("empid")->references("empid")->on("employee");
    });
    return "New users table created";
});
Route::get('add-table', function(){
    Schema::table('employee',function($table){
       $table->binary('photo'); 
    });
    return "photo table is added";
});

Route::get('drop', function() {
    Schema::drop('users');
    return "users table drop";
});

Route::get('register-employee','HomeController@register');


Route::post('register',function(){
    
    $employee = new Employee;
    $employee->firstname = Input::get('firstname');
    $employee->lastname = Input::get('lastname');
    if(Input::hasFile('image')) {
        $employee->photo = Input::file('image');
    }
    $employee->save();
    $empid = $employee->user_id;
    
    $user = new User;
    $user->username = Input::get('username');
    $user->password = Hash::make(Input::get('password'));
    $user->empid = $empid;
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

Route::get('/alluser', function() {
   return User::where('role', '=','guest')->get();
});

Route::post('login', function() {
      
    $user = array('username' => Input::get('username'), 'password' => Input::get('password'));
    if(Auth::attempt($user)) {
        Session::put('islogin', true);
        
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

Route::get('list', function(){

    $users = DB::table('users')->select('username');
    $result = $users->addSelect('role')->get();
    return $result;
});

Route::get('profile', array('before' => 'authcheck',function() {
    $id = Auth::id();
    $employee = User::find($id)->employee;
    if($employee != NULL) {
        return View::make('profile')->with('employee',$employee);
    }
}));

Route::get('userlogout',array('uses' => 'HomeController@userlogout'));

Route::get('authcheck', function() {
   if(Session::get('islogin') == true) {
       return 0;
   }
   return 1;
});

Route::get('users',function() {
    $users = DB::table('users')->paginate(3);

    return View::make('users')->with('users',$users);
});
Route::get('show-reports','ReportsController@users');

Route::get('bootstrap', function() {
    return View::make('bootstrap');
});
