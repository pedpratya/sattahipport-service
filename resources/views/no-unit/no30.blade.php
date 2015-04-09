@extends('layout.master-module')
@section('breadcrumbs', Breadcrumbs::render('nounit-no30'))
@section('content')

<div class="portlet">    
        <div class="portlet-header">
            <h3>
            <i class="fa fa-tasks"></i>
                การท่าเรือสัตหีบ ฐานทัพเรือสัตหีบ
                แบบฟอร์มขออนุญาตนำเจ้าหน้าที่ และวัสดุอุปกรณ์อื่นๆผ่าน เขา-ออก
            </h3>
        </div>
    <div class="portlet-content">
    <form class="form-horizontal">    
        <div class="form-group">
            <label class="col-md-2">บริษัท :&nbsp;</label>
            <div class="col-md-10">
                <input class="form-control" type="text" >
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2">วันที่ :&nbsp;</label>
            <div class="col-md-10">
                <div class="input-group">
                    <input type="text" class="input-datepicker form-control">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                    </div>
                 </div>
            </div>            
        </div>
        <div class="form-group">
            <label class="col-md-2">เรื่อง :&nbsp;</label>
            <div class="col-md-6">
                <label>ขอนำเจ้าหน้าที่/วัสดุอุปกรณ์ และยานพาหนะผ่านเข้า - ออก เขคการท่าเรือสัตหีบ ฐานทัพเรือสัตหีบ</label>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2">เรียน :&nbsp;</label>
            <div class="col-md-4">
                <label>ผู้อำนวยการ การท่าเรือสัตหีบ ฐานทัพเรือสัตหีบ</label>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2">ด้วย บริษัท :&nbsp;</label>
            <div class="col-md-10 right-inner-addon">
                <span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;</span>
                <input type="search" class="form-control" placeholder="Search" data-toggle="modal" data-target="#mdDocument"/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-12 col-md-12">
                <label>ขอนำเจ้าหน้าที/วัสดุอุปกรณ์/ยานพาหนะ เพื่อ ผ่านเข้า-ออก เขตการท่าเรือสัตหีบ ฐานทัพเรือสัตหีบ ในการปฎิบัติ</label>
            </div>       
        </div>    
        <div class="form-group">
            <div class="col-md-6">
                <label class="col-md-4"></label>
                <div class="col-md-8">
                    <input class="form-control" type="text" >
                </div>
            </div>
            <div class="col-md-6">    
                <label class="col-md-4 text-center">นับตั้งแต่วันที่ :&nbsp;</label>
                <div class="col-md-8 input-group">
                    <input type="text" class="input-datepicker form-control">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                    </div>
                </div>
            </div>
         </div>    
        <div class="form-group">
            <div class="col-md-6">
                <label class="col-md-4">เวลา :</label>
                <div class="col-md-8">
                    <input class="form-control" type="text" >
                </div>
            </div>
            <div class="col-md-6">    
                <label class="col-md-4 text-center">ถึงวันที่ :&nbsp;</label>
                <div class="col-md-8 input-group">
                    <input type="text" class="input-datepicker form-control">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <label class="col-md-4">เวลา :</label>
                <div class="col-md-8">
                    <input class="form-control" type="text" >
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2">ดังต่อไปนี้ :&nbsp;</label>
        </div>  
        <div class="form-group">
            <label class="col-md-2"></label>
            <div class="col-md-3">
                <input type="radio" name="" id="" value="" > &nbsp; <label>เจ้าหน้าที่ จำนวน</label>
            </div>
            <div class="col-md-2">
              <input class="form-control" type="text" >
            </div>
            <div class="col-md-4">
             <label>&nbsp;&nbsp;คน (ตามเอกสารที่แนบมา)</label>
            </div>
        </div>  
        <div class="form-group">
            <label class="col-md-2"></label>
            <div class="col-md-3">
                <input type="radio" name="" id="" value="" > &nbsp; <label>รถยนต์/รถบรรทุก ขนาด</label>
            </div>
            <div class="col-md-2">
                <input class="form-control" type="text" >
            </div>
            <div class="col-md-4">
                <label>&nbsp;&nbsp;ล้อ/ตัน</label>
            </div>
        </div> 



        <div class="form-group">
            <label class="col-md-4"></label>
            <div class="col-md-1">
                <label>จำนวน</label>
            </div>
            <div class="col-md-2">
              <input class="form-control" type="text" >
            </div>
            <div class="col-md-2">
             <label>&nbsp;&nbsp;(ตามเอกสารที่แนบมา)</label>
            </div>
        </div> 
        <div class="form-group">
            <label class="col-md-2 text-right">1 .&nbsp;</label>
            <div class="col-md-4">
                <input class="form-control" type="text" >
            </div>
            <label class="col-md-2 text-right">2 .&nbsp;</label>
            <div class="col-md-4">
                <input class="form-control" type="text" >
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 text-right">3 .&nbsp;</label>
            <div class="col-md-4">
                <input class="form-control" type="text" >
            </div>
            <label class="col-md-2 text-right">4 .&nbsp;</label>
            <div class="col-md-4 ">
                <input class="form-control" type="text" >
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2"></label>
            <div class="col-md-2">
                <input type="radio" name="" id="" value="" > &nbsp; <label>วัสดุอุปกรณ์อื่นๆ</label>
            </div>
            <div class="col-md-8">
              <input class="form-control" type="text" >
            </div>
        </div>
    </div>    

    </form> 
</div>    
@stop