<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Webtailors Mail Proxy</title>

  <!-- Styles -->
  <link href="{{{ asset('/css/style.css') }}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,700,500,300' rel='stylesheet' type='text/css'>
</head>

<body id="app-layout">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<script>
$(document).ready(function() {
  $('select').material_select();

   $(".button-collapse").sideNav({
    closeOnClick: true,
    edge: 'right'
   });

});
</script>
</body>
</html>
