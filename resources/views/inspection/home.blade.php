@extends('layout.master-module')
@section('breadcrumbs', Breadcrumbs::render('inspection-home'))
@section('content')

<!-- header -->
<div class="row page-header">
  <div class="col-md-8 col-sm-8">
    <label>คู่มือการใช้งานระบบ ตรวจนับและตรวจสอบสินค้า</label>
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
  <div class="col-lg-12 col-md-12 bgAdmin">
    <h4 class="text-center">ยินดีต้อนรับเข้าสู่ระบบ ตรวจนับและตรวจสอบสินค้า</h4>

    <div class="form-group">
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-4 col-md-4">
          <a href = "organization">
            <button type="button" class="btn btn-primary btn-block">Berth Request Service </button>
          </a>
        </div>
      </div>  
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-4 col-md-4">
          <a href = "system-admin">
            <button type="button" class="btn btn-primary btn-block">กำหนดเจ้าหน้าที่รับผิดชอบปฏิบัติงาน</button>
          </a>
        </div>
      </div>    
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-4 col-md-4">
          <button type="button" class="btn btn-primary btn-block">ตรวจสอบเอกสารอนุมัติการขนถ่าย</button>
        </div>
      </div> 
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-4 col-md-4">
          <button type="button" class="btn btn-primary btn-block">ตรวจสอบสินค้า</button>
        </div>
      </div>
      
  </div><!-- End body -->

@stop
@section('bottomscript')
  <script>
      var idMainManu = '306';
  </script>
@stop
