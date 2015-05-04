<?php

class Profile extends \Eloquent {
	protected $fillable = ['role_id', 'first', 'last', 'phone', 'bio', 'birthdate', 'city_id', 'state_id'];

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

}

