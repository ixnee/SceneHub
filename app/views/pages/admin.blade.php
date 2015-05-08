{{--

 Author:					Lisa Balogh
 Revision Date:		May 7, 2014
 File Name:				admin.blade.php
 Description:			Renders the admin page content

--}}

@extends('layouts.default')

@section('title')
	 | Admin Panel
@stop

@section('content')
	<div class="panel panel-default panel-responsive">
		<div class="panel-heading"><h2>List of Users</h2></div>
			<table class="table table-striped table-hover table-responsive">
				<tr><th>Username</th><th>Email Address</th><th>First Name</th><th>Last Name</th><th>Phone Number</th><th>City</th><th>Date Registered</th></tr>
			    @foreach($users as $user)
			        <tr>
				        <td>{{ $user->username }}</td>
				        <td>{{ $user->email }}</td>
				        <td>{{ $user->first }}</td>
				        <td>{{ $user->last }}</td>
				        <td>{{ $user->phone }}</td>
				        <td>{{ $user->city }}</td>
				        <td>{{ $user->date_registered }}</td>
			        </tr>
			    @endforeach
		   </table>
   </div>
@stop