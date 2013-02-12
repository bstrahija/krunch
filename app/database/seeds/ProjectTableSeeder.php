<?php

class ProjectTableSeeder extends Seeder
{
	public function run()
	{
		Project::create(array(
			'user_id'     => 2,
			'client_id'   => 1,
			'title'       => 'BigDeal 2.0',
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s'),
		));
		Project::create(array(
			'user_id'     => 2,
			'client_id'   => 1,
			'title'       => 'Diners Nagradna Igra',
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s'),
		));
		Project::create(array(
			'user_id'     => 2,
			'client_id'   => 2,
			'title'       => 'Listaj',
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s'),
		));
		Project::create(array(
			'user_id'     => 2,
			'client_id'   => 2,
			'title'       => 'Mobile Region',
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s'),
		));
		Project::create(array(
			'user_id'     => 2,
			'client_id'   => 3,
			'title'       => 'Mettle',
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s'),
		));
	}
}
