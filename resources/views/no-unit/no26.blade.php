@extends('layout.master-module')
@section('content')

    <form class="form-horizontal">
        <div class="col-lg-12 col-md-12">
            <h3 class="text-center">ใบคำร้องขอเช่าเครื่องมือทุ่นแรงของ กทส.ฐท.สส</h3>
        </div>
        <div class="col-lg-12 col-md-12 hr-topic"></div>
        <div class="row form-group">
            <label class="col-md-2">เลขที่ :&nbsp;</label>
            <div class="col-md-3">
                <input class="form-control" type="text" >
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2">เรื่อง :&nbsp;</label>
            <div class="col-md-3">
                <label>ขอเช่าเครื่องมือทุ่นแรง</label>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2">เรียน :&nbsp;</label>
            <div class="col-md-3">
                <label>ผอ. กทส. ฐท.สส.</label>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2">ด้วย :&nbsp;</label>
            <div class="col-md-9">
                <input class="form-control" type="text" >
            </div>
        </div>
        <div class="col-lg-12 col-md-12">
            <label>ขอเช่าเครื่องมือทุ่นแรง กทส. ดังรายการต่อไปนี้.</label>
        </div>
        <div class="row form-group">
            <label class="col-md-2"></label>
            <div class="col-md-9">
            <table class="table">
                <tr>
                    <td width="5%">1</td>
                    <td width="50%"></td>
                    <td>ขนาด</td>
                    <td>จำนวน</td>
                    <td width="5%">คัน</td>
                </tr>
                <tr>
                    <td width="5%">2</td>
                    <td width="50%"></td>
                    <td>ขนาด</td>
                    <td>จำนวน</td>
                    <td width="5%">คัน</td>
                </tr>
                <tr>
                    <td width="5%">3</td>
                    <td width="50%"></td>
                    <td>ขนาด</td>
                    <td>จำนวน</td>
                    <td width="5%">คัน</td>
                </tr>
            </table>
            </div>    
        </div>
            
        <div class="row form-group">
            <label class="col-md-2">เพื่อ :&nbsp;</label>
            <div class="col-md-1">
                <input type="radio" name="" id="" value="" > &nbsp; <label>ยกตู้สินค้า</label>
            </div>
            <div class="col-md-8">
              <input class="form-control" type="text" >
            </div>
        </div>  
        <div class="row form-group">
            <label class="col-md-2"></label>
            <div class="col-md-1">
                <input type="radio" name="" id="" value="" > &nbsp; <label>ยกสินค้า</label>
            </div>
            <div class="col-md-8">
              <input class="form-control" type="text" >
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2"></label>
            <div class="col-md-1">
                <input type="radio" name="" id="" value="" > &nbsp; <label>อื่นๆ</label>
            </div>
            <div class="col-md-8">
              <input class="form-control" type="text" >
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2">จากเรือ :&nbsp;</label>
            <div class="col-md-3">
                <input class="form-control" type="text" >
            </div>
            <label class="col-md-2 col-md-offset-1">เที่ยววันที่ :&nbsp;</label>
            <div class="col-md-3 input-group">
                <input type="text" class="form-control">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                </div>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2">เทียบท่า :&nbsp;</label>
            <div class="col-md-3">
                <input class="form-control" type="text" >
            </div>
            <label class="col-md-2 col-md-offset-1">ขอเช่าตั้งแต่วันที่ :&nbsp;</label>
            <div class="col-md-3 input-group">
                <input type="text" class="form-control">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                </div>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2">เวลา :&nbsp;</label>
            <div class="col-md-3">
                <input class="form-control" type="text" >
            </div>
            <label class="col-md-2 col-md-offset-1">ถึงวีนที่ :&nbsp;</label>
            <div class="col-md-3 input-group">
                <input type="text" class="form-control">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                </div>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2">เวลา :&nbsp;</label>
            <div class="col-md-3">
                <input class="form-control" type="text" >
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2"></label>
            <div class="col-md-3">
                <input type="radio" name="" id="" value="" >&nbsp; <label>ขอชำระค่าเช่าโดยวางมัดจำเป็นเงินสด</label>
            </div>
            <div class="col-md-6">
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2"></label>
            <div class="col-md-3">
                <input type="radio" name="" id="" value="" >&nbsp; <label>วางหนังสือค้ำประกันของธนาคาร</label>
            </div>
            <div class="col-md-6">
                <input class="form-control" type="text" >
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2">ลงวันที่ :&nbsp;</label>
            <div class="col-md-3">
                <div class="input-group">
                    <input type="text" class="form-control">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                    </div>
                 </div>
            </div>
            <label class="col-md-2 col-md-offset-1">นับตั้งแต่วันที่ :&nbsp;</label>
            <div class="col-md-3 input-group">
                <input type="text" class="form-control">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                </div>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2">สิ้นสุดวันที่ :&nbsp;</label>
            <div class="col-md-3">
                <div class="input-group">
                    <input type="text" class="form-control">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                    </div>
                 </div>
            </div>            
        </div>

        
    </form> 
@stop