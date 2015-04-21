@extends('layouts.default')

@section('title')
	| Logout
@stop

@section('content')
  <h1>Log Out</h1>
    <p>You have successfully logged out. <a href="{{ URL::to('/login') }}">Log in?</a></p>
@stop