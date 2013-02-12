<?php

use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients', function($t) {
			$t->increments('id')->unsigned();
			$t->integer('user_id')->unsigned();
			$t->string('name', 250);
			$t->string('manager', 250);
			$t->string('email', 250);
			$t->text('address');
			$t->string('city');
			$t->string('zip');
			$t->string('country');
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
		Schema::drop('clients');
	}

}
