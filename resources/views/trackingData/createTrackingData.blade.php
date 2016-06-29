@extends('layouts.app')

@include('sidenav')

@section('content')

<div class="body-content">
    <div class="row">
        <div class="col-md-offset-2 col-md-9">
             <legend class="read-header">Create Tracking Data</legend>
            <div class="panel panel-default">
               @include('flash::message')
                <div class="panel-body createclient-box">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/createTrackingData') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('clienttoken') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Client Token</label>

                            <div class="col-md-9">
                                <input type="text" class="form-control" name="clienttoken" value="{{ old('clienttoken') }}">

                                @if ($errors->has('clienttoken'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('clienttoken') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ipv4') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">ipv4</label>

                            <div class="col-md-9">
                                <input type="text" class="form-control" name="ipv4" value="{{old('ipv4')}}">

                                @if ($errors->has('ipv4'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ipv4') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('mailproviderid') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Mail Provider ID</label>

                            <div class="col-md-9">
                                <input type="text" class="form-control" name="mailproviderid" value="{{ old('mailproviderid') }}">

                                @if ($errors->has('mailproviderid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mailproviderid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Status</label>

                            <div class="col-md-9">
                                <input type="text" class="form-control" name="status" value="{{ old('status') }}">

                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i> Create Tracking Data</button>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
