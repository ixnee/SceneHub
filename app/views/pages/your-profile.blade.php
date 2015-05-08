{{--

 Author:					Lisa Balogh
 Revision Date:		May 7, 2014
 File Name:				your-profile.blade.php
 Description:			Renders the your-profile page content

--}}

@extends('layouts.default')

@section('title')
	 | Profile
@stop

@section('content')
  <h1>Your Profile</h1>
	<div class="panel panel-default">
		<table class="table">
		    <tr>
		    	<td>Username:</td>
		    	<td>{{ $user->username }}</td>
		    </tr> 
		    <tr>
		    	<td>Role:</td>
		    	<td>{{ $role->name }}</td>
		    </tr>
		    <tr>
		    	<td>Email Address:</td>
		    	<td>{{ $user->email }}</td>
		    </tr>
		    <tr>
		    	<td>First Name:</td>
		    	<td>{{ $profile->first }}</td>
		    </tr>
		    <tr>
		    	<td>Last Name:</td>
		    	<td>{{ $profile->last }}</td>
		    </tr>
		    <tr>
		    	<td>Phone Number:</td>
		    	<td>{{ $phone_formatted }}</td>
		    </tr>
		    <tr>
		    	<td>Bio:</td>
		    	<td>{{ $profile->bio }}</td>
		    </tr>
		    <tr>
		    	<td>Birthdate:</td>
		    	<td>{{ $profile->birthdate }}</td>
		    </tr>
		    <tr>
		    	<td>City:</td>
		    	<td>{{ $city->name }}</td>
		    </tr>
	   </table>
   </div> 

@stop