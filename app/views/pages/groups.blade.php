{{--

 Author:					Lisa Balogh
 Revision Date:		May 7, 2014
 File Name:				groups.blade.php
 Description:			Renders the groups page content

--}}

@extends('layouts.default')

@section('title')
	 | Groups
@stop

@section('content')
  <div class="panel panel-default">
		<div class="panel-heading"><h2>List of Groups</h2></div>
			<table class="table table-striped table-hover">
				<tr><th>Group Name</th><th>Description</th></tr>
			    @foreach($groups as $group)
			        <tr><td>{{ $group->name }}</td><td>{{ $group->description }}</td></tr>
			    @endforeach
		   </table>
   </div>
@stop