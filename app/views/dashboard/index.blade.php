@extends ('layouts.default')

@section ('content')
	<h1>Dashboard</h1>
	<hr>

	<ul>
		<li>
			Clients: <strong>{{ Client::count() }}</strong>
		</li>
		<li>
			Invoices: <strong>{{ Invoice::count() }}</strong>
		</li>
	</ul>
	<hr>

	{{{ HTML::to('clients', 'Clients', array('icon' => 'briefcase')) }}}<br>
	{{{ HTML::to('invoices', 'Invoices', array('icon' => 'book')) }}}<br>
@stop
