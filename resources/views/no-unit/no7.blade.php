@extends('layout.master-module')
@section('breadcrumbs', Breadcrumbs::render('nounit-no7'))
@section('content')
<div class="portlet">
    <div class="portlet-header">
        <h3>
        <i class="fa fa-tasks"></i>
            PORT OF SATTAHIP: SATTAHIP NAVAL BASE
            THE HABOUR SECTION     EXTENSION 413
            THE WATER SUPPLY UNIT  EXTENSION 344
        </h3>
    </div>
    <div class="portlet-content">
      <form class="form-horizontal">
        <div class="form-group">
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-3 col-md-3"><label>NAME :&nbsp;</label></div>
                <div class="col-lg-8 col-md-8">
                   <input class="form-control" type="text" >
                </div>
            </div> 
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-4 col-md-4"><label>ON BEHALF OF MESSRS :&nbsp;</label></div>
                <div class="col-lg-8 col-md-8">
                   <input class="form-control" type="text" >
                </div>
            </div> 
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-3 col-md-3"><label>REQUIRE :&nbsp;</label></div>
                <div class="col-lg-8 col-md-8">
                   <input class="form-control" type="text" >
                </div>
            </div> 
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-4 col-md-4"><label>TONS OF FRESH WATER FOP S.S./M.S.M.V :&nbsp;</label></div>
                <div class="col-lg-8 col-md-8">
                   <input class="form-control" type="text" >
                </div>
            </div> 
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-3 col-md-3"><label>ON :&nbsp;</label></div>
                <div class="col-lg-8 col-md-8">
                   <input class="form-control" type="text" >
                </div>
            </div> 
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-4 col-md-4"><label>TIME :&nbsp;</label></div>
                <div class="col-lg-8 col-md-8">
                   <input class="form-control" type="text" >
                </div>
            </div> 
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-3 col-md-3"><label>SIGNED :&nbsp;</label></div>
                <div class="col-lg-8 col-md-8">
                   <input class="form-control" type="text" >
                </div>
            </div> 
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-4 col-md-4"><label>DATE :&nbsp;</label></div>
                <div class="col-lg-8 col-md-8">
                   <div class="input-group">
                        <input type="text" class="input-datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
            </div> 
        </div>
        <div class="form-group" style="margin: 0 0  10px;">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IT WILL BE GREATLY APPRECIATED, IF YOU WILL EXAMINE AND TAKE A READING OF THE PORT AUTHORITY
            WATER METERS, BEFORE AND AFTER THE SUPPLY OF WATER IS MADE,TO AVOID ANY ARGUMENT THAT MAY ENSURE,
            IN REGARD TO THE ACTUAL QUANTITY SUPPLIED</p> 
        </div>
        <div class="form-group">
            <table class="table table-bordered"> 
                <th width="20%"></th>
                <th class="text-center" colspan="6">WATER METER</th>
                <th class="text-center">DATE</th>
                <th class="text-center">TIME</th>
                <tr>
                    <td>LAST READING</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>PREVIOUS READING</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>TOTAL</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>TONS</td>
                </tr>
            </table>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-4 col-md-4"><label>SIGNED (CHIEF OFFICER) :</label></div>
                <div class="col-lg-8 col-md-8">
                   <input class="form-control" type="text" >
                </div>
            </div> 
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-4 col-md-4"><label>SIGNED (CHIEF OFFICER) :</label></div>
                <div class="col-lg-8 col-md-8">
                   <input class="form-control" type="text" >
                </div>
            </div> 
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-4 col-md-4"><label>SIGNED(WATERMAN):&nbsp;</label></div>
                <div class="col-lg-8 col-md-8">
                   <input class="form-control" type="text" >
                </div>
            </div> 
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-4 col-md-4"><label>DATE :&nbsp;</label></div>
                <div class="col-lg-8 col-md-8">
                    <div class="input-group">
                        <input type="text" class="input-datepicker form-control" placeholder="dd/mm/YY" name="date_doc"/>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
            </div> 
        </div>
        <div class="form-group">
            <label class="col-md-12"><u>REMARK</u> DO NOT REQUIRE WATER</label>            
        </div>
        <div class="row form-group">
            <div class="col-lg-6 col-md-6"> 
                <div class="col-lg-4 col-md-4"><label>SIGNED (DOCK MASTER) :</label></div>
                <div class="col-lg-8 col-md-8">
                   <input class="form-control" type="text" >
                </div>
            </div>  
        </div>
      </form>
    </div>
</div>     
@stop