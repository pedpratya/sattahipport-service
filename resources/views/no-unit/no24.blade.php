@extends('layout.master-module')
@section('breadcrumbs', Breadcrumbs::render('nounit-no24'))
@section('content')

<div class="portlet">
    <div class="portlet-header">
        <h3>
            <i class="fa fa-tasks"></i>
            แบบขออนุญาตนำสินค้าขาออกผ่านท่า เข้ามาในเขต กทส.ฐท.สสเพื่อส่งออกโดยเรือเดินทะเลต่างประเทศ
        </h3>
    </div> <!-- /.portlet-header -->

    <div class="portlet-content">
        <form class="form-horizontal">

            <!-- form -->
            <div class="row form-group">
                <label class="col-md-2">เรื่อง :&nbsp;</label>
            	<div class="col-md-3">
                	<label>ขอเช่าเครื่องมือทุ่นแรง</label>
            	</div>
            </div>
            <div class="form-group">
                <label class="col-md-2">เรียน :&nbsp;</label>
                <div class="col-md-3">
                    <label>ผอ. กทส. ฐท.สส.</label>
                </div>
        	</div>	

            <div class="form-group">    
                <div class="col-md-2 col-md-2-offset-1"><label>ด้วยบริษัท, ห้าง :</label></div>
                <div class="col-md-10 col-md-10-offset-1">
                  <div class="right-inner-addon ">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    <input type="search" class="form-control" placeholder="Search" data-toggle="modal" data-target="#mdDocument"/>
                  </div>
                </div>
            </div>
            <div class="form-group">    
                <div class="col-md-2 col-md-2-offset-1"><label>ได้มีสินค้าขาออกผ่านท่า รายการสินค้าเป็น :</label></div>
                <div class="col-md-10 col-md-10-offset-1">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-6-offset-1">    
                <div class="col-md-4 col-md-4-offset-1"><label>จำนวน :</label></div>
                <div class="col-md-5 col-md-5-offset-1">
                  <input type="text" class="form-control">
                </div>
                <div class="col-md-2 col-md-2-offset-1">
                  <label>&nbsp;&nbsp;หีบ/ห่อ</label>
                </div>
                <div class="col-md-1 col-md-1-offset-1"></div> 
              </div>
              <div class="col-md-6 col-md-6-offset-1"> 
                <!-- <div class="col-md-1 col-md-1-offset-1"></div>  -->
                <div class="col-md-5 col-md-5-offset-1"><label>น้ำหนัก :</label></div>
                <div class="col-md-5 col-md-5-offset-1">
                  <input type="text" class="form-control">    
                </div>
                <div class="col-md-2 col-md-2-offset-1">
                  <label>&nbsp;&nbsp;กิโลกรัม</label>
                </div>                            
              </div>
            </div>
            <div class="form-group">    
                <!-- <div class="col-md-1 col-md-1-offset-1 text-right">1 .&nbsp;</div>  -->
                <div class="col-md-2 col-md-2-offset-1">
                    <input type="checkbox"> &nbsp; <label>นำไปขึ้นเรือ</label>
                </div>
                <div class="col-md-10 col-md-10-offset-1">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-6-offset-1">    
                <div class="col-md-4 col-md-4-offset-1"><label>วันที่ :</label></div>
                <div class="col-md-8 col-md-8-offset-1">
                  <div class="input-group">
                        <input type="text" class="input-datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
              </div>
              <div class="col-md-6 col-md-6-offset-1"></div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-6-offset-1"> 
                <div class="col-md-4 col-md-4-offset-1"><label>ระหว่างเวลา :</label></div>
                <div class="col-md-8 col-md-8-offset-1">
                  <input type="text" class="form-control">    
                </div>                                  
              </div>
              <div class="col-md-6 col-md-6-offset-1">
                <!-- <div class="col-md-1 col-md-1-offset-1"></div>     -->
                <div class="col-md-4 col-md-4-offset-1"><label>ถึง :</label></div>
                <div class="col-md-8 col-md-8-offset-1">
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group">    
                <!-- <div class="col-md-1 col-md-1-offset-1 text-right">1 .&nbsp;</div>  -->
                <div class="col-md-4 col-md-4-offset-1">
                    <input type="checkbox"> &nbsp; <label>นำไปบรรจุในตู้สินค้า (CONTAINER) ที่ลานพักสินค้า</label>
                </div>
                <div class="col-md-8 col-md-8-offset-1">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-6-offset-1">    
                <div class="col-md-4 col-md-4-offset-1"><label>วันที่ :</label></div>
                <div class="col-md-8 col-md-8-offset-1">
                  <div class="input-group">
                        <input type="text" class="input-datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
              </div>
              <div class="col-md-6 col-md-6-offset-1"></div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-6-offset-1"> 
                <div class="col-md-4 col-md-4-offset-1"><label>ระหว่างเวลา :</label></div>
                <div class="col-md-8 col-md-8-offset-1">
                  <input type="text" class="form-control">    
                </div>                                  
              </div>
              <div class="col-md-6 col-md-6-offset-1">
                <!-- <div class="col-md-1 col-md-1-offset-1"></div>     -->
                <div class="col-md-4 col-md-4-offset-1"><label>ถึง :</label></div>
                <div class="col-md-8 col-md-8-offset-1">
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-6-offset-1"> 
                <div class="col-md-4 col-md-4-offset-1"><label>แล้วนำขึ้นเรือ :</label></div>
                <div class="col-md-8 col-md-8-offset-1">
                  <input type="text" class="form-control">    
                </div>                                  
              </div>
              <div class="col-md-6 col-md-6-offset-1">
                <!-- <div class="col-md-1 col-md-1-offset-1"></div>     -->
                <div class="col-md-4 col-md-4-offset-1"><label>ในวันที่ :</label></div>
                <div class="col-md-8 col-md-8-offset-1">
                  <div class="input-group">
                        <input type="text" class="input-datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
              </div>
            </div>	
            <div class="form-group">    
                <div class="col-md-2 col-md-2-offset-1"><label>หมายเลขตู้สินค้า :</label></div>
                <div class="col-md-10 col-md-10-offset-1">
                    <input type="text" class="form-control">
                </div>
            </div>
        </form>
    </div>
</div><!-- panel portlet -->

@stop