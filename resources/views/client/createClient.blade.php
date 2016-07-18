@extends('layouts.app')

@include('sidenav')

@section('content')

<div class="body-content">
    <div class="row">
        <div class=""  style="margin-left:30px;">
             <legend class="read-header">/CREATE CLIENT ACCOUNT</legend>
            <div class="panel panel-default">
                <div class="panel-body createclient-box">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/createClient') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label class="col s3 m3 control-label">Username</label>

                            <div class="col s8 m8">
                                <input type="text" class="form-control" name="username" value="{{ old('username') }}">

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col s3 m3 control-label">Password</label>

                            <div class="col s8 m8">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col s3 m3 control-label">Confirm Password</label>

                            <div class="col s8 m8">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                            <label class="col s3 m3 control-label">Company</label>

                            <div class="col s8 m8">
                                <input type="text" class="form-control" name="company" value="{{ old('company') }}">

                                @if ($errors->has('company'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col s3 m3 control-label">E-Mail Address</label>

                            <div class="col s8 m8">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('emailname') ? ' has-error' : '' }}">
                            <label class="col s3 m3 control-label">Email Name</label>

                            <div class="col s8 m8">
                                <input type="text" class="form-control" name="emailname" value="{{ old('emailname') }}">

                                @if ($errors->has('emailname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('emailname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('emailsubject') ? ' has-error' : '' }}">
                            <label class="col s3 m3 control-label">Email Subject</label>

                            <div class="col s8 m8">
                                <input type="text" class="form-control" name="emailsubject" value="{{ old('emailsubject') }}">

                                @if ($errors->has('emailsubject'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('emailsubject') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mailproviderid') ? ' has-error' : '' }}">
                            <label class="col s3 m3 control-label">Mail Provider ID</label>

                            <div class="col s8 m8">
                                <input type="number" class="form-control" name="mailproviderid" value="{{ old('mailproviderid') }}" min="0">

                                @if ($errors->has('mailproviderid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mailproviderid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary right"><i class="fa fa-user-plus" aria-hidden="true"></i> Create Client Account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
