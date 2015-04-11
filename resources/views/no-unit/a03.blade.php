@extends('layout.content')
@section('breadcrumbs', Breadcrumbs::render('nounit-a03'))
@section('content')


<div class="portlet">
        <div class="portlet-header">
                <h3>
                        <i class="fa fa-tasks"></i>
                        CARGOES BACKLOAD PLAN
                </h3>
        </div> <!-- /.portlet-header -->
        <div class="portlet-content">
        <div class="row">  
            
        <form class="form-horizontal">                                    
            <div class="form-group">
                <div class="col-lg-6 col-md-6"> 
                    <div class="col-lg-4 col-md-4"><label>DATE UPDATE :&nbsp;</label></div>
                    <div class="col-lg-8 col-md-8">
                        <div class="input-datepicker input-group date" data-auto-close="true" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
                            <input class="form-control" type="text">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                </div> 
            </div>
	</form> 				
                </div> <!-- /.row -->

        </div> <!-- /.portlet-content -->

</div> <!-- /.portlet -->                                            

<div class="portlet">
        <div class="portlet-header">
            <h3>
                <i class="fa fa-tasks"></i>
                 
            </h3>
        </div> <!-- /.portlet-header -->
    <div class="portlet-content">		
    <div class="table-responsive">                        
                <table class="table table-bordered">       
                    <tr class="active">
                        <th class="text-center"></th>
                        <th class="text-center"></th>
                        <th class="text-center"></th>
                        <th class="text-center"></th>
                        <th class="text-center"></th>
                        <th class="text-center"></th>
                        <th class="text-center"></th>
                        <th class="text-center"></th>
                        <th class="text-center"></th>
                        <th class="text-center"></th>
                        <th class="text-center"></th>
                        <th class="text-center"></th>
                        <th class="text-center"></th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>P3</td>
                        <td>1</td>
                        <td>BKT</td>
                        <td>BLUE CTEP GENERAL BASKET</td>
                        <td>PIPE DECK</td>
                        <td></td>
                        <td>COTL MAINT</td>
                        <td>2.00</td>
                        <td>1.62</td>
                        <td>1.62</td>
                        <td>2.52</td>
                        <td>3 Sep 2012</td>                    
                    </tr> 
                    <tr>
                        <td>2</td>
                        <td>P3</td>
                        <td>2</td>
                        <td>BKT</td>
                        <td>BLUE CTEP GENERAL BASKET</td>
                        <td>PIPE DECK</td>
                        <td></td>
                        <td>COTL MAINT</td>
                        <td>2.00</td>
                        <td>1.62</td>
                        <td>1.62</td>
                        <td>2.52</td>
                        <td>3 Sep 2012</td>                    
                    </tr> 
                    <tr>
                        <td>3</td>
                        <td>P3</td>
                        <td>3</td>
                        <td>BKT</td>
                        <td>BLUE CTEP GENERAL BASKET</td>
                        <td>PIPE DECK</td>
                        <td></td>
                        <td>COTL MAINT</td>
                        <td>2.00</td>
                        <td>1.62</td>
                        <td>1.62</td>
                        <td>2.52</td>
                        <td>3 Sep 2012</td>                    
                    </tr> 
                    
                 </table>
    </div> <!-- /.table-responsive -->
    </div> <!-- /.portlet-content -->
</div> <!-- /.portlet -->				



@stop

@section('modal-content')

@stop

@section('javascript')

@stop
