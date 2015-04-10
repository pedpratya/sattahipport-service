@extends('layout.master-module')

@section('content')
<div class="portlet">
  <div class="portlet-header">
    <h3>
      <i class="fa fa-tasks"></i>
      ค่าภาระและค่าบริการเรียกเก็บจากเจ้าของเรือหรือตัวแทนเจ้าของเรือ
    </h3>
  </div><!--End header -->
  <div class="portlet-content">
      <form class="form-horizontal"> 
        <div class="form-group"> 
          <div class="col-md-6 col-md-6-offset-1">
            <div class="col-md-5 col-md-5-offset-1"><label>กำหนดรายการค่าภาระ :</label></div>
            <div class="col-md-7 col-md-7-offset-1"><input class="form-control" type="text" ></div>
          </div>
          <div class="col-md-6 col-md-6-offset-1"> 
            <div class="col-md-1 col-md-1-offset-1"></div>
            <div class="col-md-2 col-md-2-offset-1"><label>EN :</label></div>                       
            <div class="col-md-9 col-md-9-offset-1"><input class="form-control" type="text" ></div>                                   
          </div>
        </div>
        <div class="form-group"> 
          <div class="col-md-10 col-md-10-offset-1">
            <div class="col-md-3 col-md-3offset-1"><label>ข้อกำหนดเบื้องต้น :</label></div>
            <div class="col-md-9 col-md-9-offset-1"><input class="form-control" type="text" ></div>
          </div>
          <div class="col-md-2 col-md-2-offset-1"> 
            <div class="col-md-1 col-md-1-offset-1"></div>
            <div class="col-md-11 col-md-11-offset-1">
              <button type="button" class="btn btn-primary" style="width:100%">Add</button>
            </div>                                 
          </div>
        </div>
      </form>
  </div> <!-- /.portlet-content -->
</div> <!-- /.portlet -->

<!-- table -->
<div class="portlet">
  <div class="portlet-header">
    <h3>
      <i class="fa fa-tasks"></i>
      ตารางรายการค่าภาระ : เรือ
    </h3>
  </div> <!-- /.portlet-header -->
  
  <div class="portlet-content">
    <form class="form-horizontal"> 
      <div class="form-group"> 
        <div class="col-md-12 col-md-12-offset-1">
          <div class="col-md-1 col-md-1 offset-1"><label>ค้นหา :</label></div>
          <div class="col-md-11 col-md-11-offset-1">
            <div class="right-inner-addon ">
              <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
              <input type="search" class="form-control" data-toggle="modal" data-target="#" placeholder="Search" />
            </div>
          </div>
        </div>
      </div>
    </form>
  <table class="table table-bordered table-hover">
    <tr class="active">
      <th>No.</th>
      <th>รายการ</th>
      <th>จำนวนรายการย่อย</th>
      <th class="text-center">สถานะการใช้งาน</th>
    </tr>
    <tr>
      <td>1</td>
      <td>ค่าภาระเรือเข้าท่า</td>
      <td>4</td>
      <td class="text-center"><input type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>2</td>
      <td>ค่าบริการเรือลากจูง</td>
      <td>3</td>
      <td class="text-center"><input type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>3</td>
      <td>ค่าภาระการใช้ท่าของเรือ</td>
      <td>2</td>
      <td class="text-center"><input type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>4</td>
      <td>ค่าภาระการใช้ท่าของเรือประเภทอื่น</td>
      <td>2</td>
      <td class="text-center"><input type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>5</td>
      <td>ค่าภาระการใช้ท่าของสินค้าทั่วไป</td>
      <td>4/15</td>
      <td class="text-center"><input type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>6</td>
      <td>ค่าภาระเก็บขยะจากเรือ</td>
      <td>3</td>
      <td class="text-center"><input type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>7</td>
      <td>ค่าบริการน้ำจืด</td>
      <td>2</td>
      <td class="text-center"><input type="checkbox" value=""></td>
    </tr>
   
  </table><!-- End table -->
  </div>
</div>


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
    </ul> <!-- End pagin -->

@stop

