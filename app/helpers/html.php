<?php namespace App\Helpers;

class Html extends \Illuminate\Html\HtmlBuilder
{

	/**
	 * Simple anchor link
	 * @param  string  $url
	 * @param  string  $title
	 * @param  array   $attributes
	 * @param  array   $parameters
	 * @param  boolean $https
	 * @return string
	 */
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
		elseif ($action == 'back')   $url = $name;
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


	/**
	 * Build link for back action
	 * @param  string $label
	 * @param  string $name
	 * @param  mixed  $resource
	 * @param  array  $attributes
	 * @return string
	 */
	public static function actionBack($label = '', $name, $attributes = array())
	{
		return static::action('back', $label, $name, null, $attributes);
	}


	/**
	 * Creates a restful delete buttons
	 * @param  string $label
	 * @param  string $name
	 * @param  mixed  $resource
	 * @param  array  $attributes
	 * @return string
	 */
	public static function deleteButton($label = '', $name, $resource, $attributes = array())
	{

		// Get id
		$id = (is_numeric($resource)) ? $resource     : null;
		$id = (is_object($resource))  ? $resource->id : null;

		// Additional attributes
		$attributes['onclick'] = "if (confirm('Are you sure?')) { $(this).prev('form').submit(); }";

		// Build URL
		$url = $name . '/' . $id;

		// Start form
		$form  = \Form::open(array('action' => $url, 'method' => 'DELETE', 'style' => 'display: none;'));
		$form .= \Form::submit('Delete');
		$form .= \Form::close();

		// Icon
		if (isset($attributes['icon'])) {
			$label = '<i class="icon-'.$attributes['icon'].'"></i> ' . $label;
		}

		// Now add the button
		$form .= '<button'.\Html::attributes($attributes).'>'.$label.'</button>';

		return $form;
	}


	/**
	 * Create a twitter bootstrap control group
	 * @param  string $name
	 * @param  string $label
	 * @param  string $value
	 * @param  array  $attributes
	 * @param  string $type
	 * @return string
	 */
	public static function controlGroup($name = '', $label = null, $value = null, $attributes = array(), $type = 'text')
	{
		$html = '<div class="control-group">';

		// Add label
		if ($label and $type != 'submit' and $type != 'button') $html .= '<label for="' . $name . '" class="control-label">' . $label . '</label>';

		// Controle
		$html .= '<div class="controls">';

		// Field type
		if ($type == 'textarea')   $html .= '<textarea name="' . $name . '" id="' . $name . '">' . $value . '</textarea>';
		elseif ($type == 'submit') $html .= '<button type="submit" class="btn btn-primary">' . $label . '</button>';
		else                       $html .= '<input type="text" name="' . $name . '" id="' . $name . '" value="' . $value . '">';

		// Close it
		$html .= '</div></div>';

		return $html;
	}


	/**
	 * Create a twitter bootstrap control group for a textarea
	 * @param  string $name
	 * @param  string $label
	 * @param  string $value
	 * @param  array  $attributes
	 * @return string
	 */
	public static function controlGroupTextarea($name = '', $label = null, $value = null, $attributes = array())
	{
		return self::controlGroup($name, $label, $value, $attributes, 'textarea');
	}


	/**
	 * Create a twitter bootstrap control group for a submit button
	 * @param  string $label
	 * @return string
	 */
	public static function controlSubmit($label = 'Submit')
	{
		return self::controlGroup(null, $label, null, null, 'submit');
	}

}
