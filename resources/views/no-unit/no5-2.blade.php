@extends('layout.master-module')
@section('content')
<!-- header -->
    <div class="col-lg-12 col-md-12">
        <h3 class="text-center">แบบบันทึกการปฏิบัติงานเรือ ฐท.สส.24</h3>
        <h3 class="text-center">JOB RECORD</h3>
        <div class="col-lg-12 col-md-12 hr-topic"></div>
    </div>    
        <form class="form-horizontal" >
 
            <div class="row form-group">
                <div class="col-lg-6 col-md-6">                 
                    <div class="col-lg-4 col-md-4"><label>(DD/MM/YY) :&nbsp;</label></div>
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
                    <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ชื่อเรือ </label><label>Name of Vessel  :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                       <input class="form-control" type="text" >
                    </div>
                </div> 
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-3">
                        <div class="col-lg-2 col-md-2">
                            <input type="radio" name="" id="" value="" >
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <label>ขาเข้า</label><br><label>Arrival</label>
                        </div>    
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="col-lg-2 col-md-2">
                            <input type="radio" name="" id="" value="" >
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <label>ขาออก</label><br><label>Departure</label>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-4 col-md-4"><label  class="col-lg-12">พื้นที่ปฏิบัติงาน </label><label>Working Area  :&nbsp;</label></div>
                    <div class="col-lg-3 col-md-3">
                        <div class="col-lg-2 col-md-2">
                            <input type="radio" name="" id="" value="" >
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <label>จุกเสม็ด</label><br><label>Chuk Samet</label>
                        </div>    
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="col-lg-2 col-md-2">
                            <input type="radio" name="" id="" value="" >
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <label>แหลมเทียน</label><br><label>Laem Tien</label>
                        </div>    
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <div class="col-lg-2 col-md-2">
                            <input type="radio" name="" id="" value="" >
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <label>แหลมเทียน</label><br><label>Laem Tien</label>
                        </div>    
                    </div>
                </div> 
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-3"><label  class="col-lg-12">เวลาออกจากท่า </label><label>Tug DeparturemTime  :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                       <input class="form-control" type="text" >
                    </div>
                </div> 
            </div>
            <div class="row form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-4 col-md-4"><label  class="col-lg-12">เวลาเข้าเทียบท่า </label><label>Tug Arrival Time  :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                       <input class="form-control" type="text" >
                    </div>
                </div> 
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-3"><label  class="col-lg-12">รวมเวลาการทำงาน </label><label>Total Hours  :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                       <input class="form-control" type="text" >
                    </div>
                </div> 
            </div>
        </form>
        
   
@stop