@extends('layout.master-module')
@section('breadcrumbs', Breadcrumbs::render('nounit-no5-2'))
@section('content')
<!-- header -->
    <div class="col-lg-12 col-md-12">
        <h3 class="text-center">แบบบันทึกการปฏิบัติงานเรือ ฐท.สส.24</h3>
        <h3 class="text-center">JOB RECORD</h3>
        <div class="col-lg-12 col-md-12 hr-topic"></div>
    </div>    
        <form class="form-horizontal" >
 
            <div class="form-group">
                <div class="col-lg-6 col-md-6">                 
                    <div class="col-lg-3 col-md-3"><label>(DD/MM/YY) :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8 input-group">
                        <input type="text" class="form-control">
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-3 col-md-3"><label>ชื่อเรือ<br>Name of Vessel  :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                       <input class="form-control" type="text" >
                    </div>
                </div> 
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-3 col-md-3">
                        <div class="col-lg-1 col-md-1">
                            <input type="radio" name="" id="" value="" >
                        </div>
                        <label>&nbsp;&nbsp;ขาเข้า<br>&nbsp;&nbsp;Arrival</label>
                    </div>    
                    <div class="col-lg-3 col-md-3">
                        <div class="col-lg-1 col-md-1">
                            <input type="radio" name="" id="" value="" >
                        </div>
                        <label>&nbsp;&nbsp;ขาออก<br>&nbsp;&nbsp;Departure</label>
                    </div>
                </div>       
            </div>
            <div class="form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-3 col-md-3"><label>พื้นที่ปฏิบัติงาน<br>Working Area  :&nbsp;</label></div>
                    <div class="col-lg-3 col-md-3">
                        <div class="col-lg-1 col-md-1">
                            <input type="radio" name="" id="" value="" >
                        </div>        
                            <label>&nbsp;&nbsp;จุกเสม็ด<br>&nbsp;&nbsp;Chuk Samet</label>
                    </div>    
                    <div class="col-lg-3 col-md-3">
                        <div class="col-lg-1 col-md-1">
                            <input type="radio" name="" id="" value="" >
                        </div>
                            <label>&nbsp;&nbsp;แหลมเทียน<br>&nbsp;&nbsp;Laem Tien</label>
                    </div>    
                    <div class="col-lg-3 col-md-3">
                        <div class="col-lg-1 col-md-1">
                            <input type="radio" name="" id="" value="" >
                        </div>
                            <label>&nbsp;&nbsp;แหลมเทียน<br>&nbsp;&nbsp;Laem Tien</label>
                    </div>
                </div>                      
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-4 col-md-4"><label>เวลาออกจากท่า<br>Tug DeparturemTime  :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                       <input class="form-control" type="text" >
                    </div>
                </div> 
            </div> 
            <div class="form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-3 col-md-3"><label>เวลาเข้าเทียบท่า<br>Tug Arrival Time  :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                       <input class="form-control" type="text" >
                    </div>
                </div> 
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-4 col-md-4"><label>รวมเวลาการทำงาน<br>Total Hours  :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                       <input class="form-control" type="text" >
                    </div>
                </div> 
            </div>
        </form>
        
   
@stop