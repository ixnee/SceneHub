<?php

/*
 * Author:					Lisa Balogh
 * Revision Date:		May 7, 2014
 * File Name:				Event.php
 * Description:			Defines the methods and relationships for the events table
 */

class Event extends \Eloquent {
	protected $fillable = ['name', 'start', 'end', 'description', 'venue_id'];

	public function group() {
		return $this->hasOne('Group');
	}

	public function venue() {
		return $this->hasOne('Venue');
	}

}