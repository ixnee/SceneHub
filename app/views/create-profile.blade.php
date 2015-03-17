@extends('layouts.default')

@section('title')
Create Profile
@stop

@section('content')
		<h1>{{ $username }}, Create Your Profile</h1>
		{{ Form::open(array('url' => 'create-profile' ))  }}
		{{ Form::hidden('user_id', $user_id)}}

		 <div class="form-group">
		 			{{ Form::label('role', 'Role') }}
          {{ Form::select('name', $role_lists) }}
	  </div>

		<div class="form-group">
          {{ Form::label('first', 'First Name') }}
          {{ Form::text('first') }}
	  </div>

	  <div class="form-group">
          {{ Form::label('last', 'Last Name') }}
          {{ Form::text('last') }}
	  </div>
	  
	  <div class="form-group">
          {{ Form::label('phone', 'Phone Number') }}
          {{ Form::text('phone') }}
	  </div>

	  <div class="form-group">
          {{ Form::label('bio', 'Bio') }}
          {{ Form::textarea('bio') }}
	  </div>

	  <div class="form-group">
	  			{{ Form::label('birthdate', 'Birthdate') }}
	  			{{ Form::text('birthdate', null, array('type' => 'text', 'class' => 'form-control datepicker', 'placeholder' => 'Select Birthdate')) }}
	  </div>

	  <div class="form-group">
	  			{{ Form::label('city', 'City') }}
          {{ Form::select('name', $city_lists) }}
	  </div>

		<div class="form-group">
	  			{{ Form::label('state', 'State') }}
          {{ Form::select('name', $state_lists) }}
	  </div>
@stop


