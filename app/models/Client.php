<?php

class Client extends Eloquent
{
	protected $table = 'users';

	public function invoices()
	{
		return $this->hasMany('Invoice');
	}
}
