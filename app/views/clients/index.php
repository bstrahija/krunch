<?php View::startSection('content'); ?>

	<h1>Clients</h1>

	<div ng-controller="ClientCtrl" class="ng-cloak">
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
				<tr ng-repeat="client in clients | orderBy:orderProp">
					<td>{{ client.id }}</td>
					<td><a href="">{{ client.name }}</a></td>
					<td>{{ client.manager }}</td>
					<td>{{ client.email }}</td>
					<td>{{ client.created_at }}</td>
				</tr>
			</tbody>
		</table>
	</div>

<?php View::stopSection(); ?>
