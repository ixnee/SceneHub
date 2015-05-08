<?php

/*
 * Author:					Lisa Balogh
 * Revision Date:		May 7, 2014
 * File Name:				Roles.php
 * Description:			Defines the methods and relationships for the roles table
 */

class Role extends \Eloquent {
	protected $fillable = ['name'];

	public function profile() {
		return $this->belongsTo('Profile', 'role_id');
	}
}