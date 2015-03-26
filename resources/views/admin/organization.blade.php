@extends('layout.master')
@section('breadcrumbs', Breadcrumbs::render('organization'))
@section('content')
<div class="container-fluid col-lg-10 col-md-10">
            <div class="col-lg-12 col-md-12 page-header">
                <div class="col-lg-10 col-md-10">
                    <a href = "organization-create-or-edit">
                    <button type="button" class="btn btn-primary">เพิ่มหน่วยงาน</button>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2">
                    <label>พิมพ์ข้อมูลทั้งหมด <button type="button" class="btn btn-default glyphicon glyphicon-print"></button></label>
                </div>
            </div>
            
        <div class="panel-body">
        <form class="form-horizontal">
            <div class="col-lg-10 col-md-10">                
                <div class="form-group">
                    
            <div class="col-lg-6 col-md-6">
          
                    <div class="col-lg-4 col-md-4"><label>Code</label></div>
                    <div class="col-lg-7 col-md-7"><input class="form-control input-sm" type="text" ></div>
            
            </div>
                    <div class="col-lg-6 col-md-6"> 
                        <div class="col-lg-3 col-md-3"><label>Active</label></div>                       
                        <div class="col-lg-3 col-md-3"><input type="checkbox" ></div>                                   
                    </div>
                </div>
            
                <div class="form-group">
                    <div class="col-lg-6 col-md-6">    
                        <div class="col-lg-4 col-md-4"><label>ชื่อ</label></div>
                        <div class="col-lg-7 col-md-7">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
        </form>
  


        
        <div class="panel-body">
        <div class="container-fluid">
            <div class="col-lg-12 col-md-12">
                <table class="table">
                    <tr>
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
                </table>  
            </div>
        </div>
        </div>
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
