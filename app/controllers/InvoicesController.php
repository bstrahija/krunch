<?php

class InvoicesController extends BaseController
{

	public function index()
	{
		$this->setContent('invoices.index', array('invoices' => Invoice::with('client')->paginate(20)));
	}

	public function show($id)
	{
		Profiler::disable();

		// Get invoice info and generated html
		return Invoice::generate($id, 'pdf::creo.layout');
	}

	public function create()
	{
		$this->setContent('invoices.create');
	}

	public function edit($id)
	{
		$this->setContent('invoices.edit', array(
			'clients' => Client::all(),
			'invoice' => Invoice::find($id),
		));
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

	public function destroy($id)
	{
		Invoice::where('id', $id)->delete();

		return Redirect::to('invoices')->with('success', true);
	}

}
