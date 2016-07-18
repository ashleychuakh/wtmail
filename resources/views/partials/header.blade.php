<nav class="header">
  <div class="nav-wrapper">
   <a class="navbar-brand" href="{{ url('/home') }}">WebTailors</a>
   <ul id="nav-mobile" class="right hide-on-med-and-down">
     @if(Auth::guard("web")->check())
     <li class="valign"><a>{{ Auth::guard("web")->user()->username }}</a> </li>
     <li class="valign"><a href="{{ url('/logout') }}">Logout</a></li>
     @endif
   </ul>
 </div>
</nav>