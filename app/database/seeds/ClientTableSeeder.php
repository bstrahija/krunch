<?php

class ClientTableSeeder extends Seeder
{
	public function run()
	{
		Client::create(array(
			'user_id'     => 2,
			'email'       => 'info@bigdeal.si',
			'manager'     => 'Ana Eterović',
			'name'        => 'BigDeal',
			'city'        => 'Ljubljana',
			'zip'         => '1000',
			'country'     => 'Slovenia',
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s'),
		));
		Client::create(array(
			'user_id'     => 2,
			'email'       => 'info@alias.hr',
			'manager'     => 'Miroslav Lisjak',
			'name'        => 'Alias',
			'city'        => 'Čakovec',
			'zip'         => '40000',
			'country'     => 'Croatia',
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s'),
		));
		Client::create(array(
			'user_id'     => 2,
			'email'       => 'info@dot-studio.hr',
			'manager'     => 'Srđan Srđenović',
			'name'        => 'Dot Studio',
			'city'        => 'Čakovec',
			'zip'         => '40000',
			'country'     => 'Croatia',
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s'),
		));
	}
}
