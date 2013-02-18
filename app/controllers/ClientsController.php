<?php

class ClientsController extends BaseController
{

	public function index()
	{
		$this->setContent('clients.index', array('clients' => Client::all()));
	}


	public function create()
	{
		$this->setContent('clients.create');
	}


	public function store()
	{
		// Get input and client
		$input  = Input::except(array('_method'));

		if ($input) {
			$result = Client::create($input);

			if ($result) {
				return Redirect::to("clients/{$result->id}/edit");
			}
		}

		return Redirect::to("clients/create")->with("errors", "Error!!!");
	}


	public function edit($id)
	{
		$this->setContent('clients.edit', array('client' => Client::find($id)));
	}


	public function update($id)
	{
		// Get input and client
		$input  = Input::except(array('_method'));
		$client = Client::find($id);

		if ($client) {
			foreach ($input as $name => $value) {
				$client->$name = $value;
			}

			$result = $client->save();
		}

		return Redirect::to("clients/$id/edit");
	}


	public function destroy($id)
	{
		$client = Client::find($id);

		if ($client) {
			$client->delete();
		}

		return Redirect::to('clients');
	}

}
