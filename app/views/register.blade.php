@extends('layouts.default')

@section('title')
   | Register
@stop

@section('content')
  <div class="container">
    <h1>Sign Up!</h1>
      <h2>New User Registration</h2>

      @if ( $errors->count() > 0 )
        <div class="alert alert-danger" role="alert">
          <p>Please correct the following:</p>
            <ul>
              @foreach( $errors->all() as $message )
                <li>{{ $message }}</li>
              @endforeach
            </ul>
        </div>
    @endif

      {{ Form::open(array('url' => 'register', 'class' => 'form-horizontal', 'id' => 'register' )) }}

    <div class="form-group">
            {{ Form::label('username', 'Username', array('class' => 'sr-only')) }}
        <div class="col-sm-4">
            {{ Form::text('username', '', array('class' => 'form-control', 'placeholder' => 'Username', 'autofocus' => 'autofocus')) }}
        </div>
    </div>
    <div class="form-group">
            {{ Form::label('email', 'Email Address', array('class' => 'sr-only')) }}
        <div class="col-sm-4">
            {{ Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address')) }}
        </div>
    </div>
    <div class="form-group">
            {{ Form::label('password', 'Password', array('class' => 'sr-only')) }}
        <div class="col-sm-4">
            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }} 
        </div>
    </div>
    <div class="form-group">
            {{ Form::label('password_confirmation', 'Confirm Password', array('class' => 'sr-only')) }}
        <div class="col-sm-4">
            {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm Password')) }} 
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-4">
            {{ Form::submit('Register', array('class' => 'btn btn-info')) }}
        </div>
    </div>

      {{ Form::close() }}

  </div>
@stop