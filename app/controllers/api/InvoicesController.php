<?php namespace Api;

use Client;
use Invoice;

class InvoicesController extends ApiController
{

	public function index()
	{
		return Invoice::all();
	}

	public function show($id)
	{
		return Invoice::find($id);
	}

}
