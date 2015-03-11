<?php

class State extends \Eloquent {
	protected $fillable = [];

	public function venue() {
		return $this->belongsTo('Venue');
	}

	public function profile() {
		return $this->belongsTo('Profile');
	}
}