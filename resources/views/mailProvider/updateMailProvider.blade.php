@extends('layouts.app')

@include('sidenav')

@section('content')
	<div class="body-content">
		<div class="row">
			<div class="col-md-offset-2 col-md-9">
				<legend class="read-header">Update Mail Provider</legend>
				@include('flash::message')
				<div class="update-box">	
					<form class="update-form" method="post" action="/updateMailProvider/{{$mailProvider->id}}">
						{!! csrf_field() !!}
						<fieldset class="form-group">
							<label>Name:</label>
							<input class="form-control update-form-control" type="text" name="name" id="name" value="{{$mailProvider->name}}" readonly>
						</fieldset>

						<fieldset class="form-group">
							<label>Driver:</label>
							<input class="form-control update-form-control" type="text" name="driver" id="driver" value="{{$mailProvider->driver}}">
						</fieldset>

						<fieldset class="form-group">
							<label>Host:</label>
							<input class="form-control update-form-control" type="text" name="host" id="host" value="{{$mailProvider->host}}">
						</fieldset>

						<fieldset class="form-group">
							<label>Port:</label>
							<input class="form-control update-form-control" type="number" name="port" id="port" value="{{$mailProvider->port}}">
						</fieldset>

						<fieldset class="form-group">
							<label>Encryption:</label>
							<input class="form-control update-form-control" type="text" name="encryption" id="encryption" value="{{$mailProvider->encryption}}">
						</fieldset>

						<fieldset class="form-group">
							<label>Username:</label>
							<input class="form-control update-form-control" type="text" name="username" id="username" value="{{$mailProvider->username}}">
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
							<label>Send Mail:</label>
							<input class="form-control update-form-control" type="text" name="sendmail" id="sendmail" value="{{$mailProvider->sendmail}}">
						</fieldset>

						<fieldset class="form-group">
							<label>Pretend:</label><br>
							<div class="col-md-2"><input type="radio" name="pretend" value="true" required> True</div>
                            <input type="radio" name="pretend" value="false"> False
						</fieldset>

						<fieldset class="form-group">
							<label>From E-mail:</label>
							<input class="form-control update-form-control" type="text" name="fromemail" id="fromemail" value="{{$mailProvider->fromemail}}">
						</fieldset>

						<fieldset class="form-group">
							<label>From Name:</label>
							<input class="form-control update-form-control" type="text" name="fromname" id="fromname" value="{{$mailProvider->fromname}}">
						</fieldset>

						<fieldset class="form-group">
							<label>Status:</label>
							<input class="form-control update-form-control" type="text" name="status" id="status" value="{{$mailProvider->status}}">
						</fieldset>
						
						<button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i>  Update</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection