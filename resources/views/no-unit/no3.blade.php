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
            <label class="col-md-2">วันที่ :&nbsp;</label>
            <div class="col-md-3">
                    <div class='input-group date'>
                      <input type="text"
                       class="datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </div>
            </div>
    </div>
    <div class="row form-group">
            <label class="col-md-2">อ้างถึง :&nbsp;</label>
            <div class="col-md-5">
                    คำร้องขอนำเรือเข้าเทียบ-ออกจากเทียบท่า การท่าเรือสัตหีบ ฐานทัพเรือสัตหีบ No.
            </div>
            <div class="col-md-3">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Search!</button>
                      </span>
                    </div><!-- /input-group -->				
            </div>
    </div>			
    <div class="row form-group">
            <label class="col-md-2">ลงวันที่ :&nbsp;</label>
            <div class="col-md-3">
                    <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
    </div>
    <div class="row form-group">
            <label class="col-md-2">ชื่อบริษัท :&nbsp;</label>
            <div class="col-md-9">
                    <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
    </div>
    <div class="row form-group">
            <label class="col-md-2">ที่อยู่ :&nbsp;</label>
            <div class="col-md-9">
                    <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
    </div>			
    <div class="row form-group">
            <label class="col-md-2">เรือชื่อ :&nbsp;</label>
            <div class="col-md-3">
                    <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
            <label class="col-md-2 col-md-offset-1">สัญชาติ :&nbsp;</label>
            <div class="col-md-3">
                    <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
    </div>
    <div class="row form-group">
            <label class="col-md-2">เข้าเทียบท่าเรือวันที่ :&nbsp;</label>
            <div class="col-md-3">
                    <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
            <label class="col-md-2 col-md-offset-1">เวลา :&nbsp;</label>
            <div class="col-md-3">
                    <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
    </div>
    <div class="row form-group">
            <label class="col-md-2">ออกจากท่าเรือวันที่ :&nbsp;</label>
            <div class="col-md-3">
                    <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
            <label class="col-md-2 col-md-offset-1">เวลา :&nbsp;</label>
            <div class="col-md-3">
                    <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
    </div>
    <div class="radio col-md-10 col-md-offset-2">
            <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
            กำหนดการใช้ท่าของเรือเป็น
            </label>			
    </div>
    <div class="row form-group">
            <label class="col-md-2 col-md-offset-1 text-right">ตั้งแต่วันที่ :&nbsp;</label>
            <div class="col-md-3">
                    <div class='input-group date'>
                      <input type="text"
                       class="datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </div>
            </div>
            <label class="col-md-2 text-right">เวลา :&nbsp;</label>
            <div class="col-md-3">
                    <input type="text" class="form-control" id="inputForm1">
            </div>
    </div>
    <div class="row form-group">
            <label class="col-md-2 col-md-offset-1 text-right">ถึงวันที่ :&nbsp;</label>
            <div class="col-md-3">
                    <div class='input-group date'>
                      <input type="text"
                       class="datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </div>
            </div>
            <label class="col-md-2 text-right">เวลา :&nbsp;</label>
            <div class="col-md-3">
                    <input type="text" class="form-control" id="inputForm1">
            </div>
    </div>				
    <div class="radio col-md-10 col-md-offset-2">
      <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            เลื่อนเรือจาก
      </label>
    </div>
    <div class="row form-group">
            <label class="col-md-2 col-md-offset-1 text-right">จากท่า :&nbsp;</label>
            <div class="col-md-3">
                    <input type="text" class="form-control" id="inputForm1">
            </div>
            <label class="col-md-2 text-right">ไปเทียบท่า :&nbsp;</label>
            <div class="col-md-3">
                    <input type="text" class="form-control" id="inputForm1">
            </div>
    </div> 
    <div class="row form-group">
            <label class="col-md-2 col-md-offset-1 text-right">ตั้งแต่วันที่ :&nbsp;</label>
            <div class="col-md-3">
                    <div class='input-group date'>
                      <input type="text"
                       class="datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </div>
            </div>
            <label class="col-md-2 text-right">เวลา :&nbsp;</label>
            <div class="col-md-3">
                    <input type="text" class="form-control" id="inputForm1">
            </div>
    </div>
    <div class="row form-group">
            <label class="col-md-2 col-md-offset-1 text-right">ถึงวันที่ :&nbsp;</label>
            <div class="col-md-3">
                    <div class='input-group date'>
                      <input type="text"
                       class="datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </div>
            </div>
            <label class="col-md-2 text-right">เวลา :&nbsp;</label>
            <div class="col-md-3">
                    <input type="text" class="form-control" id="inputForm1">
            </div>
    </div>				
    <div class="radio col-md-10 col-md-offset-2">
      <label>
            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
            ยกเลิกคำร้องขอใช้ท่า ตามอ้างถึง
      </label>
    </div>
    <div class="row form-group">
            <label class="col-md-2  col-md-offset-1 text-right">ลงชื่อ :&nbsp;</label>
            <div class="col-md-3">
                    <input type="text" class="form-control" id="inputForm1">
            </div>
            <label class="col-md-2 text-right">ตำแหน่ง :&nbsp;</label>
            <div class="col-md-3">
                    <input type="text" class="form-control" id="inputForm1">
            </div>
    </div> 			
    <div class="row text-center">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".md-confirm-save">
            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>&nbsp;Save
      </button>
      <button type="button" class="btn btn-default">Cancel</button>
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