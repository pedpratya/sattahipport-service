@extends('layout.content')
@section('breadcrumbs', Breadcrumbs::render('system-admin'))
@section('content')

<!-- header -->
<div class="row">
  <div class="col-md-8 col-sm-8">
    <button type="button" class="btn btn-primary">เพิ่มระบบงาน</button>
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




<!-- body -->
<div class="portlet">
  <div class="portlet-header">
    <h3>
      <i class="fa fa-tasks"></i>
      เพิ่มระบบงาน
    </h3>
  </div> <!-- /.portlet-header -->
  <div class="portlet-content">
      <form class="form-horizontal"> 
       <div class="col-md-9 col-lg-9">  
        <div class="form-group">
          <div class="col-md-6">
            <div class="col-md-3"><label>Code :</label></div>
            <div class="col-md-9">
              <input class="form-control" type="text" >
            </div>
          </div>
          <div class="col-md-6 "> 
            <div class="col-md-4"><label>Active :</label></div>                       
            <div class="col-md-8"><input type="checkbox" checked="checked"></div>                                   
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-6">    
            <div class="col-md-3"><label>ชื่อ :</label></div>
            <div class="col-md-9">
              <input class="form-control" type="text" >
            </div>
          </div>
          <div class="col-md-6">
            <div class="col-md-4"><label>หน่วยงาน :</label></div>
            <div class="col-md-8">
              <select class="form-control" id="sel1">
                <option>เลือกหน่วยงาน</option>
                <option>Admin</option>
                <option>จัดเก็บผลประโยชน์</option>
              </select>
            </div>
          </div>
        </div>
       </div> 
        <div class="col-lg-3 col-md-3">
            <div class="portlet">
                <div class="portlet-content">

                    <div class="text-center"><label>ICON System<br>บันทึกภายหลังเมนูปรับปรุง</label></div>
                </div>
             </div>   
        </div>   
      </form>
 </div><!-- /.portlet-content -->
</div><!-- /.portlet   -->

<!-- table -->
<table class="table table-bordered table-hover">
  <thead>
    <tr class="active">
      <th>ID</th>
      <th>Code</th>
      <th>ชื่อระบบ</th>
      <th>เจ้าของระบบงาน</th>
      <th class="text-center">Active</th>
      <th></th>
    </tr>
  </thead>
  <tr>
    <td>1</td>
    <td>100</td>
    <td>1-Customer-Web Application</td>
    <td>แผนการท่า</td>
    <td class="text-center"><input type="checkbox" checked="checked"></td>
    <td class="text-center">
        <button type="button" class="btn btn-default glyphicon glyphicon-pencil" onclick="changePage('../admin/system-admin-create-or-edit')"></button>
        <button type="button" class="btn btn-default glyphicon glyphicon-remove"></button>
    </td>
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


@section('modal-content')

@stop

@section('javascript')

@stop