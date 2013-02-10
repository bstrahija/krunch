<?php

use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*Schema::table('invoices', function($t) {
			$t->foreign('client_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('no action');
			$t->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('no action');
		});*/
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		/*Schema::table('invoices', function($t) {
			$t->dropForeign('invoices_client_id_foreign');
			$t->dropForeign('invoices_user_id_foreign');
		});*/
	}

}
