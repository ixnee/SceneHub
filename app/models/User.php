<?php

/*
 * Author:					Lisa Balogh
 * Revision Date:		May 7, 2014
 * File Name:				User.php
 * Description:			Defines the methods and relationships for the users table
 */

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $fillable = ['username', 'email'];

	protected $table = 'users';

	protected $hidden = array('password', 'remember_token');

	public function profile() {
		return $this->hasOne('Profile', 'user_id');
	}

	public static function validate($input) {
		$rules = array(
			'username' => 'Required|Min:3|Max:30|AlphaNum|Unique:users',
			'email'		 => 'Required|Between:3,64|Email|Unique:users',
			'password' => 'Required|Min:6',
			'captcha'  => 'Required|captcha'
		);

		return Validator::make($input, $rules);	

	}

}
