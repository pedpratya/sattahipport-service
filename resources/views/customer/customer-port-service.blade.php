@extends('layout.master')
@section('breadcrumbs', Breadcrumbs::render('system-admin'))
@section('content')

    <div class="col-lg-12 col-md-12 page-header">
      <div class="col-lg-2 col-md-2">
        <button type="button" class="btn btn-primary">ขอใช้บริการ</button>
      </div>
      <div class="col-lg-3 col-md-3">
        <div class="form-group"> 
          <div class="col-lg-3 col-md-3"><label>ค้นหา</label></div>
          <div class="col-lg-8 col-md-8" ><input type="text" class="form-control"   style="margin-left: 5px"></div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3">
        <div class="form-group"> 
          <div class="col-lg-3 col-md-3"><label>Type</label></div>
          <div class="input-group col-lg-8 col-md-8">
            <select type="text" class="form-control">
                                    <option value>Select...</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3">
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

<div class="container">
        <table class="table table-hover">
        <tr class="active">
                <td align="center"><b>No</b></td>
                <td align="center"><b>Name</b></td>
                <td align="center"><b>Start</b></td>
                <td align="center"><b>Finish</b></td>
                <td align="center"><b>Status</b></td>
        </tr>
        <tr>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center">-</td>
        </tr>
        <tr>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center">-</td>
        </tr>
        <tr>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center">-</td>
        </tr>
        <tr>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center">-</td>
        </tr>
        <tr>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center">-</td>
        </tr>
        <tr>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center">-</td>
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