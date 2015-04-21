<?php

class ProfileController extends BaseController {

	public function showCreateProfile()
	{
		$username = Auth::user()->username;
		$user_id = Auth::user()->id;
		$role_lists = Role::lists('name', 'id');
		$genre_lists = Genre::lists('name', 'id');
		$city_lists = City::lists('name', 'id');
		$state_lists = State::lists('name', 'id');
		return View::make('create-profile', array('username' => $username, 'user_id' => $user_id, 'role_lists' => $role_lists, 'genre_lists' => $genre_lists, 'city_lists' => $city_lists, 'state_lists' => $state_lists));
	}

	public function doCreateProfile()
	{

		$birthdate_unformatted = Input::get('birthdate');
		$birthdate = Carbon::createFromFormat('m/d/Y', $birthdate_unformatted);

		$profile = new Profile;
		$profile->user_id = Input::get('user_id');
		$profile->role_id = Input::get('role_id');
		$profile->first = Input::get('first');
		$profile->last = Input::get('last');
		$profile->phone = Input::get('phone');
		$profile->bio = Input::get('bio');
		$profile->birthdate = $birthdate;
		$profile->city_id = Input::get('city_id');
		$profile->state_id = Input::get('state_id');
		$profile->save();
		return Redirect::to('/')->withFlashMessage('Thanks for creating your Profile!');
	}

	public function showYourProfile() 
	{
		$user_id = Auth::user()->id;
		$user = User::find($user_id);
		$profile = $user->profile;
		return View::make('pages.your-profile', array('user' => $user, 'profile' => $profile));
	}
}