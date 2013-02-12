<?php

class AuthController extends BaseController
{

	/**
	 * Display login form
	 * @return View
	 */
	public function getLogin()
	{
		$this->setContent('auth.login');
	}

	/**
	 * Login attempt
	 * @return Redirect
	 */
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

	/**
	 * Logout action
	 * @return Redirect
	 */
	public function getLogout()
	{
		Auth::logout();

		return Redirect::route('login');
	}

}
