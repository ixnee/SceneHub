@extends('layouts.default')

@section('title')
	 | Events
@stop

@section('content')
  <div class="panel panel-default">
		<div class="panel-heading"><h2>Upcoming Events</h2></div>
			<table class="table table-striped table-hover">
				<tr><th>Event Title</th><th>Start Time</th><th>End Time</th><th>Description</th></tr>
			    @foreach($events as $event)
			        <tr><td>{{ $event->name }}</td><td>{{ $event->start }}</td><td>{{ $event->end }}</td><td>{{ $event->description }}</td></tr>
			    @endforeach
		   </table>
   </div>
@stop