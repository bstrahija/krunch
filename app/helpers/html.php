<?php namespace App\Helpers;

class HTML extends \Meido\HTML\HTMLFacade
{

	public static function to($url, $title = null, $attributes = array(), $parameters = array(), $https = null)
	{
		$url = \URL::to($url, $parameters, $https);

		if (is_null($title)) $title = $url;

		if (isset($attributes['icon'])) {
			$title = '<i class="icon-'.$attributes['icon'].'"></i> ' . $title;
		}

		return '<a href="'.$url.'"'.parent::attributes($attributes).'>'.$title.'</a>';
	}


	/**
	 * Create action link
	 * @param  string $action
	 * @param  string $name
	 * @param  mixed  $resource
	 * @param  array  $attributes
	 * @return string
	 */
	public static function action($action = 'edit', $label = '', $name, $resource, $attributes = array())
	{
		// Get id
		$id = (is_numeric($resource)) ? $resource     : null;
		$id = (is_object($resource))  ? $resource->id : null;

		// Build URL
		if     ($action == 'edit')   $url = $name . '/' . $id . '/edit';
		elseif ($action == 'create') $url = $name . '/create';
		elseif ($action == 'delete') { return static::deleteButton($label, $name, $resource, $attributes); }
		else                         $url = $name . '/' . $id;

		return static::to($url, $label, $attributes);
	}


	/**
	 * Build link for edit action
	 * @param  string $label
	 * @param  string $name
	 * @param  mixed  $resource
	 * @param  array  $attributes
	 * @return string
	 */
	public static function actionEdit($label = '', $name, $resource, $attributes = array())
	{
		return static::action('edit', $label, $name, $resource, $attributes);
	}


	/**
	 * Build link for show action
	 * @param  string $label
	 * @param  string $name
	 * @param  mixed  $resource
	 * @param  array  $attributes
	 * @return string
	 */
	public static function actionShow($label = '', $name, $resource, $attributes = array())
	{
		return static::action('show', $label, $name, $resource, $attributes);
	}


	/**
	 * Build link for create action
	 * @param  string $label
	 * @param  string $name
	 * @param  array  $attributes
	 * @return string
	 */
	public static function actionCreate($label = '', $name, $attributes = array())
	{
		return static::action('create', $label, $name, null, $attributes);
	}


	/**
	 * Build link for delete action
	 * @param  string $label
	 * @param  string $name
	 * @param  mixed  $resource
	 * @param  array  $attributes
	 * @return string
	 */
	public static function actionDelete($label = '', $name, $resource, $attributes = array())
	{
		return static::action('delete', $label, $name, $resource, $attributes);
	}


	public static function deleteButton($label = '', $name, $resource, $attributes = array())
	{

		// Get id
		$id = (is_numeric($resource)) ? $resource     : null;
		$id = (is_object($resource))  ? $resource->id : null;

		// Additional attributes
		$attributes['onclick'] = "$(this).prev('form').submit();";

		// Build URL
		$url = $name . '/' . $id;

		// Start form
		$form = \Form::open($url, 'DELETE', array('style' => 'display: none;'));

		// Submit
		$form .= \Form::submit('Delete');

		// Close it
		$form .= \Form::close();

		// Now add the button
		$form .= \Form::button('Delete', $attributes);

		return $form;
	}

}
