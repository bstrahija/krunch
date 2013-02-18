<?php View::startSection('content'); ?>

	<h1>
		New client
		<?php echo HTML::actionBack('Back to overview', 'clients', array('icon' => 'arrow-left', 'class' => 'btn btn-inverse')); ?>
	</h1>

	<hr>

	<?php echo Form::open('clients', 'POST', array('class' => 'form-horizontal')); ?>
			<div class="control-group">
				<label for="name" class="control-label">Name</label>
				<div class="controls">
					<input type="text" name="name" id="name" value="<?php echo Input::old('name'); ?>">
				</div>
			</div>

			<div class="control-group">
				<label for="manager" class="control-label">Manager</label>
				<div class="controls">
					<input type="text" name="manager" id="manager" value="<?php echo Input::old('manager'); ?>">
				</div>
			</div>

			<hr>

			<div class="control-group">
				<label for="address" class="control-label">Address</label>
				<div class="controls">
					<textarea name="address" id="address"><?php echo Input::old('address'); ?></textarea>
				</div>
			</div>

			<div class="control-group">
				<label for="city" class="control-label">City</label>
				<div class="controls">
					<input type="text" name="city" id="city" value="<?php echo Input::old('city'); ?>">
				</div>
			</div>

			<div class="control-group">
				<label for="country" class="control-label">Country</label>
				<div class="controls">
					<input type="text" name="country" id="country" value="<?php echo Input::old('country'); ?>">
				</div>
			</div>

			<hr>

			<div class="control-group">
				<div class="controls">
					<button type="subit" class="btn btn-primary">Save</button>
				</div>
			</div>
		<?php echo Form::close(); ?>

<?php View::stopSection(); ?>
