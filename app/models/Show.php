<?php

/*
 * Author:					Lisa Balogh
 * Revision Date:		May 7, 2014
 * File Name:				Show.php
 * Description:			Defines the methods and relationships for the events table. "Events" is a protected
 * 									class in Laravel, so the model name was changed from "Event" to "Show" to prevent 
 * 									class exceptions.
 */

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