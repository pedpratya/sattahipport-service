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
               
               $arr = array('user1','user2');
               foreach ($arr as $a){
                   
                    if ($username == $a) {
                        echo 'Pass';
                    } else {
                        echo 'No';
               }
               
//               $arrays = array(
//                            'username' => 'user1',
//                            'username' => 'user2'
//                         );
               
//               $findUsername = array_get($arrays, 'username');
               
               
//               dd($findUsername);
//               if ($username == $arr) {
//                   echo 'Pass';
//               } else {
//                   echo 'No';
//               }
//               
 
//		$array = array('username' => 'user1' );
//                $username = 
//                
	}

}
