{{--

 Author:					Lisa Balogh
 Revision Date:		May 7, 2014
 File Name:				people.blade.php
 Description:			Renders the people page content

--}}

@extends('layouts.default')

@section('title')
	 | People
@stop

@section('content')

<div class="well">
<div class="row">
	{{ Form::open(array('url' => 'people', 'class' => 'form-inline')) }}
    <div class="form-group">
      	{{ Form::label('role_id', 'Filter by Role') }}
        {{ Form::select('roleList', ['all' => 'All Roles', 'dj' => 'Djs', 'promoter' => 'Promoters', 'producer' => 'Producers', 'dancer' => 'Dancers', 'vendor' => 'Vendors', 'artist' => 'Artists', 'fan' => 'Fans'], null, ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
	    	{{ Form::submit('Find People', array('class' => 'btn btn-default')) }}  
	  </div>
  {{ Form::close() }}
 </div>
<div class="row">
  {{ Form::open(array('url' => 'people', 'class' => 'form-inline')) }}
    <div class="form-group">
      	{{ Form::label('city_id', 'Filter by City') }}
        {{ Form::select('cityList', ['all' => 'All Cities', 'asheville' => 'Asheville', 'black_mountain' => 'Black Mountain', 'hickory' => 'Hickory', 'charlotte' => 'Charlotte', 'morganton' => 'Morganton', 'waynesville' => 'Waynesville', 'hendersonville' => 'Hendersonville'], null, ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
	    	{{ Form::submit('Find People', array('class' => 'btn btn-default')) }}  
	  </div>
  {{ Form::close() }}
 </div>
</div>
   <div class="panel panel-default">
		<div class="panel-heading"><h2>People on Scene Hub</h2></div>
			<table class="table table-striped table-hover table-responsive">
				<tr><th>Username</th><th>Role</th><th>City</th><th>Bio</th></tr>
					@foreach($profiles as $profile)
		        <tr>
		        	<td>{{ $profile->username }}</td>
		        	<td>{{ $profile->role }}</td>
		        	<td>{{ $profile->city }}</td>
		        	<td>{{ $profile->bio }}</td>
		        </tr>
	       	@endforeach
		   </table>
   </div>    
@stop