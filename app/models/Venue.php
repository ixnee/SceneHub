<?php

class Venue extends \Eloquent {
	protected $fillable = ['name', 'phone', 'address', 'zip', 'description'];

	public function city() {
		return $this->hasOne('City');
	}

	public function event() {
		return $this->belongsTo('Event');
	}

}