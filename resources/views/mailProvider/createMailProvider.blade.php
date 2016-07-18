@extends('layouts.app')

@include('sidenav')

@section('content')

<div class="body-content">
    <div class="row" style="padding-left:30px">
       <legend class="read-header">/Create Mail Provider</legend>
       <div class="panel panel-default">
        <div class="panel-body createclient-box">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/createMailProvider') }}">
                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="col s3 m3 control-label">Name</label>

                    <div class="col s8 m8">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('driver') ? ' has-error' : '' }}">
                    <label class="col s3 m3 control-label">Driver</label>

                    <div class="col s8 m8">
                        <input type="text" class="form-control" name="driver" value="{{ old('driver') }}">

                        @if ($errors->has('driver'))
                        <span class="help-block">
                            <strong>{{ $errors->first('driver') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('host') ? ' has-error' : '' }}">
                    <label class="col s3 m3 control-label">Host</label>

                    <div class="col s8 m8">
                        <input type="text" class="form-control" name="host" value="{{ old('host') }}">

                        @if ($errors->has('host'))
                        <span class="help-block">
                            <strong>{{ $errors->first('host') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('port') ? ' has-error' : '' }}">
                    <label class="col s3 m3 control-label">Port</label>

                    <div class="col s8 m8">
                        <input type="number" class="form-control lead-msg" name="port" value="{{ old('port') }}" maxlength="3">

                        @if ($errors->has('port'))
                        <span class="help-block">
                            <strong>{{ $errors->first('port') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('encryption') ? ' has-error' : '' }}">
                    <label class="col s3 m3 control-label">Encryption</label>

                    <div class="col s8 m8">
                        <input type="text" class="form-control" name="encryption" value="{{ old('encryption') }}" min="0">

                        @if ($errors->has('encryption'))
                        <span class="help-block">
                            <strong>{{ $errors->first('encryption') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <label class="col s3 m3 control-label">Username</label>

                    <div class="col s8 m8">
                        <input type="text" class="form-control" name="username" value="{{ old('username') }}" min="0">

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

                <div class="form-group{{ $errors->has('sendmail') ? ' has-error' : '' }}">
                    <label class="col s3 m3 control-label">Send Mail</label>

                    <div class="col s8 m8">
                        <input type="text" class="form-control" name="sendmail" value="{{ old('sendmail') }}" min="0">

                        @if ($errors->has('sendmail'))
                        <span class="help-block">
                            <strong>{{ $errors->first('sendmail') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('pretend') ? ' has-error' : '' }}">
                    <label class="col s3 m3 control-label">Pretend</label>

                    <div class="col s8 m8">
                        <div class="col-md-2">
                            <input name="group1 pretend" type="radio" id="pretend-true"  value="true"/>
                            <label for="pretend-true">True</label>
                        </div>                                 
                        <div class="col-md-2">
                            <input name="group1 pretend" type="radio" id="pretend-false"  value="false"/>
                            <label for="pretend-false">False</label>
                        </div>   

                        @if ($errors->has('pretend'))
                        <span class="help-block">
                            <strong>{{ $errors->first('pretend') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('fromemail') ? ' has-error' : '' }}">
                    <label class="col s3 m3 control-label">From E-Mail</label>

                    <div class="col s8 m8">
                        <input type="email" class="form-control" name="fromemail" value="{{ old('fromemail') }}" min="0">

                        @if ($errors->has('fromemail'))
                        <span class="help-block">
                            <strong>{{ $errors->first('fromemail') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('fromname') ? ' has-error' : '' }}">
                    <label class="col s3 m3 control-label">From Name</label>

                    <div class="col s8 m8">
                        <input type="text" class="form-control" name="fromname" value="{{ old('fromname') }}">

                        @if ($errors->has('fromname'))
                        <span class="help-block">
                            <strong>{{ $errors->first('fromname') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                 <label class="col s3 m3 control-label">Status</label>

                 <div class="col s8 m8">
                    <input type="text" class="form-control" name="status" value="{{ old('status') }}">

                    @if ($errors->has('status'))
                    <span class="help-block">
                        <strong>{{ $errors->first('status') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <button type="submit" class="btn btn-primary right"><i class="fa fa-envelope-o" aria-hidden="true"></i> Create Mail Provider</button>
        </form>
    </div>
</div>
</div>
</div>
@endsection
