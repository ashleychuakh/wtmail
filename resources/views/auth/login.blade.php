@extends('layouts.app')
@include("partials/header")

@section('content')
<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col m8 s12 offset-m2">
                <div id="output-container"></div>
                <div class="login-container">
                    @include('flash::message')
                    <div class="form-box">
                        <form id="register" class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {!! csrf_field() !!}
                            <div class="center"><label class="login-header">LOGIN</label></div>
                            <hr>
                            <div class="center input-field{{ $errors->has('username') ? ' has-error' : '' }}">
                                <input type="text" class="form-control login-form-control" name="username" id="username login-input" value="{{ old('username') }}" placeholder="Username">

                                @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="center input-field{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="account-password login-input" name="password" class="form-control login-form-control" type="password" placeholder="Password">
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group center login-sub-btn">
                                <button type="submit" class=" btn-theme btn login-sub-btn">Login</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>
@endsection