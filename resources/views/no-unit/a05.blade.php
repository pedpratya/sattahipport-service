@extends('layout.master-module')
@section('content')
    <form class="form-horizontal">
        <div class="col-lg-12 col-md-12">
                <h3 class="text-center">LOADING</h3>
                <h3 class="text-center">MM LOGISTIC (THAILAND) CO.,LTD.</h3>
                <p class="text-center">การท่าเรือสัตหีบ ฐานทัพเรือสัตหีบ</p>
                <p class="text-center">แบบตรวจนับสินค้า</p>
                <p class="text-center">TALLY SHEET</p>
         </div>
        <div class="col-lg-12 col-md-12 hr-topic"></div>
        
            <div class="row form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-4 col-md-4"><label>Vessel :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                       <input class="form-control" type="text" >
                    </div>
                </div> 
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-3"><label>START :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                       <div class="col-lg-3 col-md-3">
                            <input type="radio" name="" id="" value="" > &nbsp; <label>LOADING</label>
                       </div>
                       <div class="col-lg-9 col-md-9">
                            <input class="form-control" type="text" >
                       </div>
                    </div>
                </div> 
            </div>
            <div class="row form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-4 col-md-4"><label>Date :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8 input-group">
                        <input type="text" class="form-control">
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                        </div>
                    </div>
                </div> 
                <div class="col-lg-6 col-md-6">
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-3"><label>STOP :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                       <div class="col-lg-3 col-md-3">
                            <input type="radio" name="" id="" value="" > &nbsp; <label>LOADING</label>
                       </div>
                       <div class="col-lg-9 col-md-9">
                            <input class="form-control" type="text" >
                       </div>
                    </div>
                </div> 
            </div>
            <div class="row form-group">
                <table class="table table-bordered">
                    <tr>
                        <th>ลำดับ</th>
                        <th>รายการสินค้า</th>
                        <th>ขนาด (ก x ย x ส)</th>
                        <th>จำนวน</th>
                        <th>ปริมาตร</th>
                        <th>น้ำหนัก</th>
                        <th>หมายเหตุ</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>CONTAINER</td>
                        <td>600 x 245 x 260</td>
                        <td>1</td>
                        <td>38.220</td>
                        <td>9.0</td>
                        <td>38.220</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>CONTAINER</td>
                        <td>600 x 245 x 260</td>
                        <td>1</td>
                        <td>78.998</td>
                        <td>20.0</td>
                        <td>78.998</td>
                    </tr>
                     <tr>
                         <td class="text-right" colspan="3"lspan>TOTAL &nbsp;&nbsp;&nbsp;</td>                                
                        <td>24</td>
                        <td>275.939</td>
                        <td>261.200</td>
                        <td>425.939</td>
                    </tr>
                 </table>
            </div>
    </form> 
@stop