  @extends('layout.master-module')
@section('breadcrumbs', Breadcrumbs::render('system-admin'))
@section('content')

<!-- header -->
<div class="row">
  <div class="col-md-8 col-sm-8">
    <a href = "system-admin-create-or-edit">
    <button type="button" class="btn btn-primary">เพิ่มระบบงาน</button>
    </a>
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
    <div class="row">
      <form class="form-horizontal">               
        <div class="form-group">
          <div class="col-md-6 col-md-6-offset-1">
            <div class="col-md-4"><label>Code :</label></div>
            <div class="col-md-7">
              <input class="form-control" type="text" >
            </div>
          </div>
          <div class="col-md-6 col-md-6-offset-1"> 
            <div class="col-md-3"><label>Active :</label></div>                       
            <div class="col-md-9"><input type="checkbox"></div>                                   
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-6 col-md-6-offset-1">    
            <div class="col-md-4"><label>ชื่อ :</label></div>
            <div class="col-md-7">
              <input class="form-control" type="text" >
            </div>
          </div>
          <div class="col-md-6 col-md-6-offset-1">
            <div class="col-md-3"><label>หน่วยงาน :</label></div>
            <div class="col-md-9">
              <select class="form-control" id="sel1">
                <option>การท่า</option>
                <option>Admin</option>
                <option>จัดเก็บผลประโยชน์</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group"> 
          <div class="col-md-12 col-md-12-offset-1">
            <div class="col-md-2"><label>Page name (URL) :</label></div>
            <div class="col-md-10">
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
      </form>
    </div>
 </div><!-- /.portlet-content -->
</div><!-- /.portlet   -->

<!-- table -->
<table class="table table-bordered table-hover">
  <thead>
    <tr class="active">
      <th>No</th>
      <th>Name</th>
      <th>Code</th>
      <th>หน่วยงาน</th>
      <th>Status</th>
      <th>Edit</th>
    </tr>
  </thead>
  <tr>
    <td>1</td>
    <td>Customer Web Service</td>
    <td>T001-101</td>
    <td>การท่า</td>
    <td><input type="checkbox" value=""></td>
    <td>
      <a href = "system-admin-create-or-edit">
        <button type="button" class="btn btn-default glyphicon glyphicon-pencil"></button>
      </a>
    </td>
  </tr>
  <tr>
    <td>2</td>
    <td>Customer Relation Management</td>
    <td>T001-102</td>
    <td>การท่า</td>
    <td><input type="checkbox" value=""></td>
    <td>
      <a href = "system-admin-create-or-edit">
        <button type="button" class="btn btn-default glyphicon glyphicon-pencil"></button>
      </a>
    </td>
  </tr>
  <tr>
    <td>3</td>
    <td>ระบบบริหารงานท่า</td>
    <td>T001-100</td>
    <td>การท่า</td>
    <td><input type="checkbox" value=""></td>
    <td>
      <a href = "system-admin-create-or-edit">
        <button type="button" class="btn btn-default glyphicon glyphicon-pencil"></button>
      </a>    </td>
  </tr>
  <tr>
    <td>4</td>
    <td>ระบบบเก็บผลประโยชนื</td>
    <td>T102-100</td>
    <td>จัดเก็บผลประโยชน์</td>
    <td><input type="checkbox" value=""></td>
    <td>
      <a href = "system-admin-create-or-edit">
        <button type="button" class="btn btn-default glyphicon glyphicon-pencil"></button>
      </a>
    </td>
  </tr>
  <tr>
    <td>5</td>
    <td>ระบบบริหารพื้นที่</td>
    <td>T103-100</td>
    <td>การท่า</td>
    <td><input type="checkbox" value=""></td>
    <td>
      <a href = "system-admin-create-or-edit">
        <button type="button" class="btn btn-default glyphicon glyphicon-pencil"></button>
      </a>
    </td>
  </tr>
  <tr>
    <td>6</td>
    <td>ระบบอนุมัติ</td>
    <td>T104-100</td>
    <td>Admin</td>
    <td><input type="checkbox" value=""></td>
    <td>
      <a href = "system-admin-create-or-edit">
        <button type="button" class="btn btn-default glyphicon glyphicon-pencil"></button>
      </a>
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