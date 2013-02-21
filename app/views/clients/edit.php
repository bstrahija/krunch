<?php View::startSection('content'); ?>

	<?php if ($client) : ?>
		<h1>
			<?php echo trans('app.edit_client'); ?> [<?php echo $client->name; ?>]
			<?php echo HTML::actionBack(trans('app.back_to_overview'), 'clients', array('icon' => 'arrow-left', 'class' => 'btn btn-inverse')); ?>
		</h1>

		<hr>

		<?php echo Form::open('clients/' . $client->id, 'PUT', array('class' => 'form-horizontal')); ?>
			<?php echo HTML::controlGroup('name',    trans('app.name'),    Input::old('name',    $client->name)); ?>
			<?php echo HTML::controlGroup('manager', trans('app.manager'), Input::old('manager', $client->manager)); ?>
			<hr>
			<?php echo HTML::controlGroupTextarea('address', trans('app.address'), Input::old('address', $client->address)); ?>
			<?php echo HTML::controlGroup('city', trans('app.city'), Input::old('city', $client->city)); ?>
			<?php echo HTML::controlGroup('country', trans('app.country'), Input::old('country', $client->country)); ?>
			<hr>
			<?php echo HTML::controlSubmit(trans('app.save')); ?>
		<?php echo Form::close(); ?>
	<?php endif; ?>

<?php View::stopSection(); ?>
