@extends ('layouts.default')

@section ('content')
	<div class="login-form">
		<h2>Login</h2>

		<?php //echo '<pre>'; print_r(Session::get('errors')); echo '</pre>'; ?>

		<form method="POST" action="{{ URL::to('login') }}" accept-charset="utf-8" class="form-horizontal">
			<fieldset>
				<div class="control-group">
					<label class="control-label">Email:</label>
					<div class="controls"><input type="text" name="username" placeholder="Email"></div>
				</div>

				<div class="control-group">
					<label class="control-label">Password:</label>
					<div class="controls"><input type="password" name="password" placeholder="Password"></div>
				</div>

				<div class="control-group">
					<button type="submit" class="bth btn-primary">Login</button>
				</div>
			</fieldset>
		</form>
	</div>
@stop
