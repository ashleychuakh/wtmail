
<style>
hr{
	border-color: #b7b6b6;
}

header, main, footer {
	padding-left: 240px;
}

nav .button-collapse i{
	font-size: 2.5rem;
	padding-left: 7px;
}
@media only screen and (max-width : 992px) {
	header, main, footer {
		padding-left: 0;
	}
}
</style>
<div class="side-nav fixed" style="background-color:#263248" >
	<ul class="nav menu fixed hide-on-med-and-down" style="margin-top:40px" >
		<li class="logo center"><a class="logo-a" href="{{ url('/home') }}" style="font-size:30px">WebTailors</a></li>

		<div class="row" style="height:30px; margin: 40px 0 20px 0;">
			@if(Auth::guard("web")->check())
			<div class="auth col s6" style="cursor:default;">
				<i class="fa fa-user" aria-hidden="true" style="color:#FF9800"></i> {{ Auth::guard("web")->user()->username }}
			</div>
			<div class="auth col s6" style="margin-top:1%">
				<a class="logout"href="{{ url('/logout') }}" style="padding: 0px; display: inline; text-align:right">
					<i class="fa fa-sign-out" aria-hidden="true" style="color:#FF9800"></i>Logout
				</a>
			</div>
			@endif
		</div>
		<hr>
		<label class="sidenav-header" id="sidenav-header">ACCOUNT</label>
		<li>
			<a href=" {{ url('/createAccount') }} ">Create Account</a>
		</li>
		<li>
			<a href=" {{ url('/readAccount') }} ">Account Details</a>
		</li>

		<label id="sidenav-header">CLIENT</label>
		<li>
			<a href="{{ url('/createClient') }}">Create Client Account</a>
		</li>
		<li>
			<a href="{{ url('/readClient') }}">Client Account Details</a>
		</li>

		<label id="sidenav-header">LEAD</label>
		<li>
			<a href="{{ url('/createLead') }}">Create Lead</a>
		</li>
		<li>
			<a href="{{ url('/readLead') }}">Lead Details</a>
		</li>

		<label id="sidenav-header">MAIL PROVIDER</label>
		<li>
			<a href=" {{url('/createMailProvider')}} ">Create Mail Provider</a>
		</li>
		<li>
			<a href="{{ url('/readMailProvider') }}">Mail Provider Details</a>
		</li>

		<label id="sidenav-header">TRACKING DATA</label>
		<li>
			<a href="{{url('/createTrackingData')}}">Create Tracking Data</a>
		</li>
		<li>
			<a href="{{ url('/readTrackingData') }}">Tracking Data Details</a>
		</li>
	</ul>
</div>

<!--Mobile nav-->
<div class="mobile-sidenav side-nav fixed" style="background-color:#263248" id="nav-mobile">
	<ul class="nav menu fixed">
		<label class="sidenav-header" id="sidenav-header">ACCOUNT</label>
		<li>
			<a href=" {{ url('/createAccount') }} ">Create Account</a>
		</li>
		<li>
			<a href=" {{ url('/readAccount') }} ">Account Details</a>
		</li>

		<label id="sidenav-header">CLIENT</label>
		<li>
			<a href="{{ url('/createClient') }}">Create Client Account</a>
		</li>
		<li>
			<a href="{{ url('/readClient') }}">Client Account Details</a>
		</li>

		<label id="sidenav-header">LEAD</label>
		<li>
			<a href="{{ url('/createLead') }}">Create Lead</a>
		</li>
		<li>
			<a href="{{ url('/readLead') }}">Lead Details</a>
		</li>

		<label id="sidenav-header">MAIL PROVIDER</label>
		<li>
			<a href=" {{url('/createMailProvider')}} ">Create Mail Provider</a>
		</li>
		<li>
			<a href="{{ url('/readMailProvider') }}">Mail Provider Details</a>
		</li>

		<label id="sidenav-header">TRACKING DATA</label>
		<li>
			<a href="{{url('/createTrackingData')}}">Create Tracking Data</a>
		</li>
		<li style="margin-bottom:20px">
			<a href="{{ url('/readTrackingData') }}">Tracking Data Details</a>
		</li>
		<hr>
		<div class="row" style="height:30px; margin: 20px 0 20px 0;">
			@if(Auth::guard("web")->check())
			<div class="auth col s6" style="cursor:default;">
				<i class="fa fa-user" aria-hidden="true" style="color:#FF9800"></i> {{ Auth::guard("web")->user()->username }}
			</div>
			<div class="auth col s6" style="margin-top:1%">
				<a class="logout"href="{{ url('/logout') }}" style="padding: 0px; display: inline; text-align:right">
					<i class="fa fa-sign-out" aria-hidden="true" style="color:#FF9800"></i>Logout
				</a>
			</div>
			@endif
		</div>
	</ul>
</div>

<nav class="mobile-nav">
	<div class="logo" style="padding-left:2%">
		<a class="logo-a" href="{{ url('/home') }}" style="font-size:30px">WebTailors</a>
	</div>
	<a href="#" data-activates="nav-mobile" class="button-collapse right" style="padding-right:2%">
		<i class="fa fa-bars" aria-hidden="true"></i>
	</a>
</nav>
