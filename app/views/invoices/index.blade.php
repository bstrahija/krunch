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
				</tr>
			</thead>
			<tbody>
				@foreach ($invoices as $invoice)
					<tr>
						<td>{{ $invoice->id }}</td>
						<td>{{ $invoice->title }}</td>
						<td>{{ $invoice->created_at }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@endif
@stop
