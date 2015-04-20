@extends('layout.content')
@section('breadcrumbs', Breadcrumbs::render('admin-home'))

@section('content')
    
    <!-- header -->
    <div class="row page-header">
      <div class="col-md-8 col-sm-8">
        <label>คู่มือการใช้งาน ระบบ Admin</label>
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
      <h4 class="text-center">ยินดีต้อนรับเข้าสู่ ระบบ Admin</h4>

        <div class="row">
          <div class="col-lg-4 col-md-4">
              <button type="button" class="btn btn-primary btn-block" onclick="changePage('../admin/organization')">องค์กร</button>
          </div>
        </div>  
      
        <div class="row">
          <div class="col-lg-4 col-md-4">
              <button type="button" class="btn btn-primary btn-block" onclick="changePage('../admin/system-admin')">ระบบงาน</button>
          </div>
        </div>    

        <div class="row">
          <div class="col-lg-4 col-md-4">
              <button type="button" class="btn btn-primary btn-block" onclick="changePage('../admin/usermanagement')">ผู้ใช้งานในระบบ</button>
          </div>
        </div>
      
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <button type="button" class="btn btn-primary btn-block" onclick="changePage('#')">รายงานต่างๆ</button>
          </div>
        </div>
      
 
    </div><!-- End body -->    
@stop

@section('modal-content')

@stop

@section('javascript')

@stop