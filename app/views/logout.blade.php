{{--

 Author:					Lisa Balogh
 Revision Date:		May 7, 2014
 File Name:				logout.blade.php
 Description:			Renders the logout page content

--}}

@extends('layouts.default')

@section('title')
	| Logout
@stop

@section('content')
  <h1>Log Out</h1>
    <p>You have successfully logged out. <a class="text-info" href="{{ URL::to('/login') }}">Log in?</a></p>
@stop