<?php

/*
 * Author:					Lisa Balogh
 * Revision Date:		May 7, 2014
 * File Name:				Venue.php
 * Description:			Defines the methods and relationships for the venues table
 */

class Venue extends \Eloquent {
	protected $fillable = ['name', 'website', 'phone', 'address', 'zip', 'description', 'city_id'];

	public function city() {
		return $this->hasOne('City');
	}

	public function show() {
		return $this->belongsTo('Show');
	}

}