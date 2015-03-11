<?php

class City extends \Eloquent {
	protected $fillable = [];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'cities';

	public function venue() {
		return $this->belongsTo('Venue');
	}

	public function profile() {
		return $this->belongsTo('Profile');
	}

}