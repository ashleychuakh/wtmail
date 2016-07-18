@extends('layouts.app')

@include('sidenav')

@section('content')
	<div class="body-content">
		<div class="row" style="padding-left:30px">
				<legend class="read-header">/Update Client Account</legend>
				<div class="panel panel-default">
                <div class="panel-body">
					<form class="update-form" method="post" action="/updateClient/{{$client->id}}">
						{!! csrf_field() !!}
 						<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label class="col s3 m3 control-label">Username</label>

                            <div class="col s8 m8">
                                <input disabled type="text" class="form-control" name="username" value="{{ $client->username }}">

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col s3 m3 control-label">Old Password</label>

                            <div class="col s8 m8">
                                <input type="password" class="form-control" name="currentpassword" id="currentpassword" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
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

                        <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                            <label class="col s3 m3 control-label">Company</label>

                            <div class="col s8 m8">
                                <input type="text" class="form-control" name="company" value="{{ $client->company }}">

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
                                <input type="email" class="form-control" name="email" value="{{ $client->email }}">

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
                                <input type="text" class="form-control" name="emailname" value="{{ $client->emailname }}">

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
                                <input type="text" class="form-control" name="emailsubject" value="{{ $client->emailsubject }}">

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
                                <input type="number" class="form-control" name="mailproviderid" value="{{ $client->mailproviderid }}" min="0">

                                @if ($errors->has('mailproviderid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mailproviderid') }}</strong>
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