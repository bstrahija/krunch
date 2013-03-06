<?php View::startSection('content'); ?>

	<h1>
		<?php echo trans('app.new_client'); ?>
		<?php echo Html::actionBack(trans('app.back_to_overview'), 'clients', array('icon' => 'arrow-left', 'class' => 'btn btn-inverse')); ?>
	</h1>

	<hr>

	<?php echo Form::open('clients', 'POST', array('class' => 'form-horizontal')); ?>
		<?php echo Html::controlGroup('name',    trans('app.name'),    Input::old('name')); ?>
		<?php echo Html::controlGroup('manager', trans('app.manager'), Input::old('manager')); ?>
		<hr>
		<?php echo Html::controlGroupTextarea('address', trans('app.address'), Input::old('address')); ?>
		<?php echo Html::controlGroup('city', trans('app.city'), Input::old('city')); ?>
		<?php echo Html::controlGroup('country', trans('app.country'), Input::old('country')); ?>
		<hr>
		<?php echo Html::controlSubmit(trans('app.save')); ?>
	<?php echo Form::close(); ?>

<?php View::stopSection(); ?>
