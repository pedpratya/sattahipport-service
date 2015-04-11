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

    public function getPage($id)
    {
            $manu = self::getLeftManu($id);
            return view('page', compact('manu'));
    }
    
    public function getMasterModule()
    {
            return view('master-module');
    }
       
    public function getLeftManu($id)
    {
      
        switch ($id) {
            case '101':
                $manu = [ 'mainManu' => 'admin',
                          'leftManu' => [
                                            [
                                                'id' =>'10101', 'name' =>'องค์กร' ,'url' => 'admin/organization'
                                            ],
                                            [
                                                'id' =>'10102', 'name' =>'ระบบงาน' ,'url' => 'admin/system-admin'
                                            ],
                                            [
                                                'id' =>'10103', 'name' =>'ผู้ใช้งานในระบบ' ,'url' => 'admin/usermanagement'
                                            ],
                                            [
                                                'id' =>'10104', 'name' =>'รายงาน','url' => '#'
                                            ]
                                          ]
                        ];
                break;
            case '102':
                $manu = [
                            'mainManu' =>'information',
                            'leftManu' =>[
                                [
                                    'id' =>'10201',  'name' =>'ตารางอัตราค่าบริการ','url' => '#'
                                ],
                                [
                                    'id' =>'10202', 'name' =>'ตารางประเมินค่าใช้จ่าย','url' => '#'
                                ],
                                [
                                    'id' =>'10203', 'name' =>'ตารางรายการประเมินค่าใช้จ่าย','url' => '#'
                                ],
                                [
                                    'id' =>'10204', 'name' =>'รายการขอใช้บริการ','url' => '#'
                                ],
                                [
                                    'id' =>'10205', 'name' =>'รายการ Customer','url' => '#'
                                ]
                            ]
                        ];                
                break;
            case '201':
                $manu = [
                            'mainManu' =>'e-port-management',
                            'leftManu'=>[
                                            [
                                                'id' =>'20101', 'name' =>'Port Infomation','url' => '#'
                                            ],
                                            [
                                                'id' =>'20102', 'name' =>'Port Schedule','url' => '#'
                                            ],
                                            [
                                                'id' =>'20103', 'name' =>'Port Display','url' => '#'
                                            ]
                                        ]
                        ];                    
                break;
            case '301':
                $manu = [
                            'mainManu' =>'crm',
                            'leftManu' =>[
                                            [
                                                'id' =>'30101', 'name' =>'Registration System','url' => '#'
                                            ],
                                            [
                                                'id' =>'30102', 'name' =>'Service DashBoard','url' => '#'
                                            ],
                                            [
                                                'id' =>'30103', 'name' =>'Customer Management','url' => '#',
                                                'child' =>[
                                                                [
                                                                    'id' =>'3010301', 'name' =>'Customer Infomation','url' => '#'
                                                                ],
                                                                [
                                                                    'id' =>'3010302',  'name' =>'Service Log','url' => '#'
                                                                ],
                                                                [
                                                                    'id' =>'3010303', 'name' =>'Rental Space','url' => '#'
                                                                ],
                                                                [
                                                                    'id' =>'3010304', 'name' =>'Port Services','url' => '#'
                                                                ],
                                                                [
                                                                    'id' =>'3010305', 'name' =>'Ware House','url' => '#'
                                                                ],
                                                                [
                                                                    'id' =>'3010306', 'name' =>'Work In Process','url' => '#'
                                                                ],
                                                                [
                                                                    'id' =>'3010307', 'name' =>'Vehicle Access','url' => '#'
                                                                ]
                                                            ]
                                                ]
                                            ]
                                   ];   
                break;
            case '302':
                $manu = [
                            'mainManu' =>'e-gate',
                            'leftManu' =>[
                                            [
                                                'id' =>'30201', 'name' =>'Vehcle Access','url' => '#'
                                            ],
                                            [
                                                'id' =>'30202', 'name' =>'Enter Form','url' => '#',
                                                'child' =>[
                                                    [
                                                        'id' =>'3020301', 'name' =>'Tracking Module','url' => '#'
                                                    ],
                                                    [
                                                        'id' =>'3020302', 'name' =>'Vehicle - Module','url' => '#'
                                                    ],
                                                    [
                                                        'id' =>'3020303', 'name' =>'Tracking - Display','url' => '#'
                                                    ]
                                                ]
                                            ],
                                            [
                                                'id' =>'30203', 'name' =>'Car Tracking System','url' => '#'
                                            ],
                                            [
                                                'id' =>'30204', 'name' =>'Report','url' => '#'
                                            ]
                                        ]
                        ];    
                break;
            case '303':
                $manu = [
                            'mainManu' =>'area-management',
                            'leftManu' =>[
                                            [
                                                'id' =>'30301', 'name' =>'ข้อมูลพื้นที่ ทพส.-ทร.','url' => '#',
                                                'child' =>[
                                                    [
                                                        'id' =>'3030101', 'name' =>'วงรอบ-ผังบริเวณโดยรอบ','url' => '#'
                                                    ],
                                                    [
                                                        'id' =>'3030102', 'name' =>'กำหนดอัตราเช่า','url' => '#'
                                                    ]
                                                ]
                                            ],
                                            [
                                                'id' =>'30302', 'name' =>'ผู้เช่า-ผู้ใช้ประโยชน์','url' => '#'
                                            ],
                                            [
                                                'id' =>'30303', 'name' =>'ข้อมูลภาพถ่ายทางอากาศ','url' => '#'
                                            ],
                                            [
                                                'id' =>'30304', 'name' =>'Drone Management','url' => '#'
                                            ],
                                            [
                                                'id' =>'30305', 'name' =>'Report','url' => '#'
                                            ]
                                        ]
                        ];    
                break;
            case '304':
                $manu = [
                            'mainManu' =>'benefit',
                            'leftManu' =>[
                                            [
                                                'id' =>'30401', 'name' =>'ระบบบริหารจัดการอัตราภาระ TARIFF','url' => '#'
                                            ],
                                            [
                                                'id' =>'30402', 'name' =>'ทะเบียนคุมลูกหนี้','url' => '#'
                                            ],
                                            [
                                                'id' =>'30403', 'name' =>'ทะเบียนคุมเงินหลักประกัน','url' => '#'
                                            ],
                                            [
                                                'id' =>'30404', 'name' =>'ทะเบียนคุมเงินมัดจำ','url' => '#'
                                            ],
                                            [
                                                'id' =>'30405', 'name' =>'คำนวณอัตราเบี้ยปรับ','url' => '#'
                                            ],
                                            [
                                                'id' =>'30406', 'name' =>'ทะเบียนคุมไฟฟ้า ประปา','url' => '#'
                                            ],
                                            [
                                                'id' =>'30407', 'name' =>'ลูกหนี้ไฟฟ้า ประปา','url' => '#'
                                            ],
                                            [
                                                'id' =>'30408', 'name' =>'ระบบพิมพ์ใบแจ้งหนี้','url' => '#'
                                            ],
                                            [
                                                'id' =>'30409', 'name' =>'ระบบคำนวณค่าภาระเรือ','url' => '#'
                                            ],
                                            [
                                                'id' =>'30410', 'name' =>'รายงานต่างๆ','url' => '#'
                                            ]
                                        ]
                        ];    
                break;
            case '305':
                $manu = [
                            'mainManu' =>'traffic-control',
                            'leftManu' =>[
                                            [
                                                'id' =>'30501', 'name' =>'Berth Request Service','url' => '#'
                                            ],
                                            [
                                                'id' =>'30502', 'name' =>'ระบบ PORT & AIS & RADAR','url' => '#'
                                            ],
                                            [
                                                'id' =>'30503', 'name' =>'ข้อมูลเรือ IMO หรือ Callsign','url' => '#'
                                            ],
                                            [
                                                'id' =>'30504', 'name' =>'รายละเอียดข้อมูลภายในใบ Berth','url' => '#'
                                            ],
                                            [
                                                'id' =>'30505', 'name' =>'รายการ Berth','url' => '#'
                                            ],
                                            [
                                                'id' =>'30506', 'name' =>'Berth Schedule','url' => '#'
                                            ],
                                            [
                                                'id' =>'30507', 'name' =>'Problem Center','url' => '#'
                                            ],
                                            [
                                                'id' =>'30508', 'name' =>'AIS Display','url' => '#'
                                            ]
                                        ]
                        ];    
                break;
            case '306':
                $manu = [
                            'mainManu' =>'counting',
                            'leftManu' =>[
                                            [
                                                'id' =>'30601', 'name' =>'Berth Request Service','url' => '#'
                                            ],
                                            [
                                                'id' =>'30602', 'name' =>'กำหนดเจ้าหน้าที่รับผิดชอบปฏิบัติงาน','url' => '#'
                                            ],
                                            [
                                                'id' =>'30603', 'name' =>'ตรวจสอบเอกสารอนุมัติการขนถ่าย','url' => '#'
                                            ],
                                            [
                                                'id' =>'30604', 'name' =>'ตรวจสอบสินค้า','url' => '#'
                                            ]
                                        ]
                        ];    
                break;
            case '307':
                $manu = [
                            'mainManu' =>'warehouse',
                            'leftManu' =>[
                                            [
                                                'id' =>'30701', 'name' =>'กำหนดค่าคงที่ของการบริหารพื้นที่คลังพัก และ ลานพักสินค้า','url' => '#'
                                            ],
                                            [
                                                'id' =>'30702', 'name' =>'กำหนดค่าเริ่มต้นให้กับเจ้าหน้าที่ปฏิบัติงาน และช่วงเวลาปฏิบัติงาน','url' => '#'
                                            ],
                                            [
                                                'id' =>'30703', 'name' =>'รายการ เพื่อกำหนดพื้นที่วางสินค้า และกำหนดเจ้าหน้าที่รับผิดชอบดำเนินการ','url' => '#'
                                            ],
                                            [
                                                'id' =>'30704', 'name' =>'รายการสินค้า ของแต่ละ Berth ที่ได้ดำเนินการเสร็จเรียบร้อย','url' => '#'
                                            ]
                                        ]
                        ];    
                break;
            case '308':
                $manu = [
                            'mainManu' =>'transfer',
                            'leftManu' =>[
                                            [
                                                'id' =>'30801', 'name' =>'กำหนดค่าคงที่ของเครื่องมือบรรทุกขนถ่าย','url' => '#'
                                            ],
                                            [
                                                'id' =>'30802', 'name' =>'กำหนดค่าเริ่มต้นให้กับเจ้าหน้าที่ปฏิบัติงาน','url' => '#'
                                            ],
                                            [
                                                'id' =>'30803', 'name' =>'รายการ เพื่อกำหนดชนิดเครื่องมือในการทำงาน และกำหนดเจ้าหน้าที่รับผิดชอบดำเนินการ','url' => '#'
                                            ],
                                            [
                                                'id' =>'30804', 'name' =>'รายการสินค้า ของแต่ละ Berth ที่ได้ดำเนินการเสร็จเรียบร้อย','url' => '#'
                                            ]
                                        ]
                        ];    
                break;
            case '309':
                $manu = [
                            'mainManu' =>'service',
                            'leftManu' =>[
                                            [
                                                'id' =>'30901', 'name' =>'กำหนดค่าเริ่มต้นให้กับเจ้าหน้าที่ปฏิบัติงาน และช่วงเวลาปฏิบัติงาน','url' => '#'
                                            ],
                                            [
                                                'id' =>'30902', 'name' =>'รายการ เพื่อตรวจสอบลูกเรือและผู้โดยสาร','url' => '#'
                                            ],
                                            [
                                                'id' =>'30903', 'name' =>'แสดงรายการลูกเรือและผู้โดยสาร ของแต่ละ Berth ที่ได้ดำเนินการเสร็จเรียบร้อย','url' => '#'
                                            ]
                                        ]
                        ];    
                break;
             case '310':
                $manu = [
                            'mainManu' =>'personnel',
                            'leftManu' =>[
                                            [
                                                'id' =>'31001', 'name' =>'ส่วนเจ้าหน้าที่แต่ละระบบ','url' => '#'
                                            ],
                                            [
                                                'id' =>'31002', 'name' =>'รายงานแรงงาน','url' => '#'
                                            ],
                                            [
                                                'id' =>'31003', 'name' =>'รายงานเจ้าหน้าและแรงงานที่ปฏิบัติงานในแต่ละ Berth','url' => '#'
                                            ],
                                            [
                                                'id' =>'31004', 'name' =>'รายงานเวลาการเข้า-ออก พื้นที่','url' => '#'
                                            ]
                                        ]
                        ];    
                break;
            case '311':
                $manu = [
                            'mainManu' =>'security',
                            'leftManu' =>[
                                            [
                                                'id' =>'31101', 'name' =>'เจ้าหน้าที่เพื่อบริหารจัดการระบบ CCTV','url' => '#'
                                            ],
                                            [
                                                'id' =>'31102', 'name' =>'รายงานผลระบบรักษาความปลอดภัยทั้งสองระบบ','url' => '#'
                                            ]
                                        ]
                        ];    
                break;
             case '444':
                $manu = [
                            'mainManu' =>'no-unit',
                            'leftManu' =>[
                                            [ 'name' =>'no3','url' => 'no3' ],
                                            [ 'name' =>'no5-1','url' => 'no5-1' ],
                                            [ 'name' =>'no5-1','url' => 'no5-1' ],
                                            [ 'name' =>'no5-2','url' => 'no5-2' ],
                                            [ 'name' =>'no7','url' => 'no7' ],
                                            [ 'name' =>'no24','url' => 'no24' ],
                                            [ 'name' =>'no26','url' => 'no26' ],
                                            [ 'name' =>'no4-1','url' => 'no4-1' ],
                                            [ 'name' =>'no4-2','url' => 'no4-2' ],
                                            [ 'name' =>'no30','url' => 'no30' ],
                                            [ 'name' =>'a01','url' => 'a01' ],
                                            [ 'name' =>'a02','url' => 'a02' ],
                                            [ 'name' =>'a03','url' => 'a03' ],
                                            [ 'name' =>'a04','url' => 'a04' ],
                                            [ 'name' =>'a05','url' => 'a05' ],
                                            [ 'name' =>'a06','url' => 'a06' ],
                                            [ 'name' =>'a07','url' => 'a07' ],
                                            [ 'name' =>'a08','url' => 'a08' ],
                                            [ 'name' =>'test2','url' => 'test2' ]      
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
                        
    $menu = [
        'firstname' =>'name',
        'namelast' =>'firstname',
        'username' =>'sirane',
        'manu' =>[
            [
                'id' =>'101', 'name' =>'Admin System', 'images' => 'img/icon-mainmenu/icon-admin.png','url' => './page/'
            ],
            [
                'id' =>'102', 'name' =>'ระบบข้อมูลสารสนเทศ','images' => 'img/icon-mainmenu/icon-information.png', 'url' => './page/'
            ],
            [
                'id' =>'201', 'name' =>'ระบบบริหารการท่า<br>และระบบอนุมัติ','images' => 'img/icon-mainmenu/icon-manager.png', 'url' => './page/'
            ],
            [
                'id' =>'301', 'name' =>'ระบบบริหารจัดการ<br>ลูกค้า CRM','images' => 'img/icon-mainmenu/icon-crm.png', 'url' => './page/'
            ],
            [
                'id' =>'302', 'name' =>'ระบบ e-Gate','images' => 'img/icon-mainmenu/icon-egate.png','url' => './page/'
            ],
            [
                'id' =>'303', 'name' =>'ระบบบริหารพื้นที่<br>ประโยชน์ ทสพ.-ทร.','images' => 'img/icon-mainmenu/icon-areaManame.png', 'url' => './page/'
            ],
            [
                'id' =>'304', 'name' =>'ระบบจัดเก็บผลประโยชน์','images' => 'img/icon-mainmenu/icon-benefits.png','url' => './page/'
            ],
            [
                'id' =>'305', 'name' =>'ระบบบริหารหน้าท่า<br>และควบคุมจราจรทางน้ำ','images' => 'img/icon-mainmenu/icon-portManage.png', 'url' => './page/'
            ],
            [
                'id' =>'306', 'name' =>'ระบบตรวจนับ<br>และตรวจสอบสินค้า','images' => 'img/icon-mainmenu/icon-counting.png', 'url' => './page/'
            ],
            [
                'id' =>'307', 'name' =>'ระบบคลังสินค้า','images' => 'img/icon-mainmenu/icon-warehouse.png', 'url' => './page/'
            ],
            [
                'id' =>'308', 'name' =>'ระบบเครื่องมือบรรทุกขนถ่าย','images' => 'img/icon-mainmenu/icon-tranfer.png', 'url' => './page/'
            ],
            [
                'id' =>'309', 'name' =>'ระบบบริการลูกเรือ<br>และผู้โดยสาร','images' => 'img/icon-mainmenu/icon-service.png', 'url' => './page/'
            ],
            [
                'id' =>'310', 'name' =>'ระบบบุคลากรแรงงาน','images' => 'img/icon-mainmenu/icon-personnel.png', 'url' => './page/'
            ],
            [
                'id' =>'311', 'name' =>'ระบบรักษาความปลอดภัย','images' => 'img/icon-mainmenu/icon-security.png', 'url' => './page/'
            ],
            [
                'id' =>'444', 'name' =>'No unit','images' => '', 'url' => './page/'
            ]
        ]
    ];
            
            return $menu;
	}

}
