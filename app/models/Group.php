<?php

/*
 * Author:					Lisa Balogh
 * Revision Date:		May 7, 2014
 * File Name:				Group.php
 * Description:			Defines the methods and relationships for the groups table
 */

class Group extends \Eloquent {
	protected $fillable = ['name', 'description'];

	public function show() {
		return $this->belongsTo('Show');
	}
}