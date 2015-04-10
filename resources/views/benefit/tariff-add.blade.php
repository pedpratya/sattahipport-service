@extends('layout.master-module')
@section('breadcrumbs', Breadcrumbs::render('benefit-home'))
@section('content')

<!-- body -->
<div class="portlet">
  <div class="portlet-header">
    <h3>
      <i class="fa fa-tasks"></i>
      กำหนดหน่วยในการคำนวณ
    </h3>
  </div> <!-- /.portlet-header -->
  <div class="portlet-content">
      <form class="form-horizontal">               
         <div class="form-group">
            <div class="col-md-2"><label>ชื่อหน่วยงาน :</label></div>
            <div class="col-md-4">
              <input class="form-control" type="text" >
            </div>

            <div class="col-md-2 col-md-1-offset-1"><label>กำหนดการใช้งาน :</label></div>
            <div class="col-md-2"><input type="checkbox"></div> 
            <div class="col-md-2"><button type="button" class="btn btn-primary col-md-12">ADD</button></div> 

        </div> 
        <div class="form-group"> 
            <div class="col-md-2"><label>หมายเหตุ :</label></div>
            <div class="col-md-8">
              <input type="text" class="form-control">
            </div>
        </div>
          
      </form>
 </div><!-- /.portlet-content -->
</div><!-- /.portlet   -->

<form class="form-horizontal"> 
<div class="form-group">
    <div class="col-md-6"><label>ตารางรายการหน่วยคำนวณ</label></div>
    <div class="col-md-1 col-md-1-offset-1"><label>ค้นหา :</label></div>
    <div class="col-md-3"><input class="form-control" type="text" ></div> 
    <div class="col-md-2"><button type="button" class="btn btn-primary col-md-12">Search</button></div> 

</div>
</form>    

    <!-- table -->
    <table class="table table-bordered table-hover">
      <thead>
        <tr class="active">
          <th>No</th>
          <th>ชื่อหน่วย</th>
          <th>หมายเหตุ</th>
          <th class="text-center">สถานะใช้งาน</th>
        </tr>
      </thead>
      <tr>
        <td>1</td>
        <td>บาท</td>
        <td>สกุลเงินในการคิดค่าใช้บริการ</td>
        <td class="text-center"><input type="checkbox" value=""></td>
      </tr>
      <tr>
        <td>2</td>
        <td>ชั่วโมง</td>
        <td>หน่วยเวลา 1 ชม</td>
        <td class="text-center"><input type="checkbox" value=""></td>
      </tr>
      <tr>
        <td>3</td>
        <td>GT</td>
        <td>Gross tonnage</td>
        <td class="text-center"><input type="checkbox" value=""></td>
      </tr>
      <tr>
        <td>4</td>
        <td>ตัน</td>
        <td>น้ำหนักต่อตัน</td>
        <td class="text-center"><input type="checkbox" value=""></td>
      </tr>
    </table><!--End table -->

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

@stop

@section('bottomscript')
  <script>
      var idMainManu = '304';
  </script>
@stop