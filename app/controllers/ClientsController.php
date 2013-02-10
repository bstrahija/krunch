<?php

class ClientsController extends BaseController
{

	public function index()
	{
		return View::make('clients.index')
		           ->with('clients', Client::all());
	}

	public function edit($id)
	{
		return View::make('clients.edit')
		           ->with('client', Client::find($id));
	}

}
