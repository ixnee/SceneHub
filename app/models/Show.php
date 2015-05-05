<?php

class Show extends \Eloquent {
	protected $fillable = ['name', 'start', 'end', 'description', 'group_id', 'venue_id'];

	protected $table = 'events';

	public function group() {
		return $this->hasOne('Group');
	}

	public function venue() {
		return $this->hasOne('Venue');
	}

}