<?php

class RegisterController extends BaseController {

	public function showRegister()
	{
		return View::make('register');
	}

	protected $captcha;
	public function _construct()
	{
		$this->captcha = new Captcha\Captcha();
		$this->captcha->setPublicKey('6LcFUgUTAAAAAKjjNVdIGDXWgnMcIOPuicYtCUbX');
		$this->captcha->setPrivateKey('6LcFUgUTAAAAALOCZr8ckkksg8-9fhGmyUj3sVFA');
	}

	public function doRegister()
	{
		$response = $this->captcha->check();
		Validator::extend('recaptcha', function($attribute, $value, $parameters) {
			return $response->isValid();
		});

		$validator = Validator::make(
			Input::all(),
			array(
				array('recaptcha_response_field' => 'recaptcha'),
				array('username' => 'required'),
				array('password' => 'required'),
				array('email' => 'required')
				),
				array('recaptcha' => 'Incorrect captcha code')
			);
		if ($validator->passes())
		{	
			$user = new User;
			$user->username = Input::get('username');
			$user->password = Hash::make(Input::get('password'));
			$user->email = Input::get('email');
			$user->save();
			$username = Input::get('username');
			return View::make('thanks')->with('username', $username);
		}
		else
			return Redirect::to('/register')->withErrors($validator)->withInput();
	}
}