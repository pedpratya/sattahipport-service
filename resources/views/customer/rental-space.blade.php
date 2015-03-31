@extends('layout.master')
@section('breadcrumbs', Breadcrumbs::render('system-admin'))
@section('content')

<!-- header -->
<div class="col-md-12 col-md-12-offset-1">
  <div class="col-md-10 col-md-10-offset-1">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdAdd"> 1</button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdAdd"> 2</button>
  </div>
  <div class="col-md-2 col-md-2-offset-1">
    <label>พิมพ์ข้อมูลทั้งหมด <button type="button" class="btn btn-default glyphicon glyphicon-print"></button></label>
  </div>
</div><!-- End header -->

<!-- body -->
<div class="panel-body">
<div class="hr-topic"></div>
  <form class="form-horizontal">
    <div class="col-md-12 col-md-12-offset-1">                
      <div class="row form-group">  
        <div class="col-md-2 col-md-2-offset-1"><label>Code</label></div>
        <div class="col-md-10 col-md-10-offset-1"> <p class="form-control-static">-- -- --</p></div>
      </div>
      <div class="row form-group">  
        <div class="col-md-2 col-md-2-offset-1"><label>แปลงหมายเลข</label></div>
        <div class="col-md-10 col-md-10-offset-1"><input class="form-control" type="text" ></div>
      </div>
      <div class="row form-group">
        <div class="col-md-6 col-md-6-offset-1">
          <div class="col-md-4 col-md-4-offset-1"><label>ระยะเวลาเช่า</label></div>
          <div class="col-md-7 col-md-7-offset-1"><input class="form-control" type="text" ></div>
        </div>
        <div class="col-md-6 col-md-6-offset-1 bfh-datepicker">
          <label class="col-md-4 col-md-4-offset-1">วันเริ่มสัญญา</label>
          <div class="col-md-8 col-md-8-offset-1 input-group date">          
            <input type="text" class="form-control" placeholder="">
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
          </div>
        </div>
      </div>
        <div class="row form-group">
          <div class="col-md-6 col-md-6-offset-1">
            <div class="col-md-4 col-md-4-offset-1"><label>อัตราค่าเช่า</label></div>
            <div class="col-md-7 col-md-7-offset-1"><input class="form-control" type="text" ></div>
          </div>
          <div class="col-md-6 col-md-6-offset-1 bfh-datepicker">
            <label class="col-md-4 col-md-4-offset-1">วันสิ้นสุดสัญญา</label>
            <div class="col-md-8 col-md-8-offset-1 input-group date">          
              <input type="text" class="form-control" placeholder="">
              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-md-6-offset-1">
          <div class="row form-group">
            <div class="col-md-12 col-md-12-offset-1">
              <label class="col-md-4 col-md-4-offset-1">ข้อมูลสัญญาเช่า</label>
              <div class="col-md-7 col-md-7-offset-1 right-inner-addon">          
                  <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                  <input type="search" class="form-control" placeholder="Search" />
              </div>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12 col-md-12-offset-1">
                <div class="col-md-4 col-md-4-offset-1"><label>ขนาดพื้นที่</label></div>
                <div class="col-md-7 col-md-7-offset-1"><input class="form-control" type="text" ></div>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12 col-md-12-offset-1 bfh-datepicker">
              <label class="col-md-4 col-md-4-offset-1">วงรอบ/พิกัด</label>
              <div class="col-md-7 col-md-7-offset-1 right-inner-addon">          
                  <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                  <input type="search" class="form-control" placeholder="Search" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-md-6-offset-1">
          <fieldset class="scheduler-border">
            <legend class="scheduler-border">ตำแหน่งบนแผนที่</legend>
            <div class="col-md-12 col-md-12-offset-1 text-center">
              <img src="{{ asset('images/map.png') }}" alt="..." class="img-rounded" width="auto">      
            </div>
          </fieldset>
        </div>
    </div>       
  </form>
</div><!-- End body -->

@stop