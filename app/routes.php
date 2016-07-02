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
    if(Session::has('applicant')) {
        return Redirect::to('jobseeker-profile');
    }
    if(Session::has('employer')) {
        return Redirect::to('employer-profile');
    }
    return View::make('semantic.landing');
});

Route::get('jobseeker-profile','ApplicantController@profile');
Route::get('jobseeker-logout', 'ApplicantController@logout');

Route::post('login-handle', 'AccountController@handleLogin');
Route::get('user-login', function() {
    return View::make('semantic.login');
});

Route::get('hello-admin', function() {
	return View::make('hello-admin');
});


/*
 * 
 * ADMIN ROUTES
 */

Route::get('site-admin', function(){
   return View::make('admin.site-admin'); 
});

Route::post('site-admin', function() {
   $admin = Admin::where('email', '=', Input::get('email'))
           ->where('password', '=' ,Input::get('password'))
           ->first();
   if($admin) {
       Session::put('admin', true);
       Session::put('admindata', $admin);
       return Redirect::to('site-admin/profile');
   }
   return Redirect::to('site-admin');
});
Route::get('site-admin/profile','AdminController@dashboard');
Route::get('site-admin/logout', 'AdminController@logout');
