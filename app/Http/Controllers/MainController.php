<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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
        
    /**
    * Check user login.
    *
    * @param  Request  $request
    * @return Response
    */
	public function signIn(Request $request)
	{
            
            $username = $request->input('username');
            $password = $request->input('password');
            if(is_null($username || $password)) {
                return true;
            }
            
            $arr = array('user1','user2');
            if(in_array($username, $arr)){
                
                $modules = self::moduleList();
		return view('module-list', compact('modules'));
                
              }
              else{
                $error = true ;
                return view('home', compact('error'));
              }

	}

	public function moduleList()
	{
		$menu = [
				    ['module' => ['name' => 'admin', 'images' => 'x', 'url' => 'xx']],
				    ['module' => ['name' => 'crm'  , 'images' => 'y', 'url' => 'yy']]
				];
		return $menu;
	}

}
