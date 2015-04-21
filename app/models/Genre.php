<?php

class Genre extends \Eloquent {
	protected $fillable = ['name', 'description'];

	public function profiles() {
		return $this->belongsToMany('Profile', 'profile_genre', 'profile_id', 'genre_id');
	}
}