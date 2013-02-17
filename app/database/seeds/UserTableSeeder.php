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
			'address'     => 'Milke Trnine 63',
			'zip'         => '40000',
			'city'        => 'Čakovec',
			'country'     => 'Croatia',
			'phone'       => null,
			'mobile'      => '+385 992021134',
			'web'         => 'http://creolab.hr',
			'account_num' => '2340009-1166032923',
			'tax_num'     => '36888607165',
			'iban'        => 'HR5623400091166032923',
			'swift'       => 'PBZGHR2X',
			'tax'         => 25.00,
			'notes'       => 'Račun izrađen na računalu, te je valjan bez pečata i potpisa.',
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s'),
		));
		User::create(array(
			'email'       => 'srle@srle.hr',
			'password'    => '$2y$10$9dKAFTN3/DBC/LLKeXxaV.qh8r7NOiA2FpTnyqV1fm.g7OcY6pV9m', // admin
			'role'        => 'admin',
			'first_name'  => 'Srđan',
			'last_name'   => 'Srđenović',
			'company'     => 'Dot Studio',
			'address'     => 'Zrinsko Frankopanska 12',
			'zip'         => '40000',
			'city'        => 'Čakovec',
			'country'     => 'Croatia',
			'phone'       => '+385 40637013',
			'mobile'      => null,
			'web'         => 'http://dot-studio.hr',
			'account_num' => '2340009-1234567890',
			'tax_num'     => '12345123123',
			'iban'        => 'HR554376597349857349',
			'swift'       => 'PBZGHR2X',
			'tax'         => 25.00,
			'notes'       => 'Račun izrađen na računalu, te je valjan bez pečata i potpisa.',
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s'),
		));
	}
}
