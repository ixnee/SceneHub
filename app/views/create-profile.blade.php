@extends('layouts.default')

@section('title')
  | Create Profile
@stop

@section('content')
		<h1>{{ $username }}, Create Your Profile</h1>
		{{ Form::open(array('url' => 'create-profile', 'class' => 'form-horizontal' ))  }}
		{{ Form::hidden('user_id', $user_id) }}

		<div class="form-group">
      <div class="col-sm-4">
          {{ Form::label('first', 'First Name', array('class' => 'sr-only')) }}
          {{ Form::text('first', '', array('class' => 'form-control', 'placeholder' => 'First Name')) }}
      </div>
	  </div>

	  <div class="form-group">
      <div class="col-sm-4">
          {{ Form::label('last', 'Last Name', array('class' => 'sr-only')) }}
          {{ Form::text('last', '', array('class' => 'form-control', 'placeholder' => 'Last Name')) }}
      </div>
	  </div>
	  
	  <div class="form-group">
		 	<div class="col-sm-4">
		 			{{ Form::label('role_id', 'Role') }}
          {{ Form::select('role_id', $role_lists, '', array('class' => 'form-control')) }}
     	</div>
	  </div>

	  <div class="form-group">
		 	<div class="col-sm-4">
		 			{{ Form::label('genre_id', 'Genre(s)') }}
        @foreach($genre_lists as $genre_list)
					{{ Form::checkbox('genre_id', $genre_list, '', array('class' => 'checkbox')) }}
        @endforeach
     	</div>
	  </div>

	  <div class="form-group">
      <div class="col-sm-4">
          {{ Form::label('bio', 'Bio', array('class' => 'sr-only')) }}
          {{ Form::textarea('bio', '', array('class' => 'form-control', 'placeholder' => 'Your Bio')) }}
      </div>
	  </div>

	  <div class="form-group">
      <div class="col-sm-4">
          {{ Form::label('phone', 'Phone Number', array('class' => 'sr-only')) }}
          {{ Form::text('phone', '', array('class' => 'form-control', 'placeholder' => 'Phone Number')) }}
      </div>
	  </div>

	  <div class="form-group">
	  	<div class="col-sm-4">
	  			{{ Form::label('birthdate', 'Birthdate', array('class' => 'sr-only')) }}
	  			{{ Form::text('birthdate', null, array('type' => 'text', 'class' => 'form-control', 'id' => 'datepicker', 'placeholder' => 'Select Birthdate')) }}
	  	</div>
	  </div>

	  <div class="form-group">
	  	<div class="col-sm-4">
	  			{{ Form::label('city_id', 'City') }}
          {{ Form::select('city_id', $city_lists, '', array('class' => 'form-control')) }}
      </div>
	  </div>

		<div class="form-group">
        <div class="col-sm-4">
            {{ Form::submit('Create Profile', array('class' => 'btn btn-info')) }}
        </div>
    </div>

@stop


