<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Route::group(array('prefix' => 'no-unit'), function() {
    
    Route::get('no3', array(
        'as' => 'no3',
        function() {
            return View::make('no-unit.no3');
    }));
    
        
    Route::get('no5-1', array(
        'as' => 'no5-1',
        function() {
            return View::make('no-unit.no5-1');
    }));
    
    Route::get('no5-2', array(
        'as' => 'no5-2',
        function() {
            return View::make('no-unit.no5-2');
    }));
    
    Route::get('no7', array(
        'as' => 'no7',
        function() {
            return View::make('no-unit.no7');
    }));
    
    Route::get('no9', array(
        'as' => 'no9',
        function() {
            return View::make('no-unit.no9');
    }));
    
    Route::get('no24', array(
        'as' => 'no24',
        function() {
            return View::make('no-unit.no24');
    }));
    
    Route::get('no26', array(
        'as' => 'no26',
        function() {
            return View::make('no-unit.no26');
    }));

    Route::get('no4-1', array(
        'as' => 'no4-1',
        function() {
            return View::make('no-unit.no4-1');
    }));

    Route::get('no4-2', array(
        'as' => 'no4-2',
        function() {
            return View::make('no-unit.no4-2');
    }));
    
    Route::get('no30', array(
        'as' => 'no30',
        function() {
            return View::make('no-unit.no30');
    }));

    Route::get('a01', array(
        'as' => 'a01',
        function() {
            return View::make('no-unit.a01');
    }));

    Route::get('a02', array(
        'as' => 'a02',
        function() {
            return View::make('no-unit.a02');
    }));
    Route::get('a03', array(
        'as' => 'a03',
        function() {
            return View::make('no-unit.a03');
    }));
    Route::get('a04', array(
        'as' => 'a04',
        function() {
            return View::make('no-unit.a04');
    }));
    Route::get('a05', array(
        'as' => 'a05',
        function() {
            return View::make('no-unit.a05');
    }));
    Route::get('a06', array(
        'as' => 'a06',
        function() {
            return View::make('no-unit.a06');
    }));
    Route::get('a07', array(
        'as' => 'a07',
        function() {
            return View::make('no-unit.a07');
    }));
    Route::get('a08', array(
        'as' => 'a08',
        function() {
            return View::make('no-unit.a08');
    }));
});
