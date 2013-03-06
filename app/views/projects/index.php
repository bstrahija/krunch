<?php View::startSection('content'); ?>

	<h1>
		<?php echo trans('app.projects'); ?>
		<?php echo Html::actionCreate(trans('app.new_project'), 'projects', array('icon' => 'plus-sign-alt', 'class' => 'btn btn-success')); ?>
	</h1>

	<?php if ($projects and ! empty($projects)) : ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th><?php echo trans('app.title'); ?></th>
					<th><?php echo trans('app.client'); ?></th>
					<th><?php echo trans('app.when'); ?></th>
					<th class="c"><i class="icon-cog"></i></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($projects as $project) : ?>
					<tr>
						<td><?php echo $project->id; ?></td>
						<td><a href="<?php echo URL::edit($project); ?>"><?php echo $project->title; ?></a></td>
						<td><?php echo $project->client->name; ?></td>
						<td><?php echo $project->created_at; ?></td>
						<td class="c">
							<?php echo Html::actionShow('',         'projects', $project, array('icon' => 'search', 'class' => 'btn btn-info btn-mini')); ?>
							<?php echo Html::actionEdit(trans('app.edit'),     'projects', $project, array('icon' => 'pencil', 'class' => 'btn btn-primary btn-mini')); ?>
							<?php echo Html::actionDelete(trans('app.delete'), 'projects', $project, array('icon' => 'trash',  'class' => 'btn btn-danger btn-mini')); ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

		<?php echo $projects->links(); ?>
	<?php endif; ?>

<?php View::stopSection(); ?>
