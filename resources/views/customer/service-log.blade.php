@extends('layout.master')
@section('breadcrumbs', Breadcrumbs::render('organization'))
@section('content')

<!-- header -->
<div class="col-lg-12 col-md-12 page-header">
  <div class="col-lg-4 col-md-4">
    <label style="font-size: 20px;">Service Log</label>
  </div>
  <div class="col-lg-4 col-md-4">
    <div class="form-group"> 
      <div class="col-lg-3 col-md-3"><label>Start Date: </label></div>
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
      <div class="col-lg-3 col-md-3"><label>End Date: </label></div>
      <div class="input-group col-lg-8 col-md-8">
        <input type="text" class="form-control" aria-label="...">
        <div class="input-group-btn">
          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
        </div>
      </div>
    </div>
  </div>
</div><!-- End header -->

<!-- table -->
  <table class="table">
    <tr class="active">
        <th>Wait</th>
        <th>In Process</th>
        <th>Finish</th>
        <th>Finish&Paid</th>
        <th>#</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </tr>
    <tr class="active">
        <th>No</th>
        <th>Service Name</th>
        <th>Code</th>
        <th>Invoice</th>
        <th>Date</th>
        <th>Start</th>
        <th>Finish</th>
        <th>Paid</th>
    </tr>
    <tr>
        <td>5</td>
        <td>Berth Code</td>
        <td>04-12-57</td>
        <td>&nbsp;</td>
        <td>Work In Process</td>
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
        <td>04-12-57</td>
        <td>&nbsp;</td>
        <td>Work In Process</td>
    </tr>
  </table><!--End table -->

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
