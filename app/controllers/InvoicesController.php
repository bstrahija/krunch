<?php

class InvoicesController extends BaseController
{

	public function index()
	{
		return View::make('invoices.index')->with('invoices', Invoice::all());
	}

}
