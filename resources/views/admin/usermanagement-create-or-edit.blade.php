@extends('layout.master')
@section('breadcrumbs', Breadcrumbs::render('usermanagement-create-or-edit'))
@section('content')
     
<!-- header -->
<div class="col-lg-12 col-md-12">
  <div class="col-lg-10 col-md-10">
    <button type="button" class="btn btn-primary">Update</button>
    <a href = "usermanagement-userlog">
    <button type="button" class="btn btn-default glyphicon glyphicon-calendar"> UserLog</button>
    </a>
  </div>
  <div class="col-lg-2 col-md-2">
    <label>พิมพ์ข้อมูลทั้งหมด <button type="button" class="btn btn-default glyphicon glyphicon-print"></button></label>
  </div>
</div><!-- End header -->
   
<!-- form head-->         
<div class="container-fluid">
<div class="hr-topic"></div>
    <form class="form-horizontal">
    <div class="col-lg-10 col-md-10">                
      <div class="form-group">
        <div class="col-lg-6 col-md-6">    
          <div class="col-lg-4 col-md-4"><label>Code</label></div>
          <div class="col-lg-7 col-md-7"><input class="form-control" type="text" ></div>
        </div>
        <div class="col-lg-6 col-md-6"> 
          <div class="col-lg-3 col-md-3"><label>Active</label></div>                       
          <div class="col-lg-7 col-md-7"><input type="checkbox"></div>                                   
        </div>
      </div>                  
      <div class="form-group">
        <div class="col-lg-6 col-md-6">    
          <div class="col-lg-4 col-md-4"><label>ชั้น/ยศ</label></div>
          <div class="col-lg-7 col-md-7">
            <select class="form-control">
              <option>---Select---</option>
              <option>ยศ1</option>
              <option>ยศ2</option>
              <option>ยศ3</option>
              </select>
          </div>
        </div>
        <div class="col-lg-6 col-md-6"> 
          <div class="col-lg-3 col-md-3"><label>ชื่อ-สกุล</label></div>
          <div class="col-lg-7 col-md-7"><input class="form-control" type="text" ></div>                                  
        </div>
      </div> 
      <div class="form-group">
        <div class="col-lg-6 col-md-6">    
          <div class="col-lg-4 col-md-4"><label>หน่วยงาน</label></div>
          <div class="col-lg-7 col-md-7">
            <select class="form-control">
              <option>---Select---</option>
              <option>หน่วยงาน1</option>
              <option>หน่วยงาน2</option>
              <option>หน่วยงาน3</option>
            </select>  
          </div>
        </div>
        <div class="col-lg-6 col-md-6"> 
          <div class="col-lg-3 col-md-3"><label>ตำแหน่ง</label></div>
          <div class="col-lg-7 col-md-7">
            <select class="form-control">
              <option>---Select---</option>
              <option>ตำแหน่ง1</option>
              <option>ตำแหน่ง2</option>
              <option>ตำแหน่ง3</option>
            </select>     
          </div>                                  
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-6 col-md-6">    
          <div class="col-lg-4 col-md-4"><label>User Name</label></div>
          <div class="col-lg-7 col-md-7"><input class="form-control" type="text" ></div> 
        </div>                
        <div class="col-lg-6 col-md-6"> 
          <div class="col-lg-3 col-md-3"><label>Password</label></div>
          <div class="col-lg-7 col-md-7"><input class="form-control" type="password" ></div>                                  
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-6 col-md-6">   
          <div class="bfh-datepicker">
            <div class="col-lg-4 col-md-4"><label>P.Start</label></div>
            <div class="col-lg-7 col-md-7 input-group date" id=''>          
              <input type="text" class="form-control" placeholder="">
              <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>       
              </span>
            </div>
          </div>
        </div>                
        <div class="col-lg-6 col-md-6"> 
        <div class="bfh-datepicker">
          <div class="col-lg-3 col-md-3"><label>P.Expire</label></div>
            <div class="col-lg-7 col-md-7 input-group date" id=''>          
              <input type="text" class="form-control" placeholder="">
              <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>       
              </span>
            </div>
        </div>                                 
        </div>
      </div> 
    </div>
    <div class="col-lg-2 col-md-2">
      <div class="form-group">
        <button type="button" class="btn btn-primary" style="width: 140px; margin-bottom: 10px;">Change Image</button>
        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ1LjUiIHk9IjcwIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MTQweDE0MDwvdGV4dD48L2c+PC9zdmc+" alt="..." class="img-rounded">
      </div>
    </div>    
    </form>
</div><!-- End form head-->      
        

<!-- Customer Registration -->
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <!-- Operation System -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Operation System
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
          ระบบหน้าท่า
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
          ระบบตรวจนับสินค้า
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
          ระบบคลังสินค้าลานกอง
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