@extends('layout.master')
@section('breadcrumbs', Breadcrumbs::render('system-admin-create-or-edit'))
@section('content')
<h1>Hello</h1>
<div class="container-fluid col-lg-10 col-md-10">
        <div class="panel page-header">
            <div class="col-lg-12 col-md-12">
                <div class="col-lg-10 col-md-10">
            </div>
        <div class="col-lg-2 col-md-2">
        </div>
      </div>
            

    <!-- form input data add -->
    <div class="panel-body">
        <form role="form">
            <div class="form-group col-lg-6 col-md-6">
              <div class="form-group">
                  <div class="col-lg-4 col-md-4"><label>Code</label></div>
                <div class="col-lg-7 col-md-7"><input class="form-control input-sm" type="text" placeholder="XXXXX" value="T001-101"></div>
              </div>
            </div>
            <div class="form-group col-lg-6 col-md-6">
              <div class="checkbox">
                <div class="col-lg-4 col-md-4"><label>Active</label></div>
                <div class="col-lg-7 col-md-7"><input type="checkbox" checked="checked" value=""></div>
              </div>
            </div>
            <div class="form-group col-lg-6 col-md-6">
              <div class="form-group">
                <div class="col-lg-4 col-md-4"><label>ชื่อ</label></div>
                <div class="col-lg-7 col-md-7"><input class="form-control input-sm" type="text" placeholder="ชื่อ" value="Customer Web Service"></div>
              </div>
            </div>
            <div class="form-group col-lg-6 col-md-6">
              <div class="form-group">
                <div class="col-lg-3 col-md-3"><label>หน่วยงาน</label></div>
                <div class="col-lg-8 col-md-8">
                  <select class="form-control" id="sel1">
                    <option>การท่า</option>
                    <option>Admin</option>
                    <option>จัดเก็บผลประโยชน์</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group col-lg-6 col-md-6">
              <div class="form-group">
                <div class="col-lg-4 col-md-4"><label>Page name (URL</label></div>
                <div class="col-lg-8 col-md-8"><input class="form-control input-sm" type="text" placeholder="URL" value=""></div>
              </div>
            </div>
            <div class="form-group col-lg-2 col-md-2">
                <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#mdEditMenu" style="margin: 0 20px; 0 0">Add Menu</button>
              </div>
            </div>
        </form>
      </div>


  <!--list data -->
  <div class="container-fluid">
    <div class="panel panel-primary">
    <div class="panel-heading">เพิ่ม/แก้ไข ระบบงาน</div>
    <div class="panel-body">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <!-- Customer Registration -->
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h6 class="panel-title">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
               <label class="glyphicon glyphicon-chevron-right"></label> : Customer Registration
              </a>
            </h6>
          </div>
          <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
              <div class="col-lg-9">
                <button type="button" class="btn btn-success btn-xs glyphicon glyphicon-plus-sign" data-toggle="modal" data-target="#mdEditPage" ng-model="quertyString" placeholder="Filter by"> Add Page</button>

                <table class="table table-hover">
                  <thead>
                    <tr>
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
                        <input type="checkbox" checked="checked"> : Active
                      </td>
                    </tr>
                    <tr>
                      <td>../webserv/canel.php</td>
                      <td>ร่องน้ำและนำร่อง</td>
                      <td>302</td>
                      <td>
                        <button type="button" class="btn btn-default glyphicon glyphicon-pencil" data-toggle="modal" data-target="#mdEditMenu"> </button>
                        <input type="checkbox" checked="checked"> : Active
                      </td>
                    </tr>
                    <tr>
                      <td>../webserv/communication.php</td>
                      <td>การสื่อสาร</td>
                      <td>303</td>
                      <td>
                        <button type="button" class="btn btn-default glyphicon glyphicon-pencil" data-toggle="modal" data-target="#mdEditMenu"> </button>
                        <input type="checkbox" checked="checked"> : Active
                      </td>
                    </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      <!-- Download Form -->
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h6 class="panel-title">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <label class="glyphicon glyphicon-chevron-right"></label> : Download Form
              </a>
            </h6>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
              <div class="col-lg-9">
                <button type="button" class="btn btn-success btn-xs glyphicon glyphicon-plus-sign" data-toggle="modal" data-target="#mdEditPage" ng-model="quertyString" placeholder="Filter by"> Add Page</button>

                <table class="table table-hover">
                  <thead>
                    <tr>
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
                        <input type="checkbox"> : Active
                      </td>
                    </tr>
                    <tr>
                      <td>../webserv/canel.php</td>
                      <td>ร่องน้ำและนำร่อง</td>
                      <td>302</td>
                      <td>
                       <button type="button" class="btn btn-default glyphicon glyphicon-pencil" data-toggle="modal" data-target="#mdEditMenu"> </button>
                        <input type="checkbox"> : Active
                      </td>
                    </tr>
                    <tr>
                      <td>../webserv/communication.php</td>
                      <td>การสื่อสาร</td>
                      <td>303</td>
                      <td>
                        <button type="button" class="btn btn-default glyphicon glyphicon-pencil" data-toggle="modal" data-target="#mdEditMenu"> </button>
                        <input type="checkbox"> : Active
                      </td>
                    </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      <!-- ข้อมูลทั่วไป -->
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingThree">
            <h6 class="panel-title">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <label class="glyphicon glyphicon-chevron-down"></label> : ข้อมูลทั่วไป
              </a>
            </h6>
          </div>
          <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
              <div class="col-lg-9">
                <button type="button" class="btn btn-success btn-xs glyphicon glyphicon-plus-sign" data-toggle="modal" data-target="#mdEditPage"> Add Page</button>

                <table class="table table-hover">
                  <thead>
                    <tr>
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
                        <input type="checkbox" checked="checked"> : Active
                      </td>
                    </tr>
                    <tr>
                      <td>../webserv/canel.php</td>
                      <td>ร่องน้ำและนำร่อง</td>
                      <td>302</td>
                      <td>
                        <button type="button" class="btn btn-default glyphicon glyphicon-pencil" data-toggle="modal" data-target="#mdEditMenu"> </button>
                        <input type="checkbox"> : Active
                      </td>
                    </tr>
                    <tr>
                      <td>../webserv/communication.php</td>
                      <td>การสื่อสาร</td>
                      <td>303</td>
                      <td>
                        <button type="button" class="btn btn-default glyphicon glyphicon-pencil" data-toggle="modal" data-target="#mdEditMenu"> </button>
                        <input type="checkbox"> : Active
                      </td>
                    </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      <!-- Member -->
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingFour">
            <h6 class="panel-title">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <label class="glyphicon glyphicon-chevron-right"></label> : Member
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
                <label class="glyphicon glyphicon-chevron-right"></label> : Interest
              </a>
            </h6>
          </div>
          <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
            <div class="panel-body">
              ..................................
            </div>
          </div>
        </div>
      </div>
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
</div> <!-- container-fluid -->


  <!-- popup Edit Menu -->
    <div id="mdEditMenu" class="modal fade">
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
                    <div class="col-xs-4 col-sm-4"><p>Code :</p></div>
                    <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-4 col-sm-4"><p>Page name (URL) :</p></div>
                    <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-4 col-sm-4"><p>Menu Name :</p></div>
                    <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
              </form>           
            </div>

          <!-- footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
              <button type="submit" class="btn btn-primary" data-dismiss="modal" id="btnSave">บันทึก</button>
            </div>
        </div>
      </div>
    </div>



  <!-- popup Edit Page -->
    <div id="mdEditPage" class="modal fade">
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
                  <div class="col-xs-4 col-sm-4"><p>Code :</p></div>
                  <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                </div>
                <div class="form-group">
                  <div class="col-xs-4 col-sm-4"><p>Menu :</p></div>
                  <div class="col-xs-8 col-sm-8">
                    <select class="form-control">
                      <option>Menu 1</option>
                      <option>Menu 2</option>
                      <option>Menu 3</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-4 col-sm-4"><p>Page name (URL) :</p></div>
                  <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                </div>
                <div class="form-group">
                  <div class="col-xs-4 col-sm-4"><p>Page Name :</p></div>
                  <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                </div>
              </form>           
            </div>

          <!-- footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
              <button type="submit" class="btn btn-primary" data-dismiss="modal" id="btnSave">บันทึก</button>
            </div>
        </div>
      </div>
    </div>


@stop