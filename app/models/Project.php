<?php

class Project extends Eloquent
{
	protected $table = 'projects';

	public function invoices()
	{
		return $this->hasMany('Invoice');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function client()
	{
		return $this->belongsTo('Client');
	}
}
