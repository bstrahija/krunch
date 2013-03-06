<?php View::startSection('content'); ?>

	<h1>
		<?php echo trans('app.invoices'); ?>
		<?php echo Html::actionCreate(trans('app.new_invoice'), 'invoices', array('icon' => 'plus-sign-alt', 'class' => 'btn btn-success')); ?>
	</h1>

	<?php if ($invoices and ! empty($invoices)) : ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th><?php echo trans('app.num'); ?></th>
					<th><?php echo trans('app.client'); ?></th>
					<th class="r"><?php echo trans('app.amount'); ?></th>
					<th class="c"><?php echo trans('app.status'); ?></th>
					<th><?php echo trans('app.when'); ?></th>
					<th class="c"><i class="icon-cog"></i></th>
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
						<td class="c">
							<?php echo Html::actionShow('',         'invoices', $invoice, array('icon' => 'search', 'class' => 'btn btn-info btn-mini', 'target' => '_blank')); ?>
							<?php echo Html::to('invoices/'.$invoice->id.'/send', trans('app.send'), array('icon' => 'envelope', 'class' => 'btn btn-info btn-mini')); ?>
							<?php echo Html::actionEdit(trans('app.edit'),     'invoices', $invoice, array('icon' => 'pencil', 'class' => 'btn btn-primary btn-mini')); ?>
							<?php echo Html::actionDelete(trans('app.delete'), 'invoices', $invoice, array('icon' => 'trash',  'class' => 'btn btn-danger btn-mini')); ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

		<?php // echo $invoices->links(); ?>
	<?php endif; ?>

<?php View::stopSection(); ?>
