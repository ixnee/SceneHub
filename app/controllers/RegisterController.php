<?php

class RegisterController extends BaseController {

	public function showRegister()
	{
		return View::make('register');
	}

	public function doRegister()
	{
			$user = new User;
			$user->username = Input::get('username');
			$user->password = Hash::make(Input::get('password'));
			$user->email = Input::get('email');
			$user->save();
			$username = Input::get('username');
			return View::make('thanks')->with('username', $username);
	}
}