@extends('layout.master')
@section('breadcrumbs', Breadcrumbs::render('system-admin'))
@section('content')
<div class="container-fluid col-lg-10 col-md-10">
    <div class="panel">
     <!-- add -->
      <div class="col-lg-12 page-header">
        <div class="col-lg-9">
          <button type="button" class="btn btn-primary btn-sm glyphicon glyphicon-plus" data-toggle="modal" data-target="#mdAdd" ng-model="quertyString"> เพิ่มระบบงาน</button>
        </div>
        <div class="col-lg-3">
            <p>พิมพ์ข้อมูลทั้งหมด <button class="glyphicon glyphicon-print"></button></p> 
        </div>
      </div>

      <!-- form group data add -->
      <div class="panel-body">
        <form role="form">
            <div class="form-group col-lg-6">
              <div class="form-group">
                <div class="col-xs-2 col-sm-2"><p>Code :</p></div>
                <div class="col-xs-10 col-sm-10"><input class="form-control input-sm" type="text" placeholder="XXXXX"></div>
              </div>
            </div>
            <div class="form-group col-lg-6">
              <div class="checkbox">
                <div class="col-xs-2 col-sm-2"><p>Active</p></div>
                <div class="col-xs-10 col-sm-10"><input type="checkbox" value=""></div>
              </div>
            </div>
            <div class="form-group col-lg-6">
              <div class="form-group">
                <div class="col-xs-2 col-sm-2"><p>ชื่อ :</p></div>
                <div class="col-xs-10 col-sm-10"><input class="form-control input-sm" type="text" placeholder="ชื่อ"></div>
              </div>
            </div>
            <div class="form-group col-lg-6">
              <div class="form-group">
                <div class="col-xs-2 col-sm-2"><p>หน่วยงาน :</p></div>
                <div class="col-xs-10 col-sm-10">
                  <select class="form-control" id="sel1">
                    <option>การท่า</option>
                    <option>Admin</option>
                    <option>จัดเก็บผลประโยชน์</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group col-lg-12">
              <div class="form-group">
                <div class="col-xs-2 col-sm-2"><p>Page name (URL) :</p></div>
                <div class="col-xs-10 col-sm-10"><input class="form-control input-sm" type="text" placeholder="URL"></div>
              </div>
            </div>
        </form>
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
                    <td><button type="button" class="btn btn-primary btn-xs glyphicon glyphicon-edit" data-toggle="modal" data-target="#"> </button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Customer Relation Management</td>
                    <td>T001-102</td>
                    <td>การท่า</td>
                    <td><input type="checkbox" value=""></td>
                    <td><button type="button" class="btn btn-primary btn-xs glyphicon glyphicon-edit" data-toggle="modal" data-target="#"> </button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>ระบบบริหารงานท่า</td>
                    <td>T001-100</td>
                    <td>การท่า</td>
                    <td><input type="checkbox" value=""></td>
                    <td><button type="button" class="btn btn-primary btn-xs glyphicon glyphicon-edit" data-toggle="modal" data-target="#"> </button></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>ระบบบเก็บผลประโยชนื</td>
                    <td>T102-100</td>
                    <td>จัดเก็บผลประโยชน์</td>
                    <td><input type="checkbox" value=""></td>
                    <td><button type="button" class="btn btn-primary btn-xs glyphicon glyphicon-edit" data-toggle="modal" data-target="#"> </button></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>ระบบบริหารพื้นที่</td>
                    <td>T103-100</td>
                    <td>การท่า</td>
                    <td><input type="checkbox" value=""></td>
                    <td><button type="button" class="btn btn-primary btn-xs glyphicon glyphicon-edit" data-toggle="modal" data-target="#"> </button></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>ระบบอนุมัติ</td>
                    <td>T104-100</td>
                    <td>Admin</td>
                    <td><input type="checkbox" value=""></td>
                    <td><button type="button" class="btn btn-primary btn-xs glyphicon glyphicon-edit" data-toggle="modal" data-target="#"> </button></td>
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