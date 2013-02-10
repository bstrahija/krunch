@extends ('layouts.default')

@section ('content')
	@if ($invoice)
		<h1>Invoice [{{ $invoice->invoice_num }}]</h1>
		<hr>

		<form action="" method="POST" class="form-horizontal">
			<div class="control-group">
				<label for="title" class="control-label">Title</label>
				<div class="controls">
					<input type="text" name="title" id="title" value="{{ $invoice->title }}">
				</div>
			</div>

			<div class="control-group">
				<label for="amount" class="control-label">Amount</label>
				<div class="controls">
					<div class="input-append">
						<input class="span2" id="amount" name="amount" type="text" value="{{ $invoice->amount }}">
						<span class="add-on">&euro;</span>
					</div>
				</div>
			</div>

			<div class="control-group">
				<label for="client_id" class="control-label">Client</label>
				<div class="controls">
					<select name="client_id" id="client_id">
						<option value="">-</option>
						@foreach ($clients as $client)
							<option {{ ($client->id == $invoice->client_id) ? 'selected="selected"' : null }} value="{{ $client->id }}">{{ $client->company }}</option>
						@endforeach
					</select>
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</div>
		</form>
	@endif
@stop
