@extends('layouts.app')

@include('sidenav')

@section('content')
	<div class="body-content">
		<div class="row">
			<div class="col-md-offset-2 col-md-9">
				<legend class="read-header">Update Tracking Data</legend>
				@include('flash::message')
				<div class="update-box">	
					<form class="update-form" method="post" action="/updateTrackingData/{{$trackingdata->id}}">
						{!! csrf_field() !!}
						<fieldset class="form-group">
							<label>Client Token:</label>
							
							<input class="form-control update-form-control" type="text" name="clienttoken" id="clienttoken" value="{{$trackingdata->clienttoken}}">
						</fieldset>

						<fieldset class="form-group">
							<label>ipv4:</label>
							<input class="form-control update-form-control" type="text" name="ipv4" id="ipv4" value="{{$trackingdata->ipv4}}">
						</fieldset>

						<fieldset class="form-group">
							<label>Mail Provider ID:</label>
							<input class="form-control update-form-control" type="text" name="mailproviderid" id="mailproviderid" value="{{$trackingdata->mailproviderid}}">
						</fieldset>

						<fieldset class="form-group">
							<label>Status:</label>
							<input class="form-control update-form-control" type="text" name="status" id="status" value="{{$trackingdata->status}}">
						</fieldset>

						<button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i>  Update</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection