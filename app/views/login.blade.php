@extends('layouts.default')

@section('title')
@parent
 | Login
@stop

@section('content')
  <div class="container">
    <h1>Log In</h1>
    <article class="post">
      {{ Form::open(array('url' => 'login' )) }}

    @if (Session::get('loginError'))
      <div class="alert alert-danger">{{ Session::get('loginError') }}</div>
    @endif

    <p>
      {{ $errors->first('username') }}
      {{ $errors->first('password') }}
    </p>

          {{ Form::label('username', 'Username') }}
          {{ Form::text('username') }}

          {{ Form::label('password', 'Password') }}
          {{ Form::password('password') }}

          {{ Form::submit('Log In') }}

      {{ Form::close() }}
    </article>
  </div>
{{-- </div> - end wrapper  --}}
@stop