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
	return View::make('hello');
});


Route::get('login', function(){

	$data = array('currentDateTime' => date('Y-m-d H:i:s'));

return View::make('auth.login', $data);

return View::make('hello');

	return '<form action="login" method="post">
Username : <input type="text" name="username" />

	</form>';
});


Route::post('login', function(){
	return 'Hello ' .$_POST["username"];
	});

	Route::get('coffee/{kind}/{size?}',  array('before' => 'checksize', function($kind, $size=null){
			return 'Kind of coffee drink : ' .$kind. ', size : ' .$size;
	} 
	));

	Route::get('testhtml', function(){
			return View::make('page');
	});

Route::get('hello', function(){
	return Redirect::to('login');
});

Route::get('coffeetea', function(){
return Redirect::route('tea');

});

Route::get('this-is-tea', array ('as' => 'tea', function(){

return 'I am the route tea';

}));

Route::get('logout',function(){
	return View::make('auth.logout');
});

Route::get('register',function(){
	return View::make('auth.register');
});


Route::get('hello', 'HomeController@showWelcome');

Route::get('loginx', 'LoginController@showLogin');
Route::post('loginx', 'LoginController@processLogin');

Route::get('profile', array('before'=>'auth', 'uses'=>'UserController@showProfile'));