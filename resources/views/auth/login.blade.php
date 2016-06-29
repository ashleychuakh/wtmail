@extends('layouts.app')

@section('content')

<div class="wrap v-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div id="output-container"></div>
                <div class="login-container">
                    @include('flash::message')
                    <div class="form-box">
                        <form id="register" class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {!! csrf_field() !!}
                            <legend class="login-header">Login</legend>
                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control login-form-control" name="username" id="username" value="{{ old('username') }}" placeholder="Username">

                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="account-password" name="password" class="form-control login-form-control" type="password" placeholder="Password">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group">
                                   <button type="submit" class="submit"><i class="fa fa-long-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection