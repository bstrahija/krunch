<?php

class UserTableSeeder extends Seeder
{
	public function run()
	{
		User::create(array(
			'email'       => 'admin@admin.com',
			'password'    => '$2y$10$9dKAFTN3/DBC/LLKeXxaV.qh8r7NOiA2FpTnyqV1fm.g7OcY6pV9m', // admin
			'role'        => 'admin',
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s'),
		));
		User::create(array(
			'email'       => 'boris@creolab.hr',
			'password'    => '$2y$10$9dKAFTN3/DBC/LLKeXxaV.qh8r7NOiA2FpTnyqV1fm.g7OcY6pV9m', // admin
			'role'        => 'admin',
			'first_name'  => 'Boris',
			'last_name'   => 'Strahija',
			'company'     => 'Creo',
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s'),
		));
	}
}
