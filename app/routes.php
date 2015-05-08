<?php

/*
 * Author:					Lisa Balogh
 * Revision Date:		May 7, 2014
 * File Name:				routes.php
 * Description:			Handles the actions that take place when a URL is requested
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
				return Redirect::to('/');
			} else {
				return Redirect::to('/login')
					->withFlashMessage('Incorrect username/password combination. Try again.')
					->withInput();
			}
});

Route::get('/logout', function()
{
	Auth::logout();
	return View::make('logout');
});

Route::get('/people', array(
	'before' => 'auth',
	'uses' => 'ProfileController@showAllProfiles'
));

Route::post('/people', 'ProfileController@filterProfiles');

Route::get('/events', function()
{
	$events = Show::all();
	return View::make('pages.events')->with('events', $events);
});

Route::get('/groups', function()
{
	$groups = Group::all();
	return View::make('pages.groups')->with('groups', $groups);
});

Route::get('/create-profile', array(
	'before' => 'auth',
	'uses' => 'ProfileController@showCreateProfile'
));

Route::post('/create-profile', 'ProfileController@doCreateProfile');

Route::get('/your-profile', array(
	'before' => 'auth',
	'uses' => 'ProfileController@showYourProfile'
));

Route::get('/admin', array(
	'before' => 'level',
	'uses' => 'UsersController@showUsers'
	));