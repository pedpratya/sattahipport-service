@extends('layout.master-module')
@section('breadcrumbs', Breadcrumbs::render('nounit-no5-2'))
@section('content')
<!-- header -->
<div class="portlet">
    <div class="portlet-header">
        <h3>
           <i class="fa fa-tasks"></i>
            แบบบันทึกการปฏิบัติงานเรือ ฐท.สส.24
        </h3>
    </div>    
    <div class="portlet-content">    
        <form class="form-horizontal" >
            <div class="form-group">
                <div class="col-lg-6 col-md-6">
                    <div class="col-lg-4 col-md-4"><label>(DD/MM/YY) :</label></div>
                    <div class="col-lg-8 col-md-8">
                        <div class='input-group date'>
                          <input type="text"class="input-datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6"></div>
            </div> 
            <div class="form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-4 col-md-4"><label>ชื่อเรือ<br>Name of Vessel  :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8 ">
                       <input class="form-control" type="text" >
                    </div>
                </div> 
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-4 col-md-4"></div>
                    <div class="col-lg-4 col-md-4">
                        <div class="col-lg-2 col-md-2">
                            <input type="radio" name="" id="" value="" >
                        </div>
                        <label>&nbsp;&nbsp;ขาเข้า<br>&nbsp;&nbsp;Arrival</label>
                    </div>    
                    <div class="col-lg-4 col-md-4">
                        <div class="col-lg-3 col-md-3">
                            <input type="radio" name="" id="" value="" >
                        </div>
                        <label>&nbsp;&nbsp;ขาออก<br>&nbsp;&nbsp;Departure</label>
                    </div>
                </div>       
            </div>
            <div class="form-group">
                <div class="col-lg-6 col-md-6">
                    <div class="col-lg-4 col-md-4"><label>พื้นที่ปฏิบัติงาน<br>Working Area  :&nbsp;</label></div>
                    <div class="col-lg-4 col-md-4">
                        <div class="col-lg-2 col-md-2">
                            <input type="radio" name="" id="" value="" >
                        </div>        
                        <label>&nbsp;&nbsp;จุกเสม็ด<br>&nbsp;&nbsp;Chuk Samet</label>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="col-lg-2 col-md-2">
                            <input type="radio" name="" id="" value="" >
                        </div>        
                        <label>&nbsp;&nbsp;แหลมเทียน<br>&nbsp;&nbsp;Laem Tien</label>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="col-lg-4 col-md-4">
                        <div class="col-lg-2 col-md-2">
                            <input type="radio" name="" id="" value="" >
                        </div>        
                        <label>&nbsp;&nbsp;ทุ่งโปร่ง<br>&nbsp;&nbsp;Thung Prong</label>
                    </div>
                </div>
            </div> 
            
            <div class="form-group">
                <div class="col-lg-6 col-md-6">
                    <div class="col-lg-4 col-md-4"><label>เวลาออกจากท่า<br>Tug Departure Time:&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                        <input class="form-control" type="text" >
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="col-lg-4 col-md-4"><label>เวลาเข้าเทียบท่า<br>Tug Arrival Time :</label></div>
                    <div class="col-lg-8 col-md-8">
                        <input class="form-control" type="text" >
                    </div>
                </div>
            </div> 

            <div class="form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-4 col-md-4"><label>รวมเวลาการทำงาน<br>Total Hours  :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                       <input class="form-control" type="text" >
                    </div>
                </div> 
            </div>

        </form>
    </div>
</div>     
        
   
@stop