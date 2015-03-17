<?php

class ProfileController extends BaseController {

	public function showCreateProfile()
	{
		$theUsername = Auth::user()->username;
		$user_id = Auth::user()->id;
		$role_lists = Role::lists('name', 'id');
		$city_lists = City::lists('name', 'id');
		$state_lists = State::lists('name', 'id');
		return View::make('create-profile', array('username' => $theUsername, 'user_id' => $user_id, 'role_lists' => $role_lists, 'city_lists' => $city_lists, 'state_lists' => $state_lists));
	}

	public function doCreateProfile()
	{
		$profile = new Profile;
		$profile->role = Input::get('role');
		$profile->first = Input::get('first');
		$profile->last = Input::get('last');
		$profile->phone = Input::get('phone');
		$profile->bio = Input::get('bio');
		$profile->birthdate = Input::get('birthdate');
		$profile->save();
		return View::make('pages.profile');
	}
}