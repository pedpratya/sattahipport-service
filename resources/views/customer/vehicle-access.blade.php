@extends('layout.content')
@section('breadcrumbs', Breadcrumbs::render('system-admin'))
@section('content')

<!-- header -->
<div class="col-md-12 col-md-12-offset-1">
  <div class="col-md-10 col-md-10-offset-1">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#">Add</button>
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
        <div class="col-md-6 col-md-6-offset-1">
          <div class="col-md-4 col-md-4-offset-1"><label>ทะเบียน</label></div>
          <div class="col-md-7 col-md-7-offset-1"><input class="form-control" type="text" ></div>
        </div>
        <div class="col-md-6 col-md-6-offset-1">
          <label class="col-md-4 col-md-4-offset-1">ประเภทรถ</label>
          <div class="col-md-8 col-md-8-offset-1">
            <select class="form-control" id="sel1">
              <option>--ประเภทรถ--</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-6 col-md-6-offset-1">
            <label class="col-md-4 col-md-4-offset-1">ยี่ห้อ</label>
            <div class="col-md-7 col-md-7-offset-1">
                <select class="form-control" id="sel1">
                  <option>--ยี่ห้อ--</option>
                </select>
          </div>
        </div>
        <div class="col-md-6 col-md-6-offset-1">
          <div class="col-md-4 col-md-4-offset-1"><label>สี</label></div>
          <div class="col-md-8 col-md-8-offset-1"><input class="form-control" type="text" ></div>
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-6 col-md-6-offset-1 bfh-datepicker">
          <label class="col-md-4 col-md-4-offset-1">วันที่ลงทะเบียน</label>
          <div class="col-md-7 col-md-7-offset-1 input-group date" id=''>          
              <input type="text" class="form-control" placeholder="">
              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
          </div>
        </div>
          <div class="col-md-6 col-md-6-offset-1">
            <div class="col-md-4 col-md-4-offset-1"><label>เบอร์ติดต่อ</label></div>
            <div class="col-md-8 col-md-8-offset-1"><input class="form-control" type="text" ></div>
          </div>
      </div>
      <div class="row form-group">  
        <div class="col-md-2 col-md-2-offset-1"><label>ข้อมูลเจ้าของรถ</label></div>
        <div class=" col-lg-10 col-md-10 right-inner-addon ">
          <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
          <input type="search" class="form-control" placeholder="Search" />
        </div>
      </div>
    <!-- table -->
      <label>ตารางรถที่ลงทะเบียน</label>
      <div class="hr-topic"></div>
      <table class="table">
        <tr  class="active">
          <th >No</th>
          <th>License Plate</th>
          <th>Start</th>
          <th>Last Access</th>
          <th>Type</th>
          <th>Status</th>
        </tr>
        <tr>
          <td>4</td>
          <td>กก 7602</td>
          <td>04-01-57</td>
          <td>17-11-57</td>
          <td>รถบรรทุก 10 ล้อ</td>
          <td>
              <button class="glyphicon glyphicon-search btn btn-default btn-xs"></button>
              <button class="glyphicon glyphicon-edit btn btn-default btn-xs"></button>
              <button class="glyphicon glyphicon-trash btn btn-default btn-xs"></button>
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>ญช 9999</td>
          <td>10-01-58</td>
          <td>10-11-59</td>
          <td>รถยนต์ 4 ล้อ</td>
          <td>
            <button class="glyphicon glyphicon-search btn btn-default btn-xs"></button>
            <button class="glyphicon glyphicon-edit btn btn-default btn-xs"></button>
            <button class="glyphicon glyphicon-trash btn btn-default btn-xs"></button>
          </td>
        </tr>
      </table>

      <!-- pagin -->
        <ul class="pagination pull-left">
          <li><a href="#">&laquo;</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">6</a></li>
          <li><a href="#">7</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
    </div>       
  </form>
</div><!-- End body -->
@stop


@section('modal-content')

@stop

@section('javascript')

@stop