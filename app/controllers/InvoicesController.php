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
		$invoice = Invoice::with('client')->find($id);
		$html    = View::make('pdf.creo')->with('invoice', $invoice);

		// Generate the invoice PDF
		$pdf = new TCPDF('p', 'mm', 'A4', true, 'UTF-8');
		$pdf->SetPrintHeader(false);
		$pdf->SetPrintFooter(false);
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('Krunch');
		$pdf->SetTitle('Invoice');
		$pdf->SetSubject('Invoice subject');
		$pdf->SetKeywords('Invoice');
		$pdf->SetFont('dejavusans', '', 9);
		$pdf->AddPage();
		$pdf->writeHTML($html, true, false, true, false, '');
		$pdf->Output('invoice.pdf', 'I');
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
