@extends('layout.master')
@section('breadcrumbs', Breadcrumbs::render('system-admin'))
@section('content')
<div class="container-fluid col-lg-10 col-md-10">
        <div class="panel page-header">
            <div class="col-lg-12 col-md-12">
                <div class="col-lg-10 col-md-10">
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdAdd"> เพิ่มระบบงาน</button>
        </div>
        <div class="col-lg-2 col-md-2">
            <label>พิมพ์ข้อมูลทั้งหมด <button type="button" class="btn btn-default glyphicon glyphicon-print"></button></label>
        </div>
      </div>

      <!-- form group data add -->
        <div class="panel-body">
        <form class="form-horizontal">
            
            
            <div class="col-lg-10 col-md-10">                
        <div class="form-group">
            <div class="col-lg-6 col-md-6">
              
                    <div class="col-lg-4 col-md-4"><label>Code</label></div>
                    <div class="col-lg-7 col-md-7">
                        <input class="form-control input-sm" type="text" >
                    </div>
               
            </div>
                    <div class="col-lg-6 col-md-6"> 
                        <div class="col-lg-3 col-md-3"><label>Active</label></div>                       
                        <div class="col-lg-3 col-md-3"><input type="checkbox"></div>                                   
                    </div>
                </div>
            
           
                    <div class="col-lg-6 col-md-6">    
                        <div class="col-lg-4 col-md-4"><label>ชื่อ</label></div>
                        <div class="col-lg-7 col-md-7">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    
                <div class="form-group col-lg-6">
                    
                        <div class="col-lg-2 col-md-2"><label>หน่วยงาน</label></div>
                      <div class="col-lg-8 col-md-8">
                        <select class="form-control" id="sel1">
                          <option>การท่า</option>
                          <option>Admin</option>
                          <option>จัดเก็บผลประโยชน์</option>
                        </select>
                      </div>
                
                </div>
                    
                <div class="col-lg-12 col-md-12">
                
                        <div class="col-lg-2 col-md-2"><label>Page name (URL)</label></div>
                        <div class="col-lg-9 col-md-9">
                            <input type="text" class="form-control">
                        </div>
                 

                </div>
  
                

        </form>
      </div>
        </div>

     <!-- table data -->
      <div class="panel panel-primary">
       <div class="panel-heading">ระบบงาน</div>
        <div class="panel-body">
          <table class="table table-hover">
            <thead>
              <tr>
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
                          <button type="button" class="btn btn-default glyphicon glyphicon-pencil" data-toggle="modal" data-target="#"> </button>
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
                          <button type="button" class="btn btn-default glyphicon glyphicon-pencil" data-toggle="modal" data-target="#"> </button>
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
                          <button type="button" class="btn btn-default glyphicon glyphicon-pencil" data-toggle="modal" data-target="#"> </button>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>ระบบบเก็บผลประโยชนื</td>
                    <td>T102-100</td>
                    <td>จัดเก็บผลประโยชน์</td>
                    <td><input type="checkbox" value=""></td>
                    <td>
                        <a href = "system-admin-create-or-edit">
                          <button type="button" class="btn btn-default glyphicon glyphicon-pencil" data-toggle="modal" data-target="#"> </button>
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
                          <button type="button" class="btn btn-default glyphicon glyphicon-pencil" data-toggle="modal" data-target="#"> </button>
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
                          <button type="button" class="btn btn-default glyphicon glyphicon-pencil" data-toggle="modal" data-target="#"> </button>
                        </a>
                    </td>
                </tr>
          </table>
        </div>

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

      </div>
    </div>
</div>
@stop