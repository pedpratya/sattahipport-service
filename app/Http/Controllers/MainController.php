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

    public function getModuleList()
    {       
            $modules = self::moduleList();
            return view('module-list', compact('modules'));
    }

    public function getMasterModule()
    {
            return view('master-module');
    }
       
    public function getLeftManu($id)
    {
      
        switch ($id) {
            case '101':
                $manu = "<li class=''>				
                         <a href='URL::to('./admin/organization')'>
                                    <i class='fa fa fa-tasks'></i>
                                    องค์กร
                            </a>   				
                        </li>
                        <li class=''>			
                         <a href='URL::to('./admin/system-admin')'>
                                    <i class='fa fa fa-tasks'></i>
                                    ระบบงาน
                            </a>   				
                        </li>
                        <li class=''>		
                         <a href='URL::to('./admin/usermanagement')'>
                                    <i class='fa fa fa-tasks'></i>
                                    USER MANAGEMENT
                            </a>   				
                        </li>
                        <li class=''>		
                         <a href='URL::to('#')'>
                                    <i class='fa fa fa-tasks'></i>
                                    รายงาน
                            </a>   				
                        </li>";
                /*[
                    [
                        "id' =>'10101', 'name' =>'องค์กร'
                    ],
                    [
                        'id' =>'10102', 'name' =>'ระบบงาน'
                    ],
                    [
                        'id' =>'10103', 'name' =>'USER MANAGEMENT'
                    ],
                    [
                        'id' =>'10104', 'name' =>'รายงาน'
                    ]
                ];*/
                break;
            case '102':
                $manu = [
                    [
                        'id' =>'10201',  'name' =>'ตารางอัตราค่าบริการ'
                    ],
                    [
                        'id' =>'10202', 'name' =>'ตารางประเมินค่าใช้จ่าย'
                    ],
                    [
                        'id' =>'10203', 'name' =>'ตารางรายการประเมินค่าใช้จ่าย'
                    ],
                    [
                        'id' =>'10204', 'name' =>'รายการขอใช้บริการ'
                    ],
                    [
                        'id' =>'10205', 'name' =>'รายการ Customer'
                    ]
                ];
                break;
            case '201':
                $manu = [
                    [
                        'id' =>'20101', 'name' =>'Port Infomation'
                    ],
                    [
                        'id' =>'20102', 'name' =>'Port Schedule'
                    ],
                    [
                        'id' =>'20103', 'name' =>'Port Display'
                    ]
                ];
                break;
        }                
            return $manu;
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

            }  else {
                $error = true ;
                return view('home', compact('error'));
            }
    }

	public function moduleList()
        {
		/*$menu = [
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

			];*/
                        
    $menu = [
        'firstname' =>'name',
        'namelast' =>'firstname',
        'username' =>'sirane',
        'manu' =>[
            [
                'id' =>'101', 'name' =>'Admin System', 'images' => 'img/icon-mainmenu/icon-admin.png','url' => './admin/home',
                'child' =>[
                    [
                        'id' =>'10101', 'name' =>'องค์กร'
                    ],
                    [
                        'id' =>'10102', 'name' =>'ระบบงาน'
                    ],
                    [
                        'id' =>'10103', 'name' =>'USER MANAGEMENT'
                    ],
                    [
                        'id' =>'10104', 'name' =>'รายงาน'
                    ]
                ]
            ],
            [
                'id' =>'102', 'name' =>'ระบบข้อมูลสารสนเทศ','images' => 'img/icon-mainmenu/icon-information.png', 'url' => '../public/admin/home',
                'child' =>[
                    [
                        'id' =>'10201',  'name' =>'ตารางอัตราค่าบริการ'
                    ],
                    [
                        'id' =>'10202', 'name' =>'ตารางประเมินค่าใช้จ่าย'
                    ],
                    [
                        'id' =>'10203', 'name' =>'ตารางรายการประเมินค่าใช้จ่าย'
                    ],
                    [
                        'id' =>'10204', 'name' =>'รายการขอใช้บริการ'
                    ],
                    [
                        'id' =>'10205', 'name' =>'รายการ Customer'
                    ]
                ]
            ],
            [
                'id' =>'201',
                'name' =>'ระบบบริหารการท่า<br>และระบบอนุมัติ','images' => 'img/icon-mainmenu/icon-manager.png', 'url' => '../public/admin/home',
                'child' =>[
                    [
                        'id' =>'20101', 'name' =>'Port Infomation'
                    ],
                    [
                        'id' =>'20102', 'name' =>'Port Schedule'
                    ],
                    [
                        'id' =>'20103', 'name' =>'Port Display'
                    ]
                ]
            ],
            [
                'id' =>'301',
                'name' =>'ระบบบริหารจัดการ<br>ลูกค้า CRM','images' => 'img/icon-mainmenu/icon-crm.png', 'url' => '../public/admin/home',
                'child' =>[
                    [
                        'id' =>'30101', 'name' =>'Registration System'
                    ],
                    [
                        'id' =>'30102', 'name' =>'Service DashBoard'
                    ],
                    [
                        'id' =>'30103', 'name' =>'Customer Management',
                        'child' =>[
                            [
                                'id' =>'3010301', 'name' =>'Customer Infomation'
                            ],
                            [
                                'id' =>'3010302',  'name' =>'Service Log'
                            ],
                            [
                                'id' =>'3010303', 'name' =>'Rental Space'
                            ],
                            [
                                'id' =>'3010304', 'name' =>'Port Services'
                            ],
                            [
                                'id' =>'3010305', 'name' =>'Ware House'
                            ],
                            [
                                'id' =>'3010306', 'name' =>'Work In Process'
                            ],
                            [
                                'id' =>'3010307', 'name' =>'Vehicle Access'
                            ]
                        ]
                    ]
                ]
            ],
            [
                'id' =>'302',
                'name' =>'ระบบ e-Gate','images' => 'img/icon-mainmenu/icon-egate.png','url' => '../public/admin/home',
                'child' =>[
                    [
                        'id' =>'30201', 'name' =>'Vehcle Access'
                    ],
                    [
                        'id' =>'30202', 'name' =>'Enter Form',
                        'child' =>[
                            [
                                'id' =>'3020301', 'name' =>'Tracking Module'
                            ],
                            [
                                'id' =>'3020302', 'name' =>'Vehicle - Module'
                            ],
                            [
                                'id' =>'3020303', 'name' =>'Tracking - Display'
                            ]
                        ]
                    ],
                    [
                        'id' =>'30203', 'name' =>'Car Tracking System'
                    ],
                    [
                        'id' =>'30204', 'name' =>'Report'
                    ]
                ]
            ],
            [
                'id' =>'303', 'name' =>'ระบบบริหารพื้นที่<br>ประโยชน์ ทสพ.-ทร.','images' => 'img/icon-mainmenu/icon-areaManame.png', 'url' => '../public/admin/home',
                'child' =>[
                    [
                        'id' =>'30301', 'name' =>'ข้อมูลพื้นที่ ทพส.-ทร.',
                        'child' =>[
                            [
                                'id' =>'3030101', 'name' =>'วงรอบ-ผังบริเวณโดยรอบ'
                            ],
                            [
                                'id' =>'3030102', 'name' =>'กำหนดอัตราเช่า'
                            ]
                        ]
                    ],
                    [
                        'id' =>'30302', 'name' =>'ผู้เช่า-ผู้ใช้ประโยชน์'
                    ],
                    [
                        'id' =>'30303', 'name' =>'ข้อมูลภาพถ่ายทางอากาศ'
                    ],
                    [
                        'id' =>'30304', 'name' =>'Drone Management'
                    ],
                    [
                        'id' =>'30305', 'name' =>'Report'
                    ]
                ]
            ],
            [
                'id' =>'304', 'name' =>'ระบบจัดเก็บผลประโยชน์','images' => 'img/icon-mainmenu/icon-benefits.png','url' => '../public/admin/home',
                'child' =>[
                    [
                        'id' =>'30401', 'name' =>'ระบบบริหารจัดการอัตราภาระ TARIFF'
                    ],
                    [
                        'id' =>'30402', 'name' =>'ทะเบียนคุมลูกหนี้'
                    ],
                    [
                        'id' =>'30403', 'name' =>'ทะเบียนคุมเงินหลักประกัน'
                    ],
                    [
                        'id' =>'30404', 'name' =>'ทะเบียนคุมเงินมัดจำ'
                    ],
                    [
                        'id' =>'30405', 'name' =>'คำนวณอัตราเบี้ยปรับ'
                    ],
                    [
                        'id' =>'30406', 'name' =>'ทะเบียนคุมไฟฟ้า ประปา'
                    ],
                    [
                        'id' =>'30407', 'name' =>'ลูกหนี้ไฟฟ้า ประปา'
                    ],
                    [
                        'id' =>'30408', 'name' =>'ระบบพิมพ์ใบแจ้งหนี้'
                    ],
                    [
                        'id' =>'30409', 'name' =>'ระบบคำนวณค่าภาระเรือ'
                    ],
                    [
                        'id' =>'30410', 'name' =>'รายงานต่างๆ'
                    ]
                ]
            ],
            [
                'id' =>'305', 'name' =>'ระบบบริหารหน้าท่า<br>และควบคุมจราจรทางน้ำ','images' => 'img/icon-mainmenu/icon-portManage.png', 'url' => '../public/admin/home',
                'child' =>[
                    [
                        'id' =>'30501', 'name' =>'Berth Request Service'
                    ],
                    [
                        'id' =>'30502', 'name' =>'ระบบ PORT & AIS & RADAR'
                    ],
                    [
                        'id' =>'30503', 'name' =>'ข้อมูลเรือ IMO หรือ Callsign'
                    ],
                    [
                        'id' =>'30504', 'name' =>'รายละเอียดข้อมูลภายในใบ Berth'
                    ],
                    [
                        'id' =>'30505', 'name' =>'รายการ Berth'
                    ],
                    [
                        'id' =>'30506', 'name' =>'Berth Schedule'
                    ],
                    [
                        'id' =>'30507', 'name' =>'Problem Center'
                    ],
                    [
                        'id' =>'30508', 'name' =>'AIS Display'
                    ]
                ]
            ],
            [
                'id' =>'306', 'name' =>'ระบบตรวจนับ<br>และตรวจสอบสินค้า','images' => 'img/icon-mainmenu/icon-counting.png','url' => '../public/admin/home',
                'child' =>[
                    [
                        'id' =>'30601', 'name' =>'Berth Request Service'
                    ],
                    [
                        'id' =>'30602', 'name' =>'กำหนดเจ้าหน้าที่รับผิดชอบปฏิบัติงาน'
                    ],
                    [
                        'id' =>'30603', 'name' =>'ตรวจสอบเอกสารอนุมัติการขนถ่าย'
                    ],
                    [
                        'id' =>'30604', 'name' =>'ตรวจสอบสินค้า'
                    ]
                ]
            ],
            [
                'id' =>'307', 'name' =>'ระบบคลังสินค้า','images' => 'img/icon-mainmenu/icon-warehouse.png','url' => '../public/admin/home',
                'child' =>[
                    [
                        'id' =>'30701', 'name' =>'กำหนดค่าคงที่ของการบริหารพื้นที่คลังพัก และ ลานพักสินค้า'
                    ],
                    [
                        'id' =>'30702', 'name' =>'กำหนดค่าเริ่มต้นให้กับเจ้าหน้าที่ปฏิบัติงาน และช่วงเวลาปฏิบัติงาน'
                    ],
                    [
                        'id' =>'30703', 'name' =>'รายการ เพื่อกำหนดพื้นที่วางสินค้า และกำหนดเจ้าหน้าที่รับผิดชอบดำเนินการ'
                    ],
                    [
                        'id' =>'30704', 'name' =>'รายการสินค้า ของแต่ละ Berth ที่ได้ดำเนินการเสร็จเรียบร้อย'
                    ]
                ]
            ],
            [
                'id' =>'308', 'name' =>'ระบบเครื่องมือบรรทุกขนถ่าย','images' => 'img/icon-mainmenu/icon-tranfer.png','url' => '../public/admin/home',
                'child' =>[
                    [
                        'id' =>'30801', 'name' =>'กำหนดค่าคงที่ของเครื่องมือบรรทุกขนถ่าย'
                    ],
                    [
                        'id' =>'30802', 'name' =>'กำหนดค่าเริ่มต้นให้กับเจ้าหน้าที่ปฏิบัติงาน'
                    ],
                    [
                        'id' =>'30803', 'name' =>'รายการ เพื่อกำหนดชนิดเครื่องมือในการทำงาน และกำหนดเจ้าหน้าที่รับผิดชอบดำเนินการ'
                    ],
                    [
                        'id' =>'30804', 'name' =>'รายการสินค้า ของแต่ละ Berth ที่ได้ดำเนินการเสร็จเรียบร้อย'
                    ]
                ]
            ],
            [
                'id' =>'309', 'name' =>'ระบบบริการลูกเรือ<br>และผู้โดยสาร','images' => 'img/icon-mainmenu/icon-service.png','url' => '../public/admin/home',
                'child' =>[
                    [
                        'id' =>'30901', 'name' =>'กำหนดค่าเริ่มต้นให้กับเจ้าหน้าที่ปฏิบัติงาน และช่วงเวลาปฏิบัติงาน'
                    ],
                    [
                        'id' =>'30902', 'name' =>'รายการ เพื่อตรวจสอบลูกเรือและผู้โดยสาร'
                    ],
                    [
                        'id' =>'30903', 'name' =>'แสดงรายการลูกเรือและผู้โดยสาร ของแต่ละ Berth ที่ได้ดำเนินการเสร็จเรียบร้อย'
                    ]
                ]
            ],
            [
                'id' =>'310', 'name' =>'ระบบบุคลากรแรงงาน','images' => 'img/icon-mainmenu/icon-personnel.png','url' => '../public/admin/home',
                'child' =>[
                    [
                        'id' =>'31001', 'name' =>'ส่วนเจ้าหน้าที่แต่ละระบบ'
                    ],
                    [
                        'id' =>'31002', 'name' =>'รายงานแรงงาน'
                    ],
                    [
                        'id' =>'31003', 'name' =>'รายงานเจ้าหน้าและแรงงานที่ปฏิบัติงานในแต่ละ Berth'
                    ],
                    [
                        'id' =>'31004', 'name' =>'รายงานเวลาการเข้า-ออก พื้นที่'
                    ]
                ]
            ],
            [
                'id' =>'311', 'name' =>'ระบบรักษาความปลอดภัย','images' => 'img/icon-mainmenu/icon-security.png','url' => '../public/admin/home',
                'child' =>[
                    [
                        'id' =>'31101', 'name' =>'เจ้าหน้าที่เพื่อบริหารจัดการระบบ CCTV'
                    ],
                    [
                        'id' =>'31102', 'name' =>'รายงานผลระบบรักษาความปลอดภัยทั้งสองระบบ'
                    ]
                ]
            ]
        ]
    ];
            
            return $menu;
	}

}
