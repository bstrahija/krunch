<?php

class Client extends Eloquent
{
	protected $table = 'clients';

	public function invoices()
	{
		return $this->hasMany('Invoice');
	}

	public function projects()
	{
		return $this->hasMany('Project');
	}

	public function payments()
	{
		return $this->hasMany('Payment');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}
}
