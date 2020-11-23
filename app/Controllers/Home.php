<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home_dashboard');
		//echo "Ini adalah Controller HOME";
	}
}
