<?php

use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoices', function($t) {
			$t->increments('id')->unsigned();
			$t->string('invoice_num', 50);
			$t->string('title', 250);
			$t->text('notes');
			$t->float('amount');
			$t->float('discount');
			$t->integer('user_id')->unsigned();
			$t->integer('client_id')->unsigned();
			$t->float('tax');
			$t->string('currency', 3);
			$t->string('hash', 64);
			$t->string('template', 100)->nullable();
			$t->dateTime('sent_at')->nullable()->default(null);
			$t->dateTime('due_at')->nullable()->default(null);
			$t->dateTime('payed_at')->nullable()->default(null);
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
		Schema::drop('invoices');
	}

}
