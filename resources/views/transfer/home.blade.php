@extends('layout.content')
@section('breadcrumbs', Breadcrumbs::render('transfer-home'))
@section('content')

<!-- header -->
<div class="row page-header">
  <div class="col-md-8 col-sm-8">
    <label>คู่มือการใช้งานระบบ เครื่องมือบรรทุกขนถ่าย</label>
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
    <h4 class="text-center">ยินดีต้อนรับเข้าสู่ระบบ เครื่องมือบรรทุกขนถ่าย</h4>

    <div class="form-group">
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-7 col-md-7">
          <a href = "">
            <button type="button" class="btn btn-primary btn-block">กำหนดค่าคงที่ของเครื่องมือบรรทุกขนถ่าย</button>
          </a>
        </div>
      </div>  
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-7 col-md-7">
          <a href = "">
            <button type="button" class="btn btn-primary btn-block">กำหนดค่าเริ่มต้นให้กับเจ้าหน้าที่ปฏิบัติงาน</button>
          </a>
        </div>
      </div>    
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-7 col-md-7">
          <button type="button" class="btn btn-primary btn-block">รายการ เพื่อกำหนดชนิดเครื่องมือในการทำงาน และกำหนดเจ้าหน้าที่รับผิดชอบดำเนินการ</button>
        </div>
      </div> 
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-7 col-md-7">
          <button type="button" class="btn btn-primary btn-block">รายการสินค้าของแต่ละ Berth ที่ได้ดำเนินการเสร็จเรียบร้อย</button>
        </div>
      </div>
     
  </div><!-- End body -->

@stop


@section('modal-content')

@stop

@section('javascript')

@stop