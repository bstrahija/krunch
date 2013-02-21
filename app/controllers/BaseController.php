<?php

class BaseController extends Controller
{
	protected $layout = 'layouts.default';

	public function __construct()
	{
		Profiler::startTimer("[BASSET] Compiling assets");
		Artisan::call('basset:compile');
		Profiler::endTimer("[BASSET] Compiling assets");
	}

	/**
	 * Add content to layout
	 * @param string $view
	 */
	public function setContent($view, $with = null)
	{
		$this->layout->content = View::make($view)->with($with);;
	}

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
