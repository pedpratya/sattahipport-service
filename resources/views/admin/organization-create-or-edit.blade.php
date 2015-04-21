@extends('layout.content')
@section('breadcrumbs', Breadcrumbs::render('organization-create-or-edit'))
@section('content')
<!-- header -->
<div class="row">
  <div class="col-md-8 col-sm-8">
    <a href = "#">
    <button type="button" class="btn btn-primary">Save Chang</button>
    </a>
  </div>
  <!-- <div class="col-md-4 col-sm-4">
    <div class="col-md-4 col-sm-4"></div>
    <div class="col-md-6 col-sm-6">
      <label>พิมพ์ข้อมูลทั้งหมด</label>
    </div>
    <div class="col-md-1 col-sm-1">
      <button type="button" class="btn btn-default btn-sm glyphicon glyphicon-print"></button> 
    </div>
  </div> -->
</div><!--End header -->
    
<!-- form    -->
<div class="portlet">
  <div class="portlet-header">
    <h3>
      <i class="fa fa-tasks"></i>
      เพิ่มหน่วยงาน
    </h3>
  </div> <!-- /.portlet-header -->
  <div class="portlet-content">
    <div class="row">
      <form class="form-horizontal">
        <div class="col-md-8 col-md-8-offset-1">
          <div class="form-group"> 
            <div class="col-md-6 col-md-6-offset-1">
              <div class="col-md-5 col-md-5-offset-1"><label>Org Code :</label></div>
              <div class="col-md-7 col-md-7-offset-1"><input class="form-control" type="text" ></div>
            </div>
            <div class="col-md-6 col-md-6-offset-1">
              <div class="col-md-3 col-md-3-offset-1"><label>Active :</label></div>                       
              <div class="col-md-7 col-md-7-offset-1"><input type="checkbox" checked="checked"></div>                                   
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6 col-md-6-offset-1">    
              <div class="col-md-5 col-md-5-offset-1"><label>Org Name :</label></div>
              <div class="col-md-7 col-md-7-offset-1">
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-md-6 col-md-6-offset-1">
              <div class="col-md-3 col-md-3-offset-1"><label>ชื่อย่อ :</label></div>
              <div class="col-md-8 col-md-8-offset-1"><input class="form-control" type="text" ></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6 col-md-6-offset-1">    
              <div class="col-md-5 col-md-5-offset-1"><label>Address :</label></div>
              <div class="col-md-7 col-md-7-offset-1">
                <div class="right-inner-addon ">
                  <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                  <input type="search" class="form-control" data-toggle="modal" data-target="#mdAddress" placeholder="Search" />
                </div>
              </div>
            </div>
            <div class="col-md-6 col-md-6-offset-1">
              <div class="col-md-3 col-md-3-offset-1"><label>location:</label></div>
              <div class="col-md-8 col-md-8-offset-1">
                <div class="right-inner-addon ">
                  <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                  <input type="search" class="form-control" data-toggle="modal" data-target="#mdLocation" placeholder="Search" />
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6 col-md-6-offset-1">    
              <div class="col-md-5 col-md-5-offset-1"><label>หน่วยงานต้นสังกัด :</label></div>
              <div class="col-md-7 col-md-7-offset-1">
                <select class="form-control">
                  <option>---Select---</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-md-4-offset-1">
          <div class="form-group"> 
            <fieldset class="scheduler-border">
            <legend class="scheduler-border">Replace Picture</legend>
              <div class="col-lg-12 col-md-12 text-center">
                <img src="{!! asset('img/logo.png') !!}"  width="100" >
              </div>
            </fieldset>
          </div>
        </div>   
      </form>
    </div>
  </div>
</div><!-- /.portlet-header -->
    

<!-- table -->
<a id="add_row" class="glyphicon glyphicon-plus btn btn-primary pull-right"> Add Row</a>
<div class="portlet">
  <div class="portlet-header">
    <h3>
      <i class="fa fa-tasks"></i>
      ตำแหน่งในองค์กร
    </h3>
  </div><!-- /.portlet-header -->

 <!--content -->
    
    <div class="row clearfix">
    <div class="col-md-12 column">
      <table class="table table-bordered table-hover" id="tab_logic">
        <thead>
          <tr >
            <th class="text-center">No</th>
            <th class="text-center">ตำแหน่ง</th>
            <th class="text-center">คำย่อ</th>
            <th class="text-center">Code</th>
            <th class="text-center">Action</th>
            <th class="text-center">Update Data</th>
          </tr>
        </thead>
        <tbody>
          <tr id='addr0'>
            <td>
            1
            </td>
            <td>
            <input type="text" name='name0'  placeholder='ตำแหน่ง' class="form-control"/>
            </td>
            <td>
            <input type="text" name='mail0' placeholder='คำย่อ' class="form-control"/>
            </td>
            <td>
            <input type="text" name='mobile0' placeholder='code' class="form-control"/>
            </td>
            <td>
              <input type="checkbox" name='mobile0' checked="checked">
            </td>
            <td>
              <button type="button" class="btn btn-default glyphicon glyphicon-plus"></button>
              <button type="button" class="btn btn-default glyphicon glyphicon-remove"></button>
            </td>
          </tr>
          <tr id='addr1'></tr>
        </tbody>
      </table>
  </div>
  </div>
  <!-- <a id="add_row" class="btn btn-default pull-right">Add Row</a> -->
  <a id='delete_row' class="glyphicon glyphicon-trash pull-right btn btn-default"> Delete Row</a>

@stop

@section('modal-content')
<!-- modal Address --> 
<div id="mdAddress" class="modal modal-styled fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title">ที่อยู่</h3>
      </div>
    <!-- modal Address body -->
      <div class="modal-body">
        <form class="form-horizontal">
           <div class="form-group">
            <div class="col-lg-12">
              <div class="col-xs-2 col-sm-2"><label>ชื่อ :</label></div>
              <div class="col-xs-10 col-sm-10"><input class="form-control " type="text" ></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>เลขที่ :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>หมู่ :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-12">
              <div class="col-xs-2 col-sm-2"><label>หมู่บ้าน :</label></div>
              <div class="col-xs-10 col-sm-10"><input class="form-control " type="text" ></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>ถนน :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>แขวง/ตำบล :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>เขต/อำเภอ :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>จังหวัด :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>ประเทศ :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>ZIP :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>Bill Active :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
            
          </div>
        </form>           
      </div>
    <!-- modal Address footer -->
    <div class="modal-footer">
        <button type="button" class="btn btn-tertiary" data-dismiss="modal">Submit</button>
        <button type="button" class="btn btn-primary">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->  

<!-- mdLocation -->
<div class="modal fade" id="mdLocation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg">
    <div class="modal-content">
    <!-- header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
        <h3 class="modal-title">Map Location</h3>
      </div>
    <!-- body -->
      <div class="modal-body">
          <img src="{!! asset('img/map.png') !!}"  width="500" >
      </div>
      <!-- footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
        <button type="submit" class="btn btn-default" data-dismiss="modal" id="btnSave">Cancel</button>
      </div>
    </div>
  </div>
</div><!-- End mdLocation -->

<script>
       $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='name"+i+"' type='text' placeholder='ตำแหน่ง' class='form-control input-md'  /> </td><td><input  name='mail"+i+"' type='text' placeholder='คำย่อ'  class='form-control input-md'></td><td><input  name='mobile"+i+"' type='text' placeholder='code'  class='form-control input-md'></td><td><input  name='mobile"+i+"'  type='checkbox'  class='input-sm'></td> <td><input  name='mail"+i+"' type='button' class='btn btn-default glyphicon glyphicon-plus'><input  name='mail"+i+"' type='button' class='btn btn-default glyphicon glyphicon-remove'></td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
       if(i>1){
     $("#addr"+(i-1)).html('');
     i--;
     }
   });

});
</script>

@section('javascript')

@stop