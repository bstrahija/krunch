<?php View::startSection('content'); ?>

	<?php if ($invoice) : ?>
		<h1>
			Send invoice [<?php echo $invoice->invoice_num; ?>]
		</h1>

		<hr>

		<?php echo Form::open("invoices/{$invoice->id}/send", 'POST', array('class' => 'form-horizontal')); ?>

			<?php echo Html::controlGroup('to', 'Send to', $invoice->client->email); ?>
			<?php echo Html::controlSubmit('Send'); ?>

		<?php echo Form::close(); ?>
	<?php endif; ?>

<?php View::stopSection(); ?>
