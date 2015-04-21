<!-- Wrap all page content here -->
	<nav class="navbar navbar-default navbar-fixed-top">
  	<div class="container-fluid">
			<div class="navbar-header">
				<h2>Scene Hub</h2>
				<p>Music Events In Western North Carolina</p>
			</div>
				<div class="collapse navbar-collapse">
			    <ul class="nav navbar-nav">
						<li {{ Request::is( '/') ? 'class="active"' : '' }} ><a id="logo" href="/">Scene Hub</a></li>
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
		
 