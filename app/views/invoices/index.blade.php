@extends ('layouts.default')

@section ('content')
	<h1>Invoices</h1>

	@if ($invoices and ! empty($invoices))
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Num</th>
					<th>When</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($invoices as $invoice)
					<tr>
						<td>{{ $invoice->id }}</td>
						<td>{{ $invoice->title }}</td>
						<td>{{ $invoice->created_at }}</td>
						<td>
							<a href="{{ URL::edit($invoice) }}" class="btn btn-info btn-small">Edit</a>
							<a href="{{ URL::delete($invoice) }}" class="btn btn-danger btn-small">Delete</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@endif
@stop
