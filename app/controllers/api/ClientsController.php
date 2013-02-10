<?php namespace Api;

use Client;
use Invoice;

class ClientsController extends ApiController
{

	public function index()
	{
		return Client::all();
	}

}
