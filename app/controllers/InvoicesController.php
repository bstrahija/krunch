<?php

class InvoicesController extends BaseController
{

	public function index()
	{
		return View::make('invoices.index')
		           ->with('invoices', Invoice::with('client')->paginate(20));
	}

	public function edit($id)
	{
		return View::make('invoices.edit')
		           ->with('clients', Client::all())
		           ->with('invoice', Invoice::find($id));
	}

}
