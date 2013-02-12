<?php View::startSection('content'); ?>

	<?php if ($invoice) : ?>
		<h1>Invoice [<?php echo $invoice->invoice_num; ?>]</h1>
		<hr>

		<?php if (Session::has('success')) : ?>
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				Saved!
			</div>
		<?php endif; ?>

		<?php if ($errors->any()) : ?>
			<div class="alert alert-error">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				Error!<br>

				<?php foreach ($errors->all() as $error) : ?>
					<?php echo $error; ?>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<?php echo Form::open('invoices/' . $invoice->id, 'PUT', array('class' => 'form-horizontal')); ?>
			<div class="control-group">
				<label for="title" class="control-label">Title</label>
				<div class="controls">
					<input type="text" name="title" id="title" value="<?php echo Input::old('title', $invoice->title); ?>">
				</div>
			</div>

			<div class="control-group">
				<label for="amount" class="control-label">Amount</label>
				<div class="controls">
					<div class="input-append">
						<input class="span2" id="amount" name="amount" type="text" value="<?php echo $invoice->amount; ?>">
						<span class="add-on">&euro;</span>
					</div>
				</div>
			</div>

			<div class="control-group">
				<label for="client_id" class="control-label">Client</label>
				<div class="controls">
					<select name="client_id" id="client_id">
						<option value="">-</option>
						<?php foreach ($clients as $client) : ?>
							<option <?php echo ($client->id == $invoice->client_id) ? 'selected="selected"' : null ; ?> value="<?php echo $client->id; ?>"><?php echo $client->name; ?></option>
						<?php endforeach; ?>
					</select>
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</div>
		<?php echo Form::close(); ?>
	<?php endif; ?>

<?php View::stopSection(); ?>
