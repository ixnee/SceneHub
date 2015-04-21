@extends('layouts.default')

@section('title')
   | Login
@stop

@section('content')
  <div class="container">

    <h1>Log In</h1>
      {{ Form::open(array('url' => 'login', 'class' => 'form-horizontal', 'id' => 'login' )) }}

    @if (Session::get('loginError'))
      <div class="alert alert-danger">{{ Session::get('loginError') }}</div>
    @endif

      <p>
        {{ $errors->first('username') }}
        {{ $errors->first('password') }}
      </p>
       
        <div class="form-group"> 
            {{ Form::label('username', 'Username', array('class' => 'sr-only')) }}
          <div class="col-sm-4">
            {{ Form::text('username', '', array('class' => 'form-control', 'placeholder' => 'Username')) }}
          </div>
        </div>
        <div class="form-group">  
            {{ Form::label('password', 'Password', array('class' => 'sr-only')) }}
          <div class="col-sm-4">
            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-4">
            {{ Form::submit('Log In', array('class' => 'btn btn-info')) }}
          </div>
        </div>

      {{ Form::close() }}

  </div>

@stop