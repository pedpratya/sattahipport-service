@extends('layout.master-module')
@section('breadcrumbs', Breadcrumbs::render('nounit-a05'))
@section('content')

			<div class="portlet">

				<div class="portlet-header">

					<h3>
						<i class="fa fa-tasks"></i>
						แบบตรวจนับสินค้า
					</h3>

				</div> <!-- /.portlet-header -->

				<div class="portlet-content">

					<div class="row">
    <form class="form-horizontal">
            <div class="form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-4 col-md-4"><label>Vessel :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                       <input class="form-control" type="text" >
                    </div>
                </div> 
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-2 col-md-2"><label>STOP :&nbsp;</label></div>
                    <div class="col-lg-10 col-md-10">
                       <div class="col-lg-4 col-md-4">
                            <input type="radio" name="" id="" value="" > &nbsp; <label>LOADING</label>
                       </div>
                       <div class="col-lg-8 col-md-8">
                            <input class="form-control" type="text" >
                       </div>
                    </div>
                </div> 
            </div>
            <div class="form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-4 col-md-4"><label>Date :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                        <div class='input-group date'>
                            <input type="text" class="form-control">
                            <div class="input-group-btn">
                              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                            </div>
                        </div>    
                    </div>
                </div> 
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-2 col-md-2"><label>STOP :&nbsp;</label></div>
                    <div class="col-lg-10 col-md-10">
                       <div class="col-lg-4 col-md-4">
                            <input type="radio" name="" id="" value="" > &nbsp; <label>LOADING</label>
                       </div>
                       <div class="col-lg-8 col-md-8">
                            <input class="form-control" type="text" >
                       </div>
                    </div>
                </div> 
            </div>
            </form> 
					</div> <!-- /.row -->

				</div> <!-- /.portlet-content -->

			</div> <!-- /.portlet -->        
            <div class="form-group">
                <table class="table table-bordered table-hover">
                    <tr class="active">
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

@stop