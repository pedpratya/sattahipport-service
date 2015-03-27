@extends('layout.master-top')
@section('content')


        <!-- header -->
        <div class="col-lg-12 col-md-12 page-header">
            <div class="col-lg-9 col-md-9">
                    <label>คำร้องขอนำเรือเข้า/ออก จากท่า [Berth/Sailing Application]</label>
            </div>
            <div class="col-lg-3 col-md-3">
                <label>Temperary Code : xxx xxx xxx</label>
            </div>
        </div><!-- End header -->
        
         <!-- header -->
        <div class="container">
            <div class="col-lg-12 col-md-12">
                <div class="form-group">
                    <p>ข้าพเจ้าขอยื่นคำร้องขอนำเรือดังต่อไปนี้
                    <label>
                       เข้า <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 
                    </label>
                    <label>
                       ออก <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 
                    </label>
                    จากท่า</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <ul class="nav nav-tabs navbar-default">
                    <li role="presentation" class="nav nav-pills"><a href="#">ข้อมูลเรือ O</a></li>
                    <li role="presentation"><a href="#">ข้อมูลสินค้า</a></li>
                    <li role="presentation"><a href="#">ผู้โดยสาร</a></li>
                    <li role="presentation"><a href="#">เอกสารแนบ</a></li>
                    <li role="presentation"><a href="#">เงินมัดจำ</a></li>
                    <li role="presentation"><a href="#">หมายเหตุ</a></li>
                    <li role="presentation"><a href="#">แบบฟอร์มขออนุญาต</a></li>
                    <li role="presentation"><a href="#">แก้ไขหมายกำหนดการ</a></li>
                    <li role="presentation"><a href="#">สถานะ</a></li>
                </ul>
            </div>     
            <div class="col-lg-12 col-md-12 page-header">
                <form class="form-horizontal">
                <div class="form-group">
                    <div class="col-lg-1 col-md-">
                        <label>หมายเหตุ</label>
                    </div>
                    <div class="col-lg-11 col-md-11">
                        <textarea class="form-control" rows="3"></textarea>
                    </div>                    
                </div> 
                <div class="form-group text-right">
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
                </form>    
            </div>            
        </div><!-- End header -->
        
        <!-- form head-->
        <div class="container-fluid">
            <p>ข้าพเจ้ารับจะป</p>
        </div>   

@stop