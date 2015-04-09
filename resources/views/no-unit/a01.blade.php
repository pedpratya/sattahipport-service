@extends('layout.master-module')
@section('breadcrumbs', Breadcrumbs::render('nounit-a01'))
@section('content') 
			<div class="portlet">

				<div class="portlet-header">

					<h3>
						<i class="fa fa-tasks"></i>
						บันทึกข้อความ
					</h3>

				</div> <!-- /.portlet-header -->

				<div class="portlet-content">

					<div class="row">
    <form class="form-horizontal">
        <div class="form-group">
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-3 col-md-3"><label>ส่วนราชการ :&nbsp;</label></div>
                <div class="col-lg-9 col-md-9">
                   <label>ศูนย์ปฏิบัติการ ท่าเรือจุกเสม็ดฯ (โทร.๗๗๗๗)</label>
                </div>
            </div>  
            <div class="col-lg-6 col-md-6"> 
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6">
                <label class="col-lg-3 col-md-3">ที่ :&nbsp;</label>
                <div class="col-lg-9 col-md-9">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <label class="col-lg-3 col-md-3">วันที่ :&nbsp;</label>
                <div class="col-lg-9 col-md-9">
                    <div class='input-group date'>
                        <input type="text" class="input-datepicker form-control" placeholder="dd/mm/YY">
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                        </div>
                    </div>    
                </div>            
             </div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-3 col-md-3"><label>เรื่อง :&nbsp;</label></div>
                <div class="col-lg-9 col-md-9">
                   <label>เรือการปฏิบัติงานเข้า และ ออก และการขนถ่ายสินค้า</label>
                </div>
            </div>  
            <div class="col-lg-6 col-md-6"> 
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-4 col-md-4"><label>เสนอ</label></div>
                <div class="col-lg-8 col-md-8">
                </div>
            </div>  
        </div>
        <div class="form-group">
            <div class="col-lg-12 col-md-12">
                <label class="col-lg-12 col-md-12">ด้วย ศูนย์ปฏิบัติการฯ รายงานขั้นตอนการปฏิบัติของหน่วยต่างๆสรุปได้ดังนี้</label>
            </div>       
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-3 col-md-3"><label>ชื่อเรือ :&nbsp;</label></div>
                <div class="col-lg-9 col-md-9">
                   <input class="form-control" type="text" placeholder="M.V.UNIEXPRESS9">
                </div>
            </div>  
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-3 col-md-3"><label>สัญชาติ :&nbsp;</label></div>
                <div class="col-lg-9 col-md-9">
                   <input class="form-control" type="text" placeholder="THAI">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-12 col-md-12">
                <label class="col-lg-12 col-md-12">คำร้องขอนำเรือเข้า - ออกจากท่า</label>
            </div>       
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-3 col-md-3"><label>NO :&nbsp;</label></div>
                <div class="col-lg-9 col-md-9">
                   <input class="form-control" type="text" placeholder="0018" >
                </div>
            </div>  
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-3 col-md-3"><label>GRT :&nbsp;</label></div>
                <div class="col-lg-9 col-md-9">
                   <input class="form-control" type="text" placeholder="205.00">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-3 col-md-3"><label>ยาว :&nbsp;</label></div>
                <div class="col-lg-9 col-md-9">
                   <input class="form-control" type="text" placeholder="36.00" >
                </div>
            </div>  
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-3 col-md-3"><label>วันที่ :&nbsp;</label></div>
                <div class="col-lg-9 col-md-9">
                    <div class='input-group date'>
                        <input type="text" class="input-datepicker form-control" placeholder="dd/mm/YY">
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-12 col-md-12">
                <label class="col-lg-12 col-md-12">1 . เรือเข้าเทียบท่าหมายเลข</label>
            </div>       
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-3 col-md-3"><label>หมายเลข :&nbsp;</label></div>
                <div class="col-lg-9 col-md-9">
                   <input class="form-control" type="text" placeholder="5" >
                </div>
            </div>  
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-3 col-md-3"><label>เวลา :&nbsp;</label></div>
                <div class="col-lg-9 col-md-9">
                   <input class="form-control" type="text" placeholder="05.20">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-3 col-md-3"><label>ใช้เรือลากจุง 1 :&nbsp;</label></div>
                <div class="col-lg-9 col-md-9">
                   <input type="checkbox"> &nbsp; <label>(ฐท.สส.๒๓)</label>
                </div>
            </div>  
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-3 col-md-3"><label>ใช้เรือลากจุง 2 :&nbsp;</label></div>
                <div class="col-lg-9 col-md-9">
                   <input type="checkbox"> &nbsp; <label>(ฐท.สส.๒๔)</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-12 col-md-12">
                <label class="col-lg-12 col-md-12">2 . เรือการขนถ่าย (DISCHARGING)</label>
            </div>       
        </div>
        <div class="form-group">
            <div class="col-lg-12 col-md-12">
                <label class="col-lg-12 col-md-12">2.1 สินค้าขาเข้า (DISCHARGING)</label>
            </div>       
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-3 col-md-3"><label>จำนวน :&nbsp;</label></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1">
                </div>
                <div class="col-lg-1 col-md-1">
                    <label>ตัน</label>
                </div>
            </div>  
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-3 col-md-3"><label>valum :&nbsp;</label></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1">
                </div>
                <div class="col-lg-1 col-md-1">
                    <label>m<sup>3</sup></label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-3 col-md-3"><label>เวลา :&nbsp;</label></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1">
                </div>
                <div class="col-lg-1 col-md-1">
                    <label></label>
                </div>
            </div>  
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-3 col-md-3"><label>ถึง :&nbsp;</label></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1">
                </div>
                <div class="col-lg-1 col-md-1">
                    <label></label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-12 col-md-12">
                <label class="col-lg-12 col-md-12">2.2 สินค้าขาออก (LOADING)</label>
            </div>       
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-3 col-md-3"><label>จำนวน :&nbsp;</label></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1">
                </div>
                <div class="col-lg-1 col-md-1">
                    <label>ตัน</label>
                </div>
            </div>  
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-3 col-md-3"><label>valum :&nbsp;</label></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1">
                </div>
                <div class="col-lg-1 col-md-1">
                    <label>m<sup>3</sup></label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-3 col-md-3"><label>เวลา :&nbsp;</label></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1">
                </div>
                <div class="col-lg-1 col-md-1">
                    <label></label>
                </div>
            </div>  
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-3 col-md-3"><label>ถึง :&nbsp;</label></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1">
                </div>
                <div class="col-lg-1 col-md-1">
                    <label></label>
                </div>
            </div>
        </div>
        

        <div class="form-group">
            <div class="col-lg-12 col-md-12">
                <label class="col-lg-12 col-md-12">3 . ขอรับการสนับสนุน :&nbsp;</label>
             </div>
        </div>
        <div class="form-group">       
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
        <div class="form-group">       
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
        <div class="form-group">       
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
        <div class="form-group">       
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
                                                                       
    </form> 
					</div> <!-- /.row -->

				</div> <!-- /.portlet-content -->

			</div> <!-- /.portlet -->                                            
@stop