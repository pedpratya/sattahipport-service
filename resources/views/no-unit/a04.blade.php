@extends('layout.master-module')
@section('content')
    <form class="form-horizontal">
        <div class="col-lg-12 col-md-12">
                <h3 class="text-center">LOADING</h3>
                <h3 class="text-center">SDV LOGISTICS (THAILAND) CO.,LTD.</h3>
                <h3 class="text-center">รายงานเสร็จสิ้นการขนถ่ายสินค้า</h3>
         </div>
        <div class="col-lg-12 col-md-12 hr-topic"></div>
        
            <div class="row form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-4 col-md-4"><label>เลขรับ :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                       <input class="form-control" type="text" >
                    </div>
                </div> 
               <div class="col-lg-6 col-md-6"> 
                   <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-3"><label>วันที่ :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8 input-group">
                        <input type="text" class="form-control">
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-4 col-md-4"><label>เวลา :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                       <input class="form-control" type="text" >
                    </div>
                </div>  
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-3"><label>เลขที่เอกสาร :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                       <input class="form-control" type="text" >
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <table class="table table-bordered">
                    <tr>
                        <th class="text-center" rowspan="2">ชื่อเรือ</th>
                        <th class="text-center" rowspan="2">เทียบท่า<br>วัน/เวลา</th>
                        <th class="text-center" rowspan="2">จำนวนสินค้าในบัญชีเรือ หีบ/ห่อ</th>
                        <th class="text-center" rowspan="2">เริ่มการขนถ่าย วัน/เวลา</th>
                        <th class="text-center" rowspan="2">เสร็จสิ้นการขนถ่าย วัน/เวลา</th>
                        <th class="text-center" colspan="2">จำนวนสินค้า</th>
                        <th class="text-center" rowspan="2">ปริมาตร VOLUME;(M3)</th>
                        <th class="text-center" rowspan="2">หมายเหตุ</th>
                    </tr>
                    <tr>
                        <th class="text-center">DISCHARGING หีบ/ห่อ</th>
                        <th class="text-center">LOADING หีบห่อ/ตัน</th>
                    </tr>
                    <tr>
                        <td>M.V. POSH RADIANT</td>
                        <td>๒ พ.ย. ๕๗ ๐๐.๒๐</td>
                        <td>๒๔ ๒๖๑.๒๐๐</td>
                        <td>๒ พ.ย. ๕๗ ๐๐.๒๐</td>
                        <td>๒ พ.ย. ๕๗ ๐๐.๒๐</td>
                        <td>-</td>
                        <td>๒๔ ๒๖๑.๒๐๐</td>
                        <td>๒๗๕.๙๓๙</td>
                        <td>อุปกรณ์ขุดเจาะ</td>
                    </tr>                    
                 </table>
            </div>
    </form> 
@stop