<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('landingpage');
	}

	public function form()
	{
		return view('form');
	}

	public function displaydata()
	{
		return view('displaydata');
	}

	//--------------------------------------------------------------------

}
