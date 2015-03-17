<?php

class Profile extends \Eloquent {
	protected $fillable = ['role_id', 'first', 'last', 'phone', 'bio', 'birthdate', 'city_id', 'state_id'];

	public function role() {
		return $this->hasOne('Role');
	}

	public function city() {
		return $this->hasOne('City');
	}

	public function state() {
		return $this->hasOne('State');
	}

}

