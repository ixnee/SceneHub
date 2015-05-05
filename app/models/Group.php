<?php

class Group extends \Eloquent {
	protected $fillable = ['name', 'description'];

	public function show() {
		return $this->belongsTo('Show');
	}
}