@extends('layout.master-module')

@section('content')

<!-- header -->
<div class="row page-header">
  <div class="col-md-8 col-sm-8">
    <label>คู่มือการใช้งานระบบบริหารพื้นที่ ประโยชน์ ทสพ.-ทร.</label>
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
    <h4 class="text-center">ยินดีต้อนรับเข้าสู่ระบบบริหารพื้นที่ ประโยชน์ ทสพ.-ทร.</h4>

    <div class="form-group">
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">ข้อมูลพื้นที่ ทพส.-ทร.</button>
          </a>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">ผู้เช่า-ผู้ใช้ประโยชน์</button>
          </a>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">ข้อมูลภาพถ่ายทางอากาศ</button>
          </a>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">Drone Management</button>
          </a>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">Report</button>
          </a>
        </div>
      </div>  
     
    </div> 
  </div><!-- End body -->

@stop
@section('bottomscript')
  <script>
      var idMainManu = '303';
  </script>
@stop
