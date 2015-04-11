@extends('layout.content')

@section('content')  

<div class="row">
  <div class="col-md-8 col-sm-8">
    <a href = "usermanagement-create-or-edit">
    <button type="button" class="btn btn-primary" style="width:15%">Add</button>
    </a>
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
      เพิ่ม Port Information
    </h3>
  </div> <!-- /.portlet-header -->
  <div class="portlet-content">
	<form class="form-horizontal">    
	  <div class="form-group">
	      <div class="col-md-6 col-md-6-offset-1">
	        <div class="col-md-4"><label>Code :</label></div>
	        <div class="col-md-7">
	          <input class="form-control" type="text" >
	        </div>
	      </div>
	      <div class="col-md-6 col-md-6-offset-1"> 
	        <div class="col-md-4"><label>Active :</label></div>                       
	        <div class="col-md-8"><input type="checkbox"></div>                                   
	      </div>
	  </div>
	  <div class="form-group">
	      <div class="col-md-6 col-md-6-offset-1">
	        <div class="col-md-4"><label>ชื่อภาษาไทย :</label></div>
	        <div class="col-md-7">
	          <input class="form-control" type="text">
	        </div>
	      </div>
	      <div class="col-md-6 col-md-6-offset-1"> 
	        <div class="col-md-4"><label>ชื่อภาษาอังกฤษ :</label></div>                       
	        <div class="col-md-8">
	          <input class="form-control" type="text">
	        </div>                                   
	      </div>
	  </div>
	  <div class="form-group">
	      <div class="col-md-6 col-md-6-offset-1">
	        <div class="col-md-4"><label>หมุดเริ่มต้น :</label></div>
	        <div class="col-md-7">
	          <input class="form-control" type="text">
	        </div>
	      </div>
	      <div class="col-md-6 col-md-6-offset-1"> 
	        <div class="col-md-4"><label>หมุดสุดท้าย :</label></div>                       
	        <div class="col-md-8">
	          <input class="form-control" type="text">
	        </div>                                   
	      </div>
	  </div>
	  <div class="form-group">
	      <div class="col-md-6 col-md-6-offset-1">
	        <div class="col-md-4"><label>กว้าง x ยาว :</label></div>
	        <div class="col-md-7">
	          <input class="form-control" type="text">
	        </div>
	      </div>
	      <div class="col-md-6 col-md-6-offset-1"> 
	        <div class="col-md-4"><label>ความลึก :</label></div>                       
	        <div class="col-md-8">
	          <input class="form-control" type="text">
	        </div>                                   
	      </div>
	  </div>  
	  <div class="form-group">
	      <div class="col-md-12 col-md-12-offset-1">
	        <div class="col-md-2"><label>หมายเหตุ :</label></div>
	        <div class="col-md-10">
	          <input class="form-control" type="text">
	        </div>
	      </div>
	  </div>   
	</form>
  </div>
</div>
    
<!-- table -->
<table class="table table-bordered table-hover">
  <tr class="active">
    <th>No</th>
    <th>Name</th>
    <th>Code</th>
    <th>Size</th>
    <th class="text-center">สถานะใช้งาน</th>
  </tr>
  <tr>
    <td>1</td>
    <td>ทพส.-ทร.#1</td>
    <td>TP001</td>
    <td>ก x ย x ส</td>
    <td class="text-center"><input type="checkbox"></td>
  </tr>
  <tr>
    <td>2</td>
    <td>ทพส.-ทร.#2</td>
    <td>TP002</td>
    <td>ก x ย x ส</td>
    <td class="text-center"><input type="checkbox"></td>
  </tr>
  <tr>
    <td>3</td>
    <td>ทพส.-ทร.#3</td>
    <td>TP003</td>
    <td>ก x ย x ส</td>
    <td class="text-center"><input type="checkbox"></td>
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