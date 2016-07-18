@extends('layouts.app')

@include('sidenav')

@section('content')
<div class="body-content">
  <div class="row" style="padding-left:30px">
    <legend class="read-header">/Update Mail Provider</legend>
    @include('flash::message')
    <div class="panel panel-default">
        <div class="panel-body">
           <form class="update-form" method="post" action="/updateMailProvider/{{$mailProvider->id}}">
              {!! csrf_field() !!}
              
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label class="col s3 m3 control-label">Name</label>

                <div class="col s8 m8">
                    <input type="text" class="form-control" name="name" value="{{ $mailProvider->name }}">

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
                    <input type="text" class="form-control" name="driver" value="{{ $mailProvider->driver }}">

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
                    <input type="text" class="form-control" name="host" value="{{ $mailProvider->host }}">

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
                    <input type="number" class="form-control lead-msg" name="port" value="{{ $mailProvider->port }}" maxlength="3">

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
                    <input type="text" class="form-control" name="encryption" value="{{ $mailProvider->encryption }}" min="0">

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
                    <input type="text" class="form-control" name="username" value="{{ $mailProvider->username }}" min="0">

                    @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('currentpassword') ? ' has-error' : '' }}">
                <label class="col s3 m3 control-label">Old Password</label>

                <div class="col s8 m8">
                    <input type="password" class="form-control" name="currentpassword" id="currentpassword" required>

                    @if ($errors->has('currentpassword'))
                    <span class="help-block">
                        <strong>{{ $errors->first('currentpassword') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('newpassword') ? ' has-error' : '' }}">
                <label class="col s3 m3 control-label">New Password</label>

                <div class="col s8 m8">
                    <input type="password" class="form-control" name="newpassword" id="newpassword">

                    @if ($errors->has('newpassword'))
                    <span class="help-block">
                        <strong>{{ $errors->first('newpassword') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('sendmail') ? ' has-error' : '' }}">
                <label class="col s3 m3 control-label">Send Mail</label>

                <div class="col s8 m8">
                    <input type="text" class="form-control" name="sendmail" value="{{ $mailProvider->sendmail }}" min="0">

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
                    <input type="email" class="form-control" name="fromemail" value="{{ $mailProvider->fromemail }}" min="0">

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
                    <input type="text" class="form-control" name="fromname" value="{{ $mailProvider->fromname }}">

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
                <input type="text" class="form-control" name="status" value="{{ $mailProvider->status }}">

                @if ($errors->has('status'))
                <span class="help-block">
                    <strong>{{ $errors->first('status') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <button type="submit" class="btn btn-primary right"><i class="fa fa-pencil-square-o"></i>  Update</button>
    </form>
</div>
</div>
</div>
@endsection