@extends('layout.master')
@section('breadcrumbs', Breadcrumbs::render('usermanagement'))
@section('content')  

<!-- header -->
<div class="col-lg-12 col-md-12">
    <div class="col-lg-10 col-md-10">
         <a href = "usermanagement-create-or-edit">
        <button type="button" class="btn btn-primary">Add User</button>
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
      </div>
      <div class="col-lg-2 col-md-2">
        <div class="form-group">
          <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ1LjUiIHk9IjcwIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MTQweDE0MDwvdGV4dD48L2c+PC9zdmc+" alt="..." class="img-rounded">
        </div>
      </div>    
    </form>
</div><!-- End form head-->
    
<!-- table -->
  <table class="table">
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
        <td>1</td>
        <td>ยศ ชื่อ นามสกุล</td>
        <td>xxxx</td>
        <td>xxxx</td>
        <td>24-07-16</td>
        <td><input type="checkbox"></td>
        <td><button type="button" class="btn btn-default glyphicon glyphicon-pencil"></td>
    </tr>
  </table><!-- End table -->


@stop