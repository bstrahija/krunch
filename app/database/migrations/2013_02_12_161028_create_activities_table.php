<?php

use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activities', function($t){
			$t->increments('id')->unsigned();
			$t->string('message');
			$t->integer('user_id')->unsigned();
			$t->integer('client_id')->unsigned();
			$t->integer('invoice_id')->unsigned();
			$t->integer('payment_id')->nullable();
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
		Schema::drop('activities');
	}

}
