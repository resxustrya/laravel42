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
  return View::make('home.home');
});

Route::get('create-table', 'TableController@createTable');
Route::get('drop-table','TableController@dropTable');
Route::get('register-employee','HomeController@register');



/****** LOGIN USERS *******/

Route::get('create-user','LoginController@create_user');
Route::get('card', function() {
    return View::make('home.card');
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
        if(Auth::check()) {
          if(Auth::user()->role == 'admin') {
            Session::put('adminlogin', true);
            return Redirect::to('admin/admin-home');
          } else {
              
          }
        }
    } else {
        return Redirect::to('login')->with('message', 'Login Failed');
    }
});

Route::group(array('prefix' => 'admin','before' => 'admin'),function() {
  
  Route::get('admin-home', function() {
      if(Auth::check() && Auth::user()->role == 'admin') {
        $user = User::find(Auth::id());
        return View::make('admin.adminhome')->with('admin',$user); 
      }
  });
});


Route::group(array('prefix' => 'admin','before' => 'admin'), function() {
   
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

Route::get('upload', 'UploadController@upload');
Route::post('upload','UploadController@handle');
Route::get('create-img','UploadController@image');