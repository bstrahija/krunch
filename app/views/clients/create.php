<?php View::startSection('content'); ?>

	<h1>
		<?php echo trans('app.new_client'); ?>
		<?php echo HTML::actionBack(trans('app.back_to_overview'), 'clients', array('icon' => 'arrow-left', 'class' => 'btn btn-inverse')); ?>
	</h1>

	<hr>

	<?php echo Form::open('clients', 'POST', array('class' => 'form-horizontal')); ?>
		<?php echo HTML::controlGroup('name',    trans('app.name'),    Input::old('name')); ?>
		<?php echo HTML::controlGroup('manager', trans('app.manager'), Input::old('manager')); ?>
		<hr>
		<?php echo HTML::controlGroupTextarea('address', trans('app.address'), Input::old('address')); ?>
		<?php echo HTML::controlGroup('city', trans('app.city'), Input::old('city')); ?>
		<?php echo HTML::controlGroup('country', trans('app.country'), Input::old('country')); ?>
		<hr>
		<?php echo HTML::controlSubmit(trans('app.save')); ?>
	<?php echo Form::close(); ?>

<?php View::stopSection(); ?>
