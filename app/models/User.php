<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $fillable = ['username', 'email'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function profile() {
		return $this->hasOne('Profile');
	}

	public static function validate($input) {
		$rules = array(
			'username' => 'Required|Min:3|Max:30|AlphaNum|Unique:users',
			'email'		 => 'Required|Between:3,64|Email|Unique:users',
			'password' => 'Required|Min:6',
			'captcha'  => array('required', 'captcha')
		);

		return Validator::make($input, $rules);	

	}

}
