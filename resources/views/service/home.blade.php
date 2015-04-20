@extends('layout.content')
@section('breadcrumbs', Breadcrumbs::render('service-home'))
@section('content')
<style>
    
      .bg-service{
        background: url('../img/bg-home/bg-service.png') no-repeat right;
        width:100%;
        height:500px; /*same height as jumbotron */
        top:0;
        left:0;
      }
</style>
<!-- header -->
<div class="row page-header">
  <div class="col-md-8 col-sm-8">
    <label>คู่มือการใช้งาน ระบบบริการลูกเรือและผู้โดยสาร</label>
  </div>
  <div class="col-md-4 col-sm-4">
    <div class="col-md-4 col-sm-4"></div>
    <div class="col-md-6 col-sm-6">
      <label>พิมพ์ข้อมูลทั้งหมด</label>
    </div>
    <div class="col-md-1 col-sm-1">
      <button type="button" class="btn btn-default btn-sm glyphicon glyphicon-print"></button> 
    </div>
  </div>
</div><!--End header -->


<!-- bedy -->
  <div class="col-lg-12 col-md-12 bg-service">
    <h4 class="text-center">ยินดีต้อนรับเข้าสู่ ระบบบริการลูกเรือและผู้โดยสาร</h4>

      <div class="row">
        <div class="col-lg-7 col-md-7">
          <a href = "">
            <button type="button" class="btn btn-primary btn-block">กำหนดค่าเริ่มต้นให้กับเจ้าหน้าที่ปฏิบัติงาน และช่วงเวลาปฏิบัติงาน</button>
          </a>
        </div>
      </div>  
      <div class="row">
        <div class="col-lg-7 col-md-7">
          <a href = "">
            <button type="button" class="btn btn-primary btn-block">รายการ เพื่อตรวจสอบลูกเรือและผู้โดยสาร</button>
          </a>
        </div>
      </div>    
      <div class="row">
        <div class="col-lg-7 col-md-7">
          <button type="button" class="btn btn-primary btn-block">แสดงรายการลูกเรือและผู้โดยสาร ของแต่ละ Berth ที่ได้ดำเนินการเสร็จเรียบร้อย</button>
        </div>
      </div> 
      
  </div><!-- End body -->

@stop


@section('modal-content')

@stop

@section('javascript')

@stop
