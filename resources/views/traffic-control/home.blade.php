@extends('layout.content')
@section('breadcrumbs', Breadcrumbs::render('traffic-control-home'))
@section('content')

<!-- header -->
<div class="row page-header">
  <div class="col-md-8 col-sm-8">
    <label>คู่มือการใช้งานระบบ บริหารหน้าท่าและควบคุมจราจรทางน้ำ</label>
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
    <h4 class="text-center">ยินดีต้อนรับเข้าสู่ระบบ บริหารหน้าท่าและควบคุมจราจรทางน้ำ</h4>
    <div class="form-group">
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">Berth Request Service</button>
          </a>
        </div>
      </div> 
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">ระบบ PORT & AIS & RADAR</button>
          </a>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">ข้อมูลเรือ IMO หรือ Callsign</button>
          </a>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">รายละเอียดข้อมูลภายในใบ Berth </button>
          </a>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">รายการ Berth</button>
          </a>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">Berth Schedule</button>
          </a>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">Problem Center</button>
          </a>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-4 col-md-4">
          <a href = "#">
            <button type="button" class="btn btn-primary btn-block">AIS Display</button>
          </a>
        </div>
      </div> 
      
    </div> 
  </div><!-- End body -->

@stop


@section('modal-content')

@stop

@section('javascript')

@stop