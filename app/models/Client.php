<?php

class Client extends Eloquent
{
	protected $table = 'users';

	public function invoices()
	{
		$this->hasMany('Invoice');
	}

	public static function all($columns = array())
	{
		return parent::where('role', 'client')->get();
	}
}
