@extends('layouts.app')

@include('sidenav')

@section('content')
<div class="body-content">
  <div class="row" style="padding-left:30px">
    <legend class="read-header">/Update Account</legend>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="">
               @include('flash::message')
               <form class="update-form" method="post" action="/updateAccount/{{$account->id}}">
                  {!! csrf_field() !!}
                  <div class="form-group">
                    <label class="col s3 m3 control-label">First Name</label>

                    <div class="col s8 m8">
                        <input type="text" class="form-control" name="firstname" value="{{$account->firstname}}">

                        @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('firstname') }}</strong>
                        </span>
                        @endif

                    </div>
                </div>

                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <label class="col s3 m3 control-label">Username</label>

                    <div class="col s8 m8">
                        <input type="text" class="form-control" name="username" value="{{$account->username}}" disabled>

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

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col s3 m3 control-label">E-Mail Address</label>

                    <div class="col s8 m8">
                        <input type="email" class="form-control" name="email" value="{{ $account->email }}">

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('usertype') ? ' has-error' : '' }}">
                    <label class="col s3 m3 control-label">User Type</label>

                    <div class="col s8 m8">
                                <input class="form-control" type="text" name="usertype" id="usertype" value="{{ $account->usertype }}">
                                @if ($errors->has('usertype'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('usertype') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label class="col s3 m3 control-label">Status</label>

                            <div class="col s8 m8">
                                <input class="form-control" type="text" name="status" id="status" value="{{ $account->status }}">
                                
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