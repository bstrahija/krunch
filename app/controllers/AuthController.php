<?php

class AuthController extends BaseController
{

	public function getLogin()
	{
		return View::make('auth.login');
	}

	public function postLogin()
	{
		$credentials = array(
			'email'    => Input::get('username'),
			'password' => Input::get('password')
		);

		if (Auth::attempt($credentials))
		{
			return Redirect::to('dashboard');
		}
		else
		{
			return Redirect::route('login')->with('errors', array('Wrong username or password'));
		}
	}

	public function getLogout()
	{
		Auth::logout();

		return Redirect::route('login');
	}

}
