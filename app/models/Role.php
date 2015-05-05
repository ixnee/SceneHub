<?php

class Role extends \Eloquent {
	protected $fillable = ['name'];

	public function profile() {
		return $this->belongsTo('Profile');
	}
}