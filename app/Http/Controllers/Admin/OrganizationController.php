<?php namespace App\Http\Controllers;

class OrganizationController extends Controller {


	/**
	 * Create the Organization.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.organization');
	}

}