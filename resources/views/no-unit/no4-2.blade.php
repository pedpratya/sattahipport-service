@extends('layout.master-module')
@section('content')
<!-- header -->
  <div class="col-lg-12 col-md-12">
    <h3 class="text-center">คำร้องขอใช้บริการเรือลากจูง ฐท.สส.24</h3>
  </div><!-- End header -->

<div class="col-lg-12 col-md-12 hr-topic"></div>
 <!-- form -->
    <form class="form-horizontal">          
        <div class="row form-group">
            <label class="col-md-2">วันที่เรือเข้า &nbsp;</label>
            <div class="col-md-3">
                    <div class='input-group date'>
                      <input type="text"
                       class="datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2">วันที่ &nbsp;</label>
            <div class="col-md-3">
                <div class='input-group date'>
                  <input type="text"
                   class="datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2">ข้าพเจ้า&nbsp;</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
            <label class="col-md-2 col-md-offset-1">ตัวแทน&nbsp;</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2">อายุ&nbsp;</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
            <label class="col-md-2 col-md-offset-1">ตั้งบ้านเรือนอยู่บ้านเลขที่&nbsp;</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2">ซอย&nbsp;</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
            <label class="col-md-2 col-md-offset-1">ถนน&nbsp;</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2">ตำบล&nbsp;</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
            <label class="col-md-2 col-md-offset-1">อำเภอ&nbsp;</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2">จังหวัด&nbsp;</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
            <label class="col-md-2 col-md-offset-1">รหัสไปรษณีย์&nbsp;</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2">โทรศัพท์&nbsp;</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="inputForm1" readonly>
            </div>
        </div>
        <div class="radio col-md-10 col-md-offset-2">
            <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
            รับ-ส่ง เจ้าพนักงานนำร่อง
            </label>     
        </div>
        <div class="row form-group">
            <label class="col-md-2 col-md-offset-1 text-right">ในวันที่ :&nbsp;</label>
            <div class="col-md-3">
                <div class='input-group date'>
                  <input type="text"
                   class="datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
            </div>
            <label class="col-md-2 text-right">ตั้งแต่เวลา :&nbsp;</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="inputForm1">
            </div>
        </div>
        <div class="radio col-md-10 col-md-offset-2">
            <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
            ลากจูงเรือ
            </label>            
        </div>
        <div class="row form-group">
            <label class="col-md-2 col-md-offset-1 text-right">&nbsp;</label>
                <div class="col-md-3">
                <input type="text" class="form-control" id="inputForm1">
            </div>
        </div>
        <div class="radio col-md-10 col-md-offset-2">
            <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
            เข้าที่
            </label>            
        </div>
        <div class="row form-group">
            <label class="col-md-2 col-md-offset-1 text-right">&nbsp;</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="inputForm1">
            </div>
        </div>
        <div class="radio col-md-10 col-md-offset-2">
            <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
            ออกที่
            </label>            
        </div>
        <div class="row form-group">
            <label class="col-md-2 col-md-offset-1 text-right">&nbsp;</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="inputForm1">
            </div>
        </div>
        <div class="radio col-md-10 col-md-offset-2">
            <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
            ย้ายจาก
            </label>            
        </div>
        <div class="row form-group">
            <label class="col-md-2 col-md-offset-1 text-right">&nbsp;</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="inputForm1">
            </div>
            <label class="col-md-2 text-right">ไป &nbsp;</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="inputForm1">
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2 col-md-offset-1 text-right">ตำบล :&nbsp;</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="inputForm1">
            </div>
            <label class="col-md-2 text-right">อำเภอ :&nbsp;</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="inputForm1">
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2 col-md-offset-1 text-right">จังหวัด :&nbsp;</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="inputForm1">
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2 col-md-offset-1 text-right">ในวันที่ :&nbsp;</label>
            <div class="col-md-3">
                <div class='input-group date'>
                  <input type="text"
                   class="datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
            </div>
            <label class="col-md-2 text-right">ตั้งแต่เวลา :&nbsp;</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="inputForm1">
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-4 col-md-offset-1 text-right">ข้าพเจ้ายอมรับชำระค่าบริการเรือลากจูง ฐท.สส. เพื่อ&nbsp;</label>
        </div>
        <div class="radio col-md-10 col-md-offset-2">
            <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
            รับ-ส่ง เจ้าพนักงานนำร่องในอัตราเที่ยวละ  ๕,๐๐๐.- บาท
            </label>            
        </div>
        <div class="radio col-md-10 col-md-offset-2">
            <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
            บริการเรือสินค้า ตามอัตราค่าภาระท่าเรือแหลมฉบัง พ.ศ. ๒๕๓๕ ในอัตราใช้บริการขั้นต่ำที่สองชั่วโมง
            </label>            
        </div>
        






    </form>

@stop