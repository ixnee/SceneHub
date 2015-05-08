{{--

 Author:					Lisa Balogh
 Revision Date:		May 7, 2014
 File Name:				header.blade.php
 Description:			Renders the header page content

--}}

<nav class="navbar navbar-default">
	<a href="/"><img id="logo-img" src={{ URL::asset('images/logo.png')}}></a>
	<div class="container-fluid">
  	<div class="navbar-header">
	  		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
				<span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
  		</button>
		@if(Auth::check())
  			<p class="navbar-text" id="welcome"><strong>Welcome, {{ ucfirst(Auth::user()->username ?: '') }}!</strong></p>
		@endif
		</div>
		<div class="collapse navbar-collapse" id="navbar-main">
	    <ul class="nav navbar-nav navbar-right">
				<li {{ Request::is( '/') ? 'class="active"' : '' }} ><a href="/">Home</a></li>
	      <li {{ Request::is( 'people') ? 'class="active"' : '' }} ><a href="/people">People</a></li>
	      <li {{ Request::is( 'events') ? 'class="active"' : '' }} ><a href="/events">Events</a></li>
	      <li {{ Request::is( 'groups') ? 'class="active"' : '' }} ><a href="/groups">Groups</a></li>
  		@if( !Auth::check() )
  			<li {{ Request::is( 'register') ? 'class="active"' : '' }} ><a href="/register">Register</a></li>
  			<li {{ Request::is( 'login') ? 'class="active"' : '' }} ><a href="/login">Log In</a></li>
      @else
	      <li {{ Request::is( 'your-profile') ? 'class="active"' : '' }}><a href="/your-profile">Your Profile</a></li>
	      @if ( Auth::user()->level ==2 )
	  			<li {{ Request::is( 'admin') ? 'class="active"' : '' }} ><a href="/admin">Admin Panel</a></li>
  			@endif
  			<li {{ Request::is( 'logout') ? 'class="active"' : '' }} ><a href="/logout">Log Out</a></li>
      @endif
	    </ul>
		</div>
  </div>
	</nav>
	<div class="page-header" id="masthead">
			<h1>Scene Hub</h1>
			<h4>Connecting WNC's Dance Music Community</h4>
		<div id="header">
			<img src={{ URL::asset('images/masthead.png')}}>
		</div>
	</div>

 