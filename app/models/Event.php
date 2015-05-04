<?php

class Event extends \Eloquent {
	protected $fillable = ['name', 'start', 'end', 'description', 'venue_id'];

	public function group() {
		return $this->hasOne('Group');
	}

	public function venue() {
		return $this->hasOne('Venue');
	}

}