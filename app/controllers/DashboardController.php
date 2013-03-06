<?php

class DashboardController extends BaseController
{

	public function index()
	{
		Profiler::startTimer("[DASHBOARD] Set content");
		$this->setContent('dashboard.index');
		Profiler::endTimer("[DASHBOARD] Set content");
	}

}
