@extends('layouts.app')

@include('sidenav')

@section('content')
	<div class="body-content">
		<div class="row">
			<div class="col-md-offset-2 col-md-9">
				<legend class="read-header">Update Lead</legend>
				<div class="update-box">	
					<form class="update-form" method="post" action="/updateLead/{{$lead->id}}">
						{!! csrf_field() !!}
						<fieldset class="form-group">
							<label>Username:</label>
							<input class="form-control update-form-control" type="text" name="name" id="name" value="{{$lead->name}}" readonly>
						</fieldset>

						<fieldset class="form-group">
							<label>Email Address:</label>
							<input class="form-control update-form-control" type="email" name="email" id="email" value="{{$lead->email}}">
						</fieldset>

						<fieldset class="form-group">
							<label>Company:</label>
							<input class="form-control update-form-control" type="text" name="company" id="company" value="{{$lead->company}}">
						</fieldset>

						<fieldset class="form-group">
							<label>Phone:</label>
							<input class="form-control update-form-control" type="number" name="phone" id="phone" value="{{$lead->phone}}">
						</fieldset>

						<fieldset class="form-group">
							<label>Message:</label>
							<textarea class="form-control update-form-control" type="text" name="message" id="message" value="{{$lead->message}}" rows="5" cols="40" maxlength="5000"></textarea>
						</fieldset>

						<fieldset class="form-group">
							<label>Client ID:</label>
							<input class="form-control update-form-control" type="number" name="clientid" id="clientid" value="{{$lead->clientid}}" min="0">
						</fieldset>

						<button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i>  Update</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection