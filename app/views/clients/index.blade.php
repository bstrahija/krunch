@extends ('layouts.default')

@section ('content')
	<h1>Clients</h1>

	@if ($clients and ! empty($clients))
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Company</th>
					<th>Email</th>
					<th>When</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($clients as $client)
					<tr>
						<td>{{ $client->id }}</td>
						<td>{{ $client->company }}</td>
						<td>{{ $client->email }}</td>
						<td>{{ $client->created_at }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@endif
@stop
