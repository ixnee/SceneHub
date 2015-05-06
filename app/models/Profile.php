<?php

class Profile extends \Eloquent {
	protected $fillable = ['role_id', 'first', 'last', 'phone', 'bio', 'birthdate', 'city_id'];

	public function role() {
		return $this->hasOne('Role');
	}

	public function city() {
		return $this->hasOne('City');
	}

	public function user() {
		return $this->belongsTo('User');
	}

	public function genre() {
		return $this->belongsToMany('Genre', 'genre_profile', 'profile_id', 'genre_id');
	}

	public static function validate($input) {
		$rules = array(
			'first' 			=> 'Required|Min:2|Max:30|Alpha',
			'last'  			=> 'Required|Min:2|Max:30|Alpha',
			'phonefield'  => 'phone:US',
			'captcha' 		=> array('required', 'captcha')
		);

		return Validator::make($input, $rules);	
	}

}

