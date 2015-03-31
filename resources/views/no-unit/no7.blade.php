@extends('layout.master-module')
@section('content')

    <form class="form-horizontal">
        <div class="col-lg-12 col-md-12">
                <h3 class="text-center">PORT OF SATTAHIP; SATTAHIP NAVAL BASE</h3>
                <p class="text-center">THE HABOUR SECTION     EXTENSION 413</p>
                <p class="text-center">THE WATER SUPPLY UNIT  EXTENSION 344</p>
         </div>
        <div class="col-lg-12 col-md-12 hr-topic"></div>
        <div class="row form-group">
            <label class="col-md-2">NAME :&nbsp;</label>
            <div class="col-md-3">
                <input class="form-control" type="text" >
            </div>
            <label class="col-md-2 col-md-offset-1">ON BEHALF OF MESSRS :&nbsp;</label>
            <div class="col-md-3">
                <input class="form-control" type="text" >
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2">REQUIRE :&nbsp;</label>
            <div class="col-md-3">
                <input class="form-control" type="text" >
            </div>
            <label class="col-md-2 col-md-offset-1">TONS OF FRESH WATER FOP S.S./M.S.M.V :&nbsp;</label>
            <div class="col-md-3">
                <input class="form-control" type="text" >
            </div>
        </div>  
        <div class="row form-group">
            <label class="col-md-2">ON :&nbsp;</label>
            <div class="col-md-3">
                <input class="form-control" type="text" >
            </div>
            <label class="col-md-2 col-md-offset-1">TIME :&nbsp;</label>
            <div class="col-md-3">
                <input class="form-control" type="text" >
            </div>
        </div> 
        <div class="row form-group">
            <label class="col-md-2">SIGNED :&nbsp;</label>
            <div class="col-md-3">
                <input class="form-control" type="text" >
            </div>
            <label class="col-md-2 col-md-offset-1">DATE :&nbsp;</label>
            <div class="col-md-3">
                <input class="form-control" type="text" >
            </div>
        </div> 
        <div class="col-lg-12 col-md-12">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IT WILL BE GREATLY APPRECIATED, IF YOU WILL EXAMINE AND TAKE A READING OF THE PORT AUTHORITY
            WATER METERS, BEFORE AND AFTER THE SUPPLY OF WATER IS MADE,TO AVOID ANY ARGUMENT THAT MAY ENSURE,
            IN REGARD TO THE ACTUAL QUANTITY SUPPLIED</p>
        </div>
        <div class="col-lg-12 col-md-12">
            <div class="col-lg-2 col-md-2">
            </div>
            <div class="col-lg-9 col-md-9">
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
        <div class="col-lg-12 col-md-12">
        <div class="row form-group">
            <label class="col-md-2">SIGNED (CHIEF OFFICER) :&nbsp;</label>
            <div class="col-md-3">
                <input class="form-control" type="text" >
            </div>
            <label class="col-md-2 col-md-offset-1">SIGNED (CHIEF OFFICER) :&nbsp;</label>
            <div class="col-md-3">
                <input class="form-control" type="text" >
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2">SIGNED (WATERMAN) :&nbsp;</label>
            <div class="col-md-3">
                <input class="form-control" type="text" >
            </div>
            <label class="col-md-2 col-md-offset-1">DATE :&nbsp;</label>
            <div class="col-md-3">
                <input class="form-control" type="text" >
            </div>
        </div>    
        <div class="row form-group">
            <label class="col-md-2">WATER METER NO :&nbsp;</label>
            <div class="col-md-3">
                <input class="form-control" type="text" >
            </div>
            <label class="col-md-2 col-md-offset-1">ENGING PUMP NO :&nbsp;</label>
            <div class="col-md-3">
                <input class="form-control" type="text" >
            </div>
        </div> 
        <div class="row form-group">
            <label class="col-md-12"><u>REMARK</u> DO NOT REQUIRE WATER</label>            
        </div>  
        <div class="row form-group">
            <label class="col-md-2">SIGNED (DOCK MASTER) :&nbsp;</label>
            <div class="col-md-3">
                <input class="form-control" type="text" >
            </div>
        </div>    
        </div>
    </form> 
@stop