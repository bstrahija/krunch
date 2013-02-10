<?php

class InvoiceTableSeeder extends Seeder
{
	public function run()
	{
		Invoice::create(array(
			'invoice_num' => '2013/04',
			'title'       => 'BigDeal račun za 2013/03',
			'amount'      => '1150,00',
			'user_id'     => 2,
			'client_id'   => 1,
			'sent_at'     => date('Y-m-d H:i:s'),
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s'),
		));
		Invoice::create(array(
			'invoice_num' => '2013/03',
			'title'       => 'BigDeal račun za 2013/02',
			'amount'      => '900,00',
			'user_id'     => 2,
			'client_id'   => 1,
			'sent_at'     => date('Y-m-d H:i:s', strtotime('-1 day')),
			'created_at'  => date('Y-m-d H:i:s', strtotime('-1 day')),
			'updated_at'  => date('Y-m-d H:i:s', strtotime('-1 day')),
		));
		Invoice::create(array(
			'invoice_num' => '2013/01',
			'title'       => 'BigDeal račun za 2013/01',
			'amount'      => '1000,00',
			'user_id'     => 2,
			'client_id'   => 1,
			'sent_at'     => date('Y-m-d H:i:s', strtotime('-2 day')),
			'created_at'  => date('Y-m-d H:i:s', strtotime('-2 day')),
			'updated_at'  => date('Y-m-d H:i:s', strtotime('-2 day')),
		));
		Invoice::create(array(
			'invoice_num' => '2012/32',
			'title'       => 'BigDeal račun za 2012/11',
			'amount'      => '1600,00',
			'user_id'     => 2,
			'client_id'   => 1,
			'sent_at'     => date('Y-m-d H:i:s', strtotime('-3 day')),
			'created_at'  => date('Y-m-d H:i:s', strtotime('-3 day')),
			'updated_at'  => date('Y-m-d H:i:s', strtotime('-3 day')),
		));
	}
}
