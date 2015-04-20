@extends('layout.content')
@section('breadcrumbs', Breadcrumbs::render('counting-home'))
@section('content')
<style>
    
      .bg-counting{
        background: url('../img/bg-home/bg-counting.png') no-repeat right;
        width:100%;
        height:500px; /*same height as jumbotron */
        top:0;
        left:0;
      }
</style>
<!-- header -->
<div class="row page-header">
  <div class="col-md-8 col-sm-8">
    <label>คู่มือการใช้งานระบบตรวจนับและตรวจสอบสินค้า</label>
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
  <div class="col-lg-12 col-md-12 bg-counting">
    <h4 class="text-center">ยินดีต้อนรับเข้าสู่ระบบตรวจนับและตรวจสอบสินค้า</h4>


      <div class="row">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">Berth Request Service </button>
          </a>
        </div>
      </div>  
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">กำหนดเจ้าหน้าที่รับผิดชอบปฏิบัติงาน</button>
          </a>
        </div>
      </div>  
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">ตรวจสอบเอกสารอนุมัติการขนถ่าย</button>
          </a>
        </div>
      </div>  
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">ตรวจสอบสินค้า</button>
          </a>
        </div>
      </div>  

  </div><!-- End body -->

@stop
@section('bottomscript')
  <script>
      var idMainManu = '306';
  </script>
@stop
