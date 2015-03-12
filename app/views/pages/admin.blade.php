@extends('layouts.default')
@section('content')
i am the admin panel
	<h2>List of Users</h2>
	<div class="panel panel-default">
		<table class="table">
			<tr><th>Username</th><th>Email Address</th><th>Level</th></tr>
		    @foreach($users as $user)
		        <tr class="info"><td>{{ $user->username }}</td><td>{{ $user->email }}</td><td>{{ $user->level }}</td></tr>
		    @endforeach
	   </table>
   </div>
@stop