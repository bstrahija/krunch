<?php View::startSection('content'); ?>

	<h1>Dashboard</h1>
	<hr>

	<ul>
		<li>
			Clients: <strong><?php echo Client::count(); ?></strong>
		</li>
		<li>
			Invoices: <strong><?php echo Invoice::count(); ?></strong>
		</li>
		<li>
			Projects: <strong><?php echo Project::count(); ?></strong>
		</li>
	</ul>

<?php View::stopSection(); ?>
