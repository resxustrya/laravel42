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

Route::get('register', function() {
	return View::make('register');
});

Route::post('register', function() {
	$user = new User();

	$user->username = Input::get('username');
	$user->password = Hash::make(Input::get('password'));
	$user->name = Input::get('name');

	$user->save();

	return Redirect::to('register');
});

Route::get('login' ,function() {
	return View::make('login');
});

Route::post('login', function() {

	if(Auth::attempt(array(
		'username' => Input::get('username'),
		'password' => Input::get('password'),
		'role' => 'guest'
	))) {

                return Redirect::intended('profile');
	} else {
            return Illuminate\Support\Facades\Redirect::to('login');
        }
});

Route::get('logout', function(){
	Auth::logout();
	Session::flush();
	return Redirect::to('login');

});

Route::get('profile',array('before' => 'auth', function() {
	return View::make('profile');
}));


Route::get('create/table',function() {

	Schema::create('users',function($table){
		$table->increments('id');
		$table->string('name',128);
		$table->string('username',128);
		$table->string('password',128);
		$table->string('remember_token',128);
		$table->timestamps();
	});
	return "users table created";
});

Route::get('users',function() {
    $users = DB::table('users')->where('role', '=', 'guest')->paginate(10);

    return View::make('users')->with('users',$users);

});

Route::get('add/col', function() {

	Schema::table('users', function($table){
		$table->string('role');
	});
	return "new column added";
});

Route::get('create/user',function() {
   return View::make('login'); 
});

Route::get('all', function() {

	$users = User::where('role','=', 'guest')->count();

	return $users;
});

Route::get('order',function() {

	Schema::table('orders',function($table){
		$table->softDeletes();
	});
	return "order table created";
});

Route::get('/create/order',function() {

	$order = new Orders();

	$order->name = 'Saging';
	$order->price = 750.50;
	$order->user_id = 24;

	$order->save();

	return "new order created";
});

Route::get('get/order/{id}',function($id) {
	$order = User::find($id)->orders;

	if( !$order){
		return "No order for $id";
	} else {
		return $order;
	}
});

Route::get('rename',function(){
	Schema::table('orders',function($table){
		$table->renameColumn('userid','user_id');
	});
	return "column changed";
});

Route::get('delete/{id}',function($id){

	$order = Orders::find($id);
	$order->delete();
	return "Item deleted";
});

Route::get('vieworders',function() {
	return Orders::all();
});

Route::get('pdf',function() {
	$pdf = App::make('dompdf');

        $html = "<h1>Hello World</h1>"
                ."<img height='100' width='100' src='../public/uploads/Date-a-programmer.png'>";
                
	$pdf->loadHTML($html);
	return $pdf->stream();
});

Route::get('upload',function() {

	return View::make('upload');
});

Route::post('upload',function() {

	//Input::file('photo')->move('')
        
});