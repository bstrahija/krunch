<html>
<head>
	<title>Inoice: {{ $invoice->invoice_num }}</title>
	<style>
	body { color: #333; font-size: 62.5%; }
	th   { text-align: left; }
	th.r { text-align: right; }
	td.r { text-align: right; }

	h1 { font-size: 52px; color: #666666; }
	h1 em { color: #555555; font-size: 62px; }
	h2 { font-size: 36px; color: #444444; }
	h3 { font-size: 28px; color: #555555; }
	p  { font-size: 22px; }

	.client p  { font-size: 20px; }
	.client h2 { font-size: 40px; }

	.summary {  }
	.summary th   { background-color: #555555; color: #fff; font-weight: bold; text-align: center; padding: 5px 12px; font-size: 26px; }
	.summary th.r { text-align: right; }
	.summary td   { border-bottom: 1px solid #f2f2f2; border-right: 1px solid #f2f2f2; border-left: 1px solid #f2f2f2; color: #333; font-size: 22px; }
	.summary .sum td    { border-top: 1px solid #555555; font-size: 32px; }

	.footer { text-align: center; font-size: 20px; color: #888888; }
	</style>
</head>
<body>
<table width="540" cellpadding="0" cellspacing="0" border="0">
	<thead>
		<tr>
			<th>
				<img src="<?php echo URL::to('pdf/default/assets/default_logo.png'); ?>" width="80">
			</th>
			<th class="r">
				<h1>
					Račun R2<br>
					<em>{{ $invoice->invoice_num }}</em>
					<br>
				</h1>
			</th>
		</tr>
		<tr valign="bottom">
			<td>
				<br><br>
				<p>
					<h3>{{ $invoice->user->company }}</h3>
					{{ $invoice->user->address }}<br>
					{{ $invoice->user->zip }} {{ $invoice->user->city }}, {{ $invoice->user->country }}<br>
					<strong>OIB:</strong> {{ $invoice->user->tax_num }}
				</p>
				<p>
					@if (isset($invoice->user->phone))
						<strong>T:</strong> {{ $invoice->user->phone }}<br>
					@endif
					@if (isset($invoice->user->mobile))
						<strong>M:</strong> {{ $invoice->user->mobile }}<br>
					@endif
					<strong>E:</strong> {{ $invoice->user->email }}<br>
					<strong>W:</strong> {{ $invoice->user->web }}<br>
				</p>
			</td>
			<td class="r client">
				<br>
				<p>
					<strong>Datum:</strong> {{ date('d.m.Y.', strtotime($invoice->created_at)) }}<br>
					<strong>Rok plaćanja:</strong> {{ date('d.m.Y.', strtotime($invoice->due_at)) }}
				</p>

				<h2>{{ $invoice->client->name }}</h2>
				<p>
					{{ $invoice->client->address }}<br>
					{{ $invoice->client->zip }} {{ $invoice->client->city }}, {{ $invoice->client->country }}<br>
					<strong>Porezni broj:</strong> {{ $invoice->client->tax_num }}<br>
				</p>
			</td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td colspan="2">
				<br><br><br><br><br>

				@if ($invoice->items)
					<table class="summary" width="540" cellpadding="5">
						<tr>
							<th width="300">Naziv</th>
							<th width="60">Količina</th>
							<th width="80">Jed. cijena</th>
							<th width="100" class="r">Cijena</th>
						</tr>

						@foreach ($invoice->items as $item)
							<tr>
								<td>{{ $item->title }}</td>
								<td class="r">{{ (int) $item->quantity }}</td>
								<td class="r">{{ $item->unit_price }} {{ $invoice->currency }}</td>
								<td class="r"><strong>{{ $item->amount }} {{ $invoice->currency }}</strong></td>
							</tr>
						@endforeach
						<tr><td></td><td></td><td></td></tr>

						<tr class="sum">
							<td><strong>Ukupno</strong></td>
							<td colspan="3" class="r"><strong>{{ $invoice->amount }} {{ $invoice->currency($invoice) }}</strong></td>
						</tr>
					</table>
				@endif

				<br><br><br><br><br>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<p>
					{{ $invoice->notes }}

					Uplata na žiro račun br. <strong>{{ $invoice->user->account_num }} </strong>
					sa pozivom na broj <strong>02-{{ str_replace("/", "", $invoice->invoice_num) }}</strong><br>
					<br>
					Podaci za uplate iz inozemstva:<br>
					SWIFT: <strong>{{ $invoice->user->swift }}</strong><br>
					IBAN: <strong>{{ $invoice->user->iban }}</strong><br>
					<br>
					Račun izrađen na računalu, te je valjan bez pečata i potpisa.
					<br>
				</p>
			</td>
		</tr>

		<tr>
			<td colspan="2" class="r">
				<p>
					za {{ $invoice->user->company }}<br>
					{{ $invoice->user->first_name }} {{ $invoice->user->first_name }}<br>
					<br><br><br><br>
				</p>
			</td>
		</tr>
	</tbody>
</table>
</body>
</html>
