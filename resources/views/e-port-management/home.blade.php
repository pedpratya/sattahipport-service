@extends('layout.master-mainmanu')


@section('content')
    <div class="container-fluid text-center">    
        <div class="box-menu">
            <img src="{{ asset('img/icon-mainmenu/icon-crm.png') }}">
            <div class="box-menu-text-m">CRM</div>
        </div>
        <div class="box-menu">
            <img src="{{ asset('img/icon-mainmenu/icon-admin.png') }}">
            <div class="box-menu-text-m">ADMIN</div>
        </div>
        <div class="box-menu">
            <img src="{{ asset('img/icon-mainmenu/icon-portManage.png') }}">
            <div class="box-menu-text-m">Port Manage</div>
        </div>
        <br>
        <div class="box-menu">
            <img src="{{ asset('img/icon-mainmenu/icon-egate.png') }}">
            <div class="box-menu-text-m">e - Gate</div>
        </div>
        <div class="box-menu">
            <img src="{{ asset('img/icon-mainmenu/icon-security.png') }}">
            <div class="box-menu-text-m">Security System</div>
        </div>
        <div class="box-menu">
            <img src="{{ asset('img/icon-mainmenu/icon-areaManame.png') }}">
            <div class="box-menu-text-m">บริหารพื้นที</div>
        </div>่

    </div>
@stop