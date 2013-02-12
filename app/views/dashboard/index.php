<h1>Dashboard</h1>
<hr>

<ul>
	<li>
		Clients: <strong><?php echo Client::count(); ?></strong>
	</li>
	<li>
		Invoices: <strong><?php echo Invoice::count(); ?></strong>
	</li>
</ul>
<hr>

<?php echo HTML::to('clients', 'Clients', array('icon' => 'briefcase')); ?><br>
<?php echo HTML::to('invoices', 'Invoices', array('icon' => 'book')); ?><br>
