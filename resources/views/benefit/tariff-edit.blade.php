@extends('layout.content')

@section('content')

<!-- ค่าภาระการใช้ท่าเของรือ -->
<div class="portlet">
  <div class="portlet-header">
    <h3>
      <i class="fa fa-tasks"></i>
      ค่าภาระการใช้ท่าเของรือ (BERTH HIRE)
  </div><!--End header -->
  <div class="portlet-content">
      <form class="form-horizontal"> 
        <div class="form-group"> 
          <div class="col-md-6 col-md-6-offset-1">
            <div class="col-md-4 col-md-4-offset-1"><label>กำหนดรายการค่าภาระ:</label></div>
            <div class="col-md-8 col-md-8-offset-1"><input class="form-control" type="text"  value="ค่าภาระการใช้ท่าเรือ"></div>
          </div>
          <div class="col-md-6 col-md-6-offset-1"> 
            <div class="col-md-2 col-md-2-offset-1"><label>EN :</label></div>                       
            <div class="col-md-10 col-md-10-offset-1"><input class="form-control" type="text"  value="BERTH HIRE"></div>                                   
          </div>
        </div>
        <div class="form-group"> 
          <div class="col-md-12 col-md-12-offset-1">
            <div class="col-md-2"><label>ข้อกำหนดเบื้องต้น :</label></div>
            <div class="col-md-10">
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="form-group"> 
          <div class="col-md-4 col-md-4-offset-1">
            <div class="col-md-6"><label>หน่วยคำนวณที่ 1 :</label></div>
            <div class="col-md-6">
              <select class="form-control" id="sel1">
                <option>-- บาท --</option>
              </select>
            </div>
          </div>
          <div class="col-md-4 col-md-4-offset-1">
            <div class="col-md-6"><label>หน่วยคำนวณที่ 2 :</label></div>
            <div class="col-md-6">
              <select class="form-control" id="sel1">
                <option> ๑๐๐ GT </option>
              </select>
            </div>
          </div>
          <div class="col-md-4 col-md-4-offset-1">
            <div class="col-md-6"><label>หน่วยคำนวณที่ 3 :</label></div>
            <div class="col-md-6">
              <select class="form-control" id="sel1">
                <option>-- ชั่วโมง --</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group"> 
          <div class="col-md-12 col-md-12-offset-1">
            <div class="col-md-10"></div>
            <div class="col-md-2">
              <button type="button" class="btn btn-primary" style="width:100%">Update</button>
            </div>
          </div>
        </div>
      </form>
  </div> <!-- /.portlet-content -->
</div> <!-- /.portlet -->


<!-- เพิ่มรายการค่าภาระ -->
<div class="portlet">
  <div class="portlet-header">
    <h3>
      <i class="fa fa-tasks"></i>
      เพิ่มรายการค่าภาระ
  </div><!--End header -->
  <div class="portlet-content">
      <form class="form-horizontal"> 
        <div class="form-group"> 
          <div class="col-md-12 col-md-12-offset-1">
            <div class="col-md-2 col-md-2-offset-1"><label>กำหนดรายการย่อย:</label></div>
            <div class="col-md-10 col-md-10-offset-1"><input class="form-control" type="text"  value="๑๐๓.๑ ณ ท่าเทียบเรือเอนกประสงค์หรือท่าเทียบเรือหมายเลข ๔ และ ๕"></div>
          </div>
        </div>
        <div class="form-group"> 
          <div class="col-md-12 col-md-12-offset-1"> 
            <div class="col-md-2 col-md-2-offset-1"><label>EN :</label></div>                       
            <div class="col-md-10 col-md-10-offset-1"><input class="form-control" type="text"></div>                                   
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12 col-md-12-offset-1"> 
            <div class="col-md-2"><label>Sub Group :</label></div>                       
            <div class="col-md-10"><input type="checkbox"></div>                                   
          </div>
        </div>
        <div class="form-group"> 
          <div class="col-md-12 col-md-12-offset-1">
            <div class="col-md-10"></div>
            <div class="col-md-2">
              <button type="button" class="btn btn-primary" style="width:100%">Update</button>
            </div>
          </div>
        </div>
        <div class="form-group"> 
          <div class="col-md-12 col-md-12-offset-1">
            <div class="col-md-10"></div>
            <div class="col-md-2">
              <button type="button" class="btn btn-primary" style="width:100%">เพิ่มรายการ</button>
            </div>
          </div>
        </div>
      </form>
      <table class="table table-bordered table-hover">
        <tr class="active">
          <th>No.</th>
          <th>รายการ</th>
          <th>บาท/๑๐๐ GT/ชั่วโมง</th>
        </tr>
        <tr>
          <td>1</td>
          <td>๑๐๓.๑ ณ ท่าเทียบเรือเอนกประสงค์หรือท่าเทียบเรือหมายเลข ๔ และ ๕</td>
          <td>๗.๕</td>
        </tr>
        <tr>
          <td>2</td>
          <td>๑๐๓.๒ ณ ท่าเทียบเรือชายฝั่งหรือท่าเทียบเรือหมายเลข ๖</td>
          <td>๕.๐</td>
        </tr>   
      </table><!-- End table -->


  </div> <!-- /.portlet-content -->
</div> <!-- /.portlet -->




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

@section('modal-content')

@stop

@section('javascript')

@stop