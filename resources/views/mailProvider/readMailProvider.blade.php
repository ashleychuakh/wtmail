@extends('layouts.app')

@include('sidenav')

@section('content')
	<div class="body-content">
		<div class="row">
			<div class="col-md-offset-2 col-md-10">
				<div class="readAccount">
					<legend class="read-header">Mail Provider Details</legend>
					<div class="readAccount-box readMailP-box">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Driver</th>
									<th>Host</th>
									<th>Port</th>
									<th>Encryption</th>
									<th>Username</th>
									<th>Send Mail</th>
									<th>Pretend</th>
									<th>From E-mail</th>
									<th>From Name</th>
									<th>Status</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach($mailProviders as $mailProvider)
								<tr>
									<td>{{$mailProvider->id}}</td>
									<td>{{$mailProvider->name}}</td>
									<td>{{$mailProvider->driver}}</td>
									<td>{{$mailProvider->host}}</td>
									<td>{{$mailProvider->port}}</td>
									<td>{{$mailProvider->encryption}}</td>
									<td>{{$mailProvider->username}}</td>
									<td>{{$mailProvider->sendmail}}</td>
									<td>{{$mailProvider->pretend}}</td>
									<td>{{$mailProvider->fromemail}}</td>
									<td>{{$mailProvider->fromname}}</td>
									<td>{{$mailProvider->status}}</td>
									
									<td><a class="read-update-a" href="/updateMailProvider/{{$mailProvider->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
									<td><a class="read-update-a" href="/removeMailProvider/{{$mailProvider->id}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
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