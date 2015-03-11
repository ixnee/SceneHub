<!-- Wrap all page content here -->
	<nav class="navbar navbar-default navbar-fixed-top">
  	<div class="container-fluid">
			<div class="navbar-header">
				<h2>Scene Hub</h2>
				<h3>Music Events In Western North Carolina</h3>
			</div>
				<div class="collapse navbar-collapse">
			    <ul class="nav navbar-nav">
						<li {{ Request::is( '/') ? 'class="active"' : '' }}><a id="logo" href="/">Scene Hub</a></li>
			      <li {{ Request::is( '/people') ? 'class="active"' : '' }}><a href="/people">People</a></li>
			      <li {{ Request::is( '/events') ? 'class="active"' : '' }}><a href="/events">Events</a></li>
			      <li {{ Request::is( '/inbox') ? 'class="active"' : '' }}><a href="/groups">Groups</a></li>
		      		@if(!Auth::check())
	                  <li>{{ HTML::link('/register', 'Register') }}</li>   
	                  <li>{{ HTML::link('/login', 'Login') }}</li>   
	            @else
	            			<li><a href="#">Welcome, {{ Auth::user()->username ?: '' }}!</a></li>
	                  <li>{{ HTML::link('/logout', 'Log Out') }}</li>
	            @endif
			      {{-- <li><a href="/members">Members</a></li> --}}
						{{-- <li><a href="{{ URL::to('logout') }}">Log Out</a></li> --}}
			      {{-- <li><a href="/registration">Registration</a></li> --}}
			    </ul>
				</div>
 	  </div>
	</nav>
		<div id="container">
		@if (Session::has('flash_message'))
		{{ Session::get('flash_message') }}
		@endif
		</div>
 