@extends('layouts.app')

@include('sidenav')

@section('content')
	<div class="body-content">
		<div class="row">
			<div class="col-md-offset-2 col-md-9">
				<legend class="read-header">Update Account</legend>
				<div class="update-box">
					@include('flash::message')
					<form class="update-form" method="post" action="/updateAccount/{{$account->id}}">
						{!! csrf_field() !!}
						<fieldset class="form-group">
							<label>Username:</label>
							<input class="form-control update-form-control" type="text" name="username" id="username" value="{{$account->username}}" readonly>
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
							<label>Email Address:</label>
							<input class="form-control update-form-control" type="email" name="email" id="email" value="{{$account->email}}">
						</fieldset>

						<fieldset class="form-group">
							<label>First Name:</label>
							<input class="form-control update-form-control" type="text" name="firstname" id="firstname" value="{{$account->firstname}}">
						</fieldset>

						<fieldset class="form-group">
							<label>User Type:</label><br>
							<input class="form-control update-form-control" type="text" name="usertype" id="usertype" value="{{$account->usertype}}">
							<!--<select class="selectpicker" name="usertype">
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>-->
						</fieldset>

						<fieldset class="form-group">
							<label>Status:</label>
							<input class="form-control update-form-control" type="text" name="status" id="status" value="{{$account->status}}">
						</fieldset>

						<button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i>  Update</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection