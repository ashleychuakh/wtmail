@extends('layouts.app')

@include('sidenav')

@section('content')
	<div class="body-content overflow-mobile">
		<div class="row">
			<div class="col m12" style="padding:0 20px">
				<div class="readAccount">
					<legend class="read-header">/Account Details</legend>
					@include('flash::message')
					<div class="readAccount-box">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Username</th>
									<th>Email Address</th>
									<th>First Name</th>
									<th>User Type</th>
									<th>Status</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach($accounts as $account)
								<tr>
									<td>{{$account->id}}</td>
									<td>{{$account->username}}</td>
									<td>{{$account->email}}</td>
									<td>{{$account->firstname}}</td>
									<td>{{$account->usertype}}</td>
									<td>{{$account->status}}</td>
									<td><a class="read-update-a" href="/updateAccount/{{$account->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
									<td><a class="read-update-a" href="/removeAccount/{{$account->id}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>

									<!--
										<button class="btn btn-primary read-update-btn">
										<a class="read-update-a" href="/updateAccount/{{$account->username}}">Update</a></button></td>
									<td><button class="btn btn-primary read-update-btn">
										<a class="read-update-a" href="#">Remove</a></button></td>-->
								</tr>
								@endforeach
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection