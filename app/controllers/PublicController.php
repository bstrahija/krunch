<?php

class PublicController extends BaseController
{

	public function display($hash)
	{
		Profiler::disable();

		// Try to get invoice
		$invoice = Invoice::where('hash', $hash)->first();

		// Get invoice info and generated html
		return Invoice::generate($invoice->id, 'pdf::creo.layout');
	}

}
