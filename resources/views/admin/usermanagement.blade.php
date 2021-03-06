@extends('layout.content')
@section('breadcrumbs', Breadcrumbs::render('usermanagement'))
@section('content')  

<div class="row">
  <div class="col-md-8 col-sm-8">
    <button type="button" class="btn btn-primary" onclick="changePage('../admin/usermanagement-create-or-edit')">Add User</button>
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


<div class="portlet">
  <div class="portlet-header">
    <h3>
      <i class="fa fa-tasks"></i>
      เพิ่ม User Management
    </h3>
  </div> <!-- /.portlet-header -->
  <div class="portlet-content">
    <div class="row">
      <form class="form-horizontal">    
        <div class="col-lg-10 col-md-10">
          <div class="form-group">
              <div class="col-md-6 col-md-6-offset-1">
                <div class="col-md-4"><label>Code :</label></div>
                <div class="col-md-8">
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
                <div class="col-md-4"><label>ชั้น/ยศ :</label></div>
                <div class="col-md-8">
                  <select class="form-control">
                      <option>---Select---</option>
                      <option>ยศ1</option>
                      <option>ยศ2</option>
                      <option>ยศ3</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6"> 
                <div class="col-md-3"><label>ชื่อ-สกุล :</label></div>
                  <div class="col-md-4">
                    <input class="form-control" type="text">
                  </div>
                  <div class="col-md-4">
                    <input class="form-control" type="text">
                  </div>
              </div>
          </div>
          <div class="form-group">
              <div class="col-md-6 col-md-6-offset-1">
                <div class="col-md-4"><label>หน่วยงาน :</label></div>
                <div class="col-md-8">
                  <select class="form-control">
                      <option>---Select---</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 col-md-6-offset-1"> 
                <div class="col-md-3"><label>ตำแหน่ง :</label></div>                       
                <div class="col-md-8">
                  <select class="form-control">
                      <option>ยศ1</option>
                      <option>ยศ2</option>
                      <option>ยศ3</option>
                  </select>
                </div>                                   
              </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2">
          <div class="form-group">
            <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ1LjUiIHk9IjcwIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MTQweDE0MDwvdGV4dD48L2c+PC9zdmc+" alt="..." class="img-rounded">
          </div>
        </div>    
      </form>
   </div>
  </div>
</div>
    
<!-- table -->
<table class="table table-bordered table-hover">
  <tr class="active">
    <th>No</th>
    <th>name</th>
    <th>แผนก</th>
    <th>ตำแหน่ง</th>
    <th>Passwd Expire</th>
    <th>Status</th>
    <th></th>
  </tr>
  <tr>
    <td onclick="changePage('../admin/usermanagement-create-or-edit')">1</td>
    <td onclick="changePage('../admin/usermanagement-create-or-edit')">ยศ ชื่อ นามสกุล</td>
    <td onclick="changePage('../admin/usermanagement-create-or-edit')">xxxx</td>
    <td onclick="changePage('../admin/usermanagement-create-or-edit')">xxxx</td>
    <td onclick="changePage('../admin/usermanagement-create-or-edit')">24-07-16</td>
    <td><input type="checkbox"></td>
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
  </ul>

@stop

@section('modal-content')

@stop

@section('javascript')

@stop