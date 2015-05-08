{{--

 Author:					Lisa Balogh
 Revision Date:		May 7, 2014
 File Name:				thanks.blade.php
 Description:			Renders the thanks page content

--}}

@extends('layouts.default')

@section('title')
	| Thanks
@stop

@section('content')
  <h1>You Signed Up!</h1>
    <h2>Thanks for registering</h2>
    <p>You've registered {{ $username }}. {{ HTML::link('/login', 'Log In', array('class' => 'text-info')) }}</p>
 @stop