@extends('layout.master-module')
@section('breadcrumbs', Breadcrumbs::render('nounit-a02'))
@section('content') 
			<div class="portlet">

				<div class="portlet-header">

					<h3>
						<i class="fa fa-tasks"></i>
						แบบฟอร์มขอปฏิบัติงานขนถ่ายสินค้า
					</h3>

				</div> <!-- /.portlet-header -->

				<div class="portlet-content">

					<div class="row">  
<form class="form-horizontal"> 
    <div class="form-group">
        <div class="col-lg-6 col-md-6"> 
            <div class="col-lg-3 col-md-3"><label>บริษัท :&nbsp;</label></div>
            <div class="col-lg-9 col-md-9">
               <input class="form-control" type="text" >
            </div>
        </div>  
        <div class="col-lg-6 col-md-6"> 
            <div class="col-lg-3 col-md-3"><label>ที่อยู่ :&nbsp;</label></div>
            <div class="col-lg-9 col-md-9">
               <input class="form-control" type="text" >
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-6 col-md-6"> 
            <div class="col-lg-3 col-md-3"><label>โทร :&nbsp;</label></div>
            <div class="col-lg-9 col-md-9">
               <input class="form-control" type="text" >
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
        <div class="col-lg-6 col-md-6">
            <label class="col-lg-3 col-md-3">เรื่อง</label>
            <label class="col-lg-9 col-md-9">ขออนุญาตทำการบรรทุกขนถ่ายสินค้า</label>
        </div>
        <div class="col-lg-6 col-md-6"></div>
    </div>
    <div class="form-group">
        <div class="col-lg-6 col-md-6">
            <label class="col-lg-3 col-md-3">เรียน</label>
            <label class="col-lg-9 col-md-9">ผู้อำนวยการ การท่าเรือสัตหีบ ฐานทัพเรือสัตหีบ</label>
        </div>
        <div class="col-lg-6 col-md-6"></div>
    </div>           
    <div class="form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-3 col-md-3"><label>ด้วยบริษัท : </label></div>
            <div class="col-lg-9 col-md-9">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-3 col-md-3"><label>เรือง : </label></div>
            <div class="col-lg-9 col-md-9">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-3 col-md-3"><label>เที่ยววันที่ : </label></div>
            <div class="col-lg-9 col-md-9">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-3 col-md-3"><label>เทียบท่า : </label></div>
            <div class="col-lg-9 col-md-9">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-3 col-md-3"><label>ในวันที่ : </label></div>
            <div class="col-lg-9 col-md-9">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-3 col-md-3"><label>เวลา : </label></div>
            <div class="col-lg-9 col-md-9">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
        </div>
    </div> 
    <div class="form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-3 col-md-3"></div>
            <div class="col-lg-9 col-md-9">
                <label><input type="radio" name="optradio"> ส่งมอบสินค้าให้ผู้รับโดยตรง</label>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">     
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-11 col-md-11">
                <label><input type="radio" name="optradio"> ฝากเก็บสินค้าในลานพัก/คลังพักของ กทส.ฐท.สส. ตามจำนวนสินค้าดังนี้</label>
            </div>
        </div>
    </div>

</form>
					</div> <!-- /.row -->

				</div> <!-- /.portlet-content -->

			</div> <!-- /.portlet -->        
    <table class="table table-bordered table-hover">
        <tr class="active">
            <th colspan="3" class="text-center">สินค้าทั่วไป</th>
            <th colspan="4" class="text-center">ตู้สินค้าขนถ่าย</th>
            <th colspan="4" class="text-center">ตู้สินค้าบรรทุก</th>
            <th class="text-center">หมายเหตุ</th>
        </tr>
        <tr>
            <td>หีบห่อ</td>
            <td>น้ำหนัก</td>
            <td>ปริมาตร</td>
            <td>๒๐'</td>
            <td>๔๐'</td>
            <td>เกิน ๔๐'</td>
            <td>อื่นๆ</td>
            <td>๒๐'</td>
            <td>๔๐'</td>
            <td>เกิน ๔๐'</td>
            <td>อื่นๆ</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        
        <tr>
            <td colspan="3" class="text-center">ตู้เปล่า</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>
    <div class="form-group"></div>
    <h4 class="text-center">ในการบรรทุกและขนถ่ายสินค้าข้างต้น เป็นการดำเนินการโดย</h4>
    <div class="col-lg-12 col-md-12 hr-topic"></div>
<form class="form-horizontal">     
    <div class="form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-3 col-md-3"><label></label></div>
            <div class="col-lg-9 col-md-9">
                <label><input type="radio" name="opatradio"> ใช้ จนท.แรงงาน ของ กทส.ฐท.สส.</label>
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-3 col-md-3"><label>จำนวน : </label></div>
            <div class="col-lg-8 col-md-8">
                <input type="text" class="form-control" id="inputForm1">
            </div>
            <div class="col-lg-1 col-md-1">
                <label> คน</label>
            </div>
        </div>     
    </div> 
    <div class="form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-3 col-md-3"><label></label></div>
            <div class="col-lg-9 col-md-9">
                <label><input type="radio" name="opatradio"> ใช้ จนท.แรงงาน ของ เรือ</label>
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-3 col-md-3"><label>จำนวน : </label></div>
            <div class="col-lg-8 col-md-8">
                <input type="text" class="form-control" id="inputForm1">
            </div>
            <div class="col-lg-1 col-md-1">
                <label> คน</label>
            </div>
        </div>     
    </div>
    <div class="form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-3 col-md-3"><label></label></div>
            <div class="col-lg-9 col-md-9">
                <label><input type="radio" name="opatradio"> ใช้ ปั้นจั่น ของ กทส.ฐท.สส.</label>
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-3 col-md-3"><label>จำนวน : </label></div>
            <div class="col-lg-8 col-md-8">
                <input type="text" class="form-control" id="inputForm1">
            </div>
            <div class="col-lg-1 col-md-1">
                <label> คน</label>
            </div>
        </div>     
    </div>
    <div class="form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-3 col-md-3"><label></label></div>
            <div class="col-lg-9 col-md-9">
                <label><input type="radio" name="opatradio"> ใช้ ปั้นจั่น ของ เรือ</label>
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-3 col-md-3"><label>จำนวน : </label></div>
            <div class="col-lg-8 col-md-8">
                <input type="text" class="form-control" id="inputForm1">
            </div>
            <div class="col-lg-1 col-md-1">
                <label> คน</label>
            </div>
        </div>     
    </div>
</form>    
                                         
@stop   