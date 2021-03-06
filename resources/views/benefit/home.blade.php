@extends('layout.content')
@section('breadcrumbs', Breadcrumbs::render('benefit-home'))
@section('content')
<style>
    
      .bg-benefit{
        background: url('../img/bg-home/bg-benefit.png') no-repeat right;
        width:100%;
        height:500px; /*same height as jumbotron */
        top:0;
        left:0;
      }
</style>
<!-- header -->
<div class="row page-header">
  <div class="col-md-8 col-sm-8">
    <label>คู่มือการใช้งาน ระบบจัดเก็บผลประโยชน์</label>
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
  <div class="col-lg-12 col-md-12 bg-benefit">
    <h4 class="text-center">ยินดีต้อนรับเข้าสู่ ระบบจัดเก็บผลประโยชน์</h4>


      <div class="row">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">ระบบบริหารจัดการอัตราภาระ TARIFF</button>
          </a>
        </div>
      </div>  
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">ทะเบียนคุมลูกหนี้</button>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">ทะเบียนคุมเงินหลักประกัน</button>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">ทะเบียนคุมเงินมัดจำ</button>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">คำนวณอัตราเบี้ยปรับ</button>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">ทะเบียนคุมไฟฟ้า ประปา</button>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">ลูกหนี้ไฟฟ้า ประปา</button>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">ระบบพิมพ์ใบแจ้งหนี้</button>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">ระบบคำนวณค่าภาระเรือ</button>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">รายงานต่างๆ</button>
          </a>
        </div>
      </div>      

  </div><!-- End body -->

@stop

@section('modal-content')

@stop

@section('javascript')

@stop
