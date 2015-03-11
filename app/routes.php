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
	return View::make('pages.home');
});

Route::get('/register', 'RegisterController@showRegister');
Route::post('/register', 'RegisterController@doRegister');

Route::get('/login', function()
{
	return View::make('login');
});

Route::post('/login', function()
{
	if (Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password')))) {
				return Redirect::to('/members')->withFlashMessage('You are now logged in!');
			} else {
				return Redirect::to('/login')
					->withFlashMessage('Incorrect username/password combination. Try again.')
					->withInput();
			}
});

/*
Route::post('/login', function()
{
	$credentials = Input::only('username', 'password');
	if(Auth::attempt($credentials))
	{
		return Redirect::intended('/members');
	}
	return Redirect::to('login');
});
*/

Route::get('/logout', function()
{
	Auth::logout();
	return View::make('logout');
});

Route::get('/people', function()
{
	return View::make('pages.people');
});

Route::get('/events', function()
{
	return View::make('pages.events');
});

Route::get('/groups', function()
{
	return View::make('pages.groups');
});

Route::get('/members', array(
	'before' => 'auth',
	function()
{
	return View::make('pages.members');
}
));

Route::get('/admin', array(
	'before' => 'level',
	function()
	{
		return View::make('pages.admin');
	}));



/*

Route::get('/spotlight', array(
	'before' => 'auth',
	function()
{
	return View::make('spotlight');
}
));

Route::get('/insider', array(
	'before' => 'auth',
	function()
{
	return View::make('insider');
}
));
Route::controller('users', 'UsersController');

Route::controller('pages', 'PagesController');

// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

//route to log out
+Route::get('logout', array('uses' => 'HomeController@doLogout'));

+