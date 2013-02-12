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
			'account_num' => '2340009-1166032923',
			'iban'        => 'HR5623400091166032923',
			'swift'       => 'PBZGHR2X',
			'tax'         => 25.00,
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s'),
		));
	}
}
