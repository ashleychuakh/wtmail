<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Webtailors Mail Proxy</title>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
    <link href="{{{ asset('/css/style.css') }}}" rel="stylesheet"> 
    
    <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,600" rel="stylesheet">
   <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
</head>

<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/home') }}">WebTailors</a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right login-nav">
                    <!-- Authentication Links -->
                    @if(Auth::guard("web")->check())
                        <li><a>{{ Auth::guard("web")->user()->username }}</a> </li>
                        <li><a href="{{ url('/logout') }}">Logout</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

   <div class="container">

       
        
        @if(Session::has('flash_message'))
            {{Session::get('flash_message')}}
        @endif    
   

    @yield('content')
    </div>
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script src="https://use.fontawesome.com/b4543c24fc.js"></script>
    
</body>
</html>
