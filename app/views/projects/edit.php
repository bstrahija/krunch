<?php View::startSection('content'); ?>

	<?php if ($client) : ?>
		<h1>Client [<?php echo $client->name; ?>]</h1>
		<hr>
		...

	<?php endif; ?>

<?php View::stopSection(); ?>
