@extends('layout.master')
@section('breadcrumbs', Breadcrumbs::render('organization-create-or-edit'))
@section('content')

<!-- header -->
    <div class="col-lg-12 col-md-12 page-header">
      <div class="col-lg-10 col-md-10">
        <button type="button" class="btn btn-primary">ปรับปรุงข้อมูล</button>
      </div>
      <div class="col-lg-2 col-md-2">
        <label>พิมพ์ข้อมูลทั้งหมด <button type="button" class="btn btn-default glyphicon glyphicon-print"></button></label>
      </div>
    </div><!--End header -->

<!-- body -->
    <div class="panel-body">
      <form class="form-horizontal">
          <div class="col-lg-10 col-md-10">                
            <div class="form-group">
              <div class="col-lg-6 col-md-6">    
                <div class="col-lg-4 col-md-4"><label>Code</label></div>
                <div class="col-lg-7 col-md-7"><input class="form-control" type="text" ></div>
              </div>
              <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-3 col-md-3"><label>Active</label></div>                       
                <div class="col-lg-9 col-md-9"><input type="checkbox"></div>                                   
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-12 col-md-12">    
                <div class="col-lg-2 col-md-2"><label>ชื่อ</label></div>
                <div class="col-lg-9 col-md-9">
                    <input type="text" class="form-control">
                </div>
              </div>
            </div> 
            <div class="form-group">
              <div class="col-lg-12 col-md-12">    
                <div class="col-lg-2 col-md-2"><label>ชื่อย่อ</label></div>
                <div class="col-lg-9 col-md-9">
                    <input type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-12 col-md-12">    
                <div class="col-lg-2 col-md-2"><label>Description</label></div>
                <div class="col-lg-9 col-md-9">
                    <input type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-12 col-md-12">    
                <div class="col-lg-2 col-md-2"><label>Address</label></div>
                <div class="col-lg-9 col-md-9">
                  <div class="input-group">
                    <input type="text" class="form-control" aria-label="...">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#mdAddress"><span class="glyphicon glyphicon-search"></span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-6 col-md-6">    
                <div class="col-lg-4 col-md-4"><label>โทรศัพท์</label></div>
                <div class="col-lg-7 col-md-7">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-3 col-md-3"><label>e-mail</label></div>
                <div class="col-lg-7 col-md-7">
                  <input type="text" class="form-control">    
                </div>                                  
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-12 col-md-12">    
                <div class="col-lg-2 col-md-2"><label>หน่วยงานต้นสังกัด</label></div>
                <div class="col-lg-9 col-md-9">
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

          <div class="col-lg-2 col-md-2">
            <div class="form-group">
              <button type="button" class="btn btn-primary col-lg-8" style="width: 140px;">Update Logo</button>
            </div>
            <div class="form-group">
              <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ1LjUiIHk9IjcwIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MTQweDE0MDwvdGV4dD48L2c+PC9zdmc+" alt="..." class="img-rounded">
            </div>
          </div>    
      </form>
    </div><!-- End body -->
            
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
              <div class="col-xs-3 col-sm-3"><p>เลขที่</p></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
            </div>
            <div class="form-group">
              <div class="col-xs-3 col-sm-3"><p>อาคาร</p></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
            </div>
            <div class="form-group">
              <div class="col-xs-3 col-sm-3"><p>หมู่/ซอย</p></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
            </div>
            <div class="form-group">
              <div class="col-xs-3 col-sm-3"><p>ถนน</p></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
            </div>
            <div class="form-group">
              <div class="col-xs-3 col-sm-3"><p>จังหวัด</p></div>
              <div class="col-xs-8 col-sm-8">
                <select class="form-control">
                  <option value="1">กรุงเทพ</option>
                  <option value="2">พะเยา</option>
                  <option value="3">กรุงเทพ</option>
                  <option value="4">เชียงราย</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-3 col-sm-3"><p>อำเภอ</p></div>
              <div class="col-xs-8 col-sm-8">
                <select class="form-control">
                  <option value="1">แม่สาย</option>
                  <option value="1">เมือง</option>
                  <option value="1">ห้วยขว้าง</option>
                  <option value="1">ฝาง</option>
                </select>
              </div>
              </div>
            <div class="form-group">
              <div class="col-xs-3 col-sm-3"><p>ตำบล</p></div>
              <div class="col-xs-8 col-sm-8">
                <select class="form-control">
                  <option value="1">เวียงพางคำ</option>
                  <option value="1">แม่ต๋ำ</option>
                  <option value="1">ปากเกร็ด</option>
                  <option value="1">แม่สาย</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-3 col-sm-3"><p>รหัสไปรษณีย์</p></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
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
            <div class="col-xs-3 col-sm-3"><p>Code</p></div>
            <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
          </div>
          <div class="form-group">
            <div class="col-xs-3 col-sm-3"><p>ตำแหน่ง</p></div>
            <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
          </div>
          <div class="form-group">
            <div class="col-xs-3 col-sm-3"><p>คำย่อ</p></div>
            <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
          </div>
          <div class="form-group">
            <div class="col-xs-3 col-sm-3"><p>Password expire</p></div>
            <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
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

<!--panel table -->
<div class="panel-body">
  <div class="container-fluid">
    <div class="col-lg-12 col-md-12">
      <div class="panel-heading panel-default">ตำแหน่ง/บริหาร</div>
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-10 col-md-10"></div>
        <div class="col-lg-2 col-md-2">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdAdd" style="width: 100px; margin: 10px; 0 0 10px; ">Add</button>
        </div>
        <table class="table">
          <tr style="background-color: #ebebeb">
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
    </div>
  </div>
</div><!--End panel table -->

@stop


