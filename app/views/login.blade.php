@extends('layouts.default')

@section('title')
   | Login
@stop

@section('content')
  <div class="container">

    <h1>Log In</h1>
      {{ Form::open(array('url' => 'login', 'class' => 'form-horizontal', 'id' => 'login' )) }}

        <div class="form-group"> 
            {{ Form::label('username', 'Username', array('class' => 'sr-only')) }}
          <div class="col-sm-4">
            {{ Form::text('username', '', array('class' => 'form-control', 'placeholder' => 'Username', 'autofocus' => 'autofocus')) }}
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
            Or {{ HTML::link('/register', 'Register', array('class' => 'text-info')) }}
          </div>
        </div>

      {{ Form::close() }}

  </div>

@stop