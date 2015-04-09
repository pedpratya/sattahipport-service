@extends('layout.master-module')
@section('breadcrumbs', Breadcrumbs::render('nounit-test2'))
@section('content')	
<!-- header -->
    <div class="row">
      <div class="col-md-8 col-md-8">
        <a href = "organization-create-or-edit">
        <button type="button" class="btn btn-primary">เพิ่มหน่วยงาน</button>
        </a>
      </div>
      <div class="col-md-4 col-md-4 text-right">
        <label>พิมพ์ข้อมูลทั้งหมด <button type="button" class="btn btn-default glyphicon glyphicon-print"></button></label>
      </div>
    </div>
<!--End header -->

			<div class="portlet">

				<div class="portlet-header">

					<h3>
						<i class="fa fa-tasks"></i>
						หน่วยงาน
					</h3>

				</div> <!-- /.portlet-header -->

				<div class="portlet-content">

					<div class="row">

      <form class="form-horizontal"> 
        <div class="form-group"> 
          <div class="col-md-6 col-md-6-offset-1">
            <div class="col-md-3 col-md-3-offset-1"><label>Code</label></div>
            <div class="col-md-8 col-md-8-offset-1"><input class="form-control" type="text" ></div>
          </div>
          <div class="col-md-6 col-md-6-offset-1"> 
            <div class="col-md-3 col-md-3-offset-1"><label>Active</label></div>                       
            <div class="col-md-8 col-md-8-offset-1"><input type="checkbox" ></div>                                   
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-6 col-md-6-offset-1">    
            <div class="col-md-3 col-md-3-offset-1"><label>ชื่อ</label></div>
            <div class="col-md-8 col-md-8-offset-1">
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="col-sm-3">
             <h4>Autoclose</h4>
             <div class="input-datepicker input-group date" data-auto-close="true" data-date="12-02-2015" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
                 <input class="form-control" type="text">
                 <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
             </div>
             <span class="help-block">dd-mm-yyyy</span>
         </div>          
      </form>
      <a data-toggle="modal" href="#styledModal" class="btn btn-primary">Styled Modal</a>   
					</div> <!-- /.row -->

				</div> <!-- /.portlet-content -->

 				<div class="portlet-content">

					<div class="row">
                        <div class="col-sm-4">
                            <h4>Default timepicker</h4>
                            <div class="input-group bootstrap-timepicker">
                                <input type="text" class="form-control input-timepicker">
                                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <h4>Inside a modal</h4>
                            <div class="input-group bootstrap-timepicker">
                                <input type="text" class="form-control input-timepicker-modal">
                                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                            </div>
                        </div>
                        
                        <div class="col-sm-4">
                            
                        </div>
                        
                    </div> <!-- /.row -->

				</div> <!-- /.portlet-content -->      
                               
			</div> <!-- /.portlet -->
			

    
  
    <!-- table -->
      <table class="table table-bordered table-hover">
        <tr class="active">
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
	<!-- End table -->
    
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
    </ul> <!-- End pagin -->
@stop

@section('modalhtml')
<div id="styledModal" class="modal modal-styled fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title">Styled Modal</h3>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>

        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-tertiary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->	
@stop