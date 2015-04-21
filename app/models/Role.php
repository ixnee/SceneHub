<?php

class Role extends \Eloquent {
	protected $fillable = ['name'];

	public function user() {
		return $this->belongsTo('Profile');
	}
}