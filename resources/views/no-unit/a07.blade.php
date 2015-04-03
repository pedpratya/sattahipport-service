@extends('layout.master-module')
@section('content')
<!-- header -->
<div class="col-lg-12 col-md-12 text-center">
	<h3 class="col-lg-12 text-center">แบบตรวจหีบห่อสินค้า</h3>
	<label>(รอชื่อภาษาอังกฤษ)</label>
</div><!-- End header -->

<form class="form-horizontal">
    <div class="col-lg-12 col-md-12 hr-topic"></div> 
    <div class="row form-group">
        <div class="col-lg-9 col-md-9"></div>
        <div class="col-lg-3 col-md-3">
            <div class="col-lg-6 col-md-6"><label  class="col-lg-12">คลังพักสินค้าที่ : </label><label>WAREHOUSE NO.</label></div>
            <div class="col-lg-6 col-md-6">
                <input type="text" class="form-control" id="inputForm1">
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-lg-9 col-md-9"></div>
        <div class="col-lg-3 col-md-3">
            <div class="col-lg-6 col-md-6"><label  class="col-lg-12">เรือเข้าวันที่ : </label><label>DATE OF ARRIVAL</label></div>
            <div class="col-lg-6 col-md-6">
                <div class='input-group date'>
                  <input type="text"
                   class="datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-lg-9 col-md-9"></div>
        <div class="col-lg-3 col-md-3">
            <div class="col-lg-6 col-md-6"><label  class="col-lg-12">ใบรับตราส่งที่ : </label><label>BILL OF LADING NO.</label></div>
            <div class="col-lg-6 col-md-6">
                <input type="text" class="form-control" id="inputForm1">
            </div>
        </div>
    </div>
    <div class="row form-group">
    	<!-- <div class="col-lg-2 col-md-2"></div> -->
        <div class="col-lg-2 col-md-2 radio">
            <label><input type="radio" name="opatradio">ตรวจสอบแล้ว</label>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="col-lg-4 col-md-4">เจ้าพนักงาน วันที่ :</div>
            <div class="col-lg-5 col-md-5">
                <div class='input-group date'>
                  <input type="text"
                   class="datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4"></div>
    </div>
    <div class="row form-group">
        <div class="col-lg-2 col-md-2 radio">
            <label><input type="radio" name="opatradio">คิดค่าภาระแล้ว</label>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="col-lg-4 col-md-4">หัวหน้าแผนก วันที่ :</div>
            <div class="col-lg-5 col-md-5">
                <div class='input-group date'>
                  <input type="text"
                   class="datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4"></div>
    </div>
    <div class="row form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ระยะเวลาค่าเช่าวันที่ : </label></div>
            <div class="col-lg-7 col-md-7">
                <input type="text" class="form-control" id="inputForm1">
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-3 col-md-3"><label  class="col-lg-12">ถึง : </label></div>
            <div class="col-lg-8 col-md-8">
            	<div class='input-group date'>
                  <input type="text"
                   class="datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">เวลา : </label></div>
            <div class="col-lg-7 col-md-7">
                <input type="text" class="form-control" id="inputForm1">
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-3 col-md-3"><label  class="col-lg-12">เจ้าพนักงานคิดค่าภาระ : </label></div>
            <div class="col-lg-8 col-md-8">
            	<input type="text" class="form-control" id="inputForm1">
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ได้ชำระค่าภาระเเล้ว : </label></div>
            <div class="col-lg-7 col-md-7">
                <input type="text" class="form-control" id="inputForm1">
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-3 col-md-3"><label  class="col-lg-12">น้ำหนักจาก : </label></div>
            <div class="col-lg-8 col-md-8">
            	<input type="text" class="form-control" id="inputForm1">
            </div>
        </div>
    </div>
    <div class="row form-group"></div>
	<div class="row form-group">
	<table class="table table-bordered">
	    <tr>
	        <td colspan="5" rowspan="2" class="text-center">รายการสินค้า</td>
	        <td colspan="3" class="text-center">ขนาดแต่ละหีบห่อ</td>
	        <td colspan="2" rowspan="2" class="text-center">จำนวนหีบห่อ NUMBER OF PACKAGES</td>
	        <td colspan="2"  rowspan="2"class="text-center">น้ำหนักรวม GROSS WEIGHT</td>
	        <td colspan="2"  rowspan="2"class="text-center">ปริมาตร VOLUME</td>
	        <td colspan="3" class="text-center">บัญชีเรือสำแดง PEP. MANIFEST</td>
	        <td colspan="4"  rowspan="2"class="text-center">AMOUNT OF CHARGES (เงินค่าภาระ)</td>    
	    </tr>
	    <tr>
	        <td class="text-center">กว้าง WIDTH</td>
	        <td class="text-center">ยาว LENGTH</td>
	        <td class="text-center">สูง HEIGHT</td>
	        <td>จำนวนหีบห่อ</td>
	        <td>ปริมาตร VOLUME</td>
	        <td>น้ำหนักรวม GROSS WEIGHT</td>
	    </tr>
	    <tr>
	        <td colspan="5">P'KGS</td>
	        <td>160</td>
	        <td>250</td>
	        <td>145</td>
	        <td colspan="2">3</td>
	        <td colspan="2">4,500</td>
	        <td colspan="2">KGS</td>
	        <td>&nbsp;</td>
	        <td>&nbsp;</td>
	        <td>&nbsp;</td>
	        <td colspan="4">&nbsp;</td>
	    </tr>
	    
	</table>
	</div>
</form>


  @stop   