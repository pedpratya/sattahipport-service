@extends('layout.content')
@section('breadcrumbs', Breadcrumbs::render('organization'))

@section('content')

<!-- header -->
<div class="row">
  <div class="col-md-8 col-sm-8">
    <button type="button" class="btn btn-primary" onclick="changePage('../admin/organization-create-or-edit')">Add Organizetion</button>
  </div>
  <!-- <div class="col-md-4 col-sm-4">
    <div class="col-md-4 col-sm-4"></div>
    <div class="col-md-6 col-sm-6">
      <label>พิมพ์ข้อมูลทั้งหมด</label>
    </div>
    <div class="col-md-1 col-sm-1">
      <button type="button" class="btn btn-default btn-sm glyphicon glyphicon-print"></button> 
    </div>
  </div> -->
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
        <div class="col-md-8 col-md-8-offset-1">
          <div class="form-group"> 
            <div class="col-md-6 col-md-6-offset-1">
              <div class="col-md-5 col-md-5-offset-1"><label>Org Code :</label></div>
              <div class="col-md-7 col-md-7-offset-1"><input class="form-control" type="text" ></div>
            </div>
            <div class="col-md-6 col-md-6-offset-1">
              <div class="col-md-3 col-md-3-offset-1"><label>Active :</label></div>                       
              <div class="col-md-7 col-md-7-offset-1"><input type="checkbox" checked="checked"></div>                                   
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6 col-md-6-offset-1">    
              <div class="col-md-5 col-md-5-offset-1"><label>Org Name :</label></div>
              <div class="col-md-7 col-md-7-offset-1">
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-md-6 col-md-6-offset-1">
              <div class="col-md-3 col-md-3-offset-1"><label>ชื่อย่อ :</label></div>
              <div class="col-md-8 col-md-8-offset-1"><input class="form-control" type="text" ></div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-md-4-offset-1">
          <div class="form-group"> 
            <fieldset class="scheduler-border">
            <legend class="scheduler-border">Replace Picture</legend>
              <div class="col-lg-12 col-md-12 text-center">
                  <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ1LjUiIHk9IjcwIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MTQweDE0MDwvdGV4dD48L2c+PC9zdmc+" alt="..." class="img-rounded" width="170">      
              </div>
            </fieldset>
          </div>
        </div>
      </form>
    </div> <!-- /.row -->
  </div> <!-- /.portlet-content -->
</div> <!-- /.portlet -->

<!-- table -->
<table class="table table-bordered table-hover">
  <tr class="active">
    <th>ID</th>
    <th>Code</th>
    <th>ชื่อองค์กร</th>
    <th>ชื่อย่อ</th>
    <th>Active</th>
  </tr>
  <tr>
    <td>1</td>
    <td>1001</td>
    <td>การท่าเรือสัตหีบ ฐานทัพเรือสัตหีบ</td>
    <td>ทพส.-ทร</td>
    <td>
      <button type="button" class="btn btn-default glyphicon glyphicon-pencil" onclick="changePage('../admin/organization-create-or-edit')"></button>
      <button type="button" class="btn btn-default glyphicon glyphicon-remove"></button>
    </td>
  </tr>
  <tr>
    <td>2</td>
    <td>1002</td>
    <td>แผนกการท่า</td>
    <td>บก.กทส.ฐท.สส</td>
    <td>
      <button type="button" class="btn btn-default glyphicon glyphicon-pencil"></button>
      <button type="button" class="btn btn-default glyphicon glyphicon-remove"></button>
    </td>
  </tr>
  <tr>
    <td>3</td>
    <td>1003</td>
    <td>ท่าเรือจุกเสม็ด</td>
    <td>ทจม.กททส.ร</td>
    <td>
      <button type="button" class="btn btn-default glyphicon glyphicon-pencil"></button>
      <button type="button" class="btn btn-default glyphicon glyphicon-remove"></button>
    </td>
  </tr>
  <tr>
    <td>4</td>
    <td>1004</td>
    <td>แผนกบรรทุกขนถ่าย</td>
    <td>บทถ.</td>
    <td>
      <button type="button" class="btn btn-default glyphicon glyphicon-pencil"></button>
      <button type="button" class="btn btn-default glyphicon glyphicon-remove"></button>
    </td>
  </tr>
  <tr>
    <td>5</td>
    <td>1005</td>
    <td>แผนกคลังพัก</td>
    <td>ผ.คลัง</td>
    <td>
      <button type="button" class="btn btn-default glyphicon glyphicon-pencil"></button>
      <button type="button" class="btn btn-default glyphicon glyphicon-remove"></button>
    </td>
  </tr>
  <tr>
    <td>6</td>
    <td>1006</td>
    <td>แผนกตรวจนับสินค้า</td>
    <td>ผ.ตรวจสอบ</td>
    <td>
      <button type="button" class="btn btn-default glyphicon glyphicon-pencil"></button>
      <button type="button" class="btn btn-default glyphicon glyphicon-remove"></button>
    </td>
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

@section('modal-content')

@stop

@section('javascript')

@stop