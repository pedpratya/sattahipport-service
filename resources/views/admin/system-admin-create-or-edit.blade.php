@extends('layout.master-module')
@section('breadcrumbs', Breadcrumbs::render('system-admin-create-or-edit'))
@section('content')

<div class="portlet">
  <div class="portlet-header">
    <h3>
      <i class="fa fa-tasks"></i>
      เพิ่มเมนูระบบงาน
    </h3>
  </div> <!-- /.portlet-header -->
  <div class="portlet-content">
    <div class="row">
      <form class="form-horizontal">    
      <!-- form -->
        <div class="form-group">
          <div class="col-md-6 col-md-6-offset-1">
            <div class="col-md-5 col-md-4-offset-1"><label>Code :</label></div>
            <div class="col-md-7 col-md-8-offset-1">
              <input class="form-control" type="text" >
            </div>
          </div>
          <div class="col-md-6 col-md-6-offset-1"> 
            <div class="col-md-3"><label>Active :</label></div>                       
            <div class="col-md-9"><input type="checkbox"></div>                                   
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-6 col-md-6-offset-1">    
            <div class="col-md-5"><label>ชื่อ :</label></div>
            <div class="col-md-7">
              <input type="text" class="form-control">
            </div>
          </div>      
          <div class="col-md-6 col-md-6-offset-1">
            <div class="col-md-3"><label>หน่วยงาน :</label></div>
            <div class="col-md-9">
              <select class="form-control" id="sel1">
                <option>การท่า</option>
                <option>Admin</option>
                <option>จัดเก็บผลประโยชน์</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
            <div class="col-md-10 col-md-10-offset-1">
              <div class="col-md-3"><label>Page name (URL) :</label></div>
              <div class="col-md-9"><input class="form-control" type="text" placeholder="URL" value=""></div>
            </div>
            <!-- <div class="col-lg-1 col-md-1"></div> -->
            <div class="col-lg-2 col-md-2">
              <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#mdAddMenu">Add Menu</button>
            </div>
        </div>
      </form>
    </div><!-- End row -->
  </div><!-- End form head -->
</div><!-- End portlet -->


<!-- Customer Registration -->
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <!-- Customer Registration -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h6 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
        : Customer Registration
        </a>
      </h6>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        ..................
      </div>
    </div>
  </div>
  <!-- Download Form -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h6 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         <!-- <label class="glyphicon glyphicon-chevron-right"></label> : Download Form -->
         : Download Form
        </a>
      </h6>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        ...........
      </div>
    </div>
  </div>
  <!-- ข้อมูลทั่วไป -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h6 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          : ข้อมูลทั่วไป
        </a>
      </h6>
    </div>
    <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
          <button type="button" class="btn btn-primary btn-xs glyphicon glyphicon-plus-sign" data-toggle="modal" data-target="#mdAddPage"> Add Page</button>
          <table class="table">
            <thead>
              <tr style="background-color: #ebebeb">
                <th>Page Name [URL]</th>
                <th>Menu Name</th>
                <th>Code Page</th>
                <th>Manage</th>
              </tr>
            </thead>
              <tr>
                <td>../webserv/location.php</td>
                <td>ที่ตั้งอาณาเขตบริเวณ</td>
                <td>301</td>
                <td>
                  <button type="button" class="btn btn-default glyphicon glyphicon-pencil" data-toggle="modal" data-target="#mdEditMenu"> </button>
                  <input type="checkbox" checked="checked">
                </td>
              </tr>
              <tr>
                <td>../webserv/canel.php</td>
                <td>ร่องน้ำและนำร่อง</td>
                <td>302</td>
                <td>
                  <button type="button" class="btn btn-default glyphicon glyphicon-pencil" data-toggle="modal" data-target="#mdEditMenu"> </button>
                  <input type="checkbox">
                </td>
              </tr>
              <tr>
                <td>../webserv/communication.php</td>
                <td>การสื่อสาร</td>
                <td>303</td>
                <td>
                  <button type="button" class="btn btn-default glyphicon glyphicon-pencil" data-toggle="modal" data-target="#mdEditMenu"> </button>
                  <input type="checkbox">
                </td>
              </tr>
          </table>
      </div>
    </div>
  </div>
  <!-- Member -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h6 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          : Member
        </a>
      </h6>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
        ..................................
      </div>
    </div>
  </div>
  <!-- Interest -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive">
      <h6 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          : Interest
        </a>
      </h6>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
        ..................................
      </div>
    </div>
  </div>
</div><!-- End Customer Registration -->
@stop


@section('modalhtml')
<!-- popup Add Menu -->
<div id="mdAddMenu" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- heder -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
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
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary" data-dismiss="modal" id="btnSave">Save</button>
      </div>
    </div>
  </div>
</div><!-- End popup Add Menu -->


<!-- popup Add Page -->
<div id="mdAddPage" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- heder -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
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
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary" data-dismiss="modal" id="btnSave">Save</button>
      </div>
    </div>
  </div>
</div><!-- popup Add Page -->
@stop

@section('bottomscript')
  <script>
      var idMainManu = '101';
  </script>
@stop