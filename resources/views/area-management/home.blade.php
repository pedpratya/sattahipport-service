@extends('layout.content')
@section('breadcrumbs', Breadcrumbs::render('area-management-home'))
@section('content')
<style>
    
      .bg-area-management{
        background: url('../img/bg-home/bg-area-management.png') no-repeat right;
        width:100%;
        height:500px; /*same height as jumbotron */
        top:0;
        left:0;
      }
</style>
<!-- header -->
<div class="row page-header">
  <div class="col-md-8 col-sm-8">
    <label>คู่มือการใช้งานระบบ บริหารพื้นที่ ประโยชน์ ทสพ.-ทร.</label>
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
  <div class="col-lg-12 col-md-12 bg-area-management">
    <h4 class="text-center">ยินดีต้อนรับเข้าสู่ระบบ บริหารพื้นที่ ประโยชน์ ทสพ.-ทร.</h4>

      <div class="row">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">ข้อมูลพื้นที่ ทพส.-ทร.</button>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">ผู้เช่า-ผู้ใช้ประโยชน์</button>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">ข้อมูลภาพถ่ายทางอากาศ</button>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">Drone Management</button>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">Report</button>
          </a>
        </div>
      </div>  
     
  </div><!-- End body -->

@stop

@section('modal-content')

@stop

@section('javascript')

@stop
