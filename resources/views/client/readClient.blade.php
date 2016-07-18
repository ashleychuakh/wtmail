@extends('layouts.app')

@include('sidenav')

@section('content')
	<div class="body-content overflow-mobile">
		<div class="row">
			<div class="col m12" style="padding:0 20px">
				<div class="readClient">
					<legend class="read-header">/Client Account Details</legend>
					@include('flash::message')
					<div class="readAccount-box overflow-x-box overflow-mobile">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Username</th>
									<th>Company</th>
									<th>Token</th>
									<th>Email</th>
									<th>Email Name</th>
									<th>Email Subject</th>
									<th>Mail Provider ID</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach($clients as $client)
								<tr>
									<td>{{$client->id}}</td>
									<td>{{$client->username}}</td>
									<td>{{$client->company}}</td>
									<td>{{$client->token}}</td>
									<td>{{$client->email}}</td>
									<td>{{$client->emailname}}</td>
									<td>{{$client->emailsubject}}</td>
									<td>{{$client->mailproviderid}}</td>
									<td><a class="read-update-a" href="/updateClient/{{$client->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
									<td><a class="read-update-a" href="/removeClient/{{$client->id}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
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