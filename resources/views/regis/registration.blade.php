@extends('layout.master-top')


@section('content')
<style>
fieldset.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}

legend.scheduler-border {
    width:inherit; /* Or auto */
    padding:0 10px; /* To give a bit of padding on the left and right */
    border-bottom:none;
}
.container-center{
    padding: 0px 100px 0px 100px;
}
.container-outter{
    background-color: #ddd;   
}
.container-inner{
   padding: 0px 50px 0px 50px;
   background-color:#ffffff;     
}
</style>  
<!--<div class="container container-center container-outter">
    <div class="container container-inner">
        
    </div>
</div>-->
<div class="container container-center container-outter">
<div class="container container-inner">
    <form class="form-horizontal" > 
        <div class="col-lg-12 col-md-12"> </div>
        <div class="col-lg-8 col-md-8">
            <div class="form-group">  
                <div class="col-lg-2 col-md-2"><label>Code</label></div>
                <div class="col-lg-10 col-md-10"> <p class="form-control-static">-- -- --</p></div>
            </div>
            <div class="form-group">                
                <div class="col-lg-2 col-md-2"><label>ชื่อบริษัท</label></div>
                <div class="col-lg-10 col-md-10"><input class="form-control input-sm" type="text" ></div>
            </div>
            <div class="form-group">                
                <div class="col-lg-2 col-md-2"><label>สถานที่ตั้ง</label></div>
                <div class="col-lg-10 col-md-10">
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                          <button class="btn btn-default glyphicon glyphicon-search" type="button" data-toggle="modal" data-target="#mdLocation"></button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="form-group">                
                <div class="col-lg-2 col-md-2"><label>สถานที่ส่งเอกสาร</label></div>
                <div class="col-lg-10 col-md-10">
                    <div class="col-lg-12 col-md-12">
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                          <button class="btn btn-default glyphicon glyphicon-search" type="button" data-toggle="modal" data-target="#mdDocument"></button>
                        </span>
                    </div>
                    </div>    
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-6 col-md-6">
                    <div class="col-lg-4 col-md-4"><label>เลขผู้เสียภาษี</label></div>
                    <div class="col-lg-7 col-md-7"><input class="form-control input-sm" type="text" ></div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="col-lg-4 col-md-4"><label>เอกสารสำคัญ</label></div>
                    <div class="col-lg-8 col-md-8">
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                              <button class="btn btn-default glyphicon glyphicon-search" type="button" data-toggle="modal" data-target="#mdAddress"></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-6 col-md-6">
                    <div class="col-lg-4 col-md-4"><label>Comp Phone</label></div>
                    <div class="col-lg-7 col-md-7"><input class="form-control input-sm" type="text" ></div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="col-lg-4 col-md-4"><label>Email</label></div>
                    <div class="col-lg-8 col-md-8"><input class="form-control input-sm" type="text" ></div>
                </div>
            </div>
        </div>    
        <div class="col-lg-4 col-md-4">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-11 col-md-1">
                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">ตราประทับ</legend>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <div class="text-center"><label>ปรับปรุงข้อมูลหลังจากได้รับการอนุมัติ</label></div>
                </fieldset>
                </div>    


        </div>
        <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <div class="col-lg-4 col-md-4">
                    <div class="col-lg-4 col-md-4"><label>เจ้าหน้าที่ #1</label></div>
                    <div class="col-lg-7 col-md-7">
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                              <button class="btn btn-default glyphicon glyphicon-search" type="button" data-toggle="modal" data-target="#mdOfficer"></button>
                            </span>
                         </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="col-lg-4 col-md-4"><label>Phone No</label></div>
                    <div class="col-lg-8 col-md-8"><input class="form-control input-sm" type="text" ></div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-3"><label>Email</label></div>
                    <div class="col-lg-8 col-md-8"><input class="form-control input-sm" type="text" ></div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-4 col-md-4">
                    <div class="col-lg-4 col-md-4"><label>เจ้าหน้าที่ #2</label></div>
                    <div class="col-lg-7 col-md-7">
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                              <button class="btn btn-default glyphicon glyphicon-search" type="button" data-toggle="modal" data-target="#mdOfficer"></button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="col-lg-4 col-md-4"><label>Phone No</label></div>
                    <div class="col-lg-8 col-md-8"><input class="form-control input-sm" type="text" ></div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-3"><label>Email</label></div>
                    <div class="col-lg-8 col-md-8"><input class="form-control input-sm" type="text" ></div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-4 col-md-4">
                    <div class="col-lg-4 col-md-4"><label>เจ้าหน้าที่ #3</label></div>
                    <div class="col-lg-7 col-md-7">
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                              <button class="btn btn-default glyphicon glyphicon-search" type="button" data-toggle="modal" data-target="#mdOfficer"></button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="col-lg-4 col-md-4"><label>Phone No</label></div>
                    <div class="col-lg-8 col-md-8"><input class="form-control input-sm" type="text" ></div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-3"><label>Email</label></div>
                    <div class="col-lg-8 col-md-8"><input class="form-control input-sm" type="text" ></div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-4 col-md-4">
                    <div class="col-lg-4 col-md-4"><label>เจ้าหน้าที่ #4</label></div>
                    <div class="col-lg-7 col-md-7">
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                              <button class="btn btn-default glyphicon glyphicon-search" type="button" data-toggle="modal" data-target="#mdOfficer"></button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="col-lg-4 col-md-4"><label>Phone No</label></div>
                    <div class="col-lg-8 col-md-8"><input class="form-control input-sm" type="text" ></div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-3"><label>Email</label></div>
                    <div class="col-lg-8 col-md-8"><input class="form-control input-sm" type="text" ></div>
                </div>
            </div>
        </div>
    </form>
    
</div>    
</div>

<div class="modal fade" id="mdLocation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
              <h3 class="modal-title">สถานที่ตั้ง</h3>
            </div>
            <div class="modal-body">
              <form class="form-horizontal">
                <div class="form-group">
                  <div class="col-xs-1 col-sm-2" style="text-align: right; margin-right: -0.5cm;"><label style="margin-right: 1cm;">ชื่อ :</label></div>
                  <div class="col-xs-10 col-sm-10"><input class="form-control input-sm" type="text" ></div>
                </div>
                <div class="form-group col-lg-12">
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>เลขที่ :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>หมู่ :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                </div>

                <div class="form-group">
                      <div class="col-xs-1 col-sm-2" style="text-align: right; margin-right: -0.5cm;"><label style="margin-right: 1cm;">หมู่บ้าน :</label></div>
                      <div class="col-xs-10 col-sm-10"><input class="form-control input-sm" type="text" ></div>
                </div>
                <div class="form-group">
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>ถนน :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>แขวง/ตำบล :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>เขต/อำเภอ :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>จังหวัด :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>ประเทศ :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>ZIP :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>Phone 1 :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>Phone 2 :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>Fax :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>Email :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>Lattude :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>Longltude :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
              <button type="submit" class="btn btn-default" data-dismiss="modal" id="btnSave">Cancel</button>
            </div>
        </div>
    </div>
    </div>

<div class="modal fade" id="mdOfficer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
              <h3 class="modal-title">ข้อมูลเจ้าหน้าที่</h3>
            </div>
            <div class="modal-body">
              <form class="form-horizontal">
                <div class="col-lg-9 col-md-9">
                  <div class="form-group">
                    <div class="col-lg-6 col-md-6"> 
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>ชื่อ :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                    </div>
                    
               
                    <div class="col-lg-6 col-md-6"> 
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>นามสกุล :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                    </div>
                  </div>
                    
                  <div class="form-group">
                    <div class="col-lg-6 col-md-6"> 
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>Login Name :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                    </div>
                    
               
                    <div class="col-lg-6 col-md-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>Password :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                    </div>
                  </div>
                    
                  <div class="form-group">
                    <div class="col-lg-6 col-md-6"> 
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>Phone No :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                    </div>
                      
                 
                    <div class="col-lg-6 col-md-6"> 
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>Email :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                    </div>
                  </div>
                
                </div>

                <div class="col-lg-3 col-md-3">
                  <fieldset class="scheduler-border">
                    <legend class="scheduler-border">ลายเซ็น</legend>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                  </fieldset>
                </div>
                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">ความสามารถในการดำเนินการ</legend>
                    <div class="col-lg-12 col-md-12" align="center">
                      <div class="form-group">
                        <div class="col-lg-3 col-md-3"><label><input type="checkbox">&nbsp;&nbsp;ลงนามเอกสาร</label></div>
                        <div class="col-lg-3 col-md-3"><label><input type="checkbox">&nbsp;&nbsp;Shipping</label></div>
                        <div class="col-lg-3 col-md-3"><label><input type="checkbox">&nbsp;&nbsp;เจ้าหน้าที่ประสานงาน</label></div>
                        <div class="col-lg-3 col-md-3"><label><input type="checkbox">&nbsp;&nbsp;คนขับรถ</label></div>
                      </div>
                    </div>
                </fieldset>  
              </form>
            </div>
        </div>
    </div>
    </div>

<div class="modal fade" id="mdDocument" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
              <h3 class="modal-title">สถานที่ส่งเอกสาร</h3>
            </div>
            <div class="modal-body">
              <form class="form-horizontal">
                <div class="form-group">
                  <div class="col-lg-6">        
                      <div class="col-sm-offset-2 col-sm-10" style="margin-left: 3.4cm;">
                        <div class="checkbox">
                          <label style="margin-right: 4cm;"><input type="checkbox">ตามที่อยู่บริษัท</label>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-6"></div>
                </div>
                <div class="form-group">
                      <div class="col-xs-1 col-sm-2" style="text-align: right; margin-right: -0.5cm;"><label style="margin-right: 1cm;">ชื่อ :</label></div>
                      <div class="col-xs-10 col-sm-10"><input class="form-control input-sm" type="text" ></div>
                </div>
                <div class="form-group">
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>เลขที่ :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>หมู่ :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                </div>

                <div class="form-group">
                      <div class="col-xs-1 col-sm-2" style="text-align: right; margin-right: -0.5cm;"><label style="margin-right: 1cm;">หมู่บ้าน :</label></div>
                      <div class="col-xs-10 col-sm-10"><input class="form-control input-sm" type="text" ></div>
                </div>
                <div class="form-group">
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>ถนน :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>แขวง/ตำบล :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>เขต/อำเภอ :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>จังหวัด :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>ประเทศ :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>ZIP :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>Phone 1 :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>Phone 2 :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>Fax :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>Email :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>Lattude :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                  <div class="col-lg-6">
                      <div class="col-xs-3 col-sm-3" style="text-align: right; margin-right: 0.5cm;"><label>Longltude :</label></div>
                      <div class="col-xs-8 col-sm-8"><input class="form-control input-sm" type="text" ></div>
                  </div>
                </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
              <button type="submit" class="btn btn-default" data-dismiss="modal" id="btnSave">Cancel</button>
            </div>
        </div>
    </div>
    </div>
</div>  
  <div class="modal fade" id="mdAddress" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- heder -->
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
              <h3 class="modal-title">เอกสารสำคัญ</h3>
            </div>
          <div class="col-lg-12 col-md-12 modal-header"> 
                <div class="col-lg-9 col-md-9">
                    <h3>รายการเอกสาร</h3>
                </div>
              
            <div class="col-lg-1 col-md-1">
                <button type="button" class="btn btn-primary">Add</button>
            </div>
          </div>
          
          <p>&nbsp;</p>
          <!-- body -->
            <div class="modal-body">
              <form class="form-horizontal">
                  
                
                    
                  <div class="form-group">
                    <div class="col-lg-12 col-md-12">
                        <div class="col-lg-2 col-md-2"><label>ชื่อและเอกสาร :</label></div>
                        <div class="col-lg-8 col-md-8"><input class="form-control input-sm" type="text" ></div>
                    </div>
                  </div>
                  
                      
                      <div class="form-group">
                    <div class="col-lg-12 col-md-12"> 
                        <div class="col-lg-2 col-md-2"><label>ไฟล์ :</label></div>
                            <div class="chosefile">
                            <input type="file" name="file" class="filestyle"  required/>
                        </div>
                    
                    </div>
                  </div>
                 
<!--                        <div class="col-lg-2 col-md-2"><label>ไฟล์ :</label></div>
                            <div class="chosefile">
                            <input type="file" name="file" class="filestyle"  required/>
                            </div>-->
              
             
               
                
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>ชื่อเอกสาร</th>
                        <th>ลบ</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td><button type="button" class="btn btn-danger">DELETE</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td></td>
                        <td><button type="button" class="btn btn-danger">DELETE</button></td>
                    </tr>
                </table>  
                 </form>
            </div>


        </div>
    </div>
</div>  
@stop