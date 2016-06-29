@extends('layouts.app')

@include('sidenav')

@section('content')

<div class="body-content">
    <div class="row">
        <div class="col-md-offset-2 col-md-9">
             <legend class="read-header">Create Lead</legend>
            <div class="panel panel-default">
               
                <div class="panel-body createclient-box">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/createLead') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Name</label>

                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
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

                        <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Company</label>

                            <div class="col-md-9">
                                <input type="text" class="form-control" name="company" value="{{ old('company') }}">

                                @if ($errors->has('company'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Phone</label>

                            <div class="col-md-9">
                                <input type="number" class="form-control" name="phone" value="{{ old('phone') }}">

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Message</label>

                            <div class="col-md-9">
                                <textarea type="text" class="form-control lead-msg" name="message" value="{{ old('message') }}" rows="5" cols="40" maxlength="5000"></textarea>

                                @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('clientid') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Client ID</label>

                            <div class="col-md-9">
                                <input type="number" class="form-control" name="clientid" value="{{ old('clientid') }}" min="0">

                                @if ($errors->has('clientid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('clientid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary"><i class="fa fa-file-text-o" aria-hidden="true"></i> Create Lead</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
