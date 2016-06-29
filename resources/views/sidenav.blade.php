@section("sidenav")

<div class="sidenav col-sm-3 col-lg-2">
	<div class="side-nav">
	<ul class="nav menu fixed">
		<label id="sidenav-header">Account</label>
		<li>
			<a href=" {{ url('/createAccount') }} ">Create Account</a>
		</li>
		<li>
			<a href=" {{ url('/readAccount') }} ">Account Details</a>
		</li>
		<hr>

		<label id="sidenav-header">Client</label>
		<li>
			<a href="{{ url('/createClient') }}">Create Client Account</a>
		</li>
		<li>
			<a href="{{ url('/readClient') }}">Client Account Details</a>
		</li>
		
		<hr>

		<label id="sidenav-header">Lead</label>
		<li>
			<a href="{{ url('/createLead') }}">Create Lead</a>
		</li>
		<li>
			<a href="{{ url('/readLead') }}">Lead Details</a>
		</li>
		<hr>

		<label id="sidenav-header">Mail Provider</label>
		<li>
			<a href=" {{url('/createMailProvider')}} ">Create Mail Provider</a>
		</li>
		<li>
			<a href="{{ url('/readMailProvider') }}">Mail Provider Details</a>
		</li>
		<hr>

		<label id="sidenav-header">Tracking Data</label>
		<li>
			<a href="{{url('/createTrackingData')}}">Create Tracking Data</a>
		</li>
		<li>
			<a href="{{ url('/readTrackingData') }}">Tracking Data Details</a>
		</li>
		<hr>
	</ul>
</div>
</div>
