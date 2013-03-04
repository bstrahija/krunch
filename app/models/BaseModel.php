<?php

class BaseModel extends Eloquent
{
	public function save()
	{
		// First validate the model
		if ($this->validate())
		{
			if ($this->getCacheKey()) Cache::forget($this->getCacheKey());

			return parent::save();
		}

		return false;
	}

	public function validate()
	{
		if ($this->getRules())
		{

		}

		return false;
	}

	protected function getCacheKey()
	{
		echo '<pre>'; print_r(var_dump($this->table)); echo '</pre>'; die();
	}

	public function getRules()
	{

	}
}