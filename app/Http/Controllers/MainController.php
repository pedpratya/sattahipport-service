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
                $error = true ;
                return view('home', compact('error'));
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
                            ['module' => ['name' => 'ระบบ Admin',                      'images' => 'images/icon-mainmenu/icon-admin.png',          'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบสารสนเทศ',                    'images' => 'images/icon-mainmenu/icon-information.png',    'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบบริหารการท่าและระบบอนุมัติ',       'images' => 'images/icon-mainmenu/icon-manager.png',        'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบบริหารจัดการลูกค้า CRM',          'images' => 'images/icon-mainmenu/icon-crm.png',            'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบ e-Gate',                    'images' => 'images/icon-mainmenu/icon-egate.png',          'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบบริหารพื้นที่ประโยชน์ ทสพ.-ทร.',   'images' => 'images/icon-mainmenu/icon-areaManame.png',     'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบจัดเก็บผลประโยชน์',              'images' => 'images/icon-mainmenu/icon-benefits.png',       'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบบริหารหน้าท่าเรือควบคุมจราจรทางน้ำ', 'images' => 'images/icon-mainmenu/icon-portManage.png',     'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบตรวจนับและตรวจสอบสินค้า',        'images' => 'images/icon-mainmenu/icon-counting.png',       'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบพักสินค้าและลานพักสินค้า',         'images' => 'images/icon-mainmenu/icon-warehouse.png',      'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบเคื่องมือบรรทุกและขนถ่าย',          'images' => 'images/icon-mainmenu/icon-tranfer.png',        'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบบริการลูกเรือและผู้โดยสาร',         'images' => 'images/icon-mainmenu/icon-service.png',         'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบบุคลากรและแรงงาน',              'images' => 'images/icon-mainmenu/icon-personnel.png',       'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบรักษาความปลอดภัยตามมาตราฐาน',    'images' => 'images/icon-mainmenu/icon-security.png',       'url' => '../public/admin/home']]

			];
            return $menu;
	}

}
