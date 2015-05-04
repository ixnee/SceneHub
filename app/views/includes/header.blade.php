<!-- Wrap all page content here -->
	<nav class="navbar navbar-default">
	<img id="logo-img" src={{ URL::asset('images/logo.png')}}>
  	<div class="container-fluid">
  	<div class="navbar-header">
	  		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
					<span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	  		</button>
		</div>
				<div class="collapse navbar-collapse" id="navbar-main">
			    <ul class="nav navbar-nav navbar-right">
						<li {{ Request::is( '/') ? 'class="active"' : '' }} ><a href="/">Scene Hub</a></li>
			      <li {{ Request::is( 'people') ? 'class="active"' : '' }} ><a href="/people">People</a></li>
			      <li {{ Request::is( 'events') ? 'class="active"' : '' }} ><a href="/events">Events</a></li>
			      <li {{ Request::is( 'groups') ? 'class="active"' : '' }} ><a href="/groups">Groups</a></li>
		      		@if(!Auth::check())
                <li>{{ HTML::link('/register', 'Register') }}</li>   
                <li>{{ HTML::link('/login', 'Login') }}</li>   
	            @else
					      <li {{ Request::is( 'your-profile') ? 'class="active"' : '' }}><a href="/your-profile">Your Profile</a></li>
					      @if ( Auth::user()->level ==2 )
          			<li {{ Request::is( 'admin') ? 'class="active"' : '' }} ><a href="/admin">Admin Panel</a></li>
          			@endif
          			<li class="navbar-text">Welcome, {{ Auth::user()->username ?: '' }}!</li>
                <li>{{ HTML::link('/logout', 'Log Out') }}</li>
	            @endif
			    </ul>
				</div>
 	  </div>
	</nav>
	<div class="page-header" id="masthead">
			<h1>Scene Hub</h1>
			<h4>For Western North Carolina's Dance Music Community</h4>	
		<div id="header">
		<img src={{ URL::asset('images/masthead.png')}}>
		</div>
	</div>

 