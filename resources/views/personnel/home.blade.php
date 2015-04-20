@extends('layout.content')
@section('breadcrumbs', Breadcrumbs::render('personnel-home'))
@section('content')
<style>
    
      .bg-personnel{
        background: url('../img/bg-home/bg-personnel.png') no-repeat right;
        width:100%;
        height:500px; /*same height as jumbotron */
        top:0;
        left:0;
      }
</style>
<!-- header -->
<div class="row page-header">
  <div class="col-md-8 col-sm-8">
    <label>คู่มือการใช้งานระบบบุคลากรแรงงาน</label>
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
  <div class="col-lg-12 col-md-12 bg-personnel">
    <h4 class="text-center">ยินดีต้อนรับเข้าสู่ระบบบุคลากรแรงงาน</h4>

      <div class="row">
        <div class="col-lg-5 col-md-5">
          <a href = "">
            <button type="button" class="btn btn-primary btn-block">ส่วนเจ้าหน้าที่แต่ละระบบ</button>
          </a>
        </div>
      </div>  
      <div class="row">
        <div class="col-lg-5 col-md-5">
          <a href = "">
            <button type="button" class="btn btn-primary btn-block">รายงานแรงงาน</button>
          </a>
        </div>
      </div>    
      <div class="row">
        <div class="col-lg-5 col-md-5">
          <button type="button" class="btn btn-primary btn-block">รายงานเจ้าหน้าและแรงงานที่ปฏิบัติงานในแต่ละ Berth</button>
        </div>
      </div> 
      <div class="row">
        <div class="col-lg-5 col-md-5">
          <button type="button" class="btn btn-primary btn-block">รายงานเวลาการเข้า-ออก พื้นที่</button>
        </div>
      </div> 
    
  </div><!-- End body -->

@stop


@section('modal-content')

@stop

@section('javascript')

@stop
