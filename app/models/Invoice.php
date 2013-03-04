<?php

class Invoice extends BaseModel
{
	protected $table = 'invoices';


	/* ------------------------------------------------------------------------------------------ */

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


	/* ------------------------------------------------------------------------------------------ */


	/**
	 * Get invoice currency
	 * @param  Invoice $invoice
	 * @param  boolean $symbol
	 * @return string
	 */
	public function currency(Invoice $invoice, $symbol = true)
	{
		if ( ! $invoice->currency) $invoice->currency = $invoice->user->currency;

		// Symbols
		if ($symbol)
		{
			if ($invoice->currency == 'EUR') $invoice->currency = '€';
		}

		return $invoice->currency;
	}


	/**
	 * Generates an invoice PDF and stores it
	 * @param  integer $invoiceId
	 * @param  string  $template
	 * @return Response
	 */
	public static function generate($invoiceId, $template = null)
	{
		// Get invoice and template
		$generatePdf      = true;
		$invoice          = static::with(array('client', 'user', 'items'))->find($invoiceId);

		// Template
		if ( ! $template) $template = static::findTemplate($invoice);

		// Files and paths
		$filename         = $invoice->hash . '.pdf';
		$filenameDownload = 'invoice.pdf';
		$storagePath      = app_path() . '/storage/invoices/' . $filename;
		$templatePath     = realpath(View::getFinder()->find($template));
		$html             = View::make($template)->with('invoice', $invoice);

		// Check if we need to regenerate the PDF
		if (File::exists($storagePath)) {
			// Invoice, client or user
			$lastUpdate = $invoice->updated_at;
			if ($invoice->client->updated_at > $lastUpdate) $lastUpdate = $invoice->client->updated_at;
			if ($invoice->user->updated_at > $lastUpdate)   $lastUpdate = $invoice->user->updated_at;

			// Items
			if ($invoice->items) {
				foreach ($invoice->items as $item) {
					if ($item->updated_at > $lastUpdate) $lastUpdate = $item->updated_at;
				}
			}

			// Template
			$templateChanged = date('Y-m-d H:i:s', filemtime($templatePath));
			if ($templateChanged > $lastUpdate) $lastUpdate = $templateChanged;

			// PDF file
			$fileChanged = date('Y-m-d H:i:s', filemtime($storagePath));

			if ($lastUpdate < $fileChanged) $generatePdf = false;
		}

		// Fire event
		Event::fire('invoice.generate', $invoice);

		// Preview
		//return $html;

		// Generate the invoice PDF
		if ($generatePdf) {
			$pdf = new TCPDF('p', 'mm', 'A4', true, 'UTF-8');
			$pdf->SetPrintHeader(false);
			$pdf->SetPrintFooter(false);
			$pdf->SetCreator(PDF_CREATOR);
			$pdf->SetAuthor($invoice->user->company);
			$pdf->SetTitle($invoice->invoice_num);
			$pdf->SetSubject($invoice->title);
			$pdf->SetKeywords($invoice->title);
			$pdf->SetFont('dejavusans', '', 9);
			$pdf->AddPage();
			$pdf->writeHTML($html, true, false, true, false, '');
			//$pdf->Output($filenameDownload, 'I');
			$pdf->Output($storagePath, 'F');
		}

		// Display invoice
		return self::display($invoice);
	}


	/**
	 * Return the template for current invoice
	 * @param  mixed $invoice
	 * @return string
	 */
	public static function findTemplate($invoice)
	{
		// Find template setup
		if ($invoice->template) {
			$template = $invoice->template;
		} else {
			$user = Auth::user();

			if ($user->template) {
				$template = $user->template;
			} else {
				$template = 'default';
			}
		}

		// Add namespace
		$template = "pdf::$template.layout";

		return $template;
	}


	/**
	 * Simly display the generated PDF file inside the browser
	 * @param  mixed $invoice
	 * @return Response
	 */
	public static function display($invoice)
	{
		// Get invoice
		if (is_integer($invoice)) $invoice = static::with(array('client', 'user', 'items'))->find($invoiceId);

		// Paths
		$filename    = $invoice->hash . '.pdf';
		$storagePath = app_path() . '/storage/invoices/' . $filename;

		// Respond
		return Response::make(File::get($storagePath), 200, array('content-type'=>'application/pdf'));
	}


	/**
	 * Send an invoice via email
	 * @param  integer $id
	 * @param  string  $email
	 * @return boolean
	 */
	public static function send($id, $email = null)
	{
		// Find the invoice
		$invoice = self::find($id);

		if ($invoice) {
			// Now send it
			$result = Mail::send('emails.invoice.client', $invoice->toArray(), function($m) use ($invoice) {
				$invoicePdf = realpath(app_path() . '/storage/invoices/' . $invoice->hash . '.pdf');

				$m->subject('Your invoice');
				$m->from('krunch@creolab.hr', 'Krunch');
				$m->to('bstrahija@me.com', 'Boris Strahija');
				$m->attach($invoicePdf, array('as' => 'invoice.pdf', 'mime' => 'application/pdf'));
			});

			if ($result) return true;
		}

		return false;
	}

}
