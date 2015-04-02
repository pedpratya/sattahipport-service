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
            <div class="row form-group">
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
            <div class="row form-group">
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
            <div class="row form-group">
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
                            <input type="text" class="form-control">
                            <div class="input-group-btn">
                              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row form-group">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IT WILL BE GREATLY APPRECIATED, IF YOU WILL EXAMINE AND TAKE A READING OF THE PORT AUTHORITY
                WATER METERS, BEFORE AND AFTER THE SUPPLY OF WATER IS MADE,TO AVOID ANY ARGUMENT THAT MAY ENSURE,
                IN REGARD TO THE ACTUAL QUANTITY SUPPLIED</p> 
            </div>
            <div class="row form-group">
                <div class="col-lg-12 col-md-12">
                    <div class="col-lg-2 col-md-2">
                    </div>
                        <div class="col-lg-10 col-md-10">
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
                </div>     
            </div>
            <div class="row form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-3 col-md-3"><label>SIGNED (CHIEF OFFICER) :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                       <input class="form-control" type="text" >
                    </div>
                </div> 
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-4 col-md-4"><label>SIGNED (CHIEF OFFICER) :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                       <input class="form-control" type="text" >
                    </div>
                </div> 
            </div>
            <div class="row form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-3 col-md-3"><label>SIGNED(WATERMAN) :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                       <input class="form-control" type="text" >
                    </div>
                </div> 
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-4 col-md-4"><label>DATE :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <div class="input-group-btn">
                              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row form-group">
                <label class="col-md-12"><u>REMARK</u> DO NOT REQUIRE WATER</label>            
            </div>
            <div class="row form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-3 col-md-3"><label>SIGNED (DOCK MASTER) :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                       <input class="form-control" type="text" >
                    </div>
                </div>  
            </div>
<!--        <div class="row form-group">
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
        </div>-->
    </form> 
@stop