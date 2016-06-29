@extends('layouts.app')

@include('sidenav')

@section('content')
	<div class=" body-content">
		<div class="row">
			<div class="col-md-offset-2 col-md-9">
				<legend class="read-header">Update Client Account</legend>
				<div class="update-box">	
					<form class="update-form" method="post" action="/updateClient/{{$client->id}}">
						{!! csrf_field() !!}
						<fieldset class="form-group">
							<label>Username:</label>
							<input class="form-control update-form-control" type="text" name="username" id="username" value="{{$client->username}}" readonly>
						</fieldset>

						<fieldset class="form-group">
							<label>Old Password:</label>
							<input class="form-control update-form-control" type="password" name="currentpassword" id="currentpassword">
						</fieldset>

						<fieldset class="form-group">
							<label>New Password:</label>
							<input class="form-control update-form-control" type="password" name="newpassword" id="newpassword">
						</fieldset>

						<fieldset class="form-group">
							<label>Company:</label>
							<input class="form-control update-form-control" type="text" name="company" id="company" value="{{$client->company}}">
						</fieldset>

						<fieldset class="form-group">
							<label>Email Address:</label>
							<input class="form-control update-form-control" type="email" name="email" id="email" value="{{$client->email}}">
						</fieldset>

						<fieldset class="form-group">
							<label>Email Name:</label>
							<input class="form-control update-form-control" type="text" name="emailname" id="emailname" value="{{$client->emailname}}">
						</fieldset>

						<fieldset class="form-group">
							<label>Email Subject:</label>
							<input class="form-control update-form-control" type="text" name="emailsubject" id="emailsubject" value="{{$client->emailsubject}}">
						</fieldset>

						<fieldset class="form-group">
							<label>Mail Provider ID:</label>
							<input class="form-control update-form-control" type="number" name="mailproviderid" id="mailproviderid" value="{{$client->mailproviderid}}" min="0">
						</fieldset>

						<button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i>  Update</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection