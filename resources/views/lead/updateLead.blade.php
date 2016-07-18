@extends('layouts.app')

@include('sidenav')

@section('content')
<div class="body-content">
  <div class="row" style="padding-left:30px">
    <legend class="read-header">/Update Lead</legend>
    <div class="panel panel-default">
        <div class="panel-body">	
           <form class="update-form" method="post" action="/updateLead/{{$lead->id}}">
              {!! csrf_field() !!}
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label class="col s3 m3 control-label">Name</label>

                <div class="col s8 m8">
                    <input type="text" class="form-control" name="name" value="{{ $lead->name }}">

                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="col s3 m3 control-label">E-Mail Address</label>

                <div class="col s8 m8">
                    <input type="email" class="form-control" name="email" value="{{ $lead->email }}">

                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                <label class="col s3 m3 control-label">Company</label>

                <div class="col s8 m8">
                    <input type="text" class="form-control" name="company" value="{{ $lead->company }}">

                    @if ($errors->has('company'))
                    <span class="help-block">
                        <strong>{{ $errors->first('company') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                <label class="col s3 m3 control-label">Phone</label>

                <div class="col s8 m8">
                    <input type="number" class="form-control" name="phone" value="{{ $lead->phone }}">

                    @if ($errors->has('phone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                <label class="col s3 m3 control-label">Message</label>

                <div class="col s8 m8">
                    <textarea type="text" id="textarea1" class="form-control lead-msg materialize-textarea" name="message"rows="1" maxlength="5000">{{ $lead->message }}</textarea>

                    @if ($errors->has('message'))
                    <span class="help-block">
                        <strong>{{ $errors->first('message') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('clientid') ? ' has-error' : '' }}">
                <label class="col s3 m3 control-label">Client ID</label>

                <div class="col s8 m8">
                    <select name="clientid" id="clientid"> 
                        @foreach($clients as $client)
                        <option value="{{$client->id}}" class="clientid" id="clientid"> {{$client->id}}</option>
                        @endforeach
                    </select>

                    @if ($errors->has('clientid'))
                    <span class="help-block">
                        <strong>{{ $errors->first('clientid') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <button type="submit" class="btn btn-primary right"><i class="fa fa-pencil-square-o"></i>  Update</button>
        </form>
    </div>
</div>

</div>


<script>
$('#textarea1').val('New Text');
$('#textarea1').trigger('autoresize');
</script>
@endsection