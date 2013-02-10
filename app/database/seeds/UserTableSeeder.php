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
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s'),
		));
		User::create(array(
			'email'       => 'info@bigdeal.si',
			'password'    => '$2y$10$9dKAFTN3/DBC/LLKeXxaV.qh8r7NOiA2FpTnyqV1fm.g7OcY6pV9m', // admin
			'role'        => 'client',
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s'),
		));
	}
}
