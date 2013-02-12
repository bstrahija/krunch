<?php

use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payments', function($t)
		{
			$t->increments('id')->unsigned();
			$t->float('amount');
			$t->integer('invoice_id')->unsigned();
			$t->integer('client_id')->unsigned();
			$t->text('notes');
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
		Schema::drop('payments');
	}

}
