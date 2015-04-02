@extends('layout.master-module')
@section('content')

    <form class="form-horizontal">
        <div class="col-lg-12 col-md-12">
            <h2 class="text-center">บันทึกข้อความ</h3>
        </div>
        <div class="col-lg-12 col-md-12 hr-topic"></div>
        <div class="row form-group">
            <label class="col-md-2">ส่วนราชการ :&nbsp;</label>
            <div class="col-md-10">
                <label>ศูนย์ปฏิบัติการ ท่าเรือจุกเสม็ดฯ (โทร.๗๗๗๗)</label>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6">
                <label class="col-md-4">ที่ :&nbsp;</label>
                <div class="col-md-8">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <label class="col-md-2 col-md-offset-2 ">วันที่ :&nbsp;</label>
                <div class="input-group col-md-8">
                    <input type="text" class="form-control" placeholder="dd/mm/YY">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                    </div>
                 </div>            
             </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2">เรื่อง :&nbsp;</label>
            <div class="col-md-6">
                <label>เรือการปฏิบัติงานเข้า และ ออก และการขนถ่ายสินค้า</label>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2">เสนอ</label>
        </div>
        <div class="row form-group">
            <div class="col-lg-12 col-md-12 col-md-offset-1">
                <label>ด้วย ศูนย์ปฏิบัติการฯ รายงานขั้นตอนการปฏิบัติของหน่วยต่างๆสรุปได้ดังนี้</label>
            </div>       
        </div>    
        <div class="row form-group">
            <div class="col-md-6">
                <label class="col-md-2 col-md-offset-2">ชื่อเรือ :&nbsp;</label>
                <div class="col-md-8">
                    <input type="text" class="form-control text-center" placeholder="M.V.UNIEXPRESS9">
                </div>
            </div>
            <div class="col-md-6">    
                <label class="col-md-2 col-md-offset-2 ">สัญชาติ :&nbsp;</label>
                <div class="col-md-8">
                    <input type="text" class="form-control text-center" placeholder="THAI" >
                </div>
            </div>
         </div>    
        <div class="row form-group">
            <div class="col-md-6">
                <label class="col-md-4">คำร้องขอนำเรือเข้า ข ออกจากท่า</label>
                <label class="col-md-3 text-center">NO :&nbsp;</label>
                <div class="col-md-5">
                    <input class="form-control text-center" type="text" placeholder="0018" >
                </div>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6">
                <label class="col-md-4"></label>
                <label class="col-md-3 text-center">GRT :&nbsp;</label>
                <div class="col-md-5">
                    <input class="form-control text-center" type="text" placeholder="205.00" >
                </div>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6">
                <label class="col-md-4"></label>
                <label class="col-md-3 text-center">ยาว :&nbsp;</label>
                <div class="col-md-5">
                    <input class="form-control text-center" type="text" placeholder="36.00" >
                </div>
            </div>
            <div class="col-md-6">
                <label class="col-md-2 col-md-offset-2 ">วันที่ :&nbsp;</label>
                <div class="input-group col-md-8">
                    <input type="text" class="form-control" placeholder="dd/mm/YY">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                    </div>
                 </div>            
             </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6">
                <label class="col-md-4 col-md-offset-1">1 . เรือเข้าเทียบท่าหมายเลข :&nbsp;</label>
                <div class="col-md-7">
                    <input type="text" class="form-control text-center" placeholder="5">
                </div>   
             </div>
            <div class="col-md-6">
                <label class="col-md-2 col-md-offset-2">เวลา :&nbsp;</label>
                <div class="col-md-7">
                    <input type="text" class="form-control text-center" placeholder="05.20">
                </div>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12 col-lg-12">
                <label class="col-md-1 col-md-offset-1">- ใช้เรือลากจุง 1</label>
                <div class="col-md-1">
                    <input type="checkbox"> &nbsp; <label>(ฐท.สส.๒๓)</label>
                </div>
                <label class="col-md-1">- ใช้เรือลากจุง 2</label>
                <div class="col-md-1">
                    <input type="checkbox"> &nbsp; <label>(ฐท.สส.๒๔)</label>
                </div>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12 col-md-offset-6">
                <label class="col-md-2 text-right">ลงชื่อ :&nbsp;</label>
                <div class="col-md-3 text-center">
                    <input class="form-control text-center" type="text"><br><label>จนท.รับเรือ</label>
                </div>
            </div>
        </div>     
        <div class="row form-group">
            <div class="col-md-6">
                <label class="col-md-4 col-md-offset-1">2 . เรือการขนถ่าย (DISCHARGING)</label>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12 col-lg-12">
                <label class="col-md-2 col-md-offset-1">2.1 สินค้าขาเข้า (DISCHARGING)</label>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6">
                <label class="col-md-1 col-md-offset-4">จำนวน :&nbsp;</label>
                <div class="col-md-6" >
                    <input type="text" class="form-control">
                </div>
                <label>&nbsp;&nbsp;ตัน</label>
            </div>
            <div class="col-md-6">
                <label class="col-md-2 col-md-offset-2">valum :&nbsp;</label>
                <div class="col-md-7">
                    <input type="text" class="form-control">
                </div>
                <label>&nbsp;&nbsp;m<sup>3</sup></label>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6">
                <label class="col-md-1 col-md-offset-4">เวลา :&nbsp;</label>
                <div class="col-md-7" >
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <label class="col-md-2 col-md-offset-2">ถึง :&nbsp;</label>
                <div class="col-md-7">
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12 col-md-offset-6">
                <label class="col-md-2 text-right">ลงชื่อ :&nbsp;</label>
                <div class="col-md-3 text-center">
                    <input class="form-control text-center" type="text"><br><label>จนท.คลังพักฯ</label>
                </div>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12 col-lg-12">
                <label class="col-md-2 col-md-offset-1">2.2 สินค้าขาออก (LOADING)</label>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6">
                <label class="col-md-1 col-md-offset-4">จำนวน :&nbsp;</label>
                <div class="col-md-6" >
                    <input type="text" class="form-control">
                </div>
                <label>&nbsp;&nbsp;ตัน</label>
            </div>
            <div class="col-md-6">
                <label class="col-md-2 col-md-offset-2">valum :&nbsp;</label>
                <div class="col-md-7">
                    <input type="text" class="form-control">
                </div>
                <label>&nbsp;&nbsp;m<sup>3</sup></label>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6">
                <label class="col-md-1 col-md-offset-4">เวลา :&nbsp;</label>
                <div class="col-md-7" >
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <label class="col-md-2 col-md-offset-2">ถึง :&nbsp;</label>
                <div class="col-md-7">
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12 col-md-offset-6">
                <label class="col-md-2 text-right">ลงชื่อ :&nbsp;</label>
                <div class="col-md-3 text-center">
                    <input class="form-control text-center" type="text"><br><label>จนท.คลังพักฯ</label>
                </div>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6">
                <label class="col-md-4 col-md-offset-1">3 . ขอรับการสนับสนุน :&nbsp;</label>
             </div>
        </div>
        <div class="row form-group">       
            <div class="col-md-12">
                <div class="col-md-2">
                    <input type="checkbox"> &nbsp; <label>น้ำประปา</label>
                </div>
                <label class="col-md-1 text-right">จำนวน :&nbsp;</label>
                <div class="col-md-2">
                    <input type="text" class="form-control">
                </div>
                <label>&nbsp;&nbsp;ตัน</label>
            </div>
        </div>
        <div class="row form-group">       
            <div class="col-md-12">
                <div class="col-md-2">
                    <input type="checkbox"> &nbsp; <label>ไฟฟ้า</label>
                </div>
                <label class="col-md-1 text-right">จำนวน :&nbsp;</label>
                <div class="col-md-2">
                    <input type="text" class="form-control">
                </div>
                <label>&nbsp;&nbsp;ยูนิต</label>
            </div>
        </div>
        <div class="row form-group">       
            <div class="col-md-12">
                <div class="col-md-2">
                    <input type="checkbox"> &nbsp; <label>แรงงาน</label>
                </div>
                <label class="col-md-1 text-right">จำนวน :&nbsp;</label>
                <div class="col-md-2">
                    <input type="text" class="form-control">
                </div>
                <label class="col-md-1 text-center">&nbsp;&nbsp;ชุด</label>
                <div class="col-md-1">
                    <input type="text" class="form-control">
                </div>
                <label class="col-md-1 text-center">&nbsp;&nbsp;คน</label>
                <div class="col-md-1">
                    <input type="text" class="form-control">
                </div>
                <label class="col-md-1 text-center">&nbsp;&nbsp;บริษัท</label>
            </div>
        </div>
        <div class="row form-group">       
            <div class="col-md-12">
                <div class="col-md-2">
                    <input type="checkbox"> &nbsp; <label>เครื่องมิอขนและเครื่องทุ่นเเรง</label>
                </div>
                <label class="col-md-1 text-right">จำนวน :&nbsp;</label>
                <div class="col-md-2">
                    <input type="text" class="form-control">
                </div>
                <label class="col-md-1 text-center">&nbsp;&nbsp;ประเภท</label>
          
                <div class="col-md-1">
                    <input type="text" class="form-control">
                </div>
                <label class="col-md-1 text-center">&nbsp;&nbsp;บริษัท</label>
                <div class="col-md-1">
                    <input type="text" class="form-control">
                </div>
                <label class="col-md-1 text-center">&nbsp;&nbsp;ชม.ใช้งาน</label>
                <div class="col-md-1">
                    <input type="text" class="form-control">
                </div>
                <label class="col-md-1">&nbsp;&nbsp;ชม.</label> 
            </div>   
        </div>
        <div class="row form-group">
            <div class="col-md-12 col-md-offset-6">
                <label class="col-md-2 text-right">ลงชื่อ :&nbsp;</label>
                <div class="col-md-3 text-center">
                    <input class="form-control text-center" type="text"><br><label>จนท.บรรทุกและขนถ่ายฯ</label>
                </div>
            </div>
        </div>                                                                        
    </form> 
@stop