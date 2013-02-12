<h1>Clients</h1>

<?php if ($clients and ! empty($clients)) : ?>
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
			<?php foreach ($clients as $client) : ?>
				<tr>
					<td><?php echo $client->id; ?></td>
					<td><a href="<?php echo URL::edit($client); ?>"><?php echo $client->name; ?></a></td>
					<td><?php echo $client->manager; ?></td>
					<td><?php echo $client->email; ?></td>
					<td><?php echo $client->created_at; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
<?php endif; ?>
