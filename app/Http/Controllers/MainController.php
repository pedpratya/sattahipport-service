<?php namespace App\Http\Controllers;

class MainController extends Controller {


	/**
	 * Create the Organization.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('layout.master');
	}

	public function getModuleList()
	{
		return view('module-list');
	}

}
