<?php

class ProfileController extends BaseController {

	public function showCreateProfile()
	{
		$username = Auth::user()->username;
		$user_id = Auth::user()->id;
		$role_lists = Role::lists('name', 'id');
		$city_lists = City::lists('name', 'id');
		return View::make('create-profile', array('username' => $username, 'user_id' => $user_id, 'role_lists' => $role_lists, 'city_lists' => $city_lists));
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
		if(isset($profile)) {
		$city_id = $profile->city_id;
		$role_id = $profile->role_id;
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
		$profiles = DB::table('profiles')
			->join('users', 'user_id', "=", 'users.id')
			->join('roles', 'role_id', "=", 'roles.id')
			->join('cities', 'city_id', "=", 'cities.id')
			->select('*', 'users.username as username', 'roles.name as role', 'cities.name as city')
			->orderby('cities.name', 'asc')
			->get();
		return View::make('pages.people', array('profiles' => $profiles));
	}

	public function filterProfiles()
	{
		$roleList = Input::get('roleList');
		if(isset($roleList)) {
			if ($roleList == 'all')
					$profiles = DB::table('profiles')
					->join('users', 'user_id', "=", 'users.id')
					->join('roles', 'role_id', "=", 'roles.id')
					->join('cities', 'city_id', "=", 'cities.id')
					->select('*', 'users.username as username', 'roles.name as role', 'cities.name as city')
					->orderby('cities.name', 'asc')
					->get();
			elseif ($roleList == 'dj')
					$profiles = DB::table('profiles')
					->join('users', 'user_id', "=", 'users.id')
					->join('roles', 'role_id', "=", 'roles.id')
					->join('cities', 'city_id', "=", 'cities.id')
					->select('*', 'users.username as username', 'roles.name as role', 'cities.name as city')
					->where('role_id', "=", 1)
					->orderby('cities.name', 'asc')
					->get();
			elseif ($roleList == 'promoter')
				$profiles = DB::table('profiles')
				->join('users', 'user_id', "=", 'users.id')
				->join('roles', 'role_id', "=", 'roles.id')
				->join('cities', 'city_id', "=", 'cities.id')
				->select('*', 'users.username as username', 'roles.name as role', 'cities.name as city')
				->where('role_id', "=", 2)
				->orderby('cities.name', 'asc')
				->get();
			elseif ($roleList == 'producer')
				$profiles = DB::table('profiles')
				->join('users', 'user_id', "=", 'users.id')
				->join('roles', 'role_id', "=", 'roles.id')
				->join('cities', 'city_id', "=", 'cities.id')
				->select('*', 'users.username as username', 'roles.name as role', 'cities.name as city')
				->where('role_id', "=", 3)
				->orderby('cities.name', 'asc')
				->get();
			elseif ($roleList == 'dancer')
				$profiles = DB::table('profiles')
				->join('users', 'user_id', "=", 'users.id')
				->join('roles', 'role_id', "=", 'roles.id')
				->join('cities', 'city_id', "=", 'cities.id')
				->select('*', 'users.username as username', 'roles.name as role', 'cities.name as city')
				->where('role_id', "=", 4)
				->orderby('cities.name', 'asc')
				->get();
			elseif ($roleList == 'vendor')
				$profiles = DB::table('profiles')
				->join('users', 'user_id', "=", 'users.id')
				->join('roles', 'role_id', "=", 'roles.id')
				->join('cities', 'city_id', "=", 'cities.id')
				->select('*', 'users.username as username', 'roles.name as role', 'cities.name as city')
				->where('role_id', "=", 5)
				->orderby('cities.name', 'asc')
				->get();
			elseif ($roleList == 'artist')
				$profiles = DB::table('profiles')
				->join('users', 'user_id', "=", 'users.id')
				->join('roles', 'role_id', "=", 'roles.id')
				->join('cities', 'city_id', "=", 'cities.id')
				->select('*', 'users.username as username', 'roles.name as role', 'cities.name as city')
				->where('role_id', "=", 6)
				->orderby('cities.name', 'asc')
				->get();
			elseif ($roleList == 'fan')
				$profiles = DB::table('profiles')
				->join('users', 'user_id', "=", 'users.id')
				->join('roles', 'role_id', "=", 'roles.id')
				->join('cities', 'city_id', "=", 'cities.id')
				->select('*', 'users.username as username', 'roles.name as role', 'cities.name as city')
				->where('role_id', "=", 7)
				->orderby('cities.name', 'asc')
				->get();
		}
		$cityList = Input::get('cityList');
		if(isset($cityList)) {
			if ($cityList == 'all')
				$profiles = DB::table('profiles')
				->join('users', 'user_id', "=", 'users.id')
				->join('roles', 'role_id', "=", 'roles.id')
				->join('cities', 'city_id', "=", 'cities.id')
				->select('*', 'users.username as username', 'roles.name as role', 'cities.name as city')
				->orderby('roles.name', 'asc')
				->get();
			elseif ($cityList == 'asheville')
				$profiles = DB::table('profiles')
				->join('users', 'user_id', "=", 'users.id')
				->join('roles', 'role_id', "=", 'roles.id')
				->join('cities', 'city_id', "=", 'cities.id')
				->select('*', 'users.username as username', 'roles.name as role', 'cities.name as city')
				->where('city_id', "=", 1)
				->orderby('roles.name', 'asc')
				->get();
			elseif ($cityList == 'black_mountain')
				$profiles = DB::table('profiles')
				->join('users', 'user_id', "=", 'users.id')
				->join('roles', 'role_id', "=", 'roles.id')
				->join('cities', 'city_id', "=", 'cities.id')
				->select('*', 'users.username as username', 'roles.name as role', 'cities.name as city')
				->where('city_id', "=", 2)
				->orderby('roles.name', 'asc')
				->get();
			elseif ($cityList == 'hickory')
				$profiles = DB::table('profiles')
				->join('users', 'user_id', "=", 'users.id')
				->join('roles', 'role_id', "=", 'roles.id')
				->join('cities', 'city_id', "=", 'cities.id')
				->select('*', 'users.username as username', 'roles.name as role', 'cities.name as city')
				->where('city_id', "=", 3)
				->orderby('roles.name', 'asc')
				->get();
			elseif ($cityList == 'charlotte')
				$profiles = DB::table('profiles')
				->join('users', 'user_id', "=", 'users.id')
				->join('roles', 'role_id', "=", 'roles.id')
				->join('cities', 'city_id', "=", 'cities.id')
				->select('*', 'users.username as username', 'roles.name as role', 'cities.name as city')
				->where('city_id', "=", 4)
				->orderby('roles.name', 'asc')
				->get();
			elseif ($cityList == 'morganton')
				$profiles = DB::table('profiles')
				->join('users', 'user_id', "=", 'users.id')
				->join('roles', 'role_id', "=", 'roles.id')
				->join('cities', 'city_id', "=", 'cities.id')
				->select('*', 'users.username as username', 'roles.name as role', 'cities.name as city')
				->where('city_id', "=", 5)
				->orderby('roles.name', 'asc')
				->get();
			elseif ($cityList == 'waynesville')
				$profiles = DB::table('profiles')
				->join('users', 'user_id', "=", 'users.id')
				->join('roles', 'role_id', "=", 'roles.id')
				->join('cities', 'city_id', "=", 'cities.id')
				->select('*', 'users.username as username', 'roles.name as role', 'cities.name as city')
				->where('city_id', "=", 6)
				->orderby('roles.name', 'asc')
				->get();
			elseif ($cityList == 'hendersonville')
				$profiles = DB::table('profiles')
				->join('users', 'user_id', "=", 'users.id')
				->join('roles', 'role_id', "=", 'roles.id')
				->join('cities', 'city_id', "=", 'cities.id')
				->select('*', 'users.username as username', 'roles.name as role', 'cities.name as city')
				->where('city_id', "=", 7)
				->orderby('roles.name', 'asc')
				->get();
		}

		return View::make('pages.people', array('profiles' => $profiles));

	}
}