<?php View::startSection('content'); ?>

	<?php if ($client) : ?>
		<h1>
			Edit client [<?php echo $client->name; ?>]
			<?php echo HTML::actionBack('Back to overview', 'clients', array('icon' => 'arrow-left', 'class' => 'btn btn-inverse')); ?>
		</h1>

		<hr>

		<?php echo Form::open('clients/' . $client->id, 'PUT', array('class' => 'form-horizontal')); ?>
			<?php echo HTML::controlGroup('name',    'Name',    Input::old('name',    $client->name)); ?>
			<?php echo HTML::controlGroup('manager', 'Manager', Input::old('manager', $client->manager)); ?>
			<hr>
			<?php echo HTML::controlGroupTextarea('address', 'Address', Input::old('address', $client->address)); ?>
			<?php echo HTML::controlGroup('city', 'City', Input::old('city', $client->city)); ?>
			<?php echo HTML::controlGroup('country', 'Country', Input::old('country', $client->country)); ?>
			<hr>
			<?php echo HTML::controlSubmit('Save'); ?>
		<?php echo Form::close(); ?>
	<?php endif; ?>

<?php View::stopSection(); ?>
