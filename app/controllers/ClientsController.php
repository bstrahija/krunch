<?php

class ClientsController extends BaseController
{

	public function index()
	{
		return View::make('clients.index')
		           ->with('clients', Client::all());
	}

}
