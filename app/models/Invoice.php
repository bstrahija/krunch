<?php

class Invoice extends Eloquent
{

	public function client()
	{
		$this->belongsTo('Client', 'client_id');
	}

}
