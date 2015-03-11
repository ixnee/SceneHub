<?php

class Venue extends \Eloquent {
	protected $fillable = ['name', 'phone', 'address', 'zip', 'description'];

	public function city() {
		return $this->hasOne('City');
	}

	public function state() {
		return $this->hasOne('State');
	}


}