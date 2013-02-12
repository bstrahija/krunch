<?php View::startSection('content'); ?>

	<h1>Clients</h1>

	<?php if ($clients and ! empty($clients)) : ?>
		<div ng-controller="clientCtrl">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Manager</th>
						<th>Email</th>
						<th>When</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="client in clients">
						<td>{{ client.id }}</td>
						<td><a href="">{{ client.name }}</a></td>
						<td>{{ client.manager }}</td>
						<td>{{ client.email }}</td>
						<td>{{ client.created_at }}</td>
					</tr>
				</tbody>
			</table>
		</div>
	<?php endif; ?>

<?php View::stopSection(); ?>
