<?php

class ProfileController extends BaseController {

	public function showCreateProfile()
	{
		$username = Auth::user()->username;
		$user_id = Auth::user()->id;
		$role_lists = Role::lists('name', 'id');
		$genre_lists = Genre::lists('name', 'id');
		$city_lists = City::lists('name', 'id');
		return View::make('create-profile', array('username' => $username, 'user_id' => $user_id, 'role_lists' => $role_lists, 'genre_lists' => $genre_lists, 'city_lists' => $city_lists));
	}

	public function doCreateProfile()
	{
		$v = Profile::validate(Input::all());
		if ($v->passes()) {
			$birthdate_unformatted = Input::get('birthdate');
			if (empty($birthdate_unformatted))	{
					$birthdate = "";
				} else {
					$birthdate = Carbon::createFromFormat('m/d/Y', $birthdate_unformatted);
				}
			
			$phone_unformatted = Input::get('phone');
			$phone = preg_replace('/\D+/', '', $phone_unformatted);

			$profile = new Profile;
			$profile->user_id = Input::get('user_id');
			$profile->role_id = Input::get('role_id');
			$profile->first = Input::get('first');
			$profile->last = Input::get('last');
			$profile->phone = $phone;
			$profile->bio = Input::get('bio');
			$profile->birthdate = $birthdate;
			$profile->city_id = Input::get('city_id');
			$profile->save();

			return Redirect::to('/your-profile')->withFlashMessage('Thanks for creating your Profile!');
		} else {
			return Redirect::to('/create-profile')->withErrors($v->getMessageBag());
		}
	}

	public function showYourProfile() 
	{
		$user_id = Auth::user()->id;
		$username = Auth::user()->username;
		$user = User::find($user_id);
		$profile = User::find($user_id)->profile;
		$city_id = $profile->city_id;
		$role_id = $profile->role_id;
		if(isset($profile)) {
			$num = $profile->phone;
		  $phone_formatted = "(".substr($num,0,3).") ".substr($num,3,3)."-".substr($num,6);
			$city = City::find($city_id);
			$role = Role::find($role_id);
			return View::make('pages.your-profile', array('user' => $user, 'profile' => $profile, 'city' => $city, 'role' => $role, 'phone_formatted' => $phone_formatted));
			} else {
				return Redirect::to('/create-profile');
			}
	}

	public function showAllProfiles()
	{
		$users = User::all();
		foreach($users as $user)
		{
			
		}
	}
}