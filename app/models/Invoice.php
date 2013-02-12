<?php

class Invoice extends Eloquent
{
	protected $table = 'invoices';

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function client()
	{
		return $this->belongsTo('Client', 'client_id');
	}

	public function items()
	{
		return $this->hasMany('InvoiceItem');
	}

	public function payments()
	{
		return $this->hasMany('Payment');
	}

	public static function generate($invoiceId, $template)
	{
		// Get invoice and template
		$invoice = static::with('client')->find($invoiceId);
		$html    = View::make($template)->with('invoice', $invoice);

		// Fire event
		Event::fire('invoice.generate', $invoice);

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

}
