<?php

class Invoice extends Eloquent
{

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function client()
	{
		return $this->belongsTo('Client', 'client_id');
	}

}
