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
			'currency'    => 'EUR',
			'template'    => 'creo',
			'hash'        => hash('md5', '2013/04'),
			'sent_at'     => date('Y-m-d H:i:s'),
			'due_at'      => date('Y-m-d H:i:s', strtotime('+15 day')),
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s'),
		));
		Invoice::create(array(
			'invoice_num' => '2012/27',
			'title'       => 'Mettle',
			'amount'      => '6660,00',
			'user_id'     => 2,
			'client_id'   => 3,
			'currency'    => 'KN',
			'hash'        => hash('md5', '2012/27'),
			'sent_at'     => date('Y-m-d H:i:s', strtotime('-3 day')),
			'due_at'      => date('Y-m-d H:i:s', strtotime('+15 day')),
			'created_at'  => date('Y-m-d H:i:s', strtotime('-3 day')),
			'updated_at'  => date('Y-m-d H:i:s', strtotime('-3 day')),
		));
		Invoice::create(array(
			'invoice_num' => '2013/03',
			'title'       => 'BigDeal račun za 2013/02',
			'amount'      => '900,00',
			'user_id'     => 2,
			'client_id'   => 1,
			'currency'    => 'EUR',
			'hash'        => hash('md5', '2013/03'),
			'due_at'      => date('Y-m-d H:i:s', strtotime('+30 day')),
			'created_at'  => date('Y-m-d H:i:s', strtotime('-1 day')),
			'updated_at'  => date('Y-m-d H:i:s', strtotime('-1 day')),
		));
		Invoice::create(array(
			'invoice_num' => '2013/01',
			'title'       => 'BigDeal račun za 2013/01',
			'amount'      => '1000,00',
			'user_id'     => 2,
			'client_id'   => 1,
			'currency'    => 'EUR',
			'hash'        => hash('md5', '2013/01'),
			'sent_at'     => date('Y-m-d H:i:s', strtotime('-2 day')),
			'due_at'      => date('Y-m-d H:i:s', strtotime('+15 day')),
			'payed_at'    => date('Y-m-d H:i:s', strtotime('-1 day')),
			'created_at'  => date('Y-m-d H:i:s', strtotime('-2 day')),
			'updated_at'  => date('Y-m-d H:i:s', strtotime('-2 day')),
		));
		Invoice::create(array(
			'invoice_num' => '2012/21',
			'title'       => 'Mobile Region Website',
			'amount'      => '750,00',
			'user_id'     => 2,
			'client_id'   => 2,
			'currency'    => 'KN',
			'hash'        => hash('md5', '2012/21'),
			'due_at'      => date('Y-m-d H:i:s', strtotime('+90 day')),
			'payed_at'    => date('Y-m-d H:i:s', strtotime('-1 day')),
			'created_at'  => date('Y-m-d H:i:s', strtotime('-3 day')),
			'updated_at'  => date('Y-m-d H:i:s', strtotime('-3 day')),
		));
		Invoice::create(array(
			'invoice_num' => '2012/32',
			'title'       => 'BigDeal račun za 2012/11',
			'amount'      => '1600,00',
			'user_id'     => 2,
			'client_id'   => 1,
			'currency'    => 'EUR',
			'hash'        => hash('md5', '2012/32'),
			'sent_at'     => date('Y-m-d H:i:s', strtotime('-3 day')),
			'due_at'      => date('Y-m-d H:i:s', strtotime('+120 day')),
			'created_at'  => date('Y-m-d H:i:s', strtotime('-3 day')),
			'updated_at'  => date('Y-m-d H:i:s', strtotime('-3 day')),
		));
	}
}
