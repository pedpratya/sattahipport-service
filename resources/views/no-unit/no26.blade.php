@extends('layout.master-module')
@section('breadcrumbs', Breadcrumbs::render('nounit-no26'))
@section('content')
<div class="portlet">
    <div class="portlet-header">
        <h3>
            <i class="fa fa-tasks"></i>
            ใบคำร้องขอเช่าเครื่องมือทุ่นแรงของ กทส.ฐท.สส
        </h3>
    </div> <!-- /.portlet-header -->

    <div class="portlet-content">
        <form class="form-horizontal">
            <!-- form -->
            <div class="form-group"> 
                <div class="col-md-2 col-md-2-offset-1"><label>เลขที่ :</label></div>
                <div class="col-md-4 col-md-4-offset-1">
                  <input class="form-control" type="text" >
                </div>
                <div class="col-md-6 col-md-6-offset-1"></div>
            </div>
            <div class="form-group">
                <div class="col-md-2 col-md-2-offset-1"><label>เรียน :</label></div>
                <div class="col-md-4 col-md-4-offset-1">
                  <input class="form-control" type="text" >
                </div>
                <div class="col-md-6 col-md-6-offset-1"></div>
            </div>
            <div class="form-group">    
                <div class="col-md-2 col-md-2-offset-1"><label>ด้วย :</label></div>
                <div class="col-md-10 col-md-10-offset-1">
                  <div class="right-inner-addon ">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    <input type="search" class="form-control" placeholder="Search" data-toggle="modal" data-target="#mdDocument"/>
                  </div>
                </div>
            </div>
            <div class="form-group"></div>
            <div class="row form-group">
                <div class="col-lg-12 col-md-12">
                    <label>ขอเช่าเครื่องมือทุ่นแรง กทส. ดังรายการต่อไปนี้.</label>
                </div> 
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <table class="table">
                        <tr>
                            <td width="5%">1</td>
                            <td width="30%"></td>
                            <td width="10%">ขนาด</td>
                            <td width="10%">จำนวน</td>
                            <td width="5%">คัน</td>
                        </tr>
                        <tr>
                            <td width="5%">2</td>
                            <td width="30%"></td>
                            <td>ขนาด</td>
                            <td>จำนวน</td>
                            <td width="5%">คัน</td>
                        </tr>
                        <tr>
                            <td width="5%">3</td>
                            <td width="30%"></td>
                            <td>ขนาด</td>
                            <td>จำนวน</td>
                            <td width="5%">คัน</td>
                        </tr>
                     </table>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-2 col-md-2-offset-1"><label>เพื่อ :</label></div>
                <div class="col-md-2 col-md-2-offset-1">
                  <input type="radio" name="" id="" value="" > &nbsp; <label>ยกตู้สินค้า</label>
                </div>
                <div class="col-md-8 col-md-8-offset-1">
                    <input class="form-control" type="text" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-2 col-md-2-offset-1"></div>
                <div class="col-md-2 col-md-2-offset-1">
                  <input type="radio" name="" id="" value="" > &nbsp; <label>ยกสินค้า</label>
                </div>
                <div class="col-md-8 col-md-8-offset-1">
                    <input class="form-control" type="text" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-2 col-md-2-offset-1"></div>
                <div class="col-md-2 col-md-2-offset-1">
                  <input type="radio" name="" id="" value="" > &nbsp; <label>อื่นๆ</label>
                </div>
                <div class="col-md-8 col-md-8-offset-1">
                    <input class="form-control" type="text" >
                </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-6-offset-1"> 
                <div class="col-md-4 col-md-4-offset-1"><label>จากเรือ :</label></div>
                <div class="col-md-8 col-md-8-offset-1">
                  <input type="text" class="form-control">    
                </div>                                  
              </div>
              <div class="col-md-6 col-md-6-offset-1">
                <div class="col-lg-1 col-md-1"></div>
                <div class="col-lg-3 col-md-3"><label>เที่ยงวันที่ :</label></div>
                <div class="col-md-8 col-md-8-offset-1 input-group">
                    <input type="text" class="form-control" placeholder="dd/mm/YY">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                    </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-6-offset-1"> 
                <div class="col-md-4 col-md-4-offset-1"><label>เทียบท่า :</label></div>
                <div class="col-md-8 col-md-8-offset-1">
                  <input type="text" class="form-control">    
                </div>                                  
              </div>
              <div class="col-md-6 col-md-6-offset-1">
                <!-- <div class="col-md-1 col-md-1-offset-1"></div>     -->
                <div class="col-md-4 col-md-4-offset-1"><label>ขอเช่าตั้งแต่วันที่ :</label></div>
                <div class="col-md-8 col-md-8-offset-1 input-group">
                    <input type="text" class="form-control" placeholder="dd/mm/YY">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                    </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-6-offset-1"> 
                <div class="col-md-4 col-md-4-offset-1"><label>เวลา :</label></div>
                <div class="col-md-8 col-md-8-offset-1">
                  <input type="text" class="form-control">    
                </div>                                  
              </div>
              <div class="col-md-6 col-md-6-offset-1">
                <div class="col-lg-1 col-md-1"></div>
                <div class="col-lg-3 col-md-3"><label>ถึงวันที่ :</label></div>
                <div class="col-md-8 col-md-8-offset-1 input-group">
                    <input type="text" class="form-control" placeholder="dd/mm/YY">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                    </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-6-offset-1"> 
                <div class="col-md-4 col-md-4-offset-1"><label>เวลา :</label></div>
                <div class="col-md-8 col-md-8-offset-1">
                  <input type="text" class="form-control">    
                </div>                                  
              </div>
              <div class="col-md-6 col-md-6-offset-1"></div>
            </div>
            <div class="form-group">
                <div class="col-md-2 col-md-2-offset-1"></div>
                <div class="col-md-10 col-md-10-offset-1">
                  <input type="radio" name="" id="" value="" > &nbsp; <label>ขอชำระค่าเช่าโดยวางมัดจำเป็นเงินสด</label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-2 col-md-2-offset-1"></div>
                <div class="col-md-3 col-md-3-offset-1">
                  <input type="radio" name="" id="" value="" > &nbsp; <label>วางหนังสือค้ำประกันของธนาคาร</label>
                </div>
                <div class="col-md-7 col-md-7-offset-1">
                  <input class="form-control" type="text" >
                </div>
            </div>
            <div class="form-group">
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
            <div class="form-group">
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
    </div>
</div>
@stop