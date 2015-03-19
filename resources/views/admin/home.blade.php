@extends('layout.master')
@section('breadcrumbs', Breadcrumbs::render('organization'))
@section('content')

    <div class="container-fluid col-lg-10 col-md-10">
        <div class="col-lg-12 col-md-12 page-header">
            <div class="col-lg-10 col-md-10">
                <label>คู่มือการใช้งานระบบ Admin</label>
            </div>
            <div class="col-lg-2 col-md-2">
                <label>พิมพ์ข้อมูลทั้งหมด <button type="button" class="btn btn-default glyphicon glyphicon-print"></button></label>
            </div>
         </div>
        <div class="col-lg-12 col-md-12">
            <h4 class="text-center">ยินดีต้อนรับเข้าสู่ระบบผู้ดูแลระบบ Admin</h4>
            <div class="form-group">
                <div class="col-lg-12 col-md-12 row">
                    <div class="col-lg-4 col-md-4">
                        <button type="button" class="btn btn-default btn-block">องค์กรณ์</button>
                    </div>
                </div>  
            
                <div class="col-lg-12 col-md-12">
                    <div class="col-lg-4 col-md-4">
                        <button type="button" class="btn btn-default btn-block">เมนูระบบงาน</button>
                    </div>
                </div>    
                
                <div class="col-lg-12 col-md-12">
                    <div class="col-lg-4 col-md-4">
                        <button type="button" class="btn btn-default btn-block">เมนูกำหนดค่าคงที่</button>
                    </div>
                </div> 
                
                <div class="col-lg-12 col-md-12">
                    <div class="col-lg-4 col-md-4">
                        <button type="button" class="btn btn-default btn-block">Software Management</button>
                    </div>
                </div>
                
                <div class="col-lg-12 col-md-12">
                    <div class="col-lg-4 col-md-4">
                        <button type="button" class="btn btn-default btn-block">ผู้ใช้งานในระบบ</button>
                    </div>
                </div>
                
                <div class="col-lg-12 col-md-12">
                    <div class="col-lg-4 col-md-4">
                        <button type="button" class="btn btn-default btn-block">รายงานต่างๆ</button>
                    </div>
                </div>
            </div> 
        </div>
    </div>


@stop
