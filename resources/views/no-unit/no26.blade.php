@extends('layout.master-module')
@section('content')

    <form class="form-horizontal">
        <div class="col-lg-12 col-md-12">
            <h3 class="text-center">ใบคำร้องขอเช่าเครื่องมือทุ่นแรงของ กทส.ฐท.สส</h3>
        </div>
        <div class="col-lg-12 col-md-12 hr-topic"></div>
            <div class="row form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-4 col-md-4"><label>เลขที่ :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                       <input class="form-control" type="text" >
                    </div>
                </div> 
            </div>
            <div class="row form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-4 col-md-4"><label>เรื่อง :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                        <label>ขอเช่าเครื่องมือทุ่นแรง</label>
                    </div>
                </div> 
            </div>
            <div class="row form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-4 col-md-4"><label>เรียน :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                        <input class="form-control" type="text" >
                    </div>
                </div> 
            </div>
            <div class="row form-group">
                <div class="col-lg-12 col-md-12"> 
                    <div class="col-lg-2 col-md-2"><label>ด้วย :&nbsp;</label></div>
                    <div class="col-md-10 right-inner-addon ">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        <input type="search" class="form-control" placeholder="Search" data-toggle="modal" data-target="#mdDocument"/>
                    </div>
                </div> 
            </div>
            <div class="row form-group">
                <div class="col-lg-12 col-md-12">
                    <label>ขอเช่าเครื่องมือทุ่นแรง กทส. ดังรายการต่อไปนี้.</label>
                </div> 
            </div>
            <div class="row form-group">
                <div class="col-lg-12 col-md-12"> 
                    <div class="col-lg-2 col-md-2"></div>
                    <div class="col-md-10">
                        <table class="table">
                            <tr>
                                <td width="5%">1</td>
                                <td width="50%"></td>
                                <td>ขนาด</td>
                                <td>จำนวน</td>
                                <td width="5%">คัน</td>
                            </tr>
                            <tr>
                                <td width="5%">2</td>
                                <td width="50%"></td>
                                <td>ขนาด</td>
                                <td>จำนวน</td>
                                <td width="5%">คัน</td>
                            </tr>
                            <tr>
                                <td width="5%">3</td>
                                <td width="50%"></td>
                                <td>ขนาด</td>
                                <td>จำนวน</td>
                                <td width="5%">คัน</td>
                            </tr>
                         </table>
                    </div>
                </div> 
            </div>
            <div class="row form-group">
                <div class="col-lg-12 col-md-12"> 
                    <div class="col-lg-2 col-md-2"><label>เพื่อ :&nbsp;</label></div>
                    <div class="col-md-10">
                        <div class="col-md-2">
                            <input type="radio" name="" id="" value="" > &nbsp; <label>ยกตู้สินค้า</label>
                        </div>
                        <div class="col-md-10">
                          <input class="form-control" type="text" >
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row form-group">
                <div class="col-lg-12 col-md-12"> 
                    <div class="col-lg-2 col-md-2"></div>
                    <div class="col-md-10">
                        <div class="col-md-2">
                            <input type="radio" name="" id="" value="" > &nbsp; <label>ยกสินค้า</label>
                        </div>
                        <div class="col-md-10">
                          <input class="form-control" type="text" >
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row form-group">
                <div class="col-lg-12 col-md-12"> 
                    <div class="col-lg-2 col-md-2"></div>
                    <div class="col-md-10">
                        <div class="col-md-2">
                            <input type="radio" name="" id="" value="" > &nbsp; <label>อื่นๆ</label>
                        </div>
                        <div class="col-md-10">
                          <input class="form-control" type="text" >
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-4 col-md-4"><label>จากเรือ :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                       <input class="form-control" type="text" >
                    </div>
                </div> 
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-3"><label>เที่ยววันที่ :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8 input-group">
                        <input type="text" class="form-control">
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-4 col-md-4"><label>เทียบท่า :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                       <input class="form-control" type="text" >
                    </div>
                </div> 
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-3"><label>ขอเช่าตั้งแต่วันที่ :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8 input-group">
                        <input type="text" class="form-control">
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-4 col-md-4"><label>เวลา :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                       <input class="form-control" type="text" >
                    </div>
                </div> 
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-3"><label>ถึงวันที่ :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8 input-group">
                        <input type="text" class="form-control">
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-4 col-md-4"><label>เวลา :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                       <input class="form-control" type="text" >
                    </div>
                </div> 
            </div>
            <div class="row form-group">
                <div class="col-lg-12 col-md-12"> 
                    <div class="col-lg-2 col-md-2"></div>
                    <div class="col-md-10">
                        <div class="col-md-4">
                            <input type="radio" name="" id="" value="" > &nbsp; <label>ขอชำระค่าเช่าโดยวางมัดจำเป็นเงินสด</label>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row form-group">
                <div class="col-lg-12 col-md-12"> 
                    <div class="col-lg-2 col-md-2"></div>
                    <div class="col-md-10">
                        <div class="col-md-3">
                            <input type="radio" name="" id="" value="" > &nbsp; <label>วางหนังสือค้ำประกันของธนาคาร</label>
                        </div>
                        <div class="col-md-9">
                          <input class="form-control" type="text" >
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-4 col-md-4"><label>ลงวันที่ :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8 input-group">
                        <input type="text" class="form-control">
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                        </div>
                    </div>
                </div> 
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-3"><label>นับตั้งแต่วันที่ :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8 input-group">
                        <input type="text" class="form-control">
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-4 col-md-4"><label>สิ้นสุดวันที่ :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8 input-group">
                        <input type="text" class="form-control">
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                        </div>
                    </div>
                </div> 
            </div>
        
    </form> 
@stop