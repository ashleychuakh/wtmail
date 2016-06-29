@extends('layouts.app')

@include('sidenav')

@section('content')
	<div class="body-content">
		<div class="row">
			<div class="col-md-offset-2 col-md-10">
				<div class="readAccount">
					<legend class="read-header">Tracking Data Details</legend>
					<div class="readAccount-box readMailP-box">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Client Token</th>
									<th>ipv4</th>
									<th>Mail Provider ID</th>
									<th>Status</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach($trackingdatas as $trackingdata)
								<tr>
									<td>{{$trackingdata->id}}</td>
									<td>{{$trackingdata->clienttoken}}</td>
									<td>{{$trackingdata->ipv4}}</td>
									<td>{{$trackingdata->mailproviderid}}</td>
									<td>{{$trackingdata->status}}</td>
									
									<td><a class="read-update-a" href="/updateTrackingData/{{$trackingdata->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
									<td><a class="read-update-a" href="/removeTrackingData/{{$trackingdata->id}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
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