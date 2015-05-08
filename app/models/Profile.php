<?php

/*
 * Author:					Lisa Balogh
 * Revision Date:		May 7, 2014
 * File Name:				Profile.php
 * Description:			Defines the methods and relationships for the profiles table
 */

class Profile extends \Eloquent {
	protected $fillable = ['role_id', 'first', 'last', 'phone', 'bio', 'birthdate', 'city_id'];

	public function role() {
		return $this->hasOne('Role', 'role_id');
	}

	public function city() {
		return $this->hasOne('City', 'city_id');
	}

	public function user() {
		return $this->belongsTo('User', 'user_id');
	}

	public static function validate($input) {
		$rules = array(
			'first' 			=> 'Required|Min:2|Max:30|Alpha',
			'last'  			=> 'Required|Min:2|Max:30|Alpha',
			'phonefield'  => 'phone:US',
			'captcha' 		=> 'Required|captcha'
		);

		return Validator::make($input, $rules);	
	}

}

