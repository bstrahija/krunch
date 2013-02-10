<?php

class InvoicesController extends BaseController
{

	public function index()
	{
		return View::make('invoices.index')
		           ->with('invoices', Invoice::paginate(20));
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

		$validator = Validator::make(
			Input::all(),
			array('title' => 'required|min:5')
		);

		if ($invoice and ! $validator->fails())
		{
			$invoice->title = Input::get('title');
			$invoice->save();
			return Redirect::to('invoices/' . $id . '/edit')->with('success', true);
		}

		return Redirect::to('invoices/' . $id . '/edit')->withInput()->withErrors($validator);
	}

}
