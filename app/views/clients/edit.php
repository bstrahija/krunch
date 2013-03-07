<?php View::startSection('content'); ?>

	<?php if ($client) : ?>
		<h1>
			<?php echo trans('app.edit_client'); ?> [<?php echo $client->name; ?>]
			<?php echo Html::actionBack(trans('app.back_to_overview'), 'clients', array('icon' => 'arrow-left', 'class' => 'btn btn-inverse')); ?>
		</h1>

		<hr>

		<?php echo Form::open(array('action' => 'clients/' . $client->id, 'method' => 'PUT', 'class' => 'form-horizontal')); ?>
			<?php echo Html::controlGroup('name',    trans('app.name'),    Input::old('name',    $client->name)); ?>
			<?php echo Html::controlGroup('manager', trans('app.manager'), Input::old('manager', $client->manager)); ?>
			<hr>
			<?php echo Html::controlGroupTextarea('address', trans('app.address'), Input::old('address', $client->address)); ?>
			<?php echo Html::controlGroup('city', trans('app.city'), Input::old('city', $client->city)); ?>
			<?php echo Html::controlGroup('country', trans('app.country'), Input::old('country', $client->country)); ?>
			<hr>
			<?php echo Html::controlSubmit(trans('app.save')); ?>
		<?php echo Form::close(); ?>
	<?php endif; ?>

<?php View::stopSection(); ?>
