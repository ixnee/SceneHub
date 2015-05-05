<?php

class Venue extends \Eloquent {
	protected $fillable = ['name', 'website', 'phone', 'address', 'zip', 'description', 'city_id'];

	public function city() {
		return $this->hasOne('City');
	}

	public function show() {
		return $this->belongsTo('Show');
	}

}