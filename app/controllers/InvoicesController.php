<?php

class InvoicesController extends BaseController
{

	public function index()
	{
		return View::make('invoices.index')
		           ->with('invoices', Invoice::with('client')->paginate(20));
	}

	public function show($id)
	{
		Profiler::disable();

		// Get invoice info and generated html
		return Invoice::generate($id, 'pdf.creo');
	}

	public function edit($id)
	{
		return View::make('invoices.edit')
		           ->with('clients', Client::all())
		           ->with('invoice', Invoice::find($id));
	}

	public function store($id)
	{
		echo '<pre>'; print_r(var_dump($id)); echo '</pre>';
		die();
	}

	public function update($id)
	{
		$invoice = Invoice::find($id);

		if ($invoice)
		{
			$invoice->title = Input::get('title');
			$invoice->save();
		}

		return Redirect::to('invoices/' . $id . '/edit');
	}

}
