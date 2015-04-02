@extends('layout.master-module')
@section('content')
<!-- header -->
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h3 class="text-center">แบบฟอร์มขอปฏิบัติงานขนถ่ายสินค้า</h3>
  </div><!-- End header -->
  
<form class="form-horizontal">
    <div class="col-lg-12 col-md-12 hr-topic"></div> 
    <div class="row form-group">
        <div class="col-lg-8 col-md-8"></div>
        <div class="col-lg-4 col-md-4">
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">บริษัท : </label></div>
            <div class="col-lg-8 col-md-8">
                <input type="text" class="form-control" id="inputForm1">
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-lg-8 col-md-8"></div>
        <div class="col-lg-4 col-md-4">
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ที่อยู่ : </label></div>
            <div class="col-lg-8 col-md-8">
                <input type="text" class="form-control" id="inputForm1">
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-lg-8 col-md-8"></div>
        <div class="col-lg-4 col-md-4">
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">โทร : </label></div>
            <div class="col-lg-8 col-md-8">
                <input type="text" class="form-control" id="inputForm1">
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-lg-8 col-md-8"></div>
        <div class="col-lg-4 col-md-4">
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">วันที่ : </label></div>
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
            <label class="col-lg-2 col-md-2">เรื่อง</label>
            <label class="col-lg-10 col-md-10">ขออนุญาตทำการบรรทุกขนถ่ายสินค้า</label>
        </div>
        <div class="col-lg-6 col-md-6"></div>
    </div>
    <div class="row form-group">
        <div class="col-lg-6 col-md-6">
            <label class="col-lg-2 col-md-2">เรียน</label>
            <label class="col-lg-10 col-md-10">ผู้อำนวยการ การท่าเรือสัตหีบ ฐานทัพเรือสัตหีบ</label>
        </div>
        <div class="col-lg-6 col-md-6"></div>
    </div>           
    <div class="row form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-3 col-md-3"><label  class="col-lg-12">ด้วยบริษัท : </label></div>
            <div class="col-lg-8 col-md-8">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-3 col-md-3"><label  class="col-lg-12">เรือ : </label></div>
            <div class="col-lg-8 col-md-8">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-3 col-md-3"><label  class="col-lg-12">เที่ยววันที่ : </label></div>
            <div class="col-lg-8 col-md-8">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-3 col-md-3"><label  class="col-lg-12">เทียบท่า : </label></div>
            <div class="col-lg-8 col-md-8">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-3 col-md-3"><label  class="col-lg-12">ในวันที่ : </label></div>
            <div class="col-lg-8 col-md-8">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-3 col-md-3"><label  class="col-lg-12">เวลา : </label></div>
            <div class="col-lg-8 col-md-8">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
        </div>
    </div>       
    <div class="row form-group">
        <div class="col-lg-3 col-md-3"></div>
        <div class="col-lg-9 col-md-9 radio">
            <label class="radio-inline"><input type="radio" name="optradio">ส่งมอบสินค้าให้ผู้รับโดยตรง</label>
        </div>
    </div>   
        <div class="row form-group">
        <div class="col-lg-3 col-md-3"></div>
        <div class="col-lg-9 col-md-9 radio">
            <label class="radio-inline"><input type="radio" name="optradio">ฝากเก็บสินค้าในลานพัก/คลังพักของ กทส.ฐท.สส. ตามจำนวนสินค้าดังนี้</label>
        </div>
    </div>      
    <table class="table" border='2'>
        <tr>
            <td colspan="3" class="text-center">สินค้าทั่วไป</td>
            <td colspan="4" class="text-center">ตู้สินค้าขนถ่าย</td>
            <td colspan="4" class="text-center">ตู้สินค้าบรรทุก</td>
            <td class="text-center">หมายเหตุ</td>
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
    <div class="row form-group"></div>
    <h4 class="text-center">ในการบรรทุกและขนถ่ายสินค้าข้างต้น เป็นการดำเนินการโดย</h4>
    <div class="row form-group">
        <div class="col-lg-3 col-md-3"></div>
        <div class="col-lg-9 col-md-9">
            <div class="col-lg-3 col-md-3 radio">
                <label><input type="radio" name="opatradio">ใช้ จนท.แรงงาน ของ กทส.ฐท.สส.</label>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="col-lg-2 col-md-2"></div>
                <div class="col-lg-2 col-md-2">จำนวน</div>
                <div class="col-lg-4 col-md-4">
                    <input type="text" class="form-control" id="inputForm1">
                </div>
                <div class="col-lg-2 col-md-2"></div>
            </div>
        </div>      
    </div>
    <div class="row form-group">
        <div class="col-lg-3 col-md-3"></div>
        <div class="col-lg-9 col-md-9">
            <div class="col-lg-3 col-md-3 radio">
                <label><input type="radio" name="opatradio">ใช้ จนท.แรงงาน ของ เรือ</label>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="col-lg-2 col-md-2"></div>
                <div class="col-lg-2 col-md-2">จำนวน</div>
                <div class="col-lg-4 col-md-4">
                    <input type="text" class="form-control" id="inputForm1">
                </div>
                <div class="col-lg-2 col-md-2"></div>
            </div>
        </div>      
    </div>
    <div class="row form-group">
        <div class="col-lg-3 col-md-3"></div>
        <div class="col-lg-9 col-md-9">
            <div class="col-lg-3 col-md-3 radio">
                <label><input type="radio" name="opatradio">ใช้ ปั้นจั่น ของ กทส.ฐท.สส.</label>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="col-lg-2 col-md-2"></div>
                <div class="col-lg-2 col-md-2">จำนวน</div>
                <div class="col-lg-4 col-md-4">
                    <input type="text" class="form-control" id="inputForm1">
                </div>
                <div class="col-lg-2 col-md-2"></div>
            </div>
        </div>      
    </div>
    <div class="row form-group">
        <div class="col-lg-3 col-md-3"></div>
        <div class="col-lg-9 col-md-9">
            <div class="col-lg-3 col-md-3 radio">
                <label><input type="radio" name="opatradio">ใช้ ปั้นจั่น ของ เรือ</label>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="col-lg-2 col-md-2"></div>
                <div class="col-lg-2 col-md-2">จำนวน</div>
                <div class="col-lg-4 col-md-4">
                    <input type="text" class="form-control" id="inputForm1">
                </div>
                <div class="col-lg-2 col-md-2"></div>
            </div>
        </div>      
    </div>
</form>
@stop   