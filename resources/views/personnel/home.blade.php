@extends('layout.master-module')
@section('breadcrumbs', Breadcrumbs::render('personnel-home'))
@section('content')

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
  <div class="col-lg-12 col-md-12 bgAdmin">
    <h4 class="text-center">ยินดีต้อนรับเข้าสู่ระบบบุคลากรแรงงาน</h4>

    <div class="form-group">
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-5 col-md-5">
          <a href = "">
            <button type="button" class="btn btn-primary btn-block">ส่วนเจ้าหน้าที่แต่ละระบบ</button>
          </a>
        </div>
      </div>  
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-5 col-md-5">
          <a href = "">
            <button type="button" class="btn btn-primary btn-block">รายงานแรงงาน</button>
          </a>
        </div>
      </div>    
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-5 col-md-5">
          <button type="button" class="btn btn-primary btn-block">รายงานเจ้าหน้าและแรงงานที่ปฏิบัติงานในแต่ละ Berth</button>
        </div>
      </div> 
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-5 col-md-5">
          <button type="button" class="btn btn-primary btn-block">รายงานเวลาการเข้า-ออก พื้นที่</button>
        </div>
      </div> 
  </div><!-- End body -->

@stop
@section('bottomscript')
  <script>
      var idMainManu = '310';
  </script>
@stop
