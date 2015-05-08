<?php

/*
 * Author:					Lisa Balogh
 * Revision Date:		May 7, 2014
 * File Name:				City.php
 * Description:			Defines the methods and relationships for the cities table
 */

class City extends \Eloquent {
	protected $fillable = [];

	protected $table = 'cities';

	public function venue() {
		return $this->belongsTo('Venue', 'city_id');
	}

	public function profile() {
		return $this->belongsTo('Profile', 'city_id');
	}

}