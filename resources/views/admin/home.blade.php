@extends('layout.master-module')
@section('breadcrumbs', Breadcrumbs::render('admin-home'))

@section('content')

<!-- header -->
<div class="row page-header">
  <div class="col-md-8 col-sm-8">
    <label>คู่มือการใช้งานระบบ Admin</label>
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
    <h4 class="text-center">ยินดีต้อนรับเข้าสู่ระบบผู้ดูแลระบบ Admin</h4>
    <div class="form-group">
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-4 col-md-4">
          <button type="button" class="btn btn-default btn-block">องค์กรณ์</button>
        </div>
      </div>  
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-4 col-md-4">
          <button type="button" class="btn btn-default btn-block">เมนูระบบงาน</button>
        </div>
      </div>    
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-4 col-md-4">
          <button type="button" class="btn btn-default btn-block">เมนูกำหนดค่าคงที่</button>
        </div>
      </div> 
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-4 col-md-4">
          <button type="button" class="btn btn-default btn-block">Software Management</button>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-4 col-md-4">
          <button type="button" class="btn btn-default btn-block">ผู้ใช้งานในระบบ</button>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-4 col-md-4">
          <button type="button" class="btn btn-default btn-block">รายงานต่างๆ</button>
        </div>
      </div>
    </div> 
  </div><!-- End body -->

@stop
@section('bottomscript')
  <script>
      var idMainManu = '101';
  </script>
@stop