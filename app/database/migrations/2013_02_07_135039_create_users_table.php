<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($t) {
			$t->increments('id')->unsigned();
			$t->string('email', 250);
			$t->string('password', 200);
			$t->string('first_name', 100)->nullable();
			$t->string('last_name', 100)->nullable();
			$t->string('company', 100)->nullable();
			$t->string('account_num', 100)->nullable();
			$t->string('iban', 100)->nullable();
			$t->string('swift', 100)->nullable();
			$t->float('tax', 100)->nullable();
			$t->string('image', 250)->nullable();
			$t->string('role', 10)->default('admin');
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
		Schema::drop('users');
	}

}
