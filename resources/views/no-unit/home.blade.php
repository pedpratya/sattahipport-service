@extends('layout.content')
@section('breadcrumbs', Breadcrumbs::render('nounit-home'))

@section('content')
  

    <!-- header -->
    <div class="row page-header">
      <div class="col-md-8 col-sm-8">
        <label>คู่มือการใช้งาน {{ $manu["name"] }}</label>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="col-md-4 col-sm-4"></div>
        <div class="col-md-6 col-sm-6">
          <label>พิมพ์ข้อมูลทั้งหมด</label>
        </div>
        <div class="col-md-1 col-sm-1">
          <button type="button" class="btn btn-default btn-sm glyphicon glyphicon-print"></button> 
        </div>
      </div>
    </div><!--End header -->


    <!-- body -->
    <div class="col-lg-12 col-md-12 bgAdmin">

        @foreach ($manu['leftManu'] as $value)

            <div class="col-lg-4 col-md-4">
                  <button type="button" class="btn btn-primary btn-block" onclick="changePage('{{ asset($manu["mainManu"].'/'.$value["url"]) }}')">{{{ $value["name"] }}}</button>
            </div> 
        @endforeach
        
    </div><!-- End body -->    
@stop

@section('modal-content')

@stop

@section('javascript')

@stop