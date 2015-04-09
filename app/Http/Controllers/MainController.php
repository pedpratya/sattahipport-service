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
                /*$manu = "<li class=''>				
                         <a href='./organization'>
                                    <i class='fa fa-tasks'></i>
                                    องค์กร
                            </a>   				
                        </li>
                        <li class=''>			
                         <a href='./system-admin'>
                                    <i class='fa fa-tasks'></i>
                                    ระบบงาน
                            </a>   				
                        </li>
                        <li class=''>		
                         <a href='./usermanagement'>
                                    <i class='fa fa-tasks'></i>
                                    USER MANAGEMENT
                            </a>   				
                        </li>
                        <li class=''>		
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    รายงาน
                            </a>   				
                        </li>";*/
                $manu = "    <li class='dropdown'>
        <a href='javascript:;'>
                <i class='fa fa-file-text'></i>
                Example Pages
                <span class='caret'></span>
        </a>				

        <ul class='sub-nav' style='display: none;'>
                <li>
                        <a href='./page-profile.html'>
                                <i class='fa fa-user'></i> 
                                Profile
                        </a>
                </li>
                <li>
                        <a href='./page-invoice.html'>
                                <i class='fa fa-money'></i> 
                                Invoice
                        </a>
                </li>
        </ul>
    </li>";
                break;
            case '102':
                $manu = "<li class=''>				
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    ตารางอัตราค่าบริการ
                            </a>   				
                        </li>
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    ตารางประเมินค่าใช้จ่าย
                            </a>   				
                        </li>
                        <li class=''>		
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    ตารางรายการประเมินค่าใช้จ่าย
                            </a>   				
                        </li>
                        <li class=''>		
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    รายการขอใช้บริการ
                            </a>   				
                        </li>
                        <li class=''>		
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    รายการ Customer
                            </a>   				
                        </li>";                
                break;
            case '201':
                $manu = "<li class=''>				
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    Port Infomation
                            </a>   				
                        </li>
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    Port Schedule
                            </a>   				
                        </li>
                        <li class=''>		
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    Port Display
                            </a>   				
                        </li>";                 
                break;
            case '301':
                $manu = "<li class=''>				
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    Registration System
                            </a>   				
                        </li>
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    Service DashBoard
                            </a>   				
                        </li>           
                        <li class='dropdown'>
                            <a href='javascript:;'>
                                    <i class='fa fa-tasks'></i>
                                    Customer Management
                                    <span class='caret'></span>
                            </a>				

                            <ul class='sub-nav'>
                                    <li>
                                            <a href='./page-profile.html'>
                                                    <i class='fa fa-user'></i> 
                                                    Customer Infomation
                                            </a>
                                    </li>
                                    <li>
                                            <a href='./page-invoice.html'>
                                                    <i class='fa fa-money'></i> 
                                                    Service Log
                                            </a>
                                    </li>
                                    <li>
                                            <a href='./page-pricing.html'>
                                                    <i class='fa fa-dollar'></i> 
                                                    Rental Space
                                            </a>
                                    </li>
                                    <li>
                                            <a href='./page-support.html'>
                                                    <i class='fa fa-question'></i> 
                                                    Port Services
                                            </a>
                                    </li>
                                    <li>
                                            <a href='./page-gallery.html'>
                                                    <i class='fa fa-picture-o'></i> 
                                                    Ware House
                                            </a>
                                    </li>
                                    <li>
                                            <a href='./page-settings.html'>
                                                    <i class='fa fa-cogs'></i> 
                                                    Work In Process
                                            </a>
                                    </li>
                                    <li>
                                            <a href='./page-calendar.html'>
                                                    <i class='fa fa-calendar'></i> 
                                                    Vehicle Access
                                            </a>
                                    </li>
                             </ul>						
                        </li>";
                break;
            case '302':
                $manu = "<li class=''>				
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    Vehcle Access
                            </a>   				
                        </li>          
                        <li class='dropdown'>
                            <a href='javascript:;'>
                                    <i class='fa fa-tasks'></i>
                                    Enter Form
                                    <span class='caret'></span>
                            </a>				

                            <ul class='sub-nav'>
                                    <li>
                                            <a href='./page-profile.html'>
                                                    <i class='fa fa-user'></i> 
                                                    Tracking Module
                                            </a>
                                    </li>
                                    <li>
                                            <a href='./page-invoice.html'>
                                                    <i class='fa fa-money'></i> 
                                                    Vehicle - Module
                                            </a>
                                    </li>
                                    <li>
                                            <a href='./page-pricing.html'>
                                                    <i class='fa fa-dollar'></i> 
                                                    Tracking - Display
                                            </a>
                                    </li>
                             </ul>						
                        </li>                        
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    Car Tracking System
                            </a>   				
                        </li>
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    รายงาน
                            </a>   				
                        </li>";
                break;
            case '303':
                $manu = "<li class='dropdown'>
                            <a href='javascript:;'>
                                    <i class='fa fa-tasks'></i>
                                    ข้อมูลพื้นที่ ทพส.-ทร.
                                    <span class='caret'></span>
                            </a>				

                            <ul class='sub-nav'>
                                    <li>
                                            <a href='./page-profile.html'>
                                                    <i class='fa fa-user'></i> 
                                                    วงรอบ-ผังบริเวณโดยรอบ
                                            </a>
                                    </li>
                                    <li>
                                            <a href='./page-invoice.html'>
                                                    <i class='fa fa-money'></i> 
                                                    กำหนดอัตราเช่า
                                            </a>
                                    </li>
                             </ul>						
                        </li>                        
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    ผู้เช่า-ผู้ใช้ประโยชน์
                            </a>   				
                        </li>
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    ข้อมูลภาพถ่ายทางอากาศ
                            </a>   				
                        </li>
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    Drone Management
                            </a>   				
                        </li>
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    รายงาน
                            </a>   				
                        </li>";
                break;
            case '304':
                $manu = "<li class=''>				
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    ระบบบริหารจัดการอัตราภาระ TARIFF
                            </a>   				
                        </li>          
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    ทะเบียนคุมลูกหนี้
                            </a>   				
                        </li>                     
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    ทะเบียนคุมเงินหลักประกัน
                            </a>   				
                        </li>
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    ทะเบียนคุมเงินมัดจำ
                            </a>   				
                        </li>                     
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    คำนวณอัตราเบี้ยปรับ
                            </a>   				
                        </li>
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    ทะเบียนคุมไฟฟ้า ประปา
                            </a>   				
                        </li>                     
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    ลูกหนี้ไฟฟ้า ประปา
                            </a>   				
                        </li>
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    ระบบพิมพ์ใบแจ้งหนี้
                            </a>   				
                        </li>                     
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    ระบบคำนวณค่าภาระเรือ
                            </a>   				
                        </li>                        
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    รายงาน
                            </a>   				
                        </li>";
                break;
            case '305':
                $manu = "<li class=''>				
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    Berth Request Service
                            </a>   				
                        </li>          
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    ระบบ PORT & AIS & RADAR
                            </a>   				
                        </li>                     
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    ข้อมูลเรือ IMO หรือ Callsign
                            </a>   				
                        </li>
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    รายละเอียดข้อมูลภายในใบ Berth
                            </a>   				
                        </li>                     
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    รายการ Berth
                            </a>   				
                        </li>
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    Berth Schedule
                            </a>   				
                        </li>                     
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    Problem Center
                            </a>   				
                        </li>
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    AIS Display
                            </a>   				
                        </li>";
                break;
            case '306':
                $manu = "<li class=''>				
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    Berth Request Service
                            </a>   				
                        </li>          
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    กำหนดเจ้าหน้าที่รับผิดชอบปฏิบัติงาน
                            </a>   				
                        </li>                     
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    ตรวจสอบเอกสารอนุมัติการขนถ่าย
                            </a>   				
                        </li>
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    ตรวจสอบสินค้า
                            </a>   				
                        </li>";
                break;
            case '307':
                $manu = "<li class=''>				
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    กำหนดค่าคงที่ของการบริหารพื้นที่คลังพัก และ ลานพักสินค้า
                            </a>   				
                        </li>          
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    กำหนดค่าเริ่มต้นให้กับเจ้าหน้าที่ปฏิบัติงาน และช่วงเวลาปฏิบัติงาน
                            </a>   				
                        </li>                     
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    รายการ เพื่อกำหนดพื้นที่วางสินค้า และกำหนดเจ้าหน้าที่รับผิดชอบดำเนินการ
                            </a>   				
                        </li>
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    รายการสินค้า ของแต่ละ Berth ที่ได้ดำเนินการเสร็จเรียบร้อย
                            </a>   				
                        </li>";
                break;
            case '308':
                $manu = "<li class=''>				
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    กำหนดค่าคงที่ของเครื่องมือบรรทุกขนถ่าย
                            </a>   				
                        </li>          
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    กำหนดค่าเริ่มต้นให้กับเจ้าหน้าที่ปฏิบัติงาน
                            </a>   				
                        </li>                     
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    รายการ เพื่อกำหนดชนิดเครื่องมือในการทำงาน และกำหนดเจ้าหน้าที่รับผิดชอบดำเนินการ
                            </a>   				
                        </li>
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    รายการสินค้า ของแต่ละ Berth ที่ได้ดำเนินการเสร็จเรียบร้อย
                            </a>   				
                        </li>";
                break;
            case '309':
                $manu = "<li class=''>				
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    กำหนดค่าเริ่มต้นให้กับเจ้าหน้าที่ปฏิบัติงาน และช่วงเวลาปฏิบัติงาน
                            </a>   				
                        </li>          
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    รายการ เพื่อตรวจสอบลูกเรือและผู้โดยสาร
                            </a>   				
                        </li>                     
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    แสดงรายการลูกเรือและผู้โดยสาร ของแต่ละ Berth ที่ได้ดำเนินการเสร็จเรียบร้อย
                            </a>   				
                        </li>";
                break;
             case '310':
                $manu = "<li class=''>				
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    ส่วนเจ้าหน้าที่แต่ละระบบ
                            </a>   				
                        </li>          
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    รายงานแรงงาน
                            </a>   				
                        </li>                     
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    รายงานเจ้าหน้าและแรงงานที่ปฏิบัติงานในแต่ละ Berth
                            </a>   				
                        </li>
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    รายงานเวลาการเข้า-ออก พื้นที่
                            </a>   				
                        </li>";
                break;
            case '311':
                $manu = "<li class=''>				
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    เจ้าหน้าที่เพื่อบริหารจัดการระบบ CCTV
                            </a>   				
                        </li>          
                        <li class=''>			
                         <a href='#'>
                                    <i class='fa fa-tasks'></i>
                                    รายงานผลระบบรักษาความปลอดภัยทั้งสองระบบ
                            </a>   				
                        </li>";
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
                'id' =>'101', 'name' =>'Admin System', 'images' => 'img/icon-mainmenu/icon-admin.png','url' => './admin/home'
            ],
            [
                'id' =>'102', 'name' =>'ระบบข้อมูลสารสนเทศ','images' => 'img/icon-mainmenu/icon-information.png', 'url' => './information/home'
            ],
            [
                'id' =>'201', 'name' =>'ระบบบริหารการท่า<br>และระบบอนุมัติ','images' => 'img/icon-mainmenu/icon-manager.png', 'url' => './e-port-management/home'
            ],
            [
                'id' =>'301', 'name' =>'ระบบบริหารจัดการ<br>ลูกค้า CRM','images' => 'img/icon-mainmenu/icon-crm.png', 'url' => './crm/home'
            ],
            [
                'id' =>'302', 'name' =>'ระบบ e-Gate','images' => 'img/icon-mainmenu/icon-egate.png','url' => './e-gate/home'
            ],
            [
                'id' =>'303', 'name' =>'ระบบบริหารพื้นที่<br>ประโยชน์ ทสพ.-ทร.','images' => 'img/icon-mainmenu/icon-areaManame.png', 'url' => './area-management/home'
            ],
            [
                'id' =>'304', 'name' =>'ระบบจัดเก็บผลประโยชน์','images' => 'img/icon-mainmenu/icon-benefits.png','url' => './benefit/home'
            ],
            [
                'id' =>'305', 'name' =>'ระบบบริหารหน้าท่า<br>และควบคุมจราจรทางน้ำ','images' => 'img/icon-mainmenu/icon-portManage.png', 'url' => './traffic-control/home'
            ],
            [
                'id' =>'306', 'name' =>'ระบบตรวจนับ<br>และตรวจสอบสินค้า','images' => 'img/icon-mainmenu/icon-counting.png','url' => './counting/home'
            ],
            [
                'id' =>'307', 'name' =>'ระบบคลังสินค้า','images' => 'img/icon-mainmenu/icon-warehouse.png','url' => './warehouse/home'
            ],
            [
                'id' =>'308', 'name' =>'ระบบเครื่องมือบรรทุกขนถ่าย','images' => 'img/icon-mainmenu/icon-tranfer.png','url' => './transfer/home'
            ],
            [
                'id' =>'309', 'name' =>'ระบบบริการลูกเรือ<br>และผู้โดยสาร','images' => 'img/icon-mainmenu/icon-service.png','url' => './service/home'
            ],
            [
                'id' =>'310', 'name' =>'ระบบบุคลากรแรงงาน','images' => 'img/icon-mainmenu/icon-personnel.png','url' => './personnel/home'
            ],
            [
                'id' =>'311', 'name' =>'ระบบรักษาความปลอดภัย','images' => 'img/icon-mainmenu/icon-security.png','url' => './security/home'
            ]
        ]
    ];
            
            return $menu;
	}

}
