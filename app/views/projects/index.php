<?php View::startSection('content'); ?>

	<h1>
		Projects
		<?php echo HTML::actionCreate('New project', 'projects', array('icon' => 'plus-sign-alt', 'class' => 'btn btn-success')); ?>
	</h1>

	<?php if ($projects and ! empty($projects)) : ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Title</th>
					<th>Client</th>
					<th>When</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($projects as $project) : ?>
					<tr>
						<td><?php echo $project->id; ?></td>
						<td><a href="<?php echo URL::edit($project); ?>"><?php echo $project->title; ?></a></td>
						<td><?php echo $project->client->name; ?></td>
						<td><?php echo $project->created_at; ?></td>
						<td>
							<?php echo HTML::actionShow('',         'projects', $project, array('icon' => 'search', 'class' => 'btn btn-info btn-small')); ?>
							<?php echo HTML::actionEdit('Edit',     'projects', $project, array('icon' => 'pencil', 'class' => 'btn btn-primary btn-small')); ?>
							<?php echo HTML::actionDelete('Delete', 'projects', $project, array('icon' => 'trash',  'class' => 'btn btn-danger btn-small')); ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

		<?php echo $projects->links(); ?>
	<?php endif; ?>

<?php View::stopSection(); ?>
