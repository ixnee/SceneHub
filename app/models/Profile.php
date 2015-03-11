<?php

class Profile extends \Eloquent {
	protected $fillable = ['first', 'last', 'phone', 'bio', 'birthdate'];

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

