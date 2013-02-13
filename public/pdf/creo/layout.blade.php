<html>
<head>
	<title>Inoice: {{ $invoice->invoice_num }}</title>
	<style>
	body { font-family: Helvetica, Arial, sans-serif; color: #333; font-size: 62.5%; }
	th   { text-align: left; }
	th.r { text-align: right; }
	td.r { text-align: right; }

	h1 { font-size: 82px; }
	h2 { font-size: 60px; }
	p  { font-size: 26px; }

	.summary {  }
	.summary th   { background-color: #67906d; color: #fff; font-weight: bold; text-align: center; padding: 5px 12px; font-size: 26px; }
	.summary th.r { text-align: right; }
	.summary td   { border-bottom: 1px solid #f2f2f2; border-right: 1px solid #f2f2f2; border-left: 1px solid #f2f2f2; color: #333; font-size: 26px; }
	.summary .sum td    { border-top: 1px solid #67906d; font-size: 32px; }
	</style>
</head>
<body>
<table width="540" cellpadding="0" cellspacing="0" border="0">
	<thead>
		<tr>
			<th>
				<img src="<?php echo URL::to('pdf/creo/assets/logo.png'); ?>" width="180">
				<br><br>
			</th>
			<th class="r">
				<h1>Račun R2: <em>{{ $invoice->invoice_num }}</em></h1>
				<br><br>
			</th>
		</tr>
		<tr valign="bottom">
			<td>
				<p>
					{{ $invoice->user->address }}<br>
					{{ $invoice->user->zip }} {{ $invoice->user->city }}, {{ $invoice->user->country }}<br>
				</p>
				<p>
					@if (isset($invoice->user->phone))
						{{ $invoice->user->phone }}<br>
					@endif
					@if (isset($invoice->user->mobile))
						{{ $invoice->user->mobile }}<br>
					@endif
					{{ $invoice->user->email }}<br>
					{{ $invoice->user->web }}
				</p>
			</td>
			<td class="r">
				<h2>{{ $invoice->client->name }}</h2>
				<p>
					{{ $invoice->client->address }}<br>
					{{ $invoice->client->zip }} {{ $invoice->client->city }}, {{ $invoice->client->country }}
				</p>
				<p>
					<strong>Porezni broj:</strong>
					{{ $invoice->client->tax_num }}
				</p>
			</td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td colspan="2">
				<br><br><br>

				<table class="summary" width="540" cellpadding="5">
					<tr>
						<th>Naziv</th>
						<th class="r">Cijena &euro;</th>
						<th class="r">Cijena kn</th>
					</tr>

					<tr>
						<td>Neka usluge</td>
						<td class="r">1.000,00 &euro;</td>
						<td class="r">7.593,23 kn</td>
					</tr>
					<tr><td></td><td></td><td></td></tr>

					<tr class="sum">
						<td>Ukupno</td>
						<td class="r">1.000,00 &euro;</td>
						<td class="r">7.593,23 kn</td>
					</tr>
				</table>

				<br><br><br>
			</td>
		</tr>
	</tbody>
</table>
</body>
</html>
