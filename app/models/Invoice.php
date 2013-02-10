<?php

class Invoice extends Eloquent
{

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function client()
	{
		return $this->belongsTo('Client', 'client_id');
	}

	public static function generate($invoiceId, $template)
	{
		$invoice = static::with('client')->find($invoiceId);
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

}
