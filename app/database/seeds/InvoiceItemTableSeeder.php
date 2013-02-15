<?php

class InvoiceItemTableSeeder extends Seeder
{
	public function run()
	{
		// First invoice
		InvoiceItem::create(array(
			'title'       => 'Usluge konzultiranja 2012/12',
			'invoice_id'  => 1,
			'type'        => 'service',
			'quantity'    => 1,
			'unit_price'  => 1000,
			'amount'      => 1000,
			'order_key'   => 1,
			'taxable'     => 0,
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s'),
		));
		InvoiceItem::create(array(
			'title'       => 'Dodatne usluge',
			'invoice_id'  => 1,
			'type'        => 'service',
			'quantity'    => 1,
			'unit_price'  => 150,
			'amount'      => 150,
			'order_key'   => 2,
			'taxable'     => 0,
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s'),
		));

		// Second invoice
		InvoiceItem::create(array(
			'title'       => 'Izrada Wordpress portala',
			'invoice_id'  => 2,
			'type'        => 'service',
			'quantity'    => 1,
			'unit_price'  => 4660,
			'amount'      => 4660,
			'order_key'   => 1,
			'taxable'     => 1,
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s'),
		));
		InvoiceItem::create(array(
			'title'       => 'Usluge konzultiranja',
			'invoice_id'  => 2,
			'type'        => 'service',
			'quantity'    => 5,
			'unit_price'  => 200,
			'amount'      => 1000,
			'order_key'   => 2,
			'taxable'     => 1,
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s'),
		));
		InvoiceItem::create(array(
			'title'       => 'Izrada geolokacijskog servisa',
			'invoice_id'  => 2,
			'type'        => 'service',
			'quantity'    => 1,
			'unit_price'  => 1000,
			'amount'      => 1000,
			'order_key'   => 3,
			'taxable'     => 1,
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s'),
		));
	}
}
