<?php

/*
 * Author:					Lisa Balogh
 * Revision Date:		May 7, 2014
 * File Name:				RegisterController.php
 * Description:			Controller that handles the registration process
 */

class RegisterController extends BaseController {

// serves the registration page
	public function showRegister()
	{
		return View::make('register');
	}

// receives the data from the registration form, validates the data, and either 
// writes the values to the database then serves the thanks page
// or redirects back to the registration page with errors
	public function doRegister()
	{
		$v = User::validate(Input::all());
		if ($v->passes()) {
			$user = new User;
			$user->username = Input::get('username');
			$user->password = Hash::make(Input::get('password'));
			$user->email = Input::get('email');
			$user->save();
			$username = Input::get('username');
			return View::make('thanks')->with('username', $username);
		} else {
			return Redirect::to('/register')->withErrors($v->getMessageBag())->withInput();
		}
	}
}