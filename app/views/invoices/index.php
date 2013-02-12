<div ng-controller="invoiceCtrl">
	<h1>Invoices</h1>

	<?php if ($invoices and ! empty($invoices)) : ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Num</th>
					<th>Client</th>
					<th>When</th>
					<th>Status</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($invoices as $invoice) : ?>
					<tr>
						<td><?php echo $invoice->id; ?></td>
						<td><a href="<?php echo URL::edit($invoice); ?>"><?php echo $invoice->title; ?></a></td>
						<td><?php echo $invoice->client->name; ?></td>
						<td><?php echo $invoice->created_at; ?></td>
						<td style="color: #ddd;">
							<i class="icon-envelope" title="<?php echo $invoice->sent_at; ?>" style="<?php echo ($invoice->sent_at) ? 'color: #0a0;' : null ; ?>"></i> |
							<i class="icon-globe" title="<?php echo $invoice->payed_at; ?>" style="<?php echo ($invoice->payed_at) ? 'color: #0a0;' : 'color: #a00;' ; ?>"></i>
						</td>
						<td>
							<a href="<?php echo URL::show($invoice); ?>" class="btn btn-info btn-small"><i class="icon-search"></i></a>
							<a href="<?php echo URL::edit($invoice); ?>" class="btn btn-primary btn-small">Edit</a>
							<a href="<?php echo URL::delete($invoice); ?>" class="btn btn-danger btn-small">Delete</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

		<?php echo $invoices->links(); ?>
	<?php endif; ?>
</div>
