@extends('layout.master-module')
@section('breadcrumbs', Breadcrumbs::render('nounit-no4-1'))
@section('content')

<div class="portlet">
    <div class="portlet-header">
        <h3>
            <i class="fa fa-tasks"></i>
            คำร้องขอใช้บริการเรือลากจูง ฐท.สส.23
        </h3>
    </div><!-- End header -->
    <div class="portlet-content">  
      <form class="form-horizontal">
        <div class="form-group">
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"><label  class="col-lg-12">วันที่เรือเข้า : </label></div>
                <div class="col-lg-8 col-md-8">
                    <div class='input-group date'>
                      <input type="text"
                       class="datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6"></div>
        </div> 
        <div class="form-group">
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"><label  class="col-lg-12">วันที่ : </label></div>
                <div class="col-lg-8 col-md-8">
                    <div class='input-group date'>
                      <input type="text"
                       class="datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ข้าพเจ้า : </label></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1" readonly>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ตัวแทน : </label></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1" readonly>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"><label  class="col-lg-12">อายุ : </label></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1" readonly>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ตั้งบ้านเรือนอยู่บ้านเลขที่ : </label></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1" readonly>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ซอย : </label></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1" readonly>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ถนน : </label></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1" readonly>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ตำบล : </label></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1" readonly>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"><label  class="col-lg-12">อำเภอ : </label></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1" readonly>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"><label  class="col-lg-12">จังหวัด : </label></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1" readonly>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"><label  class="col-lg-12">รหัสไปรษณีย์ : </label></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1" readonly>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"><label  class="col-lg-12">โทรศัพท์ : </label></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1" readonly>
                </div>
            </div>
            <div class="col-lg-6 col-md-6"></div>
        </div>
        <div class="form-group">
            <div class="radio col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"></div>
                <div class="col-lg-8 col-md-8">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            รับ-ส่ง เจ้าพนักงานนำร่อง
                    </label>
                </div>
            </div>
            <div class="col-lg-6 col-md-6"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ในวันที่ : </label></div>
                <div class="col-lg-8 col-md-8">
                    <div class='input-group date'>
                      <input type="text"
                       class="datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ตั้งแต่เวลา : </label></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="radio col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"></div>
                <div class="col-lg-8 col-md-8">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            ลากจูงเรือ
                    </label>
                </div>
            </div>
            <div class="col-lg-6 col-md-6"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1">
                </div>
            </div>
            <div class="col-lg-6 col-md-6"></div>
        </div>
        <div class="form-group">
            <div class="radio col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"></div>
                <div class="col-lg-8 col-md-8">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            เข้าที่
                    </label>
                </div>
            </div>
            <div class="col-lg-6 col-md-6"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1">
                </div>
            </div>
            <div class="col-lg-6 col-md-6"></div>
        </div>
        <div class="form-group">
            <div class="radio col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"></div>
                <div class="col-lg-8 col-md-8">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            ออกที่
                    </label>
                </div>
            </div>
            <div class="col-lg-6 col-md-6"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1">
                </div>
            </div>
            <div class="col-lg-6 col-md-6"></div>
        </div>
        <div class="form-group">
            <div class="radio col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"></div>
                <div class="col-lg-8 col-md-8">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            ย้ายจาก
                    </label>
                </div>
            </div>
            <div class="col-lg-6 col-md-6"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ไป : </label></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ตำบล : </label></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"><label  class="col-lg-12">อำเภอ : </label></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"><label  class="col-lg-12">จังหวัด : </label></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1">
                </div>
            </div>
            <div class="col-lg-6 col-md-6"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ในวันที่ : </label></div>
                <div class="col-lg-8 col-md-8">
                    <div class='input-group date'>
                      <input type="text"
                       class="datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ตั้งแต่เวลา : </label></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ในวันที่ : </label></div>
                <div class="col-lg-8 col-md-8">
                    <div class='input-group date'>
                      <input type="text"
                       class="datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ตั้งแต่เวลา : </label></div>
                <div class="col-lg-8 col-md-8">
                    <input type="text" class="form-control" id="inputForm1">
                </div>
            </div>
        </div>
        <div class="row form-group">
          <div class="col-xs-6 col-md-4"></div>
          <div class="col-xs-6 col-md-4"><label>ข้าพเจ้ายอมรับชำระค่าบริการเรือลากจูง ฐท.สส. เพื่อ</label></div>
          <div class="col-xs-6 col-md-4"></div>
        </div>
        <div class="row form-group">
            <div class="col-lg-10 col-md-10">
                <div class="col-lg-3 col-md-3"></div>
                <div class="col-lg-9 col-md-9">
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    รับ-ส่ง เจ้าพนักงานนำร่องในอัตราเที่ยวละ  ๕,๐๐๐.- บาท
                </div>
            </div>
            <div class="col-lg-2 col-md-2"></div>
        </div>
        <div class="row form-group">
            <div class="col-lg-10 col-md-10">
                <div class="col-lg-3 col-md-3"></div>
                <div class="col-lg-9 col-md-9">
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    บริการเรือสินค้า ตามอัตราค่าภาระท่าเรือแหลมฉบัง พ.ศ. ๒๕๓๕ ในอัตราใช้บริการขั้นต่ำที่สองชั่วโมง
                </div>
            </div>
        </div>
      </form>
    </div>
</div>
@stop