<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Route::group(array('prefix' => 'benefit'), function() {
    
    Route::get('home', array(
        'as' => 'home',
        function() {
            return view('benefit.home');
    }));
    
    Route::get('index', array(
        'as' => 'index',
        function() {
            return view('benefit.index');
    }));
    
    Route::get('staff-name', array(
        'as' => 'staff-name',
        function() {
            return view('benefit.staff-name');
    }));

    Route::get('tariff', array(
        'as' => 'tariff',
        function() {
            return view('benefit.tariff');
    }));

    Route::get('tariff-edit', array(
        'as' => 'tariff-edit',
        function() {
            return view('benefit.tariff-edit');
    }));

});

