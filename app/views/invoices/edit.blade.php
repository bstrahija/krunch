@extends ('layouts.default')

@section ('content')
	@if ($invoice)
		<h1>Invoice [{{ $invoice->invoice_num }}]</h1>
		<hr>

		@if (Session::has('success'))
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				Saved!
			</div>
		@endif

		@if ($errors->any())
			<div class="alert alert-error">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				Error!<br>

				@foreach ($errors->all() as $error)
					{{{ $error }}}
				@endforeach
			</div>
		@endif

		{{{ Form::open('invoices/' . $invoice->id, 'PUT', array('class' => 'form-horizontal')) }}}
			<div class="control-group">
				<label for="title" class="control-label">Title</label>
				<div class="controls">
					<input type="text" name="title" id="title" value="{{ Input::old('title', $invoice->title) }}">
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
							<option {{ ($client->id == $invoice->client_id) ? 'selected="selected"' : null }} value="{{ $client->id }}">{{ $client->name }}</option>
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
