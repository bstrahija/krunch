<?php View::startSection('content'); ?>

	<h1>
		Invoices
		<?php echo HTML::actionCreate('New invoice', 'invoices', array('icon' => 'plus-sign-alt', 'class' => 'btn btn-success')); ?>
	</h1>

	<?php if ($invoices and ! empty($invoices)) : ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Num</th>
					<th>Client</th>
					<th class="r">Amount</th>
					<th class="c">Status</th>
					<th>When</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($invoices as $invoice) : ?>
					<tr>
						<td><?php echo $invoice->id; ?></td>
						<td><a href="<?php echo URL::edit($invoice); ?>"><?php echo $invoice->title; ?></a></td>
						<td><?php echo $invoice->client->name; ?></td>
						<td class="r"><?php echo $invoice->amount; ?> <?php echo $invoice->currency($invoice); ?></td>
						<td style="color: #ddd;" class="c">
							<i class="icon-envelope" title="<?php echo $invoice->sent_at; ?>" style="<?php echo ($invoice->sent_at) ? 'color: #0a0;' : null ; ?>"></i> |
							<i class="icon-globe" title="<?php echo $invoice->payed_at; ?>" style="<?php echo ($invoice->payed_at) ? 'color: #0a0;' : 'color: #a00;' ; ?>"></i>
						</td>
						<td><?php echo $invoice->created_at; ?></td>
						<td>
							<?php echo HTML::actionShow('',         'invoices', $invoice, array('icon' => 'search', 'class' => 'btn btn-info btn-small', 'target' => '_blank')); ?>
							<?php echo HTML::actionEdit('Edit',     'invoices', $invoice, array('icon' => 'pencil', 'class' => 'btn btn-primary btn-small')); ?>
							<?php echo HTML::actionDelete('Delete', 'invoices', $invoice, array('icon' => 'trash',  'class' => 'btn btn-danger btn-small')); ?>

							<!-- <a href="<?php echo URL::show($invoice); ?>" class="btn btn-info btn-small"><i class="icon-search"></i></a>
							<a href="<?php echo URL::edit($invoice); ?>" class="btn btn-primary btn-small">Edit</a>
							<a href="<?php echo URL::delete($invoice); ?>" class="btn btn-danger btn-small">Delete</a> -->
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

		<?php echo $invoices->links(); ?>
	<?php endif; ?>

<?php View::stopSection(); ?>
