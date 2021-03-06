@extends('layout.content')
@section('content')
<style>
    .atab{
        color: #FFFFFF;
        text-decoration: none;
    }
      
</style>

    <!-- header -->
    <div class="col-lg-12 col-md-12">
        <div class="col-lg-9 col-md-9">
                <label>คำร้องขอนำเรือเข้า/ออก จากท่า [Berth/Sailing Application]</label>
        </div>
        <div class="col-lg-3 col-md-3">
            <label>Temperary Code : xxx xxx xxx</label>
        </div>
    </div><!-- End header -->
    <form class="form-horizontal">
    <div class="col-lg-12 col-md-12 hr-topic"></div>
    <div class="container">
        <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <p>ข้าพเจ้าขอยื่นคำร้องขอนำเรือดังต่อไปนี้
                <label>
                   เข้า <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 
                </label>
                <label>
                   ออก <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 
                </label>
                จากท่า</p>
            </div>
        </div>
        <div class="col-lg-12 col-md-12">
            <ul class="nav nav-tabs navbar-default">
                <li role="presentation" class="nav nav-pills"><a class="atab" href="#">ข้อมูลเรือ O</a></li>
                <li role="presentation"><a class="atab" href="#">ข้อมูลสินค้า</a></li>
                <li role="presentation"><a class="atab" href="#">ผู้โดยสาร</a></li>
                <li role="presentation"><a class="atab" href="#">เอกสารแนบ</a></li>
                <li role="presentation"><a class="atab" href="#">เงินมัดจำ</a></li>
                <li role="presentation"><a class="atab" href="#">หมายเหตุ</a></li>
                <li role="presentation"><a class="atab" href="#">แบบฟอร์มขออนุญาต</a></li>
                <li role="presentation"><a class="atab" href="#">แก้ไขหมายกำหนดการ</a></li>
                <li role="presentation"><a class="atab" href="#">สถานะ</a></li>
            </ul>
        </div>   
        <div class="col-lg-12 col-md-12 hr-topic"></div>
        <div class="col-lg-12 col-md-12">     
            <div class="form-group">
                <div class="col-lg-1 col-md-">
                    <label>หมายเหตุ</label>
                </div>
                <div class="col-lg-11 col-md-11">
                    <textarea class="form-control" rows="3"></textarea>
                </div>                    
            </div> 
            <div class="form-group text-right">
                <button type="button" class="btn btn-primary">Submit</button>
            </div>   
        </div>
        <div class="col-lg-12 col-md-12 hr-topic"></div>
         <div class="container-fluid">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้าพเจ้ารับจะปฎิบัติตาม ประกาศระเบียบ และ ข้อบังคับ ว่าด้วยการใช้ท่าเรือ การบริการ และสิ่งอำนวยความสะดวกของกิจการ
                ท่าเรือ ซึ่งออกโดยการท่าเรือสัตหีบ และจะชำระค่าทำเนียมตามอัตราค่าภาระ การใช้ท่าเรือ ค่าบริการตามที่ การท่าเรือสัตหีบ จะเรียกเก็บ
                และข้าพเจ้ายอมรับผลผิดในผลแห่งการละเมิด ซึ่งเรือที่นำเข้าได้เกิดความเสียหายแก่การท่าเรือสัตหีบ
            </p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;APPLICATION ACKNOWLEDGES RECEIPT OF THE RATES RULES. REGULATIONS AND CHARGES APPLYING AT SATTAHIP ISSUED
                BY THE PORT OF SATTAHIP AND AGREE TO COMPLY WITH ALL TERMS THEREOF AND TO BE RESPONSIBLE FOR ALL DAMAGES BY THE
                PORT OF SATTAHIP AS A CONSEQUENCE OF ANY VIOLATION OF THE TERMS THEROF BY THE ABOVE VESSEL
            </p>
    </div>  
    </div>
    </form> 
        

@stop



@section('modal-content')

@stop

@section('javascript')

@stop