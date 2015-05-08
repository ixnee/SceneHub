{{--

 Author:          Lisa Balogh
 Revision Date:   May 7, 2014
 File Name:       create-profile.blade.php
 Description:     Renders the create-profile page content

--}}

@extends('layouts.default')

@section('title')
  | Create Profile
@stop

@section('content')
		<h1>{{ ucfirst($username) }}, Create Your Profile</h1>

		 @if ( $errors->count() > 0 )
      <div class="alert alert-danger" role="alert">
      <span class="glyphicon icon-info"></span>
        <strong>Please correct the following:</strong>
          <ul>
            @foreach( $errors->all() as $message )
              <li>{{ $message }}</li>
            @endforeach
          </ul>
      </div>
    @endif

		{{ Form::open(array('url' => 'create-profile', 'class' => 'form-horizontal', 'id' => 'create-profile'))  }}
		{{ Form::hidden('user_id', $user_id) }}

		<div class="form-group">
      <div class="col-xs-12 col-sm-6 col-lg-8">
          {{ Form::label('first', 'First Name', array('class' => 'sr-only')) }}
          {{ Form::text('first', '', array('class' => 'form-control', 'placeholder' => 'First Name', 'autofocus' => 'autofocus')) }}
      </div>
	  </div>

	  <div class="form-group">
      <div class="col-xs-12 col-sm-6 col-lg-8">
          {{ Form::label('last', 'Last Name', array('class' => 'sr-only')) }}
          {{ Form::text('last', '', array('class' => 'form-control', 'placeholder' => 'Last Name')) }}
      </div>
	  </div>
	  
	  <div class="form-group">
		 	<div class="col-xs-12 col-sm-6 col-lg-8">
		 			{{ Form::label('role_id', 'Role') }}
          {{ Form::select('role_id', $role_lists, '', array('class' => 'form-control')) }}
     	</div>
	  </div>

	  <div class="form-group">
      <div class="col-xs-12 col-sm-6 col-lg-8">
          {{ Form::label('bio', 'Bio', array('class' => 'sr-only')) }}
          {{ Form::textarea('bio', '', array('class' => 'form-control', 'placeholder' => 'Your Bio')) }}
      </div>
	  </div>

	  <div class="form-group">
      <div class="col-xs-12 col-sm-6 col-lg-8">
          {{ Form::label('phone', 'Phone Number', array('class' => 'sr-only')) }}
          {{ Form::text('phone', '', array('class' => 'form-control', 'placeholder' => 'Phone Number')) }}
      </div>
	  </div>

	  <div class="form-group">
	  	<div class="col-xs-12 col-sm-6 col-lg-8">
	  			{{ Form::label('birthdate', 'Birthdate', array('class' => 'sr-only')) }}
	  			{{ Form::text('birthdate', null, array('type' => 'text', 'class' => 'form-control', 'id' => 'datepicker', 'placeholder' => 'Select Birthdate')) }}
	  	</div>
	  </div>

	  <div class="form-group">
	  	<div class="col-xs-12 col-sm-6 col-lg-8">
	  			{{ Form::label('city_id', 'City') }}
          {{ Form::select('city_id', $city_lists, '', array('class' => 'form-control')) }}
      </div>
	  </div>

    {{ Form::open(array(URL::to(Request::segment(1)))) }}
    <div class="well col-xs-12 col-sm-6 col-lg-8">
      <div class="form-group">
          <div class="col-xs-12 col-sm-6 col-lg-8">
              {{ HTML::image(Captcha::img(), 'Captcha image', array('class' => 'btn btn-default')) }}
          </div>
      </div>
      <div class="form-group">
          <div class="col-md-4">
              {{ Form::text('captcha', '', array('class' => 'form-control', 'placeholder' => 'Type the Characters')) }}
          </div>
      </div>
      <div class="form-group">
          <div class="col-xs-12 col-sm-6 col-lg-8">
              {{ Form::submit('Create Profile', array('class' => 'btn btn-info')) }}
          </div>
      </div>
    </div>

@stop


