@extends('layout.content')
@section('breadcrumbs', Breadcrumbs::render('usermanagement-create-or-edit'))
@section('content')

<!-- header -->
<div class="row">
  <div class="col-md-8 col-sm-8">
    <button type="button" class="btn btn-primary" onclick="changePage('../admin/usermanagement-create-or-edit')">Update</button>
    <button type="button" class="btn btn-default glyphicon glyphicon-calendar" onclick="changePage('../admin/usermanagement-userlog')"> UserLog</button>
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
      <!-- form -->
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
              <div class="col-md-6 col-md-6-offset-1"> 
                <div class="col-md-3"><label>ชื่อ-สกุล :</label></div>                       
                <div class="col-md-9">
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
                <div class="col-md-9">
                  <select class="form-control">
                    <option>ยศ1</option>
                    <option>ยศ2</option>
                    <option>ยศ3</option>
                  </select>
                </div>                                   
              </div>
          </div>
          <div class="form-group">
              <div class="col-md-6 col-md-6-offset-1">
                <div class="col-md-4"><label>User Name :</label></div>
                <div class="col-md-8">
                  <input class="form-control" type="text" >
                </div>
              </div>
              <div class="col-md-6 col-md-6-offset-1"> 
                <div class="col-md-3"><label>Password :</label></div>                       
                <div class="col-md-9">
                    <input class="form-control" type="password" >
                </div>                                   
              </div>
          </div>
          <div class="form-group">
            <div class="col-md-6 col-md-6-offset-1">
              <div class="col-md-4"><label>P.Start :</label></div>
              <div class="col-md-8">
                <div class="input-datepicker input-group date" data-auto-close="true"  data-date-format="dd-mm-yyyy" data-date-autoclose="true">
                    <input class="form-control" type="text">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-md-6-offset-1"> 
              <div class="col-md-3"><label>P.Expire :</label></div>                       
              <div class="col-md-9">
                <div class="input-datepicker input-group date" data-auto-close="true"  data-date-format="dd-mm-yyyy" data-date-autoclose="true">
                    <input class="form-control" type="text">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
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
    </div><!-- End row -->
  </div><!-- End portlet-content -->
</div><!-- End portlet -->



<!-- Customer Registration -->
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <!-- Operation System -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        : Operation System
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <table class="table">
          <tr>
            <td colspan="2"><input type="checkbox"> Select All 2:0</td>                              
          </tr>  
          <tr class="active">
            <th class="text-center">Page Name (URL)</th>
            <th class="text-center">Manage</th>
          </tr>
          <tr  class="text-center">
            <td></td>
            <td><input type="checkbox">:Active</td>
          </tr>
          <tr  class="text-center">
            <td></td>
            <td><input type="checkbox">:Active</td>
          </tr>
        </table> 
      </div>
    </div>
  </div>
  <!-- ระบบหน้าท่า -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        : ระบบหน้าท่า
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <table class="table">
          <tr>
            <td colspan="2"><input type="checkbox"> Select All 2:0</td>                              
          </tr>  
          <tr class="active">
            <th class="text-center">Page Name (URL)</th>
            <th class="text-center">Manage</th>
          </tr>
          <tr  class="text-center">
            <td></td>
            <td><input type="checkbox">:Active</td>
          </tr>
          <tr  class="text-center">
            <td></td>
            <td><input type="checkbox">:Active</td>
          </tr>
        </table> 
      </div>
    </div>
  </div>
  <!-- ระบบตรวจนับสินค้า -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        : ระบบตรวจนับสินค้า
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
          .........
      </div>
    </div>
  </div>
  <!-- ระบบคลังสินค้าลานกอง -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        : ระบบคลังสินค้าลานกอง
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        .............
      </div>
    </div>
  </div>  
</div><!--End Customer Registration -->
@stop


@section('modal-content')

@stop

@section('javascript')

@stop