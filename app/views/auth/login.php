<?php View::startSection('content'); ?>

<div class="login-form">
	<h2><?php echo trans('app.login'); ?></h2>

	<?php //echo '<pre>'; print_r(Session::get('errors')); echo '</pre>'; ?>

	<form method="POST" action="<?php echo URL::to('login'); ?>" accept-charset="utf-8" class="form-horizontal">
		<fieldset>
			<div class="control-group">
				<label class="control-label"><?php echo trans('app.email'); ?>:</label>
				<div class="controls"><input type="text" name="username" placeholder="<?php echo trans('app.email'); ?>"></div>
			</div>

			<div class="control-group">
				<label class="control-label"><?php echo trans('app.password'); ?>:</label>
				<div class="controls"><input type="password" name="password" placeholder="<?php echo trans('app.password'); ?>"></div>
			</div>

			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn btn-primary"><?php echo trans('app.login'); ?></button>
				</div>
			</div>
		</fieldset>
	</form>
</div>

<?php View::stopSection(); ?>
