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
       
    public function getTopbaeModule()
    {
        return view('layout.topbar-module');
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
        
        if (is_null($username || $password)) {
            $error = true ;
            return view('home', compact('error'));
        }
        
        $arr = array('user1','user2');
        if (in_array($username, $arr)) {                
            $modules = self::moduleList();
	        return view('module-list', compact('modules'));
               // return View::make('module-list', compact('modules'));
            
        }  else {
            $error = true ;
            return view('home', compact('error'));
        }

	}

	public function moduleList()
        {
		$menu = [
                            ['module' => ['name' => 'ระบบ Admin',                            'images' => 'img/icon-mainmenu/icon-admin.png',          'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบข้อมูลสารสน<p>เทศ</p>',               'images' => 'img/icon-mainmenu/icon-information.png',    'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบบริหารการท่า<p>และระบบอนุมัติ</p>',       'images' => 'img/icon-mainmenu/icon-manager.png',        'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบบริหารจัดการ<p>ลูกค้า CRM</p>',          'images' => 'img/icon-mainmenu/icon-crm.png',            'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบ e-Gate',                           'images' => 'img/icon-mainmenu/icon-egate.png',          'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบบริหารพื้นที่<p>ประโยชน์ ทสพ.-ทร.</p>',   'images' => 'img/icon-mainmenu/icon-areaManame.png',     'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบจัดเก็บผล<p>ประโยชน์</p>',              'images' => 'img/icon-mainmenu/icon-benefits.png',       'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบบริหารหน้าท่า<p>เรือควบคุมจราจรทางน้ำ</p>', 'images' => 'img/icon-mainmenu/icon-portManage.png',     'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบตรวจนับและ<p>ตรวจสอบสินค้า</p>',        'images' => 'img/icon-mainmenu/icon-counting.png',       'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบพักสินค้าและ<p>ลานพักสินค้า</p>',         'images' => 'img/icon-mainmenu/icon-warehouse.png',      'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบเครื่องมือ<p>บรรทุกและขนถ่าย</p>',         'images' => 'img/icon-mainmenu/icon-tranfer.png',        'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบบริการลูกเรือ<p>และผู้โดยสาร</p>',         'images' => 'img/icon-mainmenu/icon-service.png',         'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบบุคลากรและ<p>แรงงาน</p>',              'images' => 'img/icon-mainmenu/icon-personnel.png',       'url' => '../public/admin/home']],
                            ['module' => ['name' => 'ระบบรักษาความปลอดภัยตามมาตราฐาน',           'images' => 'img/icon-mainmenu/icon-security.png',       'url' => '../public/admin/home']]

			];
            return $menu;
	}

}
