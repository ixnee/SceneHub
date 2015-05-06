@extends('layouts.default')

@section('title')
	 | Admin Panel
@stop

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading"><h2>List of Users</h2></div>
			<table class="table table-striped table-hover">
				<tr><th>Username</th><th>Email Address</th><th>Level</th><th>Date Registered</th></tr>
			    @foreach($users as $user)
			        <tr><td>{{ $user->username }}</td><td>{{ $user->email }}</td><td>{{ $user->level }}</td><td>{{ $user->date_registered }}</td></tr>
			    @endforeach
		   </table>
   </div>
@stop