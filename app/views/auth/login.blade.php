@extends ('layouts.default')

@section ('content')
	<h2>Login</h2>

	<?php echo '<pre>'; print_r(Session::get('errors')); echo '</pre>'; ?>

	<form action="" method="post">
		Username:
		<input type="text" name="username">
		<br>
		Password:
		<input type="password" name="password">
		<br>
		<button type="submit">Login</button>
	</form>
@stop
