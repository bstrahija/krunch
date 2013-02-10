<?php namespace App\Helpers;

use Illuminate\Support\Pluralizer;
use Config;
use Request;
use Str;

class URL extends \Illuminate\Support\Facades\URL
{
	public static function edit($resource, $parameters = array(), $secure = null)
	{
		if (isset($resource->id))
		{
			$resourceName = Pluralizer::plural(strtolower(get_class($resource)));

			return parent::to($resourceName . '/'.$resource->id . '/edit', $parameters, $secure);
		}
	}

	public static function delete($path, $parameters = array())
	{
		if (isset($resource->id))
		{
			$resourceName = Pluralizer::plural(strtolower(get_class($resource)));

			return parent::to($resourceName . '/'.$resource->id . '/delete', $parameters, $secure);
		}
	}

}
