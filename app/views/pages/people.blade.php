@extends('layouts.default')

@section('title')
	 | People
@stop

@section('content')
   <div class="panel panel-default">
		<div class="panel-heading"><h2>People on Scene Hub</h2></div>
			<table class="table table-striped table-hover">
				<tr><th>Username</th><th>Role</th><th>City</th><th>Bio</th></tr>
		        <tr><td> @foreach($users as $user) {{ $user->name }} @endforeach</td><td>{{ $event->start }}</td><td>{{ $event->end }}</td><td>{{ $event->description }}</td></tr>
			    
		   </table>
   </div>    
@stop