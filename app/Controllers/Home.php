<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		//return view('welcome_message');
		return $this->ct_view->load('welcome_message', []);
	}

	//--------------------------------------------------------------------

}
