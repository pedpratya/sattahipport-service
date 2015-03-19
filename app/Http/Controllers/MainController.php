<?php namespace App\Http\Controllers;

class MainController extends Controller {


	/**
	 * Create the Organization.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('module-list');
	}

	public function getMasterTop()
	{
		return view('layout.master-top');
	}

		public function getFullscreen()
	{
		return view('layout.fullscreen');
	}

	public function getModuleList()
	{
		return view('module-list');
	}

	public function getMasterModule()
	{
		return view('master-module');
	}

}
