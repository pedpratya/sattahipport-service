@extends('layout.content')
@section('breadcrumbs', Breadcrumbs::render('nounit-a07'))
@section('content')

			<div class="portlet">

				<div class="portlet-header">

					<h3>
						<i class="fa fa-tasks"></i>
						แบบตรวจหีบห่อสินค้า
					</h3>

				</div> <!-- /.portlet-header -->

				<div class="portlet-content">

					<div class="row">

<form class="form-horizontal">
        <div class="form-group">
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4">
                    <label>
                        คลังพักสินค้าที่  <br>
                        WAREHOUSE NO :
                    </label>
                </div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4">
                    <label>
                        เรือเข้าวันที่ <br>
                        DATE OF ARRIVAL :
                    </label>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="input-datepicker input-group date" data-auto-close="true" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
                        <input class="form-control" type="text">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>     
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4">
                    <label>
                        ใบรับตราส่งที่ <br>
                        BILL OF LADING NO :
                    </label>
                </div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"></div>
                <div class="col-lg-8 col-md-8">
                    <label><input type="radio" name="opatradio"> ตรวจสอบแล้ว</label>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"><label>เจ้าพนักงาน วันที่ :</label></div>
                <div class="col-lg-8 col-md-8">
                    <div class="input-datepicker input-group date" data-auto-close="true" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
                        <input class="form-control" type="text">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>    
                </div>
            </div>
        </div>
    <div class="form-group">
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"></div>
                <div class="col-lg-8 col-md-8">
                    <label><input type="radio" name="opatradio"> ตรวจสอบแล้ว</label>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"><label>หัวหน้าแผนก วันที่ :</label></div>
                 <div class="col-lg-8 col-md-8">
                    <div class="input-datepicker input-group date" data-auto-close="true"  data-date-format="dd-mm-yyyy" data-date-autoclose="true">
                        <input class="form-control" type="text">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>     
                </div>
            </div>
        </div>
    <div class="form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-4 col-md-4"><label>ระยะเวลาค่าเช่าวันที่:</label></div>
            <div class="col-lg-8 col-md-8">
                <input type="text" class="form-control" id="inputForm1">
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-4 col-md-4"><label>ถึง : </label></div>
            <div class="col-lg-8 col-md-8">
                <div class="input-datepicker input-group date" data-auto-close="true"  data-date-format="dd-mm-yyyy" data-date-autoclose="true">
                        <input class="form-control" type="text">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>     
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-4 col-md-4"><label>เวลา : </label></div>
            <div class="col-lg-8 col-md-8">
                <input type="text" class="form-control" id="inputForm1">
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-4 col-md-4"><label>เจ้าพนักงานคิดค่าภาระ : </label></div>
            <div class="col-lg-8 col-md-8">
            	<input type="text" class="form-control" id="inputForm1">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-4 col-md-4"><label>ได้ชำระค่าภาระเเล้ว : </label></div>
            <div class="col-lg-8 col-md-8">
                <input type="text" class="form-control" id="inputForm1">
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-4 col-md-4"><label>น้ำหนักจาก : </label></div>
            <div class="col-lg-8 col-md-8">
            	<input type="text" class="form-control" id="inputForm1">
            </div>
        </div>
    </div>
</form>
					</div> <!-- /.row -->

				</div> <!-- /.portlet-content -->

			</div> <!-- /.portlet -->
 
<div class="portlet">
        <div class="portlet-header">
            <h3>
                <i class="fa fa-tasks"></i>    
            </h3>
        </div> <!-- /.portlet-header -->
    <div class="portlet-content">		
    <div class="table-responsive">                        
    <div class="form-group">
	<table  class="table table-bordered table-hover">
	    <tr class="active">
	        <th colspan="5" rowspan="2" class="text-center">รายการสินค้า</th>
	        <th colspan="3" class="text-center">ขนาดแต่ละหีบห่อ</th>
	        <th colspan="2" rowspan="2" class="text-center">จำนวนหีบห่อ NUMBER OF PACKAGES</th>
	        <th colspan="2"  rowspan="2"class="text-center">น้ำหนักรวม GROSS WEIGHT</th>
	        <th colspan="2"  rowspan="2"class="text-center">ปริมาตร VOLUME</th>
	        <th colspan="3" class="text-center">บัญชีเรือสำแดง PEP. MANIFEST</th>
	        <th colspan="4"  rowspan="2"class="text-center">AMOUNT OF CHARGES (เงินค่าภาระ)</th>    
	    </tr>
	    <tr class="active">
	        <th class="text-center">กว้าง WIDTH</th>
	        <th class="text-center">ยาว LENGTH</th>
	        <th class="text-center">สูง HEIGHT</th>
	        <th>จำนวนหีบห่อ</th>
	        <th>ปริมาตร VOLUME</th>
	        <th>น้ำหนักรวม GROSS WEIGHT</th>
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
    </div> <!-- /.table-responsive -->
    </div> <!-- /.portlet-content -->
</div> <!-- /.portlet -->				



  @stop   
  
@section('modal-content')

@stop

@section('javascript')

@stop