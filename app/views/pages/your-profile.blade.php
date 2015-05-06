@extends('layouts.default')

@section('title')
	 | Profile
@stop

@section('content')
  <h1>Your Profile</h1>
	<div class="panel panel-default">
		<table class="table">
		    <tr class="info">
		    	<td>Username:</td>
		    	<td>{{ $user->username }}</td>
		    </tr> 
		    <tr class="info">
		    	<td>Role:</td>
		    	<td>{{ $role->name }}</td>
		    </tr>
		    <tr class="info">
		    	<td>Email Address:</td>
		    	<td>{{ $user->email }}</td>
		    </tr>
		    <tr class="info">
		    	<td>First Name:</td>
		    	<td>{{ $profile->first }}</td>
		    </tr>
		    <tr class="info">
		    	<td>Last Name:</td>
		    	<td>{{ $profile->last }}</td>
		    </tr>
		    <tr class="info">
		    	<td>Phone Number:</td>
		    	<td>{{ $phone_formatted }}</td>
		    </tr>
		    <tr class="info">
		    	<td>Bio:</td>
		    	<td>{{ $profile->bio }}</td>
		    </tr>
		    <tr class="info">
		    	<td>Birthdate:</td>
		    	<td>{{ $profile->birthdate }}</td>
		    </tr>
		    <tr class="info">
		    	<td>City:</td>
		    	<td>{{ $city->name }}</td>
		    </tr>
	   </table>
   </div> 

@stop