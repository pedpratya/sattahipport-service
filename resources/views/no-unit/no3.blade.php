@extends('layout.master-module')
@section('content')	
<div class="row">
    <label for="inputSearch1" class="col-md-10 col-md-offset-1 control-label text-center">
    แบบขอเปลี่ยนแปลง / ยกเลิกคำร้องขอใช้ท่า
    </label>
</div>
<div class="hr-topic"></div>
<form class="form-horizontal">
    <div class="row form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">วันที่ : </label></div>
            <div class="col-lg-4 col-md-4">
                <div class='input-group date'>
              <input type="text"
               class="datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
        <div class="col-lg-6 col-md-6"></div>
    </div>
    <div class="row form-group">
        <div class="col-lg-7 col-md-7">
            <div class="col-lg-4 col-md-4"><label class="col-md-12">อ้างถึง :&nbsp;</label></div>
            <div class="col-lg-8 col-md-8">
                คำร้องขอนำเรือเข้าเทียบ-ออกจากเทียบท่า การท่าเรือสัตหีบ ฐานทัพเรือสัตหีบ No.
            </div>
        </div>
        <div class="col-lg-5 col-md-5">
            <div class="col-md-5"></div>
            <div class="col-md-7">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Search!</button>
                  </span>
                </div><!-- /input-group -->             
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ลงวันที่ : </label></div>
            <div class="col-lg-7 col-md-7">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
        <div class="col-lg-6 col-md-6"></div>
    </div>
    <div class="row form-group">
        <div class="col-lg-12 col-md-12">
            <div class="col-lg-2 col-md-2"><label  class="col-lg-12">ชื่อบริษัท : </label></div>
            <div class="col-lg-10 col-md-10">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-lg-12 col-md-12">
            <div class="col-lg-2 col-md-2"><label  class="col-lg-12">ที่อยู่ : </label></div>
            <div class="col-lg-10 col-md-10">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">เรือชื่อ : </label></div>
            <div class="col-lg-7 col-md-7">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">สัญชาติ : </label></div>
            <div class="col-lg-7 col-md-7">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">เข้าเทียบท่าเรือวันที่ : </label></div>
            <div class="col-lg-7 col-md-7">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">เวลา : </label></div>
            <div class="col-lg-7 col-md-7">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ออกจากท่าเรือวันที่ : </label></div>
            <div class="col-lg-7 col-md-7">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">เวลา : </label></div>
            <div class="col-lg-7 col-md-7">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
        </div>
    </div>
	<div class="row form-group">
        <div class="radio col-lg-6 col-md-6">
            <div class="col-lg-4 col-md-4"></div>
            <div class="col-lg-4 col-md-4">
                <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    กำหนดการใช้ท่าของเรือเป็น
                </label>
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
        <div class="col-lg-6 col-md-6"></div>
    </div>
    <div class="row form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ตั้งแต่วันที่ : </label></div>
            <div class="col-lg-7 col-md-7">
                <div class='input-group date'>
                  <input type="text"
                   class="datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">เวลา : </label></div>
            <div class="col-lg-7 col-md-7">
                <div class='input-group date'>
                  <input type="text"
                   class="datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ถึงวันที่ : </label></div>
            <div class="col-lg-7 col-md-7">
                <div class='input-group date'>
                  <input type="text"
                   class="datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">เวลา : </label></div>
            <div class="col-lg-7 col-md-7">
                <div class='input-group date'>
                  <input type="text"
                   class="datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
            </div>
        </div>
    </div>
        <div class="row form-group">
        <div class="radio col-lg-6 col-md-6">
            <div class="col-lg-4 col-md-4"></div>
            <div class="col-lg-4 col-md-4">
                <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    เลื่อนเรือจาก
                </label>
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
        <div class="col-lg-6 col-md-6"></div>
    </div>
    <div class="row form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">จากท่า : </label></div>
            <div class="col-lg-7 col-md-7">
                 <input type="text" class="form-control" id="inputForm1">
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ไปเทียบท่า : </label></div>
            <div class="col-lg-7 col-md-7">
                <input type="text" class="form-control" id="inputForm1">
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ตั้งแต่วันที่ : </label></div>
            <div class="col-lg-7 col-md-7">
                <div class='input-group date'>
                  <input type="text"
                   class="datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">เวลา : </label></div>
            <div class="col-lg-7 col-md-7">
                <input type="text" class="form-control" id="inputForm1">
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ถึงวันที่ : </label></div>
            <div class="col-lg-7 col-md-7">
                <div class='input-group date'>
                  <input type="text"
                   class="datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">เวลา : </label></div>
            <div class="col-lg-7 col-md-7">
                <input type="text" class="form-control" id="inputForm1">
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="radio col-lg-6 col-md-6">
            <div class="col-lg-4 col-md-4"></div>
            <div class="col-lg-4 col-md-4">
                <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    ยกเลิกคำร้องขอใช้ท่า ตามอ้างถึง
                </label>
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
        <div class="col-lg-6 col-md-6"></div>
    </div>
    <div class="row form-group">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ลงชื่อ : </label></div>
            <div class="col-lg-7 col-md-7">
                 <input type="text" class="form-control" id="inputForm1">
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ไปเทียบท่า : </label></div>
            <div class="col-lg-7 col-md-7">
                <input type="text" class="form-control" id="inputForm1">
            </div>
        </div>
    </div>
</form>

<!--search-regis-vessel -->
<div class="modal fade md-confirm-save" role="dialog" aria-labelledby="gridSystemModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="gridSystemModalLabel">Save</h4>
        </div>
        <div class="modal-body">
          <div class="container-fluid">

            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
              <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  

<script>	
	$(function(){
    
    $( ".datepicker" ).datepicker({
        dateFormat: "dd/mm/yy"
    });
</script>	
@stop