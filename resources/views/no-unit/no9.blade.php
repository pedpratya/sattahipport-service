@extends('layout.master-top')
@section('content')
<!-- header -->
    <div class="col-lg-12 col-md-12">
        <h3 class="text-center"><b>แบบฟอร์มขอปฏิบัติงานขนถ่ายสินค้า</b></h3>

        <form class="form-horizontal" >
            
        <div class="form-group">
            <div class="col-lg-8 col-md-8"></div>
            <div class="col-lg-4 col-md-4">
                <div class="bfh-datepicker">
                  <label class="col-lg-3 col-md-3">บริษัท</label>
                  <div class="col-lg-6 col-md-6 input-group" >          
                      <input type="text" class="form-control">
                  </div>
                </div>
            </div>
        </div>
        
            
        <div class="form-group">
            <div class="col-lg-8 col-md-8"></div>
            <div class="col-lg-4 col-md-4">
                <div class="bfh-datepicker">
                  <label class="col-lg-3 col-md-3">ที่อยู่</label>
                  <div class="col-lg-6 col-md-6 input-group" >          
                      <input type="text" class="form-control">
                  </div>
                </div>
            </div>
        </div>
            
        <div class="form-group">
            <div class="col-lg-8 col-md-8"></div>
            <div class="col-lg-4 col-md-4">
                <div class="bfh-datepicker">
                  <label class="col-lg-3 col-md-3">โทร</label>
                  <div class="col-lg-6 col-md-6 input-group" >          
                      <input type="text" class="form-control">
                  </div>
                </div>
            </div>
        </div>      
            
        <div class="form-group">
            <div class="col-lg-8 col-md-8"></div>
            <div class="col-lg-4 col-md-4">
                <div class="bfh-datepicker">
                  <label class="col-lg-3 col-md-3">(DD/MM/YY)</label>
                  <div class="col-lg-6 col-md-6 input-group" >          
                      <input type="text" class="form-control">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#mdOfficer"><span class="glyphicon glyphicon-calendar"></span></button> 
                        </div>
                  </div>
                </div>
            </div>
        </div>       
            
            
        <div class="row form-group">
            <div class="col-lg-6 col-md-6">
                <label class="col-lg-2 col-md-2">เรื่อง</label>
                <label class="col-lg-10 col-md-10">ขออนุญาตทำการบรรทุกขนถ่ายสินค้า</label>
            </div>
        </div>
            
        <div class="row form-group">
            <div class="col-lg-6 col-md-6">
                <label class="col-lg-2 col-md-2">เรียน</label>
                <label class="col-lg-10 col-md-10">ผู้อำนวยการ การท่าเรือสัตหีบ ฐานทัพเรือสัตหีบ</label>
            </div>
        </div>  
            
        <div class="row form-group">
            <div class="col-lg- col-md-2"></div>
       
            <div class="col-lg-5 col-md-5">
                <label class="col-lg-3 col-md-3">ด้วยบริษัท</label>
                    <div class="col-lg-8 col-md-8 input-group" >          
                        <input type="text" class="form-control">
                    </div>        
            </div>
            <div class="col-lg-4 col-md-4">
                <label class="col-lg-2 col-md-2">เรือ</label>
                    <div class="col-lg-10 col-md-10 input-group" >          
                        <input type="text" class="form-control">
                    </div>        
            </div>
        </div>
            
        <div class="row form-group">
            <div class="col-lg- col-md-2"></div>

            <div class="col-lg-5 col-md-5">
                <div class="bfh-datepicker">
                  <label class="col-lg-3 col-md-3">เที่ยววันที่</label>
                  <div class="col-lg-8 col-md-8 input-group" >          
                      <input type="text" class="form-control">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#mdOfficer"><span class="glyphicon glyphicon-calendar"></span></button> 
                        </div>
                  </div>
                </div>
       
            </div>
            <div class="col-lg-4 col-md-4">
                <label class="col-lg-2 col-md-2">เทียบท่า</label>
                    <div class="col-lg-10 col-md-10 input-group" >          
                        <input type="text" class="form-control">
                    </div>        
            </div>
        </div>
            
            <div class="row form-group">
            <div class="col-lg- col-md-2"></div>
            <div class="col-lg-5 col-md-5">     
                <div class="bfh-datepicker">
                  <label class="col-lg-3 col-md-3">ในวันที่</label>
                  <div class="col-lg-8 col-md-8 input-group" >          
                      <input type="text" class="form-control">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#mdOfficer"><span class="glyphicon glyphicon-calendar"></span></button> 
                        </div>
                  </div>
                </div>    
            </div>
            <div class="col-lg-4 col-md-4">
                <label class="col-lg-2 col-md-2">เทียบท่า</label>
                    <div class="col-lg-10 col-md-10 input-group" >          
                        <input type="text" class="form-control">
                    </div>        
            </div>
            </div>
            
            <div class="row form-group">
            <div class="col-lg- col-md-2"></div>
            <div class="col-lg-5 col-md-5">     
                <div class="bfh-datepicker">
                  <label class="col-lg-3 col-md-3">ในวันที่</label>
                  <div class="col-lg-8 col-md-8 input-group" >          
                      <input type="text" class="form-control">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#mdOfficer"><span class="glyphicon glyphicon-calendar"></span></button> 
                        </div>
                  </div>
                </div>    
            </div>
            <div class="col-lg-4 col-md-4">
                <label class="col-lg-2 col-md-2">เทียบท่า</label>
                    <div class="col-lg-10 col-md-10 input-group" >          
                        <input type="text" class="form-control">
                    </div>        
            </div>
            </div>
        </div>
            
        <div class="row form-group">
            <div class="col-lg-3 col-md-3"></div>
            <div class="col-lg-9 col-md-9 radio">
                <label class="radio-inline"><input type="radio" name="optradio">ส่งมอบสินค้าให้ผู้รับโดยตรง</label>
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
<h4 class="text-center">ในการบรรทุกและขนถ่ายสินค้าข้างต้น เป็นการดำเนินการโดย</h4>
        <div class="row form-group">
            <div class="col-lg-3 col-md-3"></div>
            <div class="col-lg-9 col-md-9 radio">
                <label class="col-lg-4 col-md-4"><input type="radio" name="opatradio">ใช้ จนท.แรงงาน ของ กทส.ฐท.สส.</label>
                  <label class="col-lg-2 col-md-2">จำนวน</label>
                  <div class="col-lg-3 col-md-3 input-group" >          
                      <input type="text" class="form-control">
                  </div>
            </div>      
        </div>

        <div class="row form-group">
            <div class="col-lg-3 col-md-3"></div>
            <div class="col-lg-9 col-md-9 radio">
                <label class="col-lg-4 col-md-4"><input type="radio" name="opatradio">ใช้ จนท.แรงงาน ของ เรือ</label>
                  <label class="col-lg-2 col-md-2">จำนวน</label>
                  <div class="col-lg-3 col-md-3 input-group" >          
                      <input type="text" class="form-control">
                  </div>
            </div>      
        </div>

        <div class="row form-group">
            <div class="col-lg-3 col-md-3"></div>
            <div class="col-lg-9 col-md-9 radio">
                <label class="col-lg-4 col-md-4"><input type="radio" name="opatradio">ใช้ ปั้นจั่น ของ กทส.ฐท.สส.</label>
                  <label class="col-lg-2 col-md-2">จำนวน</label>
                  <div class="col-lg-3 col-md-3 input-group" >          
                      <input type="text" class="form-control">
                  </div>
            </div>      
        </div>

        <div class="row form-group">
            <div class="col-lg-3 col-md-3"></div>
            <div class="col-lg-9 col-md-9 radio">
                <label class="col-lg-4 col-md-4"><input type="radio" name="opatradio">ใช้ ปั้นจั่น ของ เรือ</label>
                  <label class="col-lg-2 col-md-2">จำนวน</label>
                  <div class="col-lg-3 col-md-3 input-group" >          
                      <input type="text" class="form-control">
                  </div>
            </div>      
        </div>
        </form>
    </div><!-- End header -->
@stop   