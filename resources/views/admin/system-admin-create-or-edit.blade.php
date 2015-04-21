@extends('layout.content')
@section('breadcrumbs', Breadcrumbs::render('system-admin-create-or-edit'))
@section('content')

<div class="container-fluid">
<div style="height:100%;">
<!-- header -->
<div class="row">
  <div class="col-md-8 col-sm-8">
    <button type="button" class="btn btn-primary" onclick="changePage('../admin/system-admin-create-or-edit')">Save Chang</button>
  </div>
  <div class="col-md-4 col-sm-4">
    <div class="col-md-4 col-sm-4"></div>
    <div class="col-md-6 col-sm-6">
      <label></label>
    </div>
    <div class="col-md-1 col-sm-1">
      <button type="button" class="btn btn-default  glyphicon glyphicon-menu-left"></button> 
    </div>
  </div>
</div><!--End header -->

<div class="portlet">
  <div class="portlet-header">
    <h3>
      <i class="fa fa-tasks"></i>
      เพิ่มเมนูระบบงาน
    </h3>
  </div> <!-- /.portlet-header -->
  <div class="portlet-content">
      <form class="form-horizontal">  
          <div class="col-md-9 col-lg-9">  
            <div class="form-group">
              <div class="col-md-6">
                <div class="col-md-3"><label>Code :</label></div>
                <div class="col-md-9">
                  <input class="form-control" type="text" >
                </div>
              </div>
              <div class="col-md-6 "> 
                <div class="col-md-4"><label>Active :</label></div>                       
                <div class="col-md-8"><input type="checkbox"></div>                                   
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">    
                <div class="col-md-3"><label>ชื่อ :</label></div>
                <div class="col-md-9">
                  <input class="form-control" type="text" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="col-md-4"><label>หน่วยงาน :</label></div>
                <div class="col-md-8">
                  <select class="form-control" id="sel1">
                    <option>เลือกหน่วยงาน</option>
                    <option>Admin</option>
                    <option>จัดเก็บผลประโยชน์</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                  <div class="col-md-3"><label>Page name (URL) :</label></div>
                  <div class="col-md-9"><input class="form-control" type="text" placeholder="URL" value=""></div>
                </div>
            </div>  
           </div> 
            <div class="col-lg-3 col-md-3">
                <div class="portlet">
                    <div class="portlet-content">
                        <div class="text-center"><label>UPdate System icon</label></div>
                        <div class="text-center"><img src="{{ asset('img/icon-mainmenu/webApplication-icon.png') }}" width="80px"></div>
                    </div>
                 </div>   
            </div>   
      </form>
  </div><!-- End form head -->
</div><!-- End portlet -->


        <div class="col-lg-3 col-md-3">            
            <ul class="nav nav-pills nav-stacked">
                <li class="dropdown" >
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false" role="presentation">
                        Customer Registration <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a onClick="Menuli1();">Customer Regis Form</a></li>
                        <li><a onClick="Menuli2();">Customer Approve</a></li>
                        <li><a onClick="Menuli3();">dadfad</a></li>
                    </ul>

                </li>
                <li role="presentation" class="dropdown" role="presentation">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        Download แบบฟอร์ม<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a onClick="Menuli4();">Berth Form</a></li>
                    </ul>
                </li>
                <li role="presentation"><a>อัตราค่าบริการ</a></li>
            </ul>
        </div>
      <div class="col-lg-9 col-md-9">
          <div class="portlet">
            <div class="portlet-header">
              <h3>
                  <p id="demo"></p>
              </h3>
            </div> <!-- /.portlet-header -->
            <div class="portlet-content">
                <form class="form-horizontal">  
                    <div class="form-group">
                          <div class="col-md-3 col-lg-3"><label>URL Menu :</label></div>
                          <div class="col-md-7 col-lg-7"><input class="form-control" type="text" value=""></div>
                          <div class="col-md-2 col-lg-2"><button type="button" class="btn btn-primary">Update URL</button></div>
                    </div>
                    <div class="form-group">
                          <div class="col-md-3 col-lg-3"><label>Add Sub Menu :</label></div>
                          <div class="col-md-7 col-lg-7"><input class="form-control" type="text" value=""></div>
                          <div class="col-md-2 col-lg-2"><button type="button" class="btn btn-primary">+ Sub URL &nbsp;&nbsp;</button></div>
                    </div>
                    <div class="row page-header">
                        <div class="col-md-12 col-sm-12">
                          <label>Sub Menu Management</label>
                        </div>
                    </div> 
                    <br>
                    <div class="form-group">
                          <div class="col-md-3 col-lg-3"><label>SUB Menu Name :</label></div>
                          <div class="col-md-4 col-lg-4"><input class="form-control" type="text" value="" id="subMenu"></div>
                          <div class="col-md-2 col-lg-2"><input type="checkbox">&nbsp;&nbsp;<label>Show</label></div>
                          <div class="col-md-3 col-lg-3">
                              <button type="button" class="btn btn-primary">Update</button>
                              <button type="button" class="btn btn-primary">Delete</button>
                          </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-md-8 col-sm-8">
                            <label>Page Management</label>
                          </div>
                        <div class="col-md-4 col-sm-4">
                          <div class="col-md-4 col-sm-4"></div>
                          <div class="col-md-5 col-sm-5">
                            <label></label>
                          </div>
                          <div class="col-md-1 col-sm-1">
                            <button type="button" class="btn btn-success btn-sm  glyphicon glyphicon-plus"></button> 
                          </div>
                       </div>                        
                    </div> 
                    
                    <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                          <tr class="active">
                            <th>NO</th>
                            <th>Pange Name</th>
                            <th>URL</th>
                            <th class="text-center">Work Flow</th>
                            <th>Liftime</th>
                            <th class="text-center">Active</th>
                            <th>Update Data</th>
                          </tr>
                        <tr>
                          <td></td>
                          <td><input class="form-control" type="text" value=""></td>
                          <td><input class="form-control" type="text" value=""></td>
                          <td>
                              <select class="form-control" id="">
                                <option>เลือก Work Flow</option>
                              </select>
                          </td>
                          <td width="5%"><input class="form-control" type="text" value=""></td>
                          <td class="text-center"><input type="checkbox"></td>
                          <td>
                              <button type="button" class="btn btn-default btn-xs  glyphicon glyphicon-pencil"></button>
                              <button type="button" class="btn btn-default btn-xs  glyphicon glyphicon-trash"></button>
                              <button type="button" class="btn btn-default btn-xs  glyphicon glyphicon-minus-sign"></button>
                          </td>                        
                        </tr>
                      </table><!--End table -->
                    </div>
                </form>  
             </div><!-- End form head -->
            </div><!-- End portlet -->       
      </div>
</div>
</div>    

@stop


@section('modal-content')
<!-- popup Add Menu -->
<div id="mdAddMenu" class="modal modal-styled fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title">เพิ่ม/แก้ไข Menu</h3>
      </div>
      <!-- body -->
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
              <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>Code :</label></div>
              <div class="col-md-8 col-md-8-offset-1"><input class="form-control input-sm" type="text" ></div>
            </div>
            <div class="form-group">
              <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>Page name (URL) :</label></div>
              <div class="col-md-8 col-md-8-offset-1"><input class="form-control input-sm" type="text" ></div>
            </div>
            <div class="form-group">
              <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>Menu Name :</label></div>
              <div class="col-md-8 col-md-8-offset-1"><input class="form-control input-sm" type="text" ></div>
            </div>
        </form>           
      </div>

      <!-- footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-tertiary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->	


<!-- popup Add Page -->
<div id="mdAddPage" class="modal modal-styled fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title">เพิ่ม/แก้ไข Page</h3>
      </div>
      <!-- body -->
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>Code :</label></div>
            <div class="col-md-8 col-md-8-offset-1"><input class="form-control input-sm" type="text" ></div>
          </div>
          <div class="form-group">
            <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>Menu :</label></div>
            <div class="col-md-8 col-md-8-offset-1">
              <select class="form-control">
                <option>Menu 1</option>
                <option>Menu 2</option>
                <option>Menu 3</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>Page name (URL) :</label></div>
            <div class="col-md-8 col-md-8-offset-1"><input class="form-control input-sm" type="text" ></div>
          </div>
          <div class="form-group">
            <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>Page Name :</label></div>
            <div class="col-md-8 col-md-8-offset-1"><input class="form-control input-sm" type="text" ></div>
          </div>
        </form>           
      </div>

      <!-- footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-tertiary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- popup Add Page -->
@stop

@stop

@section('javascript')
<script>

function Menuli1()
{    
   document.getElementById("subMenu").value = "Customer Regis Form";
}
function Menuli2()
{    
   document.getElementById("subMenu").value = "Customer Approve";
}
function Menuli3()
{    
   document.getElementById("subMenu").value = "dadfad";
}
function Menuli4()
{    
   document.getElementById("subMenu").value = "Berth Form";
}


</script>
@stop