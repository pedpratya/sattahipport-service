<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;

class OrganizationController extends Controller 
{
	/**
	 * Create the Organization.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.organization');
	}
        
        public function getOrganization()
        {
 
             $data = Department::find(1);
            return view('admin.organization', compact('data'));
        }
}