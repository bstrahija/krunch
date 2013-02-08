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
			$t->float('amount');
			$t->integer('user_id');
			$t->integer('client_id');
			$t->dateTime('sent_at')->nullable()->default(null);
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
