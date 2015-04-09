@extends('layout.master-module')
@section('breadcrumbs', Breadcrumbs::render('nounit-a04'))
@section('content')

<div class="portlet">
        <div class="portlet-header">
                <h3>
                        <i class="fa fa-tasks"></i>
                        รายงานเสร็จสิ้นการขนถ่ายสินค้า
                </h3>
        </div> <!-- /.portlet-header -->
        <div class="portlet-content">
        <div class="row">
            
    <form class="form-horizontal">
                <div class="form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-3 col-md-3"><label>เลขรับ :&nbsp;</label></div>
                    <div class="col-lg-9 col-md-9">
                       <input class="form-control" type="text" >
                    </div>
                </div> 
               <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-3 col-md-3"><label>วันที่ :&nbsp;</label></div>
                    <div class="col-lg-9 col-md-9">
                        <div class="input-datepicker input-group date" data-auto-close="true" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
                            <input class="form-control" type="text">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-3 col-md-3"><label>เวลา :&nbsp;</label></div>
                    <div class="col-lg-9 col-md-9">
                       <input class="form-control" type="text" >
                    </div>
                </div>  
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-3 col-md-3"><label>เลขที่เอกสาร :&nbsp;</label></div>
                    <div class="col-lg-9 col-md-9">
                       <input class="form-control" type="text" >
                    </div>
                </div>
            </div>
    </form> 
            </div> <!-- /.row -->

    </div> <!-- /.portlet-content -->

</div> <!-- /.portlet -->

<div class="portlet">
        <div class="portlet-header">
            <h3>
                <i class="fa fa-tasks"></i>
                 
            </h3>
        </div> <!-- /.portlet-header -->
    <div class="portlet-content">		
    <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr class="active">
                        <th class="text-center" rowspan="2">ชื่อเรือ</th>
                        <th class="text-center" rowspan="2">เทียบท่า<br>วัน/เวลา</th>
                        <th class="text-center" rowspan="2">จำนวนสินค้าในบัญชีเรือ หีบ/ห่อ</th>
                        <th class="text-center" rowspan="2">เริ่มการขนถ่าย วัน/เวลา</th>
                        <th class="text-center" rowspan="2">เสร็จสิ้นการขนถ่าย วัน/เวลา</th>
                        <th class="text-center" colspan="2">จำนวนสินค้า</th>
                        <th class="text-center" rowspan="2">ปริมาตร VOLUME;(M3)</th>
                        <th class="text-center" rowspan="2">หมายเหตุ</th>
                    </tr>
                    <tr class="active">
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
   
    </div> <!-- /.table-responsive -->
    </div> <!-- /.portlet-content -->
</div> <!-- /.portlet -->				
           
@stop