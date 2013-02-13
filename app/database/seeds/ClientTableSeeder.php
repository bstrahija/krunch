<?php

class ClientTableSeeder extends Seeder
{
	public function run()
	{
		Client::create(array(
			'user_id'     => 2,
			'email'       => 'info@bigdeal.si',
			'manager'     => 'Ana Eterović',
			'name'        => 'iMedia 2.0 d.o.o.',
			'address'     => 'Kolodvorska 20a',
			'city'        => 'Ljubljana',
			'zip'         => '1000',
			'country'     => 'Slovenia',
			'tax_num'     => 'SI25516957',
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
			'tax_num'     => '31321312312312312',
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
			'tax_num'     => '98438209809834',
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s'),
		));
	}
}
