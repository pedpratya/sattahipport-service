@extends('layout.master-mainmanu')


@section('content')
    <div class="container-fluid text-center">    
        <div class="box-menu">
            <img src="{{ asset('img/icon-mainmenu/serviceRate-icon.png') }}">
            <div class="box-menu-text-m">Port Tariff</div>
        </div>
        <div class="box-menu">
            <img src="{{ asset('img/icon-mainmenu/debtor-icon.png') }}">
            <div class="box-menu-text-m">ทะเบียนคุมลูกหนี้</div>
        </div>
        <div class="box-menu">
            <img src="{{ asset('img/icon-mainmenu/guarantee.png') }}">
            <div class="box-menu-text-m">ทะเบียนคุมเงินหลักประกัน</div>
        </div>
        <div class="box-menu">
            <img src="{{ asset('img/icon-mainmenu/pledge.png') }}">
            <div class="box-menu-text-m">ทะเบียนคุมเงินมัดจำ</div>
        </div>
        <br>
        <div class="box-menu">
            <img src="{{ asset('img/icon-mainmenu/service-icon.png') }}">
            <div class="box-menu-text-m">ทะเบียนคุมไฟฟ้า-ประปา</div>
        </div>
        <div class="box-menu">
            <img src="{{ asset('img/icon-mainmenu/percenOff-icon.png') }}">
            <div class="box-menu-text-m">คำนวนอัตราเบี้ยปรับ</div>
        </div>
        <div class="box-menu">
            <img src="{{ asset('img/icon-mainmenu/invoice-icon.png') }}">
            <div class="box-menu-text-m">ออกใบแจ้งหนี้</div>
        </div>
        <div class="box-menu">
            <img src="{{ asset('img/icon-mainmenu/report-icon.png') }}">
            <div class="box-menu-text-m">REPORT</div>
        </div>
    </div>
@stop