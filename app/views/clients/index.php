<?php View::startSection('content'); ?>

	<h1>
		<?php echo trans('app.clients'); ?>
		<?php echo HTML::actionCreate(trans('app.new_client'), 'clients', array('icon' => 'plus-sign-alt', 'class' => 'btn btn-success')); ?>
	</h1>

	<?php if ($clients and ! empty($clients)) : ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th><?php echo trans('app.name'); ?></th>
					<th><?php echo trans('app.manager'); ?></th>
					<th><?php echo trans('app.email'); ?></th>
					<th><?php echo trans('app.when'); ?></th>
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
							<?php echo HTML::actionEdit(trans('app.edit'),     'clients', $client, array('icon' => 'pencil', 'class' => 'btn btn-primary btn-mini')); ?>
							<?php echo HTML::actionDelete(trans('app.delete'), 'clients', $client, array('icon' => 'trash',  'class' => 'btn btn-danger btn-mini')); ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	<?php endif; ?>

<?php View::stopSection(); ?>
