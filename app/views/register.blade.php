@extends('layouts.default')

@section('title')
Register
@stop

@section('content')
    <h1>Sign Up!</h1>
      <h2>New User Registration</h2>
      {{ Form::open(array('url' => 'register' )) }}

  <div class="form-group">
          {{ Form::label('username', 'Username') }}
          {{ Form::text('username') }}
  </div>
  <div class="form-group">
          {{ Form::label('email', 'Email Address') }}
          {{ Form::text('email') }}
  </div>
  <div class="form-group">
          {{ Form::label('password', 'Password') }}
          {{ Form::password('password') }} 
  </div>
  <div class="form-group">
          {{ Form::label('password_confirmation', 'Confirm Password') }}
          {{ Form::password('password_confirmation') }} 
  </div>
  <div class="form-group">
          {{ Form::submit('Register') }}
  </div>

      {{ Form::close() }}
@stop