<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call('UserTableSeeder');
		$this->call('ClientTableSeeder');
		$this->call('ProjectTableSeeder');
		$this->call('InvoiceTableSeeder');
		$this->call('InvoiceItemTableSeeder');
	}

}
