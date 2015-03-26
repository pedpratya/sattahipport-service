@extends('layout.master')
@section('breadcrumbs', Breadcrumbs::render('organization'))
@section('content')
<div class="container-fluid col-lg-10 col-md-10">
            <div class="col-lg-12 col-md-12 page-header">
                        <div class="col-lg-2 col-md-2">
                            <a href = "#">
                            <button type="button" class="btn btn-primary">ขอใช้บริการ</button>
                            </a>
                        </div>
                        
                         
                        <div class="col-lg-2 col-md-2">
                            <div class="form-group"> 
                                <div class="col-lg-3 col-md-3"><label>ค้นหา</label></div>
                                <div class="col-lg-8 col-md-8" ><input type="text" class="form-control"   style="margin-left: 5px"></div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="form-group"> 
                                <div class="col-lg-3 col-md-3"><label>ว-ด-ป</label></div>
                              <div class="input-group col-lg-8 col-md-8">
                                <input type="text" class="form-control" aria-label="...">
                                <div class="input-group-btn">
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                        </div>
                            </div>
                            </div>
                        </div>
                
                        <div class="col-lg-4 col-md-4">
                            <div class="form-group"> 
                                <div class="col-lg-3 col-md-3"><label>ว-ด-ป</label></div>
                              <div class="input-group col-lg-8 col-md-8">
                                <input type="text" class="form-control" aria-label="...">
                                <div class="input-group-btn">
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                        </div>
                            </div>
                            </div>
                        </div>
                
            </div>
            
    <table class="table">
        <tr  style="background-color:  #ebebeb">
            <th >No</th>
            <th>Name</th>
            <th>Start</th>
            <th>Finish</th>
            <th>Status</th>
        </tr>
        <tr>
            <td>5</td>
            <td>Berth Code</td>
            <td>04-12-57</td>
            <td>&nbsp;</td>
            <td>Work In Process</td>
        </tr>
        <tr>
            <td>4</td>
            <td>ขอใช้ชั่วคราว</td>
            <td>21-08-57</td>
            <td>21-09-57</td>
            <td>Done</td>
        </tr>
    </table>

    
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

@stop
