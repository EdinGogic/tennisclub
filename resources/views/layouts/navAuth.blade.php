<ul class="nav navbar-nav pull-right"> 
	@if(Auth::guest())
		<li><a href="{{route('register') }}"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> Register</a></li> 
		<li><a href="{{route('login') }}"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login</a></li> 
	@else
		<li><a href="{{route('logout') }}"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li> 
	@endif
</ul>