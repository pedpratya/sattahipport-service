@extends('layout.master-mainmanu')


@section('content')
    <div class="container-fluid text-center">    
        <div class="box-menu">
            <img src="{{ asset('img/icon-mainmenu/admin-icon.png') }}">
            <div class="box-menu-text-m">Operation Control</div>
        </div>
        <div class="box-menu">
            <img src="{{ asset('img/icon-mainmenu/icon-portManage.png') }}">
            <div class="box-menu-text-m">Port & AIS & Radar</div>
        </div>
        <div class="box-menu">
            <img src="{{ asset('img/icon-mainmenu/Berth-Display.png') }}">
            <div class="box-menu-text-m">Berth Display</div>
        </div>
        <div class="box-menu">
            <img src="{{ asset('img/icon-mainmenu/icon-warehouse.png') }}">
            <div class="box-menu-text-m">ผ.คลัง</div>
        </div>
        <div class="box-menu">
            <img src="{{ asset('img/icon-mainmenu/tally-men.png') }}">
            <div class="box-menu-text-m">มว.ตรวจสอบ</div>
        </div>
        <br>
        <div class="box-menu">
            <img src="{{ asset('img/icon-mainmenu/tranfer.png') }}">
            <div class="box-menu-text-m">ผ.บรรทุกขนถ่าย</div>
        </div>
        <div class="box-menu">
            <img src="{{ asset('img/icon-mainmenu/icon-egate.png') }}">
            <div class="box-menu-text-m">e - Gate</div>
        </div>
        <div class="box-menu">
            <img src="{{ asset('img/icon-mainmenu/HumanLabour-icon.png') }}">
            <div class="box-menu-text-m">Human</div>
        </div>
        <div class="box-menu">
            <img src="{{ asset('img/icon-mainmenu/tug-icon.png') }}">
            <div class="box-menu-text-m">เรือลากจูง</div>
        </div>
        <div class="box-menu">
            <img src="{{ asset('img/icon-mainmenu/service-icon.png') }}">
            <div class="box-menu-text-m">สาธารณูปโภค</div>
        </div>
    </div>
@stop


@section('modal-content')

@stop

@section('javascript')

@stop