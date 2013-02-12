<?php

class Payment extends Eloquent
{
	protected $table = 'payments';

	public function invoice()
	{
		return $this->belongsTo('Invoice');
	}

	public function client()
	{
		$this->belongsTo('Client');
	}
}
