@extends ('layouts.default')

@section ('content')
	<h1>Invoices</h1>

	@if ($invoices and ! empty($invoices))
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Num</th>
					<th>Client</th>
					<th>When</th>
					<th>Status</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($invoices as $invoice)
					<tr>
						<td>{{ $invoice->id }}</td>
						<td><a href="{{ URL::edit($invoice) }}">{{ $invoice->title }}</a></td>
						<td>{{ $invoice->client->company }}</td>
						<td>{{ $invoice->created_at }}</td>
						<td style="color: #999;">
							<i class="icon-envelope" title="{{ $invoice->sent_at }}" style="{{ ($invoice->sent_at) ? 'color: #0a0;' : null }}"></i> |
							<i class="icon-globe" title="{{ $invoice->payed_at }}" style="{{ ($invoice->payed_at) ? 'color: #0a0;' : 'color: #a00;' }}"></i>
						</td>
						<td>
							<a href="{{ URL::show($invoice) }}" class="btn btn-info btn-small"><i class="icon-search"></i></a>
							<a href="{{ URL::edit($invoice) }}" class="btn btn-primary btn-small">Edit</a>
							<a href="{{ URL::delete($invoice) }}" class="btn btn-danger btn-small">Delete</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>

		{{{ $invoices->links() }}}
	@endif
@stop
