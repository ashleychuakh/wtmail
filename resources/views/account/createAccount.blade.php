@extends('layouts.app')

@include('sidenav')

@section('content')

<div class="body-content">

    <div class="row">
        <div class="col-md-offset-2 col-md-9">
             <legend class="read-header">Create Account</legend>
                <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/createAccount') }}">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label class="col-md-2 control-label">First Name</label>

                            <div class="col-md-9">
                                <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}">

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Username</label>

                            <div class="col-md-9">
                                <input type="text" class="form-control" name="username" value="{{ old('username') }}">

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Password</label>

                            <div class="col-md-9">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Confirm Password</label>

                            <div class="col-md-9">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">E-Mail Address</label>

                            <div class="col-md-9">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usertype') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">User Type</label>

                            <div class="col-md-9">
                               <!-- <select class="selectpicker" name="usertype" >
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>-->
                                <input class="form-control" type="text" name="usertype" id="usertype" value="{{old('usertype')}}">
                                @if ($errors->has('usertype'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usertype') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i> Create Account</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
