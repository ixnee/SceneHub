@extends('layouts.default')

@section('title')
Logout
@stop

@section('content')
	<div id="container">
	  <h1>Log Out</h1>
	  <article class="post">
	    <p>You have successfully logged out. <a href="{{ URL::to('/login') }}">Log in?</a></p>
			</article>
	</article>
</div> <!--- end wrapper -->
@stop