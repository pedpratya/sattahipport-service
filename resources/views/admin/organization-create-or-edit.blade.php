@extends('layout.master-module')
@section('breadcrumbs', Breadcrumbs::render('organization-create-or-edit'))
@section('content')
<!-- header -->
<div class="row">
  <div class="col-md-8 col-sm-8">
    <a href = "organization-create-or-edit">
    <button type="button" class="btn btn-primary">ปรับปรุงข้อมูล</button>
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
    
<!-- form    -->
<div class="portlet">
 <div class="portlet">
  <div class="portlet-content">
    <div class="row">
      <form class="form-horizontal">
          <div class="col-md-10 col-md-10-offset-1">                
            <div class="form-group">
              <div class="col-md-6 col-md-6-offset-1">    
                <div class="col-md-4 col-md-4-offset-1"><label>Code :</label></div>
                <div class="col-md-7 col-md-7-offset-1"><input class="form-control" type="text" ></div>
              </div>
              <div class="col-md-6 col-md-6-offset-1"> 
                <div class="col-md-3 col-md-3-offset-1"><label>Active :</label></div>                       
                <div class="col-md-9 col-md-9-offset-1"><input type="checkbox"></div>                                   
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12 col-md-12-offset-1">    
                <div class="col-md-2 col-md-2-offset-1"><label>ชื่อ :</label></div>
                <div class="col-md-9 col-md-9-offset-1">
                    <input type="text" class="form-control">
                </div>
              </div>
            </div> 
            <div class="form-group">
              <div class="col-md-12 col-md-12-offset-1">    
                <div class="col-md-2 col-md-2-offset-1"><label>ชื่อย่อ :</label></div>
                <div class="col-md-9 col-md-9-offset-1">
                    <input type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12 col-md-12-offset-1">    
                <div class="col-md-2 col-md-2-offset-1"><label>Description :</label></div>
                <div class="col-md-9 col-md-9-offset-1">
                    <input type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12 col-md-12-offset-1">    
                <div class="col-md-2 col-md-2-offset-1"><label>Address :</label></div>
                <div class="col-md-9 col-md-9-offset-1">
                  <div class="right-inner-addon ">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    <input type="search" class="form-control" data-toggle="modal" data-target="#mdAddress" placeholder="Search" />
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-6-offset-1">    
                <div class="col-md-4 col-md-4-offset-1"><label>โทรศัพท์ :</label></div>
                <div class="col-md-7 col-md-7-offset-1">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-6 col-md-6-offset-1"> 
                <div class="col-md-3 col-md-3-offset-1"><label>e-mail :</label></div>
                <div class="col-md-7 col-md-7-offset-1">
                  <input type="text" class="form-control">    
                </div>                                  
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12 col-md-12-offset-1">    
                <div class="col-md-2 col-md-2-offset-1"><label>หน่วยงานต้นสังกัด:</label></div>
                <div class="col-md-9 col-md-9-offset-1">
                  <select class="form-control">
                    <option>---Select---</option>
                    <option>หน่วยงาน1</option>
                    <option>หน่วยงาน2</option>
                    <option>หน่วยงาน3</option>
                  </select>  
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-2 col-md-2-offset-1">
            <div class="form-group">
              <button type="button" class="btn btn-primary col-lg-8" style="width: 140px;">Update Logo</button>
            </div>
            <div class="form-group">
              <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ1LjUiIHk9IjcwIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MTQweDE0MDwvdGV4dD48L2c+PC9zdmc+" alt="..." class="img-rounded">
            </div>
          </div>    
      </form>
    </div>
  </div>
 </div><!-- /.portlet-header -->
</div><!-- /.form   -->

<div class="form-group"></div>      

<!-- table -->
<div class="portlet">
  <div class="portlet-header">
    <h3>
      <i class="fa fa-tasks"></i>
      ตำแหน่ง/บริหาร
    </h3>
  </div><!-- /.portlet-header -->

 <!--content -->
  <div class="portlet-content">
    <div class="col-lg-1 col-md-1">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdAdd" style="width: 100px; margin: 10px; 0 0 10px; ">Add</button>
    </div>
    <table class="table">
      <tr class="active">
        <th>No</th>
        <th>ตำแหน่ง</th>
        <th>คำย่อ</th>
        <th>Code</th>
        <th>Action</th>
      </tr>
      <tr>
        <td>1</td>
        <td>ผู้อำนวยการท่าเรือสัตหีบ</td>
        <td>ผอ.</td>
        <td>T000-001</td>
        <td><button type="button" class="btn btn-default glyphicon glyphicon-pencil"></button></td>
      </tr>
      <tr>
        <td>2</td>
        <td>รองผู้อำนวยการท่าเรือสัตหีบ - 1</td>
        <td>รอง.1</td>
        <td>T000-002</td>
        <td><button type="button" class="btn btn-default glyphicon glyphicon-pencil"></button></td>
      </tr>
      <tr>
        <td>3</td>
        <td>รองผู้อำนวยการท่าเรือสัตหีบ - 2</td>
        <td>รอง.1</td>
        <td>T000-003</td>
        <td><button type="button" class="btn btn-default glyphicon glyphicon-pencil"></button></td>
      </tr>
    </table> 
  </div> 
</div><!--End panel table -->

<!-- modal Address -->           
<div id="mdAddress" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
    <!-- modal Address header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
        <h4 class="modal-title">ตำแหน่งบริหารงาน</h4>
      </div>
    <!-- modal Address body -->
      <div class="modal-body">
        <form class="form-horizontal">
            <div class="form-group">
              <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>เลขที่ :</label></div>
              <div class="col-md-8 col-md-8-offset-1"><input class="form-control" type="text" ></div>
            </div>
            <div class="form-group">
              <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>อาคาร :</label></div>
              <div class="col-md-8 col-md-8-offset-1"><input class="form-control" type="text" ></div>
            </div>
            <div class="form-group">
              <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>หมู่/ซอย :</label></div>
              <div class="col-md-8 col-md-8-offset-1"><input class="form-control" type="text" ></div>
            </div>
            <div class="form-group">
              <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>ถนน :</label></div>
              <div class="col-md-8 col-md-8-offset-1"><input class="form-control" type="text" ></div>
            </div>
            <div class="form-group">
              <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>จังหวัด :</label></div>
              <div class="col-md-8 col-md-8-offset-1">
                <select class="form-control">
                  <option value="1">กรุงเทพ</option>
                  <option value="2">พะเยา</option>
                  <option value="3">กรุงเทพ</option>
                  <option value="4">เชียงราย</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>อำเภอ :</label></div>
              <div class="col-md-8 col-md-8-offset-1">
                <select class="form-control">
                  <option value="1">แม่สาย</option>
                  <option value="1">เมือง</option>
                  <option value="1">ห้วยขว้าง</option>
                  <option value="1">ฝาง</option>
                </select>
              </div>
              </div>
            <div class="form-group">
              <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>ตำบล :</label></div>
              <div class="col-md-8 col-md-8-offset-1">
                <select class="form-control">
                  <option value="1">เวียงพางคำ</option>
                  <option value="1">แม่ต๋ำ</option>
                  <option value="1">ปากเกร็ด</option>
                  <option value="1">แม่สาย</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>รหัสไปรษณีย์ :</label></div>
              <div class="col-md-8 col-md-8-offset-1"><input class="form-control" type="text" ></div>
            </div>
        </form>           
      </div>
    <!-- modal Address footer -->
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary" id="btnSave">Save</button>
    </div>
    </div>
  </div>
</div><!-- End modal Address --> 

            
<!-- modal Add -->          
<div id="mdAdd" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
    <!-- modal Add header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
        <h4 class="modal-title">ตำแหน่งบริหารงาน</h4>
      </div>
    <!-- modal Add body -->
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>Code :</label></div>
            <div class="col-md-8 col-md-8-offset-1"><input class="form-control" type="text" ></div>
          </div>
          <div class="form-group">
            <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>ตำแหน่ง :</label></div>
            <div class="col-md-8 col-md-8-offset-1"><input class="form-control" type="text" ></div>
          </div>
          <div class="form-group">
            <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>คำย่อ :</label></div>
            <div class="col-md-8 col-md-8-offset-1"><input class="form-control" type="text" ></div>
          </div>
          <div class="form-group">
            <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>Password expire :</label></div>
            <div class="col-md-8 col-md-8-offset-1"><input class="form-control" type="text" ></div>
          </div>
        </form>           
      </div>
    <!-- modal Add footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="btnSave">Save</button>
      </div>
    </div>
  </div>
</div><!-- End modal Add -->

@stop


