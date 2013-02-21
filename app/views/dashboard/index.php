<?php View::startSection('content'); ?>

	<h1><?php echo trans('app.dashboard'); ?></h1>
	<hr>

	<ul>
		<li>
			<?php echo trans('app.clients'); ?>: <strong><?php echo Client::count(); ?></strong>
		</li>
		<li>
			<?php echo trans('app.invoices'); ?>: <strong><?php echo Invoice::count(); ?></strong>
		</li>
		<li>
			<?php echo trans('app.projects'); ?>: <strong><?php echo Project::count(); ?></strong>
		</li>
	</ul>

<?php View::stopSection(); ?>
