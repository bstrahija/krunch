<?php namespace App\Helpers;

use URL;

class HTML extends \Meido\HTML\HTMLFacade
{

	public static function to($url, $title = null, $attributes = array(), $parameters = array(), $https = null)
	{
		$url = URL::to($url, $parameters, $https);

		if (is_null($title)) $title = $url;

		if (isset($attributes['icon'])) {
			$title = '<i class="icon-'.$attributes['icon'].'"></i> ' . $title;
		}

		return '<a href="'.$url.'"'.parent::attributes($attributes).'>'.$title.'</a>';
	}

}
