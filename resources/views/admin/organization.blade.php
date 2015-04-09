@extends('layout.master-module')
@section('breadcrumbs', Breadcrumbs::render('organization'))
@section('content')

<!-- header -->
<div class="row">
  <div class="col-md-8 col-sm-8">
    <a href = "organization-create-or-edit">
    <button type="button" class="btn btn-primary">เพิ่มหน่วยงาน</button>
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
      เพิ่มหน่วยงาน
    </h3>
  </div> <!-- /.portlet-header -->
  <div class="portlet-content">
    <div class="row">
      <form class="form-horizontal"> 
        <div class="form-group"> 
          <div class="col-md-6 col-md-6-offset-1">
            <div class="col-md-3 col-md-3-offset-1"><label>Code :</label></div>
            <div class="col-md-8 col-md-8-offset-1"><input class="form-control" type="text" ></div>
          </div>
          <div class="col-md-6 col-md-6-offset-1"> 
            <div class="col-md-1 col-md-1-offset-1"></div>
            <div class="col-md-3 col-md-3-offset-1"><label>Active :</label></div>                       
            <div class="col-md-7 col-md-7-offset-1"><input type="checkbox" ></div>                                   
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-6 col-md-6-offset-1">    
            <div class="col-md-3 col-md-3-offset-1"><label>ชื่อ :</label></div>
            <div class="col-md-8 col-md-8-offset-1">
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
      </form>
    </div> <!-- /.row -->
  </div> <!-- /.portlet-content -->
</div> <!-- /.portlet -->

<!-- table -->
<table class="table table-bordered table-hover">
  <tr class="active">
    <th>No</th>
    <th>Name</th>
    <th>คำย่อ</th>
    <th>Code</th>
    <th>Description</th>
    <th>Edit</th>
  </tr>
  <tr>
    <td>1</td>
    <td>ท่าเรือสัตหีบ</td>
    <td>ทพส.-ทร</td>
    <td>T00</td>
    <td></td>
    <td><button type="button" class="btn btn-default glyphicon glyphicon-pencil"></button></td>
  </tr>
  <tr>
    <td>2</td>
    <td>การท่า</td>
    <td>-</td>
    <td>T100</td>
    <td></td>
    <td><button type="button" class="btn btn-default glyphicon glyphicon-pencil"></button></td>
  </tr>
  <tr>
    <td>3</td>
    <td>Beer</td>
    <td>-</td>
    <td>T101</td>
    <td></td>
    <td><button type="button" class="btn btn-default glyphicon glyphicon-pencil"></button></td>
  </tr>
</table><!-- End table -->



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

@section('bottomscript')
  <script>
      var idMainManu = '101';
  </script>
@stop