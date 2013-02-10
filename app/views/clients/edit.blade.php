@extends ('layouts.default')

@section ('content')
	@if ($client)
		<h1>Client [{{ $client->name }}]</h1>
		<hr>
		...

	@endif
@stop
