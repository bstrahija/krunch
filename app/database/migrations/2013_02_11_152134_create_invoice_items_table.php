<?php

use Illuminate\Database\Migrations\Migration;

class CreateInvoiceItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoice_items', function($t) {
			$t->increments('id')->unsigned();
			$t->integer('invoice_id');
			$t->string('type', 50);
			$t->string('title');
			$t->float('quantity')->default(1);
			$t->float('unit_price');
			$t->float('amount');
			$t->integer('taxable')->default(1);
			$t->integer('order_key');
			$t->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('invoice_items');
	}

}
