<?php namespace App\Http\Controllers;

class OrganizationController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Create the Organization.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.Organization');
	}

}