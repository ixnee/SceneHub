<?php

/*
 * Author:					Lisa Balogh
 * Revision Date:		May 7, 2014
 * File Name:				RegisterController.php
 * Description:			Controller that handles actions related to the User model
 */

class UsersController extends \BaseController {

// queries the database and serves the admin page with all user data
	public function showUsers() {
		$users = User::all();
		$users = DB::table('profiles')
			->join('users', 'user_id', "=", 'users.id')
			->join('cities', 'city_id', "=", 'cities.id')
			->select('*', 'users.username as username', 'cities.name as city')
			->orderby('users.username', 'asc')
			->get();
		return View::make('pages.admin', array('users' => $users));
	}
}