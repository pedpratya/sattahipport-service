@extends('layout.master-module')
@section('breadcrumbs', Breadcrumbs::render('nounit-a06'))
@section('content')

<div class="portlet">
        <div class="portlet-header">
            <h3>
                <i class="fa fa-tasks"></i>
                    OUTBOUND MANIFEST 
            </h3>
        </div> <!-- /.portlet-header -->
    <div class="portlet-content">		
    <div class="table-responsive">
       
                <div class="col-lg-12 col-md-12">
                <table class="table table-bordered">
                    <tr class="active">
                      <th colspan="6">SAHIP TO:</th>
                      <th colspan="2">ATWOOO MAKO</th>
                      <th colspan="2">VESSEL NAME:</th>
                      <th>POSH RADIANT</th>
                      <th>&nbsp;</th>
                      <th colspan="2">VOYAGE NO.</th>
                      <th colspan="3">OB-SE-2014-193</th>
                      <th colspan="2">WELL</th>
                      <th colspan="2">BB-11H-ST 2</th>
                    </tr>
                    <tr class="active">
                      <th colspan="6">SAHIP FROM:</th>
                      <th colspan="2">SATTHAHIP PORT</th>
                      <th>DATE</th>
                      <th colspan="2">November 2,2014</th>
                      <th rowspan="3">VENDER</th>
                      <th rowspan="3">QTY</th>
                      <th rowspan="3">UNIT</th>
                      <th colspan="2">&nbsp;</th>
                      <th colspan="4">VOLUME CU MTRS</th>
                      <th>&nbsp;</th>
                    </tr class="active">
                    <tr class="active">
                      <th rowspan="2">RESOURCE NO.</th>
                      <th rowspan="2">CONDITION CODE</th>
                      <th rowspan="2">WORKMATE REF.</th>
                      <th rowspan="2">IMDG CODE</th>
                      <th rowspan="2">UN NO.</th>
                      <th rowspan="2">ITEM NO.</th>
                      <th rowspan="2">EQUIPMENT NO.</th>
                      <th colspan="4" rowspan="2">DESCRIPTION</th>
                      <th><p>UNIT GROSS</p>
                      <p>WT</p></th>
                      <th>TOTAL WT</th>
                      <th>W</th>
                      <th>L</th>
                      <th>H</th>
                      <th>CU MTRS</th>
                      <th><p>FOOTPRINT</p>
                      <p>(SQMTRS)</p></th>
                    </tr>
                    <tr class="active">
                      <th><p>UNIT</p>
                      <p>GROSS</p>
                      <p>WT</p></th>
                      <th><p>TOTAL</p>
                      <p>WT</p></th>
                      <th>W</th>
                      <th>L</th>
                      <th>H</th>
                      <th>CU MTRS</th>
                      <th>&nbsp;</th>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>1</td>
                      <td>&nbsp;</td>
                      <td colspan="4">PIPE BUNDLE</td>
                      <td>WEATHERFORD</td>
                      <td>1</td>
                      <td>EACH</td>
                      <td>1.50</td>
                      <td>1.50</td>
                      <td>0.50</td>
                      <td>9.50</td>
                      <td>0.50</td>
                      <td>2.38</td>
                      <td>4.75</td>
                    </tr>
                    <tr>
                      <td>RENTAL</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>2</td>
                      <td>TFB-03</td>
                      <td colspan="4">OFFSHORE BASKET</td>
                      <td>WEATHERFOR</td>
                      <td>2</td>
                      <td>JOIND</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
                </div>    

    </div> <!-- /.table-responsive -->
    </div> <!-- /.portlet-content -->
</div> <!-- /.portlet -->				
      
@stop