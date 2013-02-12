<?php

class Activity extends Eloquent
{
	protected $table = 'activities';

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function client()
	{
		return $this->belongsTo('Client');
	}

	public function invoice()
	{
		return $this->belongsTo('Invoice');
	}

	public function payment()
	{
		return $this->belongsTo('Payment');
	}

}
