{{--

 Author:          Lisa Balogh
 Revision Date:   May 7, 2014
 File Name:       register.blade.php
 Description:     Renders the register page content

--}}

@extends('layouts.default')

@section('title')
   | Register
@stop

@section('content')
  <div class="container">
    <h1>Sign Up!</h1>
      <h3>New User Registration</h3>

    @if ( $errors->count() > 0 )
      <div class="alert alert-danger col-xs-12 col-sm-6 col-lg-8" role="alert">
        <h4>Please correct the following:</h4>
            @foreach( $errors->all() as $message )
              <p>{{ $message }}</p>
            @endforeach
      </div>
    @endif

      {{ Form::open(array('url' => 'register', 'class' => 'form-horizontal', 'id' => 'register' )) }}

    <div class="form-group">
            {{ Form::label('username', 'Username', array('class' => 'sr-only')) }}
        <div class="col-xs-12 col-sm-6 col-lg-8">
            {{ Form::text('username', '', array('class' => 'form-control', 'placeholder' => 'Username', 'autofocus' => 'autofocus')) }}
        </div>
    </div>
    <div class="form-group">
            {{ Form::label('email', 'Email Address', array('class' => 'sr-only')) }}
        <div class="col-xs-12 col-sm-6 col-lg-8">
            {{ Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address')) }}
        </div>
    </div>
    <div class="form-group">
            {{ Form::label('password', 'Password', array('class' => 'sr-only')) }}
        <div class="col-xs-12 col-sm-6 col-lg-8">
            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }} 
        </div>
    </div>
    <div class="form-group">
            {{ Form::label('password_confirmation', 'Confirm Password', array('class' => 'sr-only')) }}
        <div class="col-xs-12 col-sm-6 col-lg-8">
            {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm Password')) }} 
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
              {{ Form::submit('Register', array('class' => 'btn btn-info')) }}
          </div>
      </div>
    </div>
      {{ Form::close() }}

  </div>
@stop