<?php

class ProjectsController extends BaseController
{

	public function index()
	{
		$this->setContent('projects.index', array('projects' => Project::with('client')->paginate(20)));
	}

	public function edit($id)
	{
		$this->setContent('projects.edit', array('project' => Project::find($id)));
	}

}
