<?php

class UsersController extends \BaseController {

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