<?php

class Client extends Eloquent
{
	protected $table = 'clients';

	public function invoices()
	{
		return $this->hasMany('Invoice');
	}

	public function payments()
	{
		$this->hasMany('Payment');
	}
}
