@extends('layout.master-module')
@section('breadcrumbs', Breadcrumbs::render('nounit-a08'))
@section('content')
    <form class="form-horizontal">
        <div class="col-lg-12 col-md-12">
                <h3 class="text-center">รายงานเรือเข้า - ออกท่าเรือจุกเสม็ด</h3>
                <h3 class="text-center">ประจำเดือน เมษายน ๒๕๕๗</h3>
         </div>
        <div class="col-lg-12 col-md-12 hr-topic"></div>
        
            <div class="form-group">
                <table class="table table-bordered table-hover">
                    <tr class="active">
                        <th class="text-center" rowspan="2">ลำดับ</th>
                        <th class="text-center" rowspan="2"></th>
                        <th class="text-center" rowspan="2">ชื่อเรือ</th>
                        <th class="text-center" rowspan="2">NO BERTH</th>
                        <th class="text-center" rowspan="2">วันเวลาเข้า - ออก</th>
                        <th class="text-center" rowspan="2">GRT</th>
                        <th class="text-center" rowspan="2">บริษัท</th>
                        <th class="text-center" colspan="2">สินค้าเข้า</th>
                        <th class="text-center" colspan="6">สินค้าขาออก</th>
                        <th class="text-center" rowspan="2">หมายเหตุ</th>
                    </tr>
                    <tr class="active">
                        <th class="text-center">รายการ</th>
                        <th class="text-center">จำนวน</th>
                        <th class="text-center">อุปกรณ์ฯ</th>
                        <th class="text-center">น้ำมัน</th>
                        <th class="text-center">ปูน</th>
                        <th class="text-center">BT.</th>
                        <th class="text-center">คน</th>
                        <th class="text-center">โครงสร้าง</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>345</td>
                        <td>MV.MERMAID RESOLUTION</td>
                        <td>7698</td>
                        <td>01100 - 021800 เม.ย.57</td>
                        <td>1092</td>
                        <td>MM.LOGISTIC</td>
                        <td>อุปกรณ์ขุดเจาะ</td>
                        <td>231.701</td>
                        <td>375.084</td>
                        <td>64</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>16660.88</td>
                        <td></td>
                    </tr>                    
                 </table>
            </div>
    </form> 
@stop