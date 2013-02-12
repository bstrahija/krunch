<?php

class ClientsController extends BaseController
{

	public function index()
	{
		$this->setContent('clients.index', array('clients' => Client::all()));
	}

	public function edit($id)
	{
		$this->setContent('clients.edit', array('client' => Client::find($id)));
	}

}
