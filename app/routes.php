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
        return View::make('applicant.profile');
    }
    if(Session::has('employer')) {
        return View::make('employer.profile');
    }
    return View::make('semantic.landing');
});


/*
 * 
 * REGISTRATION ROUTES
 * 
 */

Route::get('user-register', function () {
   return View::make('account.register'); 
});
Route::post('user-register', 'AccountController@next');

/*
 * 
 * ACCOUNT MANAGEMENT ROUTESsw
 * 
 * 
 */

Route::get('user-login', function() {
    return View::make('account.login');
});
Route::post('user-login', 'AccountController@handleLogin');

/*
 * 
 * APPLICANT ROOUTES
 * 
 */
Route::get('jobseeker-profile','ApplicantController@profile');
Route::get('jobseeker-logout', 'ApplicantController@logout');

/*
 * 
 * EMPLOYER ROUTES
 * 
 */

Route::get('employer-logout','EmployerController@logout');

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
   if($admin and ($admin->email == Input::get('email') and $admin->password == Input::get('password'))) {
       Session::put('admin', true);
       Session::put('admindata', $admin);
       return Redirect::to('site-admin/profile');
   }
   return Redirect::to('site-admin');
});
Route::get('site-admin/profile','AdminController@dashboard');
Route::get('site-admin/logout', 'AdminController@logout');
