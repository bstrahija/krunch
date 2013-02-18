<?php View::startSection('content'); ?>

	<h1>
		Clients
		<?php echo HTML::actionCreate('New client', 'clients', array('icon' => 'plus-sign-alt', 'class' => 'btn btn-success')); ?>
	</h1>

	<?php if ($clients and ! empty($clients)) : ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Manager</th>
					<th>Email</th>
					<th>When</th>
					<th class="c"><i class="icon-cog"></i></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($clients as $client) : ?>
					<tr>
						<td><?php echo $client->id; ?></td>
						<td><a href="<?php echo URL::edit($client); ?>"><?php echo $client->name; ?></a></td>
						<td><?php echo $client->manager; ?></td>
						<td><?php echo $client->email; ?></td>
						<td><?php echo $client->created_at; ?></td>
						<td class="c">
							<?php echo HTML::actionEdit('Edit',     'clients', $client, array('icon' => 'pencil', 'class' => 'btn btn-primary btn-mini')); ?>
							<?php echo HTML::actionDelete('Delete', 'clients', $client, array('icon' => 'trash',  'class' => 'btn btn-danger btn-mini')); ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	<?php endif; ?>

<?php View::stopSection(); ?>
