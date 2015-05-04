<?php

class Group extends \Eloquent {
	protected $fillable = ['name', 'description'];

	public function event() {
		return $this->belongsTo('Event');
	}
}