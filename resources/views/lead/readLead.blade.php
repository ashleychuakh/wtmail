@extends('layouts.app')

@include('sidenav')

@section('content')
	<div class="body-content">
		<div class="row">
			<div class="col-md-offset-2 col-md-10">
				<div class="readClient">
					<legend class="read-header">Lead Details</legend>
					@include('flash::message')
					<div class="readAccount-box">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Email Address</th>
									<th>Company</th>
									<th>Phone</th>
									<th>Message</th>
									<th>Client ID</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach($leads as $lead)
								<tr>
									<td>{{$lead->id}}</td>
									<td>{{$lead->name}}</td>
									<td>{{$lead->email}}</td>
									<td>{{$lead->company}}</td>
									<td>{{$lead->phone}}</td>
									<td>{{$lead->message}}</td>
									<td>{{$lead->clientid}}</td>
									<td><a class="read-update-a" href="/updateLead/{{$lead->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
									<td><a class="read-update-a" href="/removeLead/{{$lead->id}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
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